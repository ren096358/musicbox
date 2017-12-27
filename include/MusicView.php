<?php

require_once 'View.php';

class MusicView extends View {

	function __construct() {
		$this->init();
		$this->tpl->assign("CSSDirUrl", "./styles");
		$this->tpl->assign("JSDirUrl", "./scripts");

		$this->tpl->assign("nextImgSrc", "images/next.png");
		$this->tpl->assign("previousImgSrc", "images/previous.png");
		$this->tpl->assign("randomImgSrc", "images/random.png");
		$this->tpl->assign("stopImgSrc", "images/stop.png");

		$this->tpl->assign("showMusicListUrl", "index.php?action=ShowMusicListAction");
		$this->tpl->assign("addMusicUrl", "index.php?action=AddMusicAction");

		$this->tpl->assign("showPlayListUrl", "index.php?action=ShowPlayListAction");

		$this->tpl->assign("addMusicToNewPlayListUrl", "index.php?action=AddMusicToNewPlayList");
	}

	public function showMusicIndexPage() {
		return $this->tpl->fetch('MusicIndexPage.tpl');
	}

	public function showMusicListPage() {
		$this->tpl->assign("getMusicArrayUrl", "index.php?action=GetMusicArrayAction");
		$this->tpl->assign("getMusicDataUrl", "index.php?action=GetMusicDataAction");
		$this->tpl->assign("updateMusicUrl", "index.php?action=UpdateMusicAction");
		$this->tpl->assign("deleteMusicUrl", "index.php?action=DeleteMusicAction");
		return $this->tpl->fetch('MusicListPage.tpl');
	}

	public function showPlayListPage() {

		$this->tpl->assign("getPlayListArrayUrl", "index.php?action=GetPlayListArrayAction");
		$this->tpl->assign("updatePlayListUrl", "index.php?action=UpdatePlayListAction");
		$this->tpl->assign("getPlayListDetailArrayUrl", "index.php?action=GetPlayListDetailArrayAction");
		$this->tpl->assign("addPlayListDetailUrl", "index.php?action=AddPlayListDetailAction");
		$this->tpl->assign("getMusicArrayUrl", "index.php?action=GetMusicArrayAction");
		$this->tpl->assign("deletePlayListDetailUrl", "index.php?action=DeletePlayListDetailAction");
		$this->tpl->assign("clearPlayListUrl", "index.php?action=ClearPlayListAction");
		$this->tpl->assign("deletePlayListUrl", "index.php?action=DeletePlayListAction");

		return $this->tpl->fetch('PlayListPage.tpl');
	}

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

