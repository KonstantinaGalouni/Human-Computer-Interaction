<?php
	$nameErr = $surnameErr = $usernameErr = $passwordErr = $repasswordErr = $registry_noErr = $schoolErr = $departmentErr = $emailErr = "";
	$name = $surname = $username =  $password = $repasswrod  = $registry_no = $school = $department = $email = "";
	$var = 0;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = $_POST["Name"];
			$surname = $_POST["Surname"];
			$username = $_POST["Username"];
			$password = $_POST["Password"];
			$registry_no = $_POST["Registration_No"];
			$email = $_POST["Email"];
			$school = $_POST["School"];
			$phone = $_POST["Phone"];
			$department = $_POST["Department"];
			$repassword = $_POST["Re-Password"];
			
				
				
			   
		   if (empty($name)) {
			 $var = $var + 1;
			 $nameErr = "Απαιτείται όνομα!";
		   } else if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
			   $var = $var + 1;
			   $nameErr = "Μόνο γράμματα!"; 
		   }
			   
		   if (empty($surname)) {
			 $var = $var + 1;
			 $surnameErr = "Απαιτείται επώνυμο";
		   } else if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
			   $var = $var + 1;
			   $surnameErr = "Μόνο γράμματα!"; 
		   }
			   
		   if (empty($email)) {
			 $var = $var + 1;
			 $emailErr = "Απαιτείται email!";
		   } else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
			   $var = $var + 1;
			   $emailErr = "Μη έγκυρη διεύθυνση!"; 
		   }
			   
		    if (empty($username)) {
			 $var = $var + 1;
			 $usernameErr = "Απαιτείται χρήστης!";
		   }
		   
		    if (empty($password)) {
			 $var = $var + 1;
			 $passwordErr = "Απαιτείται κωδικός!";
		   }
			   
		   if (empty($registry_no)) {
			 $var = $var + 1;
			 $registry_noErr = "Απαιτείται Α.Μ.!";
		   } else if (!is_numeric($registry_no)) {
			   $var = $var + 1;
			   $registry_noErr = "Μόνο νούμερα!"; 
		   }
		   
		   
		    if (empty($school)) {
			 $var = $var + 1;
			 $schoolErr = "Απαιτείται σχολή!";
		   }else if (!preg_match("/^[a-zA-Z ]*$/",$school)) {
			   $var = $var + 1;
			   $schoolErr = "Μόνο γράμματα!"; 
		   }
			   
		    if (empty($department)) {
			 $var = $var + 1;
			 $departmentErr = "Απαιτείται τμήμα!";
		   }
		   else if (!preg_match("/^[a-zA-Z ]*$/",$department)) {
			   $var = $var + 1;
			   $departmentErr = "Μόνο γράμματα!"; 
		   }
		   
			if (empty($repassword)) {
			 $var = $var + 1;
			 $repasswordErr = "Επιβεβαιώστε κωδικό!";
		   } 
		   
		   if (!is_numeric($phone)&&(!empty($phone))) {
				$var = $var + 1;
				$phoneErr = "Μόνο νούμερα!"; 
		   }
		   
		   if (($password!=$repassword)&&(!empty($password))&&(!empty($repassword))){
				$var = $var + 1;
				$repasswordErr = "Λάθος επαλήθευση!";
			}
			   
			session_start();
			$_SESSION["name"]=$name;
			$_SESSION["surname"]=$surname;
			$_SESSION["username"]=$username;
			$_SESSION["usernameErr"]=$usernameErr;
			$_SESSION["password"]=$password;
			$_SESSION["repasswordErr"]=$repasswordErr;
			$_SESSION["school"]=$school;
			$_SESSION["department"]=$department;
			$_SESSION["registry_no"]=$registry_no;
			$_SESSION["email"]=$email;
			$_SESSION["phone"]=$phone;
			$_SESSION['from'] = "register";
		   if ($var == 0){
				header("Location: registration.php");
		   }
		   else{
				$_SESSION["repassword"]=$repassword;
				$_SESSION["nameErr"]=$nameErr;
				$_SESSION["surnameErr"]=$surnameErr;
				$_SESSION["usernameErr"]=$usernameErr;
				$_SESSION["passwordErr"]=$passwordErr;
				$_SESSION["repasswordErr"]=$repasswordErr;
				$_SESSION["schoolErr"]=$schoolErr;
				$_SESSION["departmentErr"]=$departmentErr;
				$_SESSION["registry_noErr"]=$registry_noErr;
				$_SESSION["emailErr"]=$emailErr;
				$_SESSION["phoneErr"]=$phoneErr;
				header("Location: student_register_page_wrong.php");
		   }
		}
	
?>		
		