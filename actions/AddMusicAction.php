<?php

require_once 'include/MusicModel.php';
require_once 'libaray/getid3/getid3.php';

class AddMusicAction implements ActionListener {

	private $musicModel = null;
	private $getID3 = null;

	function __construct() {
		$this->musicModel = new MusicModel();
		$this->getID3 = new getID3;
	}

	public function actionPerformed($event) {
		try {
			foreach ($_FILES["files"]["error"] as $value) {
				if ($value == 4) {
					throw new Exception("新增音樂失敗: 未選取檔案");
				}
			}
			foreach ($_FILES["files"]["type"] as $value) {
				if ($value != "audio/mp3") {
					throw new Exception("新增音樂失敗: 檔案只允許 mp3 的格式");
				}
			}
			/**
			 * 取得目前時間
			 */
			date_default_timezone_set("Asia/Taipei");
			$addtime = date("Y-m-d H:i:s");
			$updatetime = date("Y-m-d H:i:s");
			/**
			 * 路徑資料夾名稱
			 */
			$dir = "musics/";
			$i = 0;
			foreach ($_FILES["files"]["name"] as $value) {
				/*
				 * 將中文檔名 utf-8改成big5格式，防止移動中文檔案出錯
				 */
				$name = iconv("utf-8", "big5", $value);
				/**
				 * 移動檔案
				 */
				$results = move_uploaded_file($_FILES["files"]["tmp_name"][$i], $dir . $name);
				if (!$results) {
					throw new Exception("新增音樂失敗: 移動檔案失敗");
				}
				$i++;
				/**
				 * 擷取檔案資訊
				 */
				$genre = null;
				$artist = null;
				$album = null;
				$fileData = $this->getID3->analyze($dir . $name);
				$time = $fileData["playtime_string"];
				if (isset($fileData["id3v2"]["comments"]["artist"])) {
					$artist = $fileData['id3v2']['comments']['artist'][0];
				}
				if (isset($fileData["id3v2"]["comments"]["album"])) {
					$album = $fileData["id3v2"]["comments"]["album"][0];
				}
				if (isset($fileData["id3v2"]["comments"]["genre"])) {
					$genre = $fileData["id3v2"]["comments"]["genre"][0];
				}

				/**
				 * 確保檔案名稱唯一，防止重覆名稱產生覆蓋
				 */
				$rename = md5(uniqid(rand())) . ".mp3";
				rename($dir . $name, $dir . $rename);
				$filename = $rename;

				/**
				 * 將中文檔名 改回utf-8格式
				 */
				$name = iconv("big5", "utf-8", $name);
				$name = str_replace(".mp3", "", $name);

				/**
				 * 執行新增音樂
				 */
				$results = $this->musicModel->addMusic($name, $filename, $time, $genre, $artist, $album, $addtime, $updatetime);
				if ($results === false) {
					throw new Exception("新增音樂失敗: 新增至資料庫失敗");
				}
			}
		} catch (Exception $exc) {
			$error = $exc->getMessage();
			return "<textarea>'$error'</textarea>";
		}
		return "<textarea>'新增音樂成功'</textarea>";
	}

}
