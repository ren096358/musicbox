<?php

require_once 'include/MusicModel.php';

class DeleteMusicAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			if (!isset($temp['music_id'])) {
				throw new Exception("刪除音樂失敗: 未提供音樂流水號");
			}
			$music_id = $temp['music_id'];
			$filename = $temp['filename'];
			$dir = "musics/";
			if (is_file($dir . $filename)) {
				unlink($dir . $filename);
			} else {
				throw new Exception("刪除音樂失敗: 找不到音樂檔");
			}

			$results = $this->musicModel->deleteMusic($music_id);
			if ($results === FALSE) {
				throw new Exception("刪除音樂失敗: 刪除資料庫的資料失敗");
			}
		} catch (Exception $exc) {
			return json_encode($exc->getMessage());
		}
		return json_encode("刪除音樂成功");
	}

}
