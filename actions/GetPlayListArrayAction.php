<?php

require_once 'include/MusicModel.php';

class GetPlayListArrayAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			$start = $temp["start"];
			$count = $temp["count"];
			$results = $this->musicModel->getPlayListArray($start, $count);
			$count = $this->musicModel->getPlayListArrayCount()->fetch();
			$playListArray = $results->fetchAll();
			$data["items"] = array();
			$data["items"] = $playListArray;
			$data["numRows"] = intval($count["0"]);
			echo json_encode($data);
		} catch (Exception $exc) {
			return $exc->getMessage();
		}
	}

}
