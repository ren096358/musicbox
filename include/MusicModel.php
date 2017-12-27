<?php

require_once 'Model.php';

class MusicModel extends Model {

	public function addMusic($name, $filename, $time, $genre, $artist, $album, $addtime, $updatetime) {
		$sql = "INSERT INTO `music`(`name`, `filename`, `time`, `genre`, `artist`, `album`, `addtime`, `updatetime`) VALUES ('$name','$filename','$time','$genre','$artist','$album','$addtime','$updatetime')";
		return $this->conn->query($sql);
	}

	public function getMusicArray($start = 0, $count = 25) {
		$sql = "SELECT * FROM `music` LIMIT $start, $count";
		return $this->conn->query($sql);
	}

	public function getMusicArrayCount() {
		$sql = "SELECT COUNT(*) FROM `music`";
		return $this->conn->query($sql);
	}

	public function getMusicData($music_id) {
		$sql = "SELECT * FROM `music` WHERE music_id = '$music_id'";
		return $this->conn->query($sql);
	}

	public function deleteMusic($music_id) {
		$sql = "DELETE FROM `music` WHERE music_id = '$music_id'";
		return $this->conn->query($sql);
	}

	public function updateMusic($music_id, $name, $genre, $artist, $album, $updatetime) {
		$sql = "UPDATE `music` SET `name`='$name',`genre`='$genre',`artist`='$artist',`album`='$album',`updatetime`='$updatetime' WHERE music_id = '$music_id'";
		return $this->conn->query($sql);
	}

	public function addPlayList($name, $addtime, $updatetime) {
		$sql = "INSERT INTO `playlist`(`name`, `addtime`, `updatetime`) VALUES ('$name','$addtime','$updatetime')";
		return $this->conn->query($sql);
	}

	public function getPlayListArray($start = 0, $count = 25) {
		$sql = "SELECT * FROM `playlist`";
		return $this->conn->query($sql);
	}

	public function getPlayListArrayCount() {
		$sql = "SELECT COUNT(*) FROM `playlist`";
		return $this->conn->query($sql);
	}

	public function getPlayListData($playlist_id) {
		$sql = "SELECT * FROM `playlist` WHERE pl.`playlist_id` = '$playlist_id'";
		return $this->conn->query($sql);
	}

	public function getLatestPlayListId() {
		$sql = "SELECT `playlist_id` FROM `playlist` ORDER BY `playlist_id` DESC LIMIT 1 ";
		return $this->conn->query($sql);
	}

	public function getPlayListDetailArray($playlist_id) {
		$sql = "SELECT * FROM `playlist` pl join `playlist_detail` pld on pl.`playlist_id` = pld.`playlist_id` join `music` m on pld.`music_id` = m.`music_id` WHERE pl.`playlist_id` = '$playlist_id'";
		return $this->conn->query($sql);
	}

	public function updatePlayListTime($playlist_id, $updatetime) {
		$sql = "UPDATE `playlist` SET `updatetime`='$updatetime' WHERE playlist_id='$playlist_id'";
		return $this->conn->query($sql);
	}

	public function updatePlayList($playlist_id, $name, $updatetime) {
		$sql = "UPDATE `playlist` SET `name`='$name',`updatetime`='$updatetime' WHERE playlist_id='$playlist_id'";
		return $this->conn->query($sql);
	}

	public function addPlayListDetail($music_id, $playlist_id) {
		$sql = "INSERT INTO `playlist_detail`(`music_id`, `playlist_id`) VALUES ('$music_id','$playlist_id')";
		return $this->conn->query($sql);
	}

	public function deletePlayListDetail($playlist_detail_id) {
		$sql = "DELETE FROM `playlist_detail` WHERE playlist_detail_id = '$playlist_detail_id'";
		return $this->conn->query($sql);
	}

	public function deletePlayList($playlist_id) {
		$sql = "DELETE FROM `playlist` WHERE playlist_id = '$playlist_id'";
		return $this->conn->query($sql);
	}

	public function clearPlayList($playlist_id) {
		$sql = "DELETE FROM `playlist_detail` WHERE playlist_id = '$playlist_id'";
		return $this->conn->query($sql);
	}

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

