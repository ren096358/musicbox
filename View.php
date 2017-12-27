<?php

abstract class View {

	protected $tpl = null;

	function __construct() {
		$this->init();
	}

	public function init() {
		require_once 'libaray/libs/Smarty.class.php';
		$this->tpl = new Smarty();
		$this->tpl->template_dir = "./tmpl/";
		$this->tpl->compile_dir = "./libaray/templates_c/";
		$this->tpl->config_dir = "./libaray/configs/";
		$this->tpl->left_delimiter = '<{';
		$this->tpl->right_delimiter = '}>';
	}

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

