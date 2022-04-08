<?php
session_start();

require_once('../../utils/utility.php');
require_once('../../database/dbhelper.php');

if($user != null) {
	$id = $user['id'];
}
header('Location: login.php');

session_destroy();