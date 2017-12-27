<?php

require_once 'include/MusicModel.php';

class AddPlayListAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			if (!isset($temp['name'])) {
				throw new Exception("新增播放清單失敗: 未提供播放清單名稱");
			}
			$name = $temp['name'];

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
		} catch (Exception $exc) {
			return json_encode($exc->getMessage());
		}
		return json_encode("新增播放清單成功");
	}

}
