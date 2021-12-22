<?php
$id =  $name = $title = $h4Content = $h5Content = '';

if (!empty($_POST)) {
	$id = getPost('id');
	$name = getPost('name');
	$h4Content = getPost('h4_content');
	$h5Content = getPost('h5_content');

	if ($id > 0) {
		// update...
		$sql = "update category set name = '$name', h5_Content = '$h5Content', h4_Content = '$h4Content' where id = '$id'";
		execute($sql);

		header('Location: index.php');
		die();

	} else {
		//insert
		$sql = "insert into category (name, h5_Content, h4_Content) values ('$name','$h5Content','$h4Content')";
		execute($sql);

		header('Location: index.php');
		die();
	}
}