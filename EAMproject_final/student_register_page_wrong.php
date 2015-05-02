<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el">
<html>
	<head>
		<title>Εύδοξος: Εγγραφή Φοιτητή</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/student_register_page.css" />
		
		<script type="text/javascript">
		
			function OnMouseOut(event){
				document.getElementById("submenu").style.display = "none";
			}
		
			function OnMouseOver(event){
				document.getElementById("submenu").style.display = "block";
				//alert("hi");
			}
			
			function OnMouseOutSub1(event){
				document.getElementById("sub_submenu1").style.display = "none";
			}
		
			function OnMouseOverSub1(event){
				document.getElementById("sub_submenu1").style.display = "block";
				//alert("hi");
			}
			
			function OnMouseOutSub2(event){
				document.getElementById("sub_submenu2").style.display = "none";
			}
		
			function OnMouseOverSub2(event){
				document.getElementById("sub_submenu2").style.display = "block";
				//alert("hi");
			}
			
			function OnMouseOutSub3(event){
				document.getElementById("sub_submenu3").style.display = "none";
			}
		
			function OnMouseOverSub3(event){
				document.getElementById("sub_submenu3").style.display = "block";
				//alert("hi");
			}
			
			function OnMouseOutSub4(event){
				document.getElementById("sub_submenu4").style.display = "none";
			}
		
			function OnMouseOverSub4(event){
				document.getElementById("sub_submenu4").style.display = "block";
				//alert("hi");
			}
			
			function OnMouseOutSub5(event){
				document.getElementById("sub_submenu5").style.display = "none";
			}
		
			function OnMouseOverSub5(event){
				document.getElementById("sub_submenu5").style.display = "block";
				//alert("hi");
			}
			
			function WriteInfo (event) {
				var marquee = document.getElementById ("announcement");
			}
		
			function Freeze (event) {
				
			}
		
			function OnClick (event) {
				event.target.value = "";
				event.target.style.color = "black";
				event.target.style.fontStyle = "italic";
			}
			
			function OutOfSearch (event) {
				if(event.target.value == "")
				{
					event.target.style.color = "grey";
					event.target.style.fontStyle = "normal";
					event.target.value = "Search...";
				}
			}	
			
			function OnClickField(event) {
				
				//event.target.type = "password";
				if(event.target.style.color=="red")
				{
					event.target.value = "";
					event.target.style.color = "black";
					event.target.style.fontStyle = "normal";
				}
			}
			
			function OnClickPassword (event) {
				OnClickField(event);
				event.target.type = "password";
				event.target.value = "";
				
			}
		</script>
		
	</head>
	
	<?php
		$nameFlag=$surnameFlag=$usernameFlag=$passwordFlag=$repasswordFlag=$schoolFlag=$departmentFlag=$emailFlag=$registry_noFlag=$phoneFlag=0;
		session_start();
		$nameErr=$_SESSION["nameErr"];
		$name=$_SESSION["name"];
		if (empty($nameErr)){
			$nameFlag=1;
			$nameErr=$name;
		}
		$surnameErr=$_SESSION["surnameErr"];
		$surname=$_SESSION["surname"];
		if (empty($surnameErr)){
			$surnameFlag=1;
			$surnameErr=$surname;
		}
		$usernameErr=$_SESSION["usernameErr"];
		$username=$_SESSION["username"];
		if (empty($usernameErr)){
			$usernameFlag=1;
			$usernameErr=$username;
		}
		$passwordErr=$_SESSION["passwordErr"];
		$password=$_SESSION["password"];
		if (empty($passwordErr)){
			$passwordFlag=1;
			$passwordErr=$password;
		}
		$repasswordErr=$_SESSION["repasswordErr"];
		$repassword=$_SESSION["repassword"];
		if (empty($repasswordErr)){
			$repasswordFlag=1;
			$repasswordErr=$repassword;
		}
		$schoolErr=$_SESSION["schoolErr"];
		$school=$_SESSION["school"];
		if (empty($schoolErr)){
			$schoolFlag=1;
			$schoolErr=$school;
		}
		$departmentErr=$_SESSION["departmentErr"];
		$department=$_SESSION["department"];
		if (empty($departmentErr)){
			$departmentFlag=1;
			$departmentErr=$department;
		}
		$registry_noErr=$_SESSION["registry_noErr"];
		$registry_no=$_SESSION["registry_no"];
		if (empty($registry_noErr)){
			$registry_noFlag=1;
			$registry_noErr=$registry_no;
		}
		$emailErr=$_SESSION["emailErr"];
		$email=$_SESSION["email"];
		if (empty($emailErr)){
			$emailFlag=1;
			$emailErr=$email;
		}
		$phoneErr=$_SESSION["phoneErr"];
		$phone=$_SESSION["phone"];
		if (empty($departmentErr)){
			$phoneErr=$phone;
			$phoneFlag=1;
		}
	?>
	
	<body>
		<div id="upper">
			<a href="index.html"><img id="logo" src="pictures/logo_eudoxus3.jpg" alt="Eudoxus Logo"></a>
			<img id="suggrammata" src="pictures/prwtoi_sta_suggrammata1.jpg" alt="Eudoxus Logo">
			<a href="cookie.php"><img id="printer" src="pictures/printer.png" alt="Print"></a>
			<a href="cookie.php"><img id="mail" src="pictures/mail2.png" alt="Mail"></a>
			<a href="cookie.php"><img id="faq" src="pictures/faq3.png" alt="FAQ"></a>
			<a href="cookie.php"><img id="greek" src="pictures/greece1.png" alt="Greek"></a>
			<a href="cookie.php"><img id="english" src="pictures/english.png" alt="English"></a>
			<form method="post" action="try_login.php"> 
				<div id="username" align="right"> Username: <input type="text" name="Username"> </div>
				<div id="password" align="right"> Password: <input type="password" name="Password"> </div>
				<div align="right"> <button id="submit" type="submit" align="center"> <font size="4">Σύνδεση <b>></b></font></button> </div>
			</form>
			<p id="instructions" align="right"> Αν δεν έχετε λογαρια-</br> σμό, εγγραφείτε <a href="register_page.html"><font color="red"><i>εδώ<i/></font></a>.</p>
		</div>
		
		<div id="main">
			<ul id="menuhorizontal">
				<!tr>
					<li class="tdhorizontalsmall"><a class="non-selected" href="index.html">Αρχική</a></li>
					<li class="tdhorizontalsmall"><a class="non-selected" href="premision_denied_statement.html">Δήλωση</a></li>
					<li class="tdhorizontalsmall"><a class="non-selected" href="simple_search.html">Αναζήτηση</a></li>
					<li class="tdhorizontalbig" onmouseover="OnMouseOver(event)" onmouseout="OnMouseOut(event)"><a class="non-selected" >Ομάδες Χρηστών & Υπηρεσίες</a>
						<table id="submenu">
							<tr>
								<td class="submenu1" onmouseover="OnMouseOverSub1(event)" onmouseout="OnMouseOutSub1(event)"><a style="text-decoration:none"  href="cookie.php"> <span class="sub_non-selected">Φοιτητές</span></a>
									<table id="sub_submenu1">
										<tr>
											<td class="sub_submenu" onmouseover="OnMouseOverSub(event)" onmouseout="OnMouseOutSub(event)"><a style="text-decoration:none"  href="cookie.php"> <span class="sub_non-selected">Ανταλλαγή Συγγραμμάτων</span></a></td>
										</tr>
										<tr>			
											<td class="sub_submenu" onmouseover="OnMouseOverSub(event)" onmouseout="OnMouseOutSub(event)" style="border-bottom:0px"><a style="text-decoration:none" href="cookie.php"> <span class="sub_non-selected" > Δανεισμός Συγγραμμάτων<span></a></td>
										</tr>
									</table>
								</td>
								<td class="submenu1" onmouseover="OnMouseOverSub2(event)" onmouseout="OnMouseOutSub2(event)"><a style="text-decoration:none" href="cookie.php"> <span class="sub_non-selected" > Γραμματεία<span></a>
									<table id="sub_submenu2">
										<tr>
											<td class="sub_submenu" onmouseover="OnMouseOverSub(event)" onmouseout="OnMouseOutSub(event)"><a style="text-decoration:none"  href="cookie.php"> <span class="sub_non-selected">Επεξεργασία Προγρ/τος Σπουδών</span></a></td>
										</tr>
										<tr>			
											<td class="sub_submenu" onmouseover="OnMouseOverSub(event)" onmouseout="OnMouseOutSub(event)" style="border-bottom:0px"><a style="text-decoration:none" href="cookie.php"> <span class="sub_non-selected" > Διαχείριση Προτεινόμενων Συγγραμμάτων<span></a></td>
										</tr>
									</table>
								</td>
								<td class="submenu1" onmouseover="OnMouseOverSub3(event)" onmouseout="OnMouseOutSub3(event)"><a style=" text-decoration:none" href="cookie.php"> <span class="sub_non-selected" >Εκδότες</span></a>
									<table id="sub_submenu3">
										<tr>
											<td class="sub_submenu" onmouseover="OnMouseOverSub(event)" onmouseout="OnMouseOutSub(event)" style="border-bottom:0px"><a style="text-decoration:none"  href="cookie.php"> <span class="sub_non-selected">Προσθήκη Συγγράμματος</span></a></td>
										</tr>
									</table>
								</td>
								<td class="submenu1" onmouseover="OnMouseOverSub4(event)" onmouseout="OnMouseOutSub4(event)"><a style="text-decoration:none"  href="cookie.php"> <span class="sub_non-selected">Σημεία Διανομής</span></a>
									<table id="sub_submenu4">
										<tr>			
											<td class="sub_submenu" onmouseover="OnMouseOverSub(event)" onmouseout="OnMouseOutSub(event)" style="border-bottom:0px"><a style="text-decoration:none" href="cookie.php"> <span class="sub_non-selected" > Παράδοση Συγγραμμάτων<span></a></td>
										</tr>
									</table>
								</td>
								<td class="submenu1" onmouseover="OnMouseOverSub5(event)" onmouseout="OnMouseOutSub5(event)"style="border-right:0px" ><a style="text-decoration:none"  href="cookie.php"> <span class="sub_non-selected">Διαθέτες Δωρεάν Υποστηρικτικού Υλικού</span></a>
									<table id="sub_submenu5">
										<tr>
											<td class="sub_submenu" onmouseover="OnMouseOverSub(event)" onmouseout="OnMouseOutSub(event)" style="border-bottom:0px"><a style="text-decoration:none"  href="cookie.php"> <span class="sub_non-selected">Μεταφόρτωση Υλικού</span></a></td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</li>
				<!/tr>
			</ul>
			
			<div class="search_field">
				<form method="post" action="simple_search_results.php">	
					<input type="text" onmouseout="OutOfSearch(event)" onclick="OnClick(event)" name="Keyword" value="Search..."/><img src="pictures/search.jpg" alt="Search"></a>
				</form>
			</div>
			
			<table id="menuvertical" border="1">
				<tr>
				  <td><a class="cell" href="news_announcements.html">Nέα-Ενημερώσεις</a></td>
				</tr>
				<tr>
				  <td><a class="cell" href="whatever.htm">Προγ/ματα Σπουδών</a></td>
				</tr>
				<tr>
				  <td><a class="cell" href="whatever.htm">Χρήσιμοι Σύνδεσμοι</a></td>
				</tr>
				<tr>
				  <td><a class="cell" href="help_page.html">Βοηθητική Σελίδα</a></td>
				</tr>
				<tr>
				  <td><a class="cell" href="whatever.htm">Επικοινωνία</a></td>
				</tr>
			</table>
			
			<div id = "navbar">
				<a href="index.html" style="text-decoration:none;">Αρχική</a> > <a href="register_page.html" style="text-decoration:none;">Εγγραφή</a> > Εγγραφή Φοιτητή
			</div>
			
			<div id="right">
				<span id="title">Εγγραφή Φοιτητή</span>
				<form method="post" action="try_register.php"> 
					<table id="registration_form">
						<tr>
						  <td>Όνομα <font color="orange">(*)</font></td><td><input type="text" name="Name"  onclick="OnClickField(event)"<?php if($nameFlag==0){?>style="color:red; font-style:italic;"<?php } ?> value="<?php echo $nameErr; ?>"></td>									<td>Ίδρυμα <font color="orange">(*)</font></td><td><input type="text" name="School"  onclick="OnClickField(event)"<?php if($schoolFlag==0){?>style="color:red; font-style:italic;"<?php } ?> value="<?php echo $schoolErr; ?>"></td>
						</tr>
						<tr onclick="OnClickField(event)">
						  <td>Επίθετο <font color="orange">(*)</font></td><td><input type="text" name="Surname"  onclick="OnClickField(event)"<?php if($surnameFlag==0){?>style="color:red; font-style:italic;"<?php } ?> value="<?php echo $surnameErr; ?>"></td>						<td>Τμήμα <font color="orange">(*)</font></td><td><input type="text" name="Department"  onclick="OnClickField(event)"<?php if($departmentFlag==0){?>style="color:red; font-style:italic;"<?php } ?> value="<?php echo $departmentErr; ?>"></td>
						</tr>
						<tr onclick="OnClickField(event)">
						  <td>Όνομα Χρήστη <font color="orange">(*)</font></a></td><td><input type="text" name="Username"  onclick="OnClickField(event)"<?php if($usernameFlag==0){?>style="color:red; font-style:italic;"<?php } ?> value="<?php echo $usernameErr; ?>"></td>			<td>Αριθμός Μητρώου <font color="orange">(*)</font></td><td><input type="text" name="Registration_No"  onclick="OnClickField(event)"<?php if($registry_noFlag==0){?>style="color:red; font-style:italic;"<?php } ?> value="<?php echo $registry_noErr; ?>"></td>
						</tr>
						<tr>
						  <td>Κωδικός <font color="orange">(*)</font></td><td><input onclick="OnClickPassword(event)"<?php if($passwordFlag==1){?>type="password"<?php }else {?> type="text" <?php } ?> name="Password" <?php if($passwordFlag==0){?>style="color:red; font-style:italic;"<?php } ?> value="<?php echo $passwordErr; ?>"></td>						<td>Ηλεκτρονικό Ταχυδρομείο <font color="orange">(*)</font></td><td><input type="text" name="Email" onclick="OnClickField(event)"<?php if($emailFlag==0){?>style="color:red; font-style:italic;"<?php } ?> value="<?php echo $emailErr; ?>"></td>
						</tr>
						<tr>
						  <td>Επαναλάβετε Κωδικό <font color="orange">(*)</font></td><td><input  onclick="OnClickPassword(event)"<?php if($repasswordFlag==1){?>type="password"<?php }else {?> type="text" <?php } ?> name="Re-Password" <?php if($repasswordFlag==0){?>style="color:red; font-style:italic;"<?php } ?> value="<?php echo $repasswordErr; ?>"></td>	<td>Τηλέφωνο</td><td><input type="<text" name="Phone"  onclick="OnClickField(event)"<?php if($phoneFlag==0){?>style="color:red; font-style:italic;"<?php } ?> value="<?php echo $phoneErr; ?>"></td>
						</tr>
					</table>
					<button id="submit_register" type="submit"> <font size="3">Εγγραφή </font></button>
					<span id="asterisc"> Όσα πεδία έχουν <font color="orange">(*)</font> δίπλα, είναι υποχρεωτικό να συμπληρωθούν. </span>
				</form>
			</div>
			
		</div>
		
		<div id="seperate"> <hr> </div>
		<div id="bottom">
			<a href="http://www.minedu.gov.gr/"><img id="ypourgeio" src="pictures/ypourgeio1.jpg" alt="Υπουργείο Παιδείας και Θρησκευμάτων" ></a>
			<a href="https://www.grnet.gr/"><img id="grnet" src="pictures/grnet2.png" alt="GR.net"></a>
			<a href="http://europa.eu/"><img id="eu" src="pictures/eu1.jpg" alt="Ευρωπαϊκό Τμήμα Περιφερειακής Ανάπτυξης"></a>
			<a href="http://www.digitalplan.gov.gr/portal/"><img id="digitalgreece" src="pictures/digitalgreece1.jpg" alt="Ψηφιακή Ελλάδα"></a>
			<a href="http://www.espa.gr/el/Pages/Default.aspx"><img id="espa" src="pictures/espa1.jpg" alt="ΕΣΠΑ 2007-2013"></br></br></br></a>
			<div id="credits"> <p style="text-align: center"> Με τη συγχρηματοδότηση της Ελλάδας & της Ευρωπαϊκής Ένωσης </p></div>
		</div>
	</body>
</html>