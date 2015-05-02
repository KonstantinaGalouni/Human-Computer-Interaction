
<?php
	$link = mysqli_connect("sql3.freemysqlhosting.net", "sql347263","hG4!lQ9%", "sql347263");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	$flag=false;
	$username=$_POST['Username'];
	$password=$_POST['Password'];
	
	session_start(); 
	$query="SELECT * FROM students WHERE username='$username' AND password='$password'";
	$result = mysqli_query($link, $query);
	$rows = mysqli_num_rows($result);
	if ($rows>0) {
		$obj = mysqli_fetch_object($result);
		$_SESSION['surname'] = $obj->surname;
		$_SESSION['name'] = $obj->name;
		$_SESSION['username']= $obj->username;
		$_SESSION['password']= $obj->password;
		$_SESSION['credit_points']= $obj->credit_points;
		$_SESSION['school']= $obj->school;
		$_SESSION['department']= $obj->department;
		$_SESSION['semester']= $obj->semester;
		$_SESSION['email']= $obj->email;
		$_SESSION['phone']= $obj->phone;
		$_SESSION['from'] = "connection";
		$_SESSION['type']= "Φοιτητής";
		$flag=true;
		header("Location: profile_page.php");
	}
	
	if ($flag==false){
		$query="SELECT * FROM publisher WHERE username='$username' AND password='$password'";
		$result = mysqli_query($link, $query);
		$rows = mysqli_num_rows($result);
		if ($rows>0) {
			$obj = mysqli_fetch_object($result);
			$_SESSION['surname'] = $obj->surname;
			$_SESSION['name'] = $obj->name;
			$_SESSION['username']= $obj->username;
			$_SESSION['password']= $obj->password;
			$_SESSION['credit_points']= $obj->credit_points;
			$_SESSION['school']= $obj->school;
			$_SESSION['department']= $obj->department;
			$_SESSION['semester']= $obj->semester;
			$_SESSION['email']= $obj->email;
			$_SESSION['phone']= $obj->phone;
			$_SESSION['from'] = "connection";
			$_SESSION['type'] = "Εκδότης";
			$flag=true;
			header("Location: profile_page.php");
		}
	}
	
	if ($flag==false){
		$query="SELECT * FROM secretariat WHERE username='$username' AND password='$password'";
		$result = mysqli_query($link, $query);
		$rows = mysqli_num_rows($result);
		if ($rows>0) {
			$obj = mysqli_fetch_object($result);
			$_SESSION['surname'] = $obj->surname;
			$_SESSION['name'] = $obj->name;
			$_SESSION['username']= $obj->username;
			$_SESSION['password']= $obj->password;
			$_SESSION['credit_points']= $obj->credit_points;
			$_SESSION['school']= $obj->school;
			$_SESSION['department']= $obj->department;
			$_SESSION['semester']= $obj->semester;
			$_SESSION['email']= $obj->email;
			$_SESSION['phone']= $obj->phone;
			$_SESSION['from'] = "connection";
			$_SESSION['type'] = "Γραμματεία";
			$flag=true;
			header("Location: profile_page.php");
		}
	}
	
	if ($flag==false){
		$query="SELECT * FROM delivery_points WHERE username='$username' AND password='$password'";
		$result = mysqli_query($link, $query);
		$rows = mysqli_num_rows($result);
		if ($rows>0) {
			$obj = mysqli_fetch_object($result);
			$_SESSION['surname'] = $obj->surname;
			$_SESSION['name'] = $obj->name;
			$_SESSION['username']= $obj->username;
			$_SESSION['password']= $obj->password;
			$_SESSION['credit_points']= $obj->credit_points;
			$_SESSION['school']= $obj->school;
			$_SESSION['department']= $obj->department;
			$_SESSION['semester']= $obj->semester;
			$_SESSION['email']= $obj->email;
			$_SESSION['phone']= $obj->phone;
			$_SESSION['from'] = "connection";
			$_SESSION['type'] = "Σημείο Διανομής";
			$flag=true;
			header("Location: profile_page.php");
		}
	}
	
	if ($flag==false){
		$query="SELECT * FROM support WHERE username='$username' AND password='$password'";
		$result = mysqli_query($link, $query);
		$rows = mysqli_num_rows($result);
		if ($rows>0) {
			$obj = mysqli_fetch_object($result);
			$_SESSION['surname'] = $obj->surname;
			$_SESSION['name'] = $obj->name;
			$_SESSION['username']= $obj->username;
			$_SESSION['password']= $obj->password;
			$_SESSION['credit_points']= $obj->credit_points;
			$_SESSION['school']= $obj->school;
			$_SESSION['department']= $obj->department;
			$_SESSION['semester']= $obj->semester;
			$_SESSION['email']= $obj->email;
			$_SESSION['phone']= $obj->phone;
			$_SESSION['from'] = "connection";
			$_SESSION['type'] = "Διαθέτης Υποστηρικτικού Υλικού";
			header("Location: profile_page.php");
		}
		else
		{
			header("Location: wrong_login.html");
		}
	}
	mysqli_close($link);
?>
