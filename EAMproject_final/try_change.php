<?php
	$link = mysqli_connect("sql3.freemysqlhosting.net", "sql347263","hG4!lQ9%", "sql347263");
	if (!$link) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$var = 0;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$rename = $_POST["change_name"];
			$resurname = $_POST["change_surname"];
			$reusername = $_POST["change_username"];
			$repassword = $_POST["change_password"];
			$reemail = $_POST["change_email"];
			$rephone = $_POST["change_phone"];
			$rerepassword = $_POST["change_conf_password"];
				
		   if (empty($rename)) {
				$var = $var + 1;
				echo $var;
		   } else if (!preg_match("/^[a-zA-Z ]*$/",$rename)) {
				$var = $var + 1;
				echo $var;
		   }
		   if (empty($resurname)) {
			 $var = $var + 1;
			 echo $var;
		   } else if (!preg_match("/^[a-zA-Z ]*$/",$resurname)) {
			   $var = $var + 1;
			   echo $var;
		   }
			   
		   if (empty($reemail)) {
			 $var = $var + 1;
			 echo $var;
		   } else if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$reemail)) {
			   $var = $var + 1;
			   echo $var;
		   }
			   
		    if (empty($reusername)) {
			 $var = $var + 1;
			 echo $var;
		   }
		   
		    if (empty($repassword)) {
			 $var = $var + 1;
			 echo $var;
		   }
		   if (empty($rerepassword)) {
			 $var = $var + 1;
			 echo $var;
		   } 
		   
		   if (!is_numeric($rephone)&&(!empty($rephone))) {
				$var = $var + 1;
				echo $var;
		   }
		   
		   if (($repassword!=$rerepassword)&&(!empty($repassword))&&(!empty($rerepassword))){
				$var = $var + 1;
				echo $var;
			}
		
			
			session_start();
			if($var==0){
				$username=$_SESSION['username'];
				$query="UPDATE `sql347263`.`students` SET `name`='$rename', `password`='$repassword', `surname`='$resurname', `username`='$reusername', `phone`='$rephone', `email`='$reemail' WHERE `username`='$username';";
				$result = mysqli_query($link, $query);
				//$rows = mysqli_num_rows($result);
				//if ($rows>0) {
					$_SESSION['name']=$rename;
					$_SESSION['surname']=$resurname;
					$_SESSION['username']=$reusername;
					$_SESSION['phone']=$rephone;
					$_SESSION['password']=$repassword;
					$_SESSION['email']=$reemail;
					
				//}
			}
			else {
				$_SESSION["from"]="wrong_edit";
			}
			

			header("Location: profile_page.php");
		}
		mysqli_close($link);
	
?>