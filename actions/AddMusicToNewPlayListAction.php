<?php

require_once 'include/MusicModel.php';

Class AddMusicToNewPlayListAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			if (!isset($temp["name"])) {
				throw new Exception("新增播放清單失敗: 未提供播放清單名稱");
			}
			$name = $temp["name"];
			$musicArray = json_decode($temp["music_array"]);
			/**
			 * 取得目前時間
			 */
			date_default_timezone_set("Asia/Taipei");
			$addtime = date("Y-m-d H:i:s");
			$updatetime = date("Y-m-d H:i:s");

			$results = $this->musicModel->addPlayList($name, $addtime, $updatetime);
			if ($results === FALSE) {
				throw new Exception("新增播放清單失敗: 新增至資料庫失敗");
			}
			$result = $this->musicModel->getLatestPlayListId()->fetch();
			$playListId = $result["playlist_id"];
			foreach ($musicArray as $musicId) {
				$results = $this->musicModel->addPlayListDetail($musicId, $playListId);
				if (!$results) {
					throw new Exception("新增播放清單失敗: 新增歌曲至播放清單失敗");
				}
			}
		} catch (Exception $exc) {
			return json_encode($exc->getMessage());
		}
		return json_encode("新增播放清單成功");
	}

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

