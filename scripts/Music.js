require([
	"dojo/parser",
	"dijit/layout/BorderContainer",
	"dijit/layout/ContentPane",
	"dojox/layout/ExpandoPane",
	"dijit/form/Button",
	"dijit/Toolbar",
	"dojox/grid/DataGrid",
	"dijit/Dialog",
	"dojox/data/QueryReadStore",
	"dijit/form/Select",
	"dijit/form/ValidationTextBox",
	"dijit/form/Form",
	"dojo/data/ItemFileReadStore"
]);

var music = null;

require(["dojo/ready",
	"dijit/registry",
	"dojo/dom",
	"dojo/_base/xhr",
	"dojo/io/iframe",
	"dijit/Dialog"], function (ready, registry, dom, xhr, ioIframe, Dialog) {
	function Music() {
		var songList = [];
		var songTable = dom.byId("songTable");
		var playingSongDiv = dom.byId("playingSongDiv");
		var dir = "./musics/";
		var audio = dom.byId("audio");
		var self = this;

		// 顯示訊息的 Dialog
		var msg = null;

		ready(function () {
			msg = new Dialog();
		});

		/**
		 * 刷新musicGrid
		 * @returns {undefined}
		 */
		this.musicGridRefresh = function () {
			musicGrid.selection.clear();
			musicGrid.setQuery();
		};

		/**
		 * 刷新playListGrid
		 * @returns {undefined}
		 */
		this.playListGridRefresh = function () {
			playListGrid.selection.clear();
			playListGrid.setQuery();
		};

		/**
		 * 顯示新增音樂視窗
		 * @returns {undefined}
		 */
		this.showAddMusicDialog = function () {
			registry.byId("file").reset();
			registry.byId("addMusicDialog").show();
		};

		/**
		 * 新增音樂
		 * @returns {undefined}
		 */
		this.addMusic = function () {
			registry.byId("addMusicButton").disabled = true;
			ioIframe.send({
				form: "addMusicForm",
				handleAs: "json"
			}).then(function (response) {
				msg.set("content", response);
				msg.show();
				if (response === "新增音樂成功") {
					registry.byId("addMusicButton").disabled = false;
					registry.byId("addMusicDialog").hide();
					self.musicGridRefresh();
				}
			}, function (err) {
				console.log(err);
			});
		};

		/**
		 * 顯示"我的音樂"頁面
		 * @returns {undefined}
		 */
		this.showMusicListPage = function () {
			xhr.post({
				url: dom.byId("showMusicListUrl").value,
				load: function (response) {
					registry.byId("content").setContent(response);
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/**
		 * 顯示刪除音樂視窗
		 * @returns {undefined}
		 */
		this.showDeleteMusicDialog = function () {
			var item = musicGrid.selection.getFirstSelected();
			if (item === null) {
				msg.set("content", "請選擇一筆音樂資料");
				msg.show();
				return;
			}
			dom.byId("deleteMusicMessage").innerHTML = "確定要刪除 <font color='red'>" + item.i.name + "</font> ?";
			registry.byId("deleteMusicDialog").show();
		};

		/**
		 * 刪除音樂
		 * @returns {undefined}
		 */
		this.deleteMusic = function () {
			var item = musicGrid.selection.getFirstSelected();
			xhr.post({
				url: dom.byId("deleteMusicUrl").value,
				handleAs: "json",
				content: {
					music_id: item.i.music_id,
					filename: item.i.filename
				},
				load: function (response) {
					msg.set("content", response);
					msg.show();
					/*
					 * 將已刪除的音樂從播放列表中移除
					 */
					if (response === "刪除音樂成功") {
						registry.byId("deleteMusicDialog").hide();
						for (var i = songList.length - 1; i >= 0; i--) {
							if (songList[i].music_id == item.i.music_id) {
								songList.splice(i, 1);
								self.removeSongTableChildNodes();
								self.createSongTableChildNodes();
								if (i == 0) {
									self.playAudio();
								}
							}
						}
						self.musicGridRefresh();
					}
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/**
		 * 顯示修改音樂視窗
		 * @returns {undefined}
		 */
		this.showUpdateMusicDialog = function () {
			var item = musicGrid.selection.getFirstSelected();
			if (item === null) {
				msg.set("content", "請選擇一筆音樂資料");
				msg.show();
				return;
			}
			xhr.post({
				url: dom.byId("getMusicDataUrl").value,
				handleAs: "json",
				content: {
					music_id: item.i.music_id,
				},
				load: function (response) {
					dom.byId("music_id").value = response.items.music_id;
					registry.byId("name").set("value", response.items.name);
					dom.byId("time").innerHTML = response.items.time;
					registry.byId("genre").set("value", response.items.genre);
					registry.byId("artist").set("value", response.items.artist);
					registry.byId("album").set("value", response.items.album);
					registry.byId("updateMusicDialog").show();
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/**
		 * 修改音樂
		 * @returns {undefined}
		 */
		this.updateMusic = function () {
			if (!registry.byId("updateMusicForm").validate()) {
				msg.set("content", "請完成填寫");
				msg.show();
				return;
			}
			xhr.post({
				form: "updateMusicForm",
				handleAs: "json",
				load: function (response) {
					msg.set("content", response);
					msg.show();
					if (response === "修改音樂成功") {
						registry.byId("updateMusicDialog").hide();
						songList.forEach(function (value, index) {
							if (value.music_id == dom.byId("music_id").value) {
								xhr.post({
									url: dom.byId("getMusicDataUrl").value,
									handleAs: "json",
									content: {
										music_id: dom.byId("music_id").value,
									},
									load: function (responseTwo) {
										value.name = responseTwo.items.name;
										self.removeSongTableChildNodes();
										self.createSongTableChildNodes();
										if (index == 0) {
											playingSongDiv.innerHTML = songList[0].name;
										}
									},
									error: function (error) {
										console.log(error);
									}
								});
							}
						});
						self.musicGridRefresh();
					}
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/**
		 * 顯示"播放清單"頁面
		 * @returns {undefined}
		 */
		this.showPlayListPage = function () {
			xhr.post({
				url: dom.byId("showPlayListUrl").value,
				load: function (response) {
					registry.byId("content").setContent(response);
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/**
		 * 顯示新增播放清單視窗
		 * @returns {undefined}
		 */
		this.showAddPlayListDialog = function () {
			var callBackFunction = function () {
				self.playListGridRefresh();
			};
			var actionUrl = "index.php?action=AddPlayListAction";
			var shareAddPlayListDialog = new ShareAddPlayListDialog();
			shareAddPlayListDialog.showAddPlayListDialog(actionUrl, callBackFunction);
		};

		/**
		 * 新增播放清單
		 * @returns {undefined}
		 */
		this.addPlayList = function () {
			if (!registry.byId("addPlayListForm").validate()) {
				msg.set("content", "請完成填寫");
				msg.show();
				return;
			}
			xhr.post({
				form: "addPlayListForm",
				handleAs: "json",
				load: function (response) {
					msg.set("content", response);
					msg.show();
					if (response === "新增播放清單成功") {
						registry.byId("addPlayListDialog").hide();
						self.playListGridRefresh();
					}
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/**
		 * 顯示修改播放清單視窗
		 * @returns {undefined}
		 */
		this.showUpdatePlayListDialog = function () {
			var item = playListGrid.selection.getFirstSelected();
			if (item === null) {
				msg.set("content", "請選擇一筆播放清單資料");
				msg.show();
				return;
			}
			playListDetailGrid.setQuery({playlist_id: item.i.playlist_id});
			dom.byId("playlist_id").value = item.i.playlist_id;
			registry.byId("name").set("value", item.i.name);
			registry.byId("updatePlayListDialog").show();
		}

		/**
		 * 修改播放清單
		 * @returns {undefined}
		 */
		this.updatePlayList = function () {
			if (!registry.byId("updatePlayListForm").validate()) {
				msg.set("content", "請完成填寫");
				msg.show();
				return;
			}
			xhr.post({
				form: "updatePlayListForm",
				handleAs: "json",
				load: function (response) {
					msg.set("content", response);
					msg.show();
					if (response === "修改播放清單成功") {
						registry.byId("updatePlayListDialog").hide();
						self.playListGridRefresh();
					}
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/**
		 * 顯示新增播放清單細項視窗
		 * @returns {undefined}
		 */
		this.showAddPlayListDetailDialog = function () {
			registry.byId("addPlayListDetailDialog").set("title", "新增音樂到 " + registry.byId("name").get("value"));
			registry.byId("addPlayListDetailDialog").show();
		};

		/**
		 * 新增播放清單細項
		 * @returns {undefined}
		 */
		this.addPlayListDetail = function () {
			var item = musicGrid.selection.getFirstSelected();
			xhr.post({
				url: dom.byId("addPlayListDetailUrl").value,
				handleAs: "json",
				content: {
					music_id: item.i.music_id,
					playlist_id: dom.byId("playlist_id").value
				},
				load: function (response) {
					if (response != "新增播放清單細項成功") {
						sg.set("content", response);
						msg.show();
						return;
					}
					playListDetailGrid.setQuery({playlist_id: dom.byId("playlist_id").value});
					self.playListGridRefresh();
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/**
		 * 顯示刪除播放清單細項視窗
		 * @returns {undefined}
		 */
		this.showDeletePlayListDetailDialog = function () {
			var item = playListDetailGrid.selection.getFirstSelected();
			if (item === null) {
				msg.set("content", "請選擇一筆音樂資料");
				msg.show();
				return;
			}
			dom.byId("deletePlayListDetailMessage").innerHTML = "確定要刪除 " + item.i.name + " ?";
			registry.byId("deletePlayListDetailDialog").show();
		};

		/**
		 * 刪除播放清單細項
		 * @returns {undefined}
		 */
		this.deletePlayListDetail = function () {
			var item = playListDetailGrid.selection.getFirstSelected();
			xhr.post({
				url: dom.byId("deletePlayListDetailUrl").value,
				handleAs: "json",
				content: {
					playlist_detail_id: item.i.playlist_detail_id,
					playlist_id: dom.byId("playlist_id").value
				},
				load: function (response) {
					msg.set("content", response);
					msg.show();
					if (response === "刪除播放清單細項成功") {
						registry.byId("deletePlayListDetailDialog").hide();
						playListDetailGrid.setQuery({playlist_id: dom.byId("playlist_id").value});
					}
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/**
		 * 顯示刪除播放清單視窗
		 * @returns {undefined}
		 */
		this.showDeletePlayListDialog = function () {
			var item = playListGrid.selection.getFirstSelected();
			if (item === null) {
				msg.set("content", "請選擇一筆播放清單資料");
				msg.show();
				return;
			}
			dom.byId("deletePlayListMessage").innerHTML = "確定要刪除 " + item.i.name + " ?";
			registry.byId("deletePlayListDialog").show();
		};

		/**
		 * 刪除播放清單
		 * @returns {undefined}
		 */
		this.deletePlayList = function () {
			var item = playListGrid.selection.getFirstSelected();
			xhr.post({
				url: dom.byId("deletePlayListUrl").value,
				handleAs: "json",
				content: {
					playlist_id: item.i.playlist_id,
				},
				load: function (response) {
					msg.set("content", response);
					msg.show();
					if (response === "刪除播放清單成功") {
						registry.byId("deletePlayListDialog").hide();
						self.playListGridRefresh();
					}
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/**
		 * 顯示清空播放清單視窗
		 * @returns {undefined}
		 */
		this.showClearPlayListDialog = function () {
			var item = playListGrid.selection.getFirstSelected();
			if (item === null) {
				msg.set("content", "請選擇一筆播放清單資料");
				msg.show();
				return;
			}
			dom.byId("clearPlayListMessage").innerHTML = "確定要清空 " + item.i.name + " ?";
			registry.byId("clearPlayListDialog").show();
		};

		/**
		 * 清空播放清單
		 * @returns {undefined}
		 */
		this.clearPlayList = function () {
			var item = playListGrid.selection.getFirstSelected();
			xhr.post({
				url: dom.byId("clearPlayListUrl").value,
				handleAs: "json",
				content: {
					playlist_id: item.i.playlist_id,
				},
				load: function (response) {
					msg.set("content", response);
					msg.show();
					if (response === "清空播放清單成功") {
						registry.byId("clearPlayListDialog").hide();
						self.playListGridRefresh();
					}
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/**
		 * 建立刪除圖示
		 * @returns {Element|Music_L23.Music.createDeleteImg.deleteImg}
		 */
		this.createDeleteImg = function (i) {
			var deleteImg = document.createElement("img");
			deleteImg.src = "images/delete.png";
			deleteImg.className = "deleteImg";
			deleteImg.style.cursor = "pointer"; //變更滑鼠的游標
			deleteImg.addEventListener("click", function () {
				songList.splice(i, 1);
				self.removeSongTableChildNodes();
				self.createSongTableChildNodes();
			});
			return deleteImg;
		};

		/*
		 * 建立歌曲立即撥放的點擊事件
		 * @param {type} i
		 * @returns {undefined}
		 */
		this.createSongToFirst = function (i) {
			songList.splice(0, 0, songList[i]);
			songList.splice(i + 1, 1);
			self.removeSongTableChildNodes();
			self.createSongTableChildNodes();
			self.playAudio();
		};

		/**
		 * 建立SongTable的子節點
		 * @returns {undefined}
		 */
		this.createSongTableChildNodes = function () {
			for (var i = 1; i < songList.length; i++) {
				var song = songList[i];
				var name = document.createTextNode(songList[i].name);
				var artist = document.createTextNode(songList[i].artist);
				var tr = document.createElement("tr");
				var td = document.createElement("td");
				//@todo 需再了解 bind 的使用方法
				td.addEventListener("dblclick", self.createSongToFirst.bind(null, i));
				td.style.cursor = "pointer"; //變更滑鼠的游標
				td.title = "快速點擊兩下歌曲，即可插播";
				td.appendChild(name);
				tr.appendChild(td);
				var td = document.createElement("td");
				td.appendChild(artist);
				tr.appendChild(td);
				var td = document.createElement("td");
				td.appendChild(self.createDeleteImg(i));
				tr.appendChild(td);
				songTable.appendChild(tr);
				if (i % 2 == 0) {
					tr.className = "songTrPapayaWhip";
				} else {
					tr.className = "songTrPowderBlue";
				}
			}
		};

		/**
		 * 移除SongTable的子節點
		 * @returns {undefined}
		 */
		this.removeSongTableChildNodes = function () {
			for (var i = songTable.childNodes.length - 1; i > 1; i--) {
				songTable.removeChild(songTable.childNodes[i]);
			}
		};

		/**
		 * 播放audio
		 * @returns {undefined}
		 */
		this.playAudio = function () {
			if (songList.length == 0) {
				playingSongDiv.innerHTML = "正在播放";
				audio.src = "";
				return;
			}
			playingSongDiv.innerHTML = songList[0].name;
			audio.src = dir + songList[0].filename;
			audio.load();
			audio.play();
			audio.loop = false;
		};

		/**
		 * 立即播放
		 * @returns {undefined}
		 */
		this.playingSongNow = function () {
			var item = musicGrid.selection.getFirstSelected();
			if (item === null) {
				msg.set("content", "請選擇一筆音樂資料");
				msg.show();
				return;
			}
			songList.splice(0, 0, item.i);
			self.removeSongTableChildNodes();
			self.createSongTableChildNodes();
			self.playAudio();
			musicGrid.selection.clear();
		};

		/**
		 * 稍後播放
		 * @returns {undefined}
		 */
		this.playSongLater = function () {
			var item = musicGrid.selection.getFirstSelected();
			if (item === null) {
				msg.set("content", "請選擇一筆音樂資料");
				msg.show();
				return;
			}
			if (songList.length == 0) {
				self.playingSongNow();
				return;
			}
			songList.push(item.i);
			self.removeSongTableChildNodes();
			self.createSongTableChildNodes();
			musicGrid.selection.clear();
		}

		/**
		 * audio播完歌後執行的動作
		 * @returns {undefined}
		 */
		audio.onended = function () {
			var repeat = registry.byId("repeat").get("value");
			switch (repeat) {
				case "repeatOff":
					songList.splice(0, 1);
					self.removeSongTableChildNodes();
					self.createSongTableChildNodes();
					self.playAudio();
					break;
				case "repeatSong":
					audio.loop = true;
					self.playAudio();
					break;
				case "repeatAll":
					songList.push(songList[0]);
					songList.splice(0, 1);
					self.removeSongTableChildNodes();
					self.createSongTableChildNodes();
					self.playAudio();
					break;
			}
		};

		/**
		 * 隨機播放
		 * @returns {undefined}
		 */
		this.playShuffle = function () {
			function shuffle(a, b) {
				var num = Math.random() > 0.5 ? 0 : 1;
				return num;
			}
			songList = songList.sort(shuffle);
			self.removeSongTableChildNodes();
			self.createSongTableChildNodes();
			self.playAudio();
		};

		/**
		 * 下一首
		 * @returns {undefined}
		 */
		this.nextSong = function () {
			audio.onended();
		};

		/**
		 * 停止
		 * @returns {undefined}
		 */
		this.stopSong = function () {
			audio.pause();
			audio.currentTime = 0;
		};

		/**
		 * 上一首
		 * @returns {undefined}
		 */
		this.previousSong = function () {
			var repeat = registry.byId("repeat").get("value");
			switch (repeat) {
				case "repeatOff":
					self.stopSong();
					break;
				case "repeatSong":
					audio.loop = true;
					self.playAudio();
					break;
				case "repeatAll":
					songList.splice(0, 0, songList.pop());
					self.removeSongTableChildNodes();
					self.createSongTableChildNodes();
					self.playAudio();
					break;
			}
		};

		/**
		 * 清除稍後播放的歌單
		 * @returns {undefined}
		 */
		this.clearSongList = function () {
			for (var i = songList.length; i > 1; i--) {
				songList.pop();
			}
			self.removeSongTableChildNodes();
			console.log(songList);
		};

		/**
		 * 播放
		 * @returns {undefined}
		 */
		this.playPlayList = function () {
			var item = playListGrid.selection.getFirstSelected();
			if (item === null) {
				msg.set("content", "請選擇一筆播放清單資料");
				msg.show();
				return;
			}
			xhr.post({
				url: playListDetailStore.url,
				handleAs: "json",
				content: {
					playlist_id: item.i.playlist_id
				},
				load: function (response) {
					if (response.items.length == 0) {
						msg.set("content", "此清單尚未加入歌曲");
						msg.show();
						return;
					}
					songList.splice(0, songList.length);
					response.items.forEach(function (items) {
						songList.push(items);
					});
					self.removeSongTableChildNodes();
					self.createSongTableChildNodes();
					self.playAudio();
					playListGrid.selection.clear();
				},
				error: function (error) {
					console.log(error);
				}
			});
		};

		/*
		 * 
		 */
		this.showAddMusicToNewPlayListDialog = function () {
			var musicArray = [];
			songList.forEach(function (item) {
				musicArray.push(item.music_id);
			})
			var callBackFunction = null;
			callBackFunction = function () {
				self.playListGridRefresh();
			}
			var actionUrl = "index.php?action=AddMusicToNewPlayListAction";
			var shareAddPlayListDialog = new ShareAddPlayListDialog()
			shareAddPlayListDialog.showAddPlayListDialog(actionUrl, callBackFunction, musicArray);
		};


	}
	;
	music = new Music();
});