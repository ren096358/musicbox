<?php

require_once 'include/MusicModel.php';

class AddPlayListDetailAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			if (!isset($temp['music_id'])) {
				throw new Exception("新增播放清單細項失敗: 未提供音樂流水號");
			}
			if (!isset($temp['playlist_id'])) {
				throw new Exception("新增播放清單細項失敗: 未提供播放清單流水號");
			}

			$music_id = $temp['music_id'];
			$playlist_id = $temp['playlist_id'];
			$results = $this->musicModel->addPlayListDetail($music_id, $playlist_id);
			if ($results === FALSE) {
				throw new Exception("新增播放清單細項失敗: 新增至資料庫失敗");
			}

			/**
			 * 取得目前時間
			 */
			date_default_timezone_set("Asia/Taipei");
			$updatetime = date("Y-m-d H:i:s");
			$results = $this->musicModel->updatePlayListTime($playlist_id, $updatetime);
			if ($results === FALSE) {
				throw new Exception("新增播放清單細項失敗: 修改時間至資料庫失敗");
			}
		} catch (Exception $exc) {
			return json_encode($exc->getMessage());
		}
		return json_encode("新增播放清單細項成功");
	}

}
