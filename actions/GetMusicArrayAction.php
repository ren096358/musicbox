<?php

require_once 'include/MusicModel.php';

class GetMusicArrayAction implements ActionListener {

	private $musicModel = null;

	function __construct() {
		$this->musicModel = new MusicModel();
	}

	public function actionPerformed($event) {
		try {
			$temp = $event->getPost();
			$start = $temp["start"];
			$count = $temp["count"];
			$results = $this->musicModel->getMusicArray($start, $count);
			$count = $this->musicModel->getMusicArrayCount()->fetch();
			$musicArray = $results->fetchAll();
			$data["items"] = array();
			$data["items"] = $musicArray;
			$data["numRows"] = intval($count["0"]);
			echo json_encode($data);
		} catch (Exception $exc) {
			return $exc->getMessage();
		}
	}

}
