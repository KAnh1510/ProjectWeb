<?php

function fixSqlInject($sql) {
	$sql = str_replace('\\','\\\\',$sql);
	$sql = str_replace('\'','\\\'',$sql);
	return $sql;
}

function getGet($key) {
	$value = '';
	if(isset($_GET[$key])) {
		$value =$_GET[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);
}

function getPost($key) {
	$value = '';
	if(isset($_POST[$key])) {
		$value =$_POST[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);
}

function getCookie($key) {
	$value = '';
	if(isset($_COOKIE[$key])) {
		$value =$_COOKIE[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);
}

function getRequest($key) {
	$value = '';
	if(isset($_REQUEST[$key])) {
		$value =$_REQUEST[$key];
		$value = fixSqlInject($value);
	}
	return trim($value);
}

function getSecurityMD5($pwd) {
	return md5(md5($pwd).PRIVATE_KEY);
}

function getUserToken() {

	if(isset($_SESSION['user'])) {
		return $_SESSION['user'];
	}
	$token = getCookie('token');
	$sql = "select * from tokens where token = '$token'";
	$item = executeResult($sql, true);
	if($item != null) {
		$userId = $item['user_id'];
		$sql = "select * from user where id = '$userId' and deleted = 0";
		$item = executeResult($sql, true);
		if($item != null) {
			$_SESSION['user'] = $item;
			return $item;
		}
	}

	return null;
}
