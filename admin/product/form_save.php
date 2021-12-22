<?php

$id =  $thumbnail = $title = $price = $category_id = $description = '';

 if (!empty($_POST)) {
 	// code...
 	$id = getPost('id');
 	$title = getPost('title');
 	$price = getPost('price');

 	$thumbnail = getPost('thumbnail');
 	$description = getPost('description');
 	$category_id = getPost('category_id');
 	$created_at = $updated_at = date('Y-m-d H:i:s');

 	if($id > 0) {
 		//update
 		if ($thumbnail != '') {
 			$sql = "update product set thumbnail = '$thumbnail', title= '$title',price= '$price', description= '$description',updated_at= '$updated_at',created_at= '$created_at', category_id = '$category_id' where id = '$id'";
 		} else {
 			$sql = "update product set title= '$title',price= '$price', description= '$description',updated_at= '$updated_at',created_at= '$created_at', category_id = '$category_id' where id = '$id'";
 		}

 		execute($sql);

		header('Location: index.php');
 		die();
 		
 	} else {
 		//insert
 		$sql = "insert into product (thumbnail, title, price, description, updated_at, created_at, deleted, category_id) values ('$thumbnail', '$title', '$price', '$description', '$updated_at', '$created_at', 0, '$category_id')";

		execute($sql);

		header('Location: index.php');
		die();
 	} 	
}