<?php

require_once 'Controller.php';

class MusicController extends Controller {

	public function run() {
		$controller = null;
		$action = $this->getAction();
		require_once "actions/$action.php";
		$event = new Event($_GET, $_POST);
		$actionListener = new $action();
		return $actionListener->actionPerformed($event);
	}

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

