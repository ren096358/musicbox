<?php

require_once 'include/MusicModel.php';

class DeletePlayListDetailAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			if (!isset($temp['playlist_detail_id'])) {
				throw new Exception("刪除播放清單細項失敗: 未提供播放清單細項流水號");
			}
			$playlist_detail_id = $temp['playlist_detail_id'];
			$results = $this->musicModel->deletePlayListDetail($playlist_detail_id);
			if ($results === FALSE) {
				throw new Exception("刪除播放清單細項失敗: 刪除資料庫的資料失敗");
			}

			/**
			 * 取得目前時間
			 */
			date_default_timezone_set("Asia/Taipei");
			$updatetime = date("Y-m-d H:i:s");
			$playlist_id = $temp['playlist_id'];
			$results = $this->musicModel->updatePlayListTime($playlist_id, $updatetime);
			if ($results === FALSE) {
				throw new Exception("刪除播放清單細項失敗: 修改時間至資料庫失敗");
			}
		} catch (Exception $exc) {
			return json_encode($exc->getMessage());
		}
		return json_encode("刪除播放清單細項成功");
	}

}
