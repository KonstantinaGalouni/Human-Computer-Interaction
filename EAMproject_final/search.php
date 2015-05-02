<?php
	$link = mysqli_connect("sql3.freemysqlhosting.net", "sql347263","hG4!lQ9%", "sql347263");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$title=$_POST['Title'];
	$subtitle=$_POST['Subtitle'];
	$code=$_POST['Code'];
	$writers=$_POST['Writers'];
	$publnum=$_POST['PublNum'];
	$publyear=$_POST['PubYear'];
	$voltitle=$_POST['VolTitle'];
	$volnum=$_POST['VolNum'];
	$keywds=$_POST['KeyWds'];
	$isbn=$_POST['ISBN'];
	$publisher=$_POST['Publisher'];
	$edition=$_POST['Edition'];
	$school=$_POST['School'];
	$type=$_POST['Type'];
	$query="SELECT * FROM books WHERE ISBN='$isbn'";
	$result = mysqli_query($link, $query);
	$rows = mysqli_num_rows($result);
	if ($rows>0) {
		$obj = mysqli_fetch_object($result);
		echo $obj->title;
	}
	else {
		$query="SELECT * FROM books WHERE code='$code'";
		$result = mysqli_query($link, $query);
		$rows = mysqli_num_rows($result);
		if ($rows>0) {
			$obj = mysqli_fetch_object($result);
			echo $obj->title;
		}
		else {
			$query="SELECT * FROM books WHERE title LIKE '%$title%' AND author LIKE '%$writers%' AND publish_no='$publnum' AND year='$publyear' AND publisher LIKE '%$edition%' AND school='$school' AND type='$type' AND distribute LIKE '%$publisher%'";
			$result = mysqli_query($link, $query);
			$rows = mysqli_num_rows($result);
			if ($rows>0) {
				$obj = mysqli_fetch_object($result);
				echo $obj->title;
			}
		}
	}
?>