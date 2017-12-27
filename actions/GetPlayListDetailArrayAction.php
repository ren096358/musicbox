<?php

require_once 'include/MusicModel.php';

class GetPlayListDetailArrayAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			if (!isset($temp['playlist_id'])) {
				throw new Exception("取得播放清單細項資料失敗: 未提供播放清單流水號");
			}
			$playlist_id = $temp['playlist_id'];
			$results = $this->musicModel->getPlayListDetailArray($playlist_id);
			$playListDetailArray = $results->fetchAll();
			$data["items"] = array();
			$data["items"] = $playListDetailArray;
			echo json_encode($data);
		} catch (Exception $exc) {
			return json_encode($exc->getMessage());
		}
	}

}
