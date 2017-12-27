<?php

require_once 'include/MusicView.php';

class ShowPlayListAction implements ActionListener {

	private $indexView = null;

	public function __construct() {
		$this->indexView = new MusicView();
	}

	public function actionPerformed($event) {
		return $this->indexView->showPlayListPage();
	}

}
