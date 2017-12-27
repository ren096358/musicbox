<?php

abstract class Controller {

	public function getAction() {
		return $_GET['action'];
	}

	public function getModule() {
		return $_GET['module'];
	}

	abstract function run();
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

