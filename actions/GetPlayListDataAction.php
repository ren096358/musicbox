<?php

require_once 'include/MusicModel.php';

class GetPlayListDataAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			if (!isset($temp['playlist_id'])) {
				throw new Exception("取得播放清單資料失敗: 未提供播放清單流水號");
			}
			$playlist_id = $temp['playlist_id'];
			$results = $this->musicModel->getPlayListData($playlist_id);
			$playListData = $results->fetch();
			$data["items"] = array();
			$data["items"] = $playListData;
			echo json_encode($data);
		} catch (Exception $exc) {
			return json_encode($exc->getMessage());
		}
	}

}
