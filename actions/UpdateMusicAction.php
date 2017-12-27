<?php

require_once 'include/MusicModel.php';

class UpdateMusicAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			if (!isset($temp['music_id'])) {
				throw new Exception("修改音樂失敗: 未提供音樂流水號");
			}
			if (!isset($temp['name'])) {
				throw new Exception("修改音樂失敗: 未提供音樂名稱");
			}

			$music_id = $temp['music_id'];
			$name = $temp['name'];
			$genre = $temp['genre'];
			$artist = $temp['artist'];
			$album = $temp['album'];

			/**
			 * 取得目前時間
			 */
			date_default_timezone_set("Asia/Taipei");
			$updatetime = date("Y-m-d H:i:s");

			$results = $this->musicModel->updateMusic($music_id, $name, $genre, $artist, $album, $updatetime);
			if ($results === FALSE) {
				throw new Exception("修改音樂失敗: 修改資料庫的資料失敗");
			}
		} catch (Exception $exc) {
			return json_encode($exc->getMessage());
		}
		return json_encode("修改音樂成功");
	}

}
