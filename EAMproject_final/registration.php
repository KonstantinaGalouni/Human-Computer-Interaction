<?php
	$link = mysqli_connect("sql3.freemysqlhosting.net", "sql347263","hG4!lQ9%", "sql347263");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}
	
	session_start();
	$name=$_SESSION["name"];
	$surname=$_SESSION["surname"];
	$username=$_SESSION["username"];
	$password=$_SESSION["password"];
	$school=$_SESSION["school"];
	$department=$_SESSION["department"];
	$registry_no=$_SESSION["registry_no"];
	$email=$_SESSION["email"];
	$phone=$_SESSION["phone"];
	$semester=1;
	$credit_points=0;
	
	$query="SELECT * FROM students WHERE username='$username'";
	$result = mysqli_query($link, $query);
	$rows = mysqli_num_rows($result);
	
	if ($rows>0) {
		$_SESSION["usernameErr"]="Διαλέξτε άλλο όνομα!";
		header("Location: student_register_page_wrong.php");
	}
	else {
		$query="SELECT * FROM publisher WHERE username='$username'";
		$result = mysqli_query($link, $query);
		$rows = mysqli_num_rows($result);
		
		if ($rows>0) {
			$_SESSION["usernameErr"]="Διαλέξτε άλλο όνομα!";
			header("Location: student_register_page_wrong.php");
		}
		else {
			$query="SELECT * FROM secretariat WHERE username='$username'";
			$result = mysqli_query($link, $query);
			$rows = mysqli_num_rows($result);
			
			if ($rows>0) {
				$_SESSION["usernameErr"]="Διαλέξτε άλλο όνομα!";
				header("Location: student_register_page_wrong.php");
			}
			else {
				$query="SELECT * FROM delivery_points WHERE username='$username'";
				$result = mysqli_query($link, $query);
				$rows = mysqli_num_rows($result);
				
				if ($rows>0) {
					$_SESSION["usernameErr"]="Διαλέξτε άλλο όνομα!";
					header("Location: student_register_page_wrong.php");
				}
				else {
					$query="SELECT * FROM support WHERE username='$username'";
					$result = mysqli_query($link, $query);
					$rows = mysqli_num_rows($result);
					
					if ($rows>0) {
						$_SESSION["usernameErr"]="Διαλέξτε άλλο όνομα!";
						header("Location: student_register_page_wrong.php");
					}
					else {
						$query="INSERT INTO `sql347263`.`students` (`username`, `password`, `surname`, `name`, `school`, `department`, `semester`, `email`, `registration_no`, `credit_points`, `phone`) VALUES ('$username', '$password', '$surname', '$name', '$school', '$department', '1', '$email', '$registry_no', '$credit_points', '$phone');";
						$result = $link->query($query);
						$_SESSION['surname'] = $surname;
						$_SESSION['name'] = $name;
						$_SESSION['username']= $username;
						$_SESSION['password']= $password;
						$_SESSION['credit_points']= $credit_points;
						$_SESSION['school']= $school;
						$_SESSION['department']= $department;
						$_SESSION['semester']= $semester;
						$_SESSION['email']= $email;
						$_SESSION['phone']= $phone;
						$_SESSION["type"] = "Φοιτητής";
						header("Location: profile_page.php");
					}
				}
			}
		}
		mysqli_close($link);
	}
?>