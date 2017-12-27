<?php

require_once 'ActionListener.php';
require_once 'Event.php';

require_once 'controller/MusicController.php';
require_once 'actions/ShowMusicIndexAction.php';

if (isset($_GET['action'])) {
	$controller = null;
	$controller = new MusicController();
	$msg = $controller->run();
} else {
	$actionListener = null;
	$event = new Event($_GET, $_POST);
	$actionListener = new ShowMusicIndexAction();
	$msg = $actionListener->actionPerformed($event);
}
echo $msg;
