<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el">
<html>
	<head>
		<title>Εύδοξος: Προφίλ</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/profile_page.css" />
		
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
			
			function OnLoadConnection(){
				alert("Η σύνδεσή σας έγινε με επιτυχία!");
			}
			
			function OnLoadRegister(){
				alert("Η εγγραφή σας ολοκληρώθηκε!");
			}
			
			function OnLoadEdit(){
				alert("Δε δώσατε σωστά στοιχεία για τροποποίση στοιχείων! Ελέγξτε αν χρησιμοποιείτε στα: όνομα, επώνυμο μόνο γράμματα, στο τηλέφωνο μόνο νούμερα, αν οι κωδικοί ταυτίζονται και αν έχετε συμπληρώσει όλα τα πεδία εκτός του τηλεφώνου.");
			}			
			
			function OnClickChange(event){
				document.getElementById("popup").style.display = "table";
				document.getElementById("popup").style.opacity = "1";
				document.getElementById("main").style.opacity="0.2";
			}
			
		</script>
		
	</head>
	
	
	<body>
		<div id="upper">
			<a href="index_connected.php"><img id="logo" src="pictures/logo_eudoxus3.jpg" alt="Eudoxus Logo"></a>
			<img id="suggrammata" src="pictures/prwtoi_sta_suggrammata1.jpg" alt="Eudoxus Logo">
			<a href="cookie.php"><img id="printer" src="pictures/printer.png" alt="Print"></a>
			<a href="cookie.php"><img id="mail" src="pictures/mail2.png" alt="Mail"></a>
			<a href="cookie.php"><img id="faq" src="pictures/faq3.png" alt="FAQ"></a>
			<a href="cookie.php"><img id="greek" src="pictures/greece1.png" alt="Greek"></a>
			<a href="cookie.php"><img id="english" src="pictures/english.png" alt="English"></a>
			<div id="info">
				<div id="welcome">
					Καλωσήρθες</br>
					<font color="blue"><b>
						<?php
							session_start();
							$from = $_SESSION['from'];
							if( $from == "connection")
							{
								echo'<script type="text/javascript">OnLoadConnection();</script>';
							}
							else if( $from == "register")
							{
								echo'<script type="text/javascript">OnLoadRegister();</script>';
							}
							else if( $from == "wrong_edit")
							{
								echo'<script type="text/javascript">OnLoadEdit();</script>';
							}
							$_SESSION['from']="nothing";
							$name=$_SESSION['name'];
							$surname=$_SESSION['surname'];
							$username=$_SESSION['username'];
							$password=$_SESSION['password'];
							$phone=$_SESSION['phone'];
							$email=$_SESSION['email'];
							$school=$_SESSION['school'];
							$department=$_SESSION['department'];
							$semester=$_SESSION['semester'];
							$credit_points=$_SESSION['credit_points'];
							echo $name;
						?>
					</br>
					<?php
						echo $surname;
					?>
					</b></font>
					</br>
					(<?php
						$type=$_SESSION['type'];
						echo $type;
					?>)
				</div>
			</div>
			</br>
			<form action="index.html">
				<div align="right"> <button id="submit2" type="submit" align="center"> <font size="4">Αποσύνδεση <b>></b></font></button> </div>
			</form>
		</div>
		
		<div id="main">
			
			<ul id="menuhorizontal">
				<!tr>
					<li class="tdhorizontalsmall"><a class="non-selected" href="index_connected.php">Αρχική</a></li>
					<li class="tdhorizontalsmall"><a class="non-selected" onclick="javascript:void window.open('start_statement.php','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');">Δήλωση</a></li>
					<li class="tdhorizontalsmall"><a class="non-selected" href="simple_search_connected.php">Αναζήτηση</a></li>
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
				<form method="post" action="simple_search_results_connected.php">	
					<input type="text" onmouseout="OutOfSearch(event)" onclick="OnClick(event)" name="Keyword" value="Search..."/><img src="pictures/search.jpg" alt="Search"></a>
				</form>
			</div>
			
			<form action="profile_page.php">
				<button id="profile_button" type="submit"> Προφιλ </button>
			</form>
			
			<table id="menuvertical" border="1">
				<tr>
				  <td><a class="cell" href="news_announcements_connected.php">Nέα-Ενημερώσεις</a></td>
				</tr>
				<tr>
				  <td><a class="cell" href="whatever.htm">Προγ/ματα Σπουδών</a></td>
				</tr>
				<tr>
				  <td><a class="cell" href="whatever.htm">Χρήσιμοι Σύνδεσμοι</a></td>
				</tr>
				<tr>
				  <td><a class="cell" href="whatever.htm">Ενημερωτικό Υλικό</a></td>
				</tr>
				<tr>
				  <td><a class="cell" href="whatever.htm">Οδηγίες Χρήσης</a></td>
				</tr>
				<tr>
				  <td><a class="cell" href="whatever.htm">Επικοινωνία</a></td>
				</tr>
			</table>
			
			<div id = "navbar">
				<a href="index_connected.php" style="text-decoration:none;">Αρχική</a> > Προφίλ
			</div>

			<div id="right">
				<span id="title">Προφίλ Χρήστη</span>
				
					<table id="details">
						<tr>
						  <td><span class="attributes">Όνομα: </span></td>			<td><?php echo $name ?></td>		<td><span class="attributes">Σχολή:</span></td>		<td><?php echo $school ?></td>																	
						</tr>
						<tr>
						  <td><span class="attributes">Επίθετο: </span></td>			<td><?php echo $surname ?></td>		<td><span class="attributes">Τμήμα:</span></td>		<td><?php echo $department ?></td>																																	
						</tr>
						<tr>
						  <td><span class="attributes">Όνομα Χρήστη:</span></td>		<td><?php echo $username ?></td>		<td><span class="attributes">Εξάμηνο:</span></td>					<td><?php echo $semester ?></td>
						</tr>
						<tr>
						  <td><span class="attributes">Κωδικός:</span></td>			<td>******</td>			<td><span class="attributes">Ηλεκτρονικό Ταχυδρομείο:</span></td>			<td><?php echo $email ?></td>
						</tr>
						<tr>
						  <td><span class="attributes">Πιστωτικές Μονάδες:</span></td>		<td><?php echo $credit_points ?></td>			<td><span class="attributes">Τηλέφωνο:</span></td>		<td><?php echo $phone ?></td>
						</tr>
					</table>
					<button onclick="OnClickChange(event)" id="edit" type="submit"> <font size="3">Επεξεργασία Στοιχείων </font></button>
				
				<form action="cookie.php">
					<button id="declaration" type="submit"> Τροποποίηση/Επισκόπηση Δήλωσης </button>
				</form>
				
			</div>
		
		</div>
		
		<table id="popup" style="display:none">
			<tr><td>
				<form id="popup_form" method="post" action="try_change.php">
					<table id="in_popup1">
						<tr>
							<td align="right">Όνομα:</td><td><input type="text" name="change_name" value=<?php echo $name ?>></td>
							<td align="right">Κωδικός:</td><td><input type="password" name="change_password" value=<?php echo $password ?>></td>
							<td align="right">Ηλεκτρονικό Ταχυδρομείο:</td><td><input type="text" name="change_email" value=<?php echo $email ?>></td>
						</tr><tr>
							<td align="right">Επίθετο:</td><td><input type="text" name="change_surname" value=<?php echo $surname ?>></td>
							<td align="right">Επιβεβαίωση Κωδικού:</td><td><input type="password" name="change_conf_password" value=<?php echo $password ?>></td>
							<td align="right">Τηλέφωνο:</td><td><input type="text" name="change_phone" value=<?php echo $phone ?>></td>
							
						</tr>
						<tr>
							<td align="right">Όνομα Χρήστη:</td><td><input type="text" name="change_username" value=<?php echo $username ?>></td>
						</tr>
					</table>
					<div align="right"> <a href="profile_page.php"><button id="cancel" type="button" align="center"> <font size="4">ΑΚΥΡΩΣΗ <b></b></font></button> </a></div>
					<div align="right"> <button id="submit" type="submit" align="center"> <font size="4">OK <b></b></font></button> </div>
				</form>
			</td></tr>
		</table>
		
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