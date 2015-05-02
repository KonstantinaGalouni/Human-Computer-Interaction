<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="el" lang="el">
<html>
	<head>
		<title>Εύδοξος: Αποτελέσματα Αναζήτησης</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/search_results_connected.css" />
		
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
			}
			
			function OnMouseOutSub4(event){
				document.getElementById("sub_submenu4").style.display = "none";
			}
		
			function OnMouseOverSub4(event){
				document.getElementById("sub_submenu4").style.display = "block";
			}
			
			function OnMouseOutSub5(event){
				document.getElementById("sub_submenu5").style.display = "none";
			}
		
			function OnMouseOverSub5(event){
				document.getElementById("sub_submenu5").style.display = "block";
			}
		
			function OnClick (event) {
				event.target.value = "";
				event.target.style.color = "black";
			}

			function OnClickHelp(event) {
				alert("Πληκτρολογήστε στο κουτί αναζήτησης μία λέξη-κλειδί σχετικά με αυτό το οποίο αναζητείτε\nΣτη συνέχεια πιέστε το Enter, ή το κουμπί Search δεξιά του κουτιού\nΓια ακριβέστερη αναζήτηση μεταβείτε στη Σύνθετη Αναζήτηση, πατώντας το κουμπί αριστερά");
			}
			
			function OnClickOption(event) {
				document.body.style.cursor = "progress";
				document.getElementById("loading").style.display = "inline";
			}
			
			function GetChar(event) {
				var key = event.charCode ? event.charCode : event.keyCode ? event.keyCode : 0;
				if(key == 13)
				{
					OnClickOption(event);
				}
			}
		</script>
		
	</head>
	
	
	<body onkeypress="GetChar (event);">
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
							$name=$_SESSION['name'];
							echo $name;
						?>
					</br>
					<?php
						$surname=$_SESSION['surname'];
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
					<li class="tdhorizontalsmall"><a class="selected" href="simple_search_connected.php">Αναζήτηση</a></li>
					<li class="tdhorizontalbig" onmouseover="OnMouseOver(event)" onmouseout="OnMouseOut(event)"><a class="non-selected" >Ομάδες Χρηστών </a>
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
											<td class="sub_submenu" onmouseover="OnMouseOverSub(event)" onmouseout="OnMouseOutSub(event)" style="border-bottom:0px"><a style="text-decoration:none" href="cookie.php"> <span class="sub_non-selected" > Προσθήκη Προτεινόμενου Συγγράμματος<span></a></td>
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
			
			<div id = "navbar">
				<a href="index_connected.php" style="text-decoration:none;">Αρχική</a> > <a href="simple_search_connected.php" style="text-decoration:none;">Απλή Αναζήτηση</a> > Αποτελέσματα Αναζήτησης
			</div>
			
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
				  <td><a class="cell" href="help_page_connected.php">Βοηθητική Σελίδα</a></td>
				</tr>
				<tr>
				  <td><a class="cell" href="whatever.htm">Επικοινωνία</a></td>
				</tr>
			</table>
		
			<div id="right">
				<img id="loading" src="pictures/loading.gif" alt="Loading">
			
				<div class="search_field2">
					<form method="post" action="simple_search_results_connected.php">	
						<input type="text" name="Keyword" value="Search..." onclick="OnClick(event)"/><a onclick="OnClickOption(event)"><img id="search_wrd" src="pictures/search1.png"alt="Search"><img id = "search_img" src="pictures/search2.png" alt="Search"></a>
					</form>
				</div>
				<button onclick="OnClickHelp(event)" id="help" type="button">?	Βοήθεια</button>
				<a href="advanced_search_connected.php"><button id="alternate_search" type=button> Σύνθετη Αναζήτηση</button></a>
				<div id="classification">
					Ταξινόμηση σύμφωνα με:
					<select name="Τύπος" >
						<option onclick="OnClickOption(event)" value="none">Καμμία(Προεπιλ.)</option>
						<option onclick="OnClickOption(event)" value="year">Έτος έκδοσης</option>
						<option onclick="OnClickOption(event)" value="writer">Συγγραφέα</option>
						<option onclick="OnClickOption(event)" value="price">Τιμή</option>
					</select>
				</div>
				
				<table id="all">
					<?php
							$link = mysqli_connect("sql3.freemysqlhosting.net", "sql347263","hG4!lQ9%", "sql347263");
							if (!$link) {
								printf("Connect failed: %s\n", mysqli_connect_error());
								exit();
							}
							$keyword=$_POST['Keyword'];
							$query="SELECT * FROM books WHERE title LIKE '%$keyword%'";
							$result = mysqli_query($link, $query);
							$rows = mysqli_num_rows($result);
							while ($rows>0){
						?>
					<tr>
						<td>
					
							<table><tr><td> <img src="<?php $obj=mysqli_fetch_object($result); echo $obj->picture; ?>" alt="Book"> </td>
							
							<td>
							
								<table class="inside_table" id="t1">
									<tr>
										<td>ΤΙΤΛΟΣ:</td>
										<td class="not_solid"><?php echo $obj->title; $rows=$rows-1;?></td>
										<td>ΣΥΓΓΡΑΦΕΙΣ:</td>
										<td><?php echo $obj->author; ?></td>
									</tr>
									<tr>
										<td>ΕΚΔΟΣΗ:</td>
										<td class="not_solid"><?php echo $obj->publish_no; ?>/<?php echo $obj->year; ?></td>
										<td>ΔΙΑΘΕΤΗΣ:</td>
										<td><?php echo $obj->distribute; ?></td>
									</tr>
									<tr>
										<td>ISBN:</td>
										<td class="not_solid"><?php echo $obj->ISBN; ?></td>
										<td>ΤΥΠΟΣ:</td>
										<td><?php echo $obj->type; ?></td>
									</tr>
									<tr>
										<td>ΚΩΔΙΚΟΣ ΣΤΟΝ ΕΥΔΟΞΟ:</td>
										<td class="not_solid"><?php echo $obj->code; ?></td>
										<td>ΤΜΗΜΑ ΠΟΥ ΔΙΑΤΙΘΕΤΑΙ</td>
										<td><?php echo $obj->school; ?></td>
									</tr>
								</table>
					
							</td></tr></table>
						</td>
					</tr>
					
					<?php } mysqli_close($link);?>
										
					<tr id="page_line">
						<td>
							<a href="cookie.php"><img src="pictures/previouspage.png"alt="Previous"></a>
							<a id="num" href="search_results.php">1 </a>
							<a href="cookie.php"><img src="pictures/nextpage.png"alt="Next"></a>
						</td>
					</tr>
				</table>
				
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
