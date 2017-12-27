<?php

require_once 'include/MusicModel.php';

class GetMusicDataAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			$music_id = $temp['music_id'];
			if (!isset($music_id)) {
				throw new Exception("取得音樂資料失敗: 未提供音樂流水號");
			}
			$results = $this->musicModel->getMusicData($music_id);
			$musicData = $results->fetch();
			$data["items"] = array();
			$data["items"] = $musicData;
			echo json_encode($data);
		} catch (Exception $exc) {
			return json_encode($exc->getMessage());
		}
	}

}
