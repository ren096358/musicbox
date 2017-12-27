<?php

require_once 'include/MusicModel.php';

class UpdatePlayListAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			if (!isset($temp['playlist_id'])) {
				throw new Exception("修改播放清單失敗: 未提供播放清單流水號");
			}
			if (!isset($temp['name'])) {
				throw new Exception("修改播放清單失敗: 未提供播放清單名稱");
			}

			$playlist_id = $temp['playlist_id'];
			$name = $temp['name'];

			/**
			 * 取得目前時間
			 */
			date_default_timezone_set("Asia/Taipei");
			$updatetime = date("Y-m-d H:i:s");

			$results = $this->musicModel->updatePlayList($playlist_id, $name, $updatetime);
			if ($results === FALSE) {
				throw new Exception("修改播放清單失敗: 修改資料庫的資料失敗");
			}
		} catch (Exception $exc) {
			return json_encode($exc->getMessage());
		}
		return json_encode("修改播放清單成功");
	}

}
