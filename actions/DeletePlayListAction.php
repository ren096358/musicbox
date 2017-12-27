<?php

require_once 'include/MusicModel.php';

class DeletePlayListAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			if (!isset($temp['playlist_id'])) {
				throw new Exception("刪除播放清單失敗: 未提供播放清單流水號");
			}
			$playlist_id = $temp['playlist_id'];
			$results = $this->musicModel->deletePlayList($playlist_id);
			if ($results === FALSE) {
				throw new Exception("刪除播放清單失敗: 刪除資料庫的資料失敗");
			}
		} catch (Exception $exc) {
			return json_encode($exc->getMessage());
		}
		return json_encode("刪除播放清單成功");
	}

}
