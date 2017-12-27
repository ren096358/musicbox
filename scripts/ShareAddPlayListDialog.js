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

require(["dojo/ready",
	"dijit/registry",
	"dojo/dom",
	"dojo/_base/xhr",
	"dojo/io/iframe",
	"dijit/Dialog"], function (ready, registry, dom, xhr, ioIframe, Dialog) {
	ShareAddPlayListDialog = function () {
		var self = this;

		// 顯示訊息的 Dialog
		var msg = null;
		var addPlayListForm = null;
		var addPlayListButton = null;
		var addPlayListDialog = null

		var init = function () {
			addPlayListDialog = registry.byId("addPlayListDialog");
			addPlayListForm = registry.byId("addPlayListForm");
			addPlayListButton = registry.byId("addPlayListButton");
		}

		ready(function () {
			init();
			msg = new Dialog();
		});

		/**
		 * 顯示新增播放清單視窗
		 * @returns {undefined}
		 */
		this.showAddPlayListDialog = function (actionUrl, callBackFunction = null, musicArray = "") {
			addPlayListForm.reset();
			addPlayListForm.set("action", actionUrl);
			addPlayListButton.set("onClick", function () {
				self.addPlayList(callBackFunction, musicArray);
			})
			addPlayListDialog.show();
		}

		/**
		 * 新增播放清單
		 * @returns {undefined}
		 */
		this.addPlayList = function (callBackFunction, musicArray) {
			if (!addPlayListForm.validate()) {
				msg.set("content", "請完成填寫");
				msg.show();
				return;
			}
			addPlayListButton.disabled = true;
			xhr.post({
				form: "addPlayListForm",
				handleAs: "json",
				content: {
					music_array: JSON.stringify(musicArray)
				},
				load: function (response) {
					msg.set("content", response);
					msg.show();
					if (response === "新增播放清單成功") {
						addPlayListButton.disabled = false;
						addPlayListDialog.hide();
						if (typeof callBackFunction === 'function') {
							callBackFunction();
						}
					}
				},
				error: function (error) {
					console.log(error);
				}
			});
		};


	};
});
