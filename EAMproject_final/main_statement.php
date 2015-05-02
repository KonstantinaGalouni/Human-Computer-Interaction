<?php
include ("./db-api/txt-db-api.php");

//create  a Database object
$db = new Database("booksDB"); 
/*
//run a query
$rs=$db->executeQuery("SELECT ID, Name,Year, Mathima FROM user;");

//get all rows
while($rs->next())
{
	//read next line
	list($id,$name,$year,$mathima)=$rs->getCurrentValues();
	
	//do whatever you wish...
	echo "$id. $name etous: $year me onoma: $mathima<br/>";
} */
?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <link type="text/css" href="css/styles.css" rel="stylesheet">
	<script language="javascript"> 
	function toggle(id_bucket) {
		var hideCart = document.getElementById("check_out_cart");
		hideCart.style.display = "none";
		
		var ele = document.getElementById(id_bucket);
		if(ele.style.display == "block") {
				ele.style.display = "none";
		}
		else {
			ele.style.display = "block";
		}
	} 
	
	function toggle_mathimata(id_bucket) {
		
		var hideMain = document.getElementById("theoria_upologismou");
		hideMain.style.display = "none";
		var showCart = document.getElementById(id_bucket);
		showCart.style.display = "inline";
	} 
	
	
	function confirmCheck_out(){
		var r = confirm("Θέλετε να ολοκληρωθεί η τρέχουσα Δήλωση?");
		if (r == true) {
			document.location.href = "success.php";
		}
		else
		{
			return false;
		}
		
	}
	
	function toggle_delete(id) {
		var ele = document.getElementById(id);
		
		ele.style.display = 'none';
	}
	
	function refresh() {
		location.reload();
	}
	
	function Exit() {
			 var x=confirm('Θέλετε να κλείσετε την Δήλωση Συγγραμμάτων;');
			 if(x) window.close();
		   }
	</script>
    
	
	
</head>
<body class="background_main">  
	<?php 
		$idrima=$_GET["select_1"];
		$sxoli=$_GET["select_2"];
	?>
	<div id="upper">
			<a href="#" onClick="Exit();"><img id="logo" src="pictures/logo_eudoxus3.jpg" alt="Eudoxus Logo"></a>
			<img id="suggrammata" src="pictures/prwtoi_sta_suggrammata1.jpg" alt="Eudoxus Logo">
			<a href="cookie.php"><img id="printer" src="pictures/printer.png" alt="Print"></a>
			<a href="cookie.php"><img id="mail" src="pictures/mail2.png" alt="Mail"></a>
			<a href="cookie.php"><img id="faq" src="pictures/faq3.png" alt="FAQ"></a>
			<a href="cookie.php"><img id="greek" src="pictures/greece1.png" alt="Greek"></a>
			<a href="cookie.php"><img id="english" src="pictures/english.png" alt="English"></a>
		</div>
		
	<div id="seperate2"> 
				<hr> 
			</div> 
	<div id="page_main">
		
		<div class="views" id="views">
				<div style="left: 350px; bottom: 74px;" id="page_center" class="booksBackground">
					
					<!--- Theoria Upologismou -->
					<div id="theoria_upologismou" class="main_panel" style="display: none; height: inherit; top: 23px;">
						<form id="hide" >
							<div id="note_1" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="theoria_upologismou_1">Εισαγωγή στη θεωρία υπολογισμού<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: SIPSER MICHAEL
										</div>
										<div class="specs">
											Εκδόσεις: ΙΤΕ-ΠΑΝΕΠΙΣΤΗΜΙΑΚΕΣ ΕΚΔΟΣΕΙΣ ΚΡΗΤΗΣ
										</div>
										<div class="specs">
											ISBN: 978-960-524-243-5
										</div>
									</div>
								</div>			
							</div>
							
							<div id="note_2" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="theoria_upologismou_1">Στοιχεία θεωρίας υπολογισμού<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: Lewis Harry R.,Παπαδημητρίου Χρίστος Χ.
										</div>
										<div class="specs">
											Εκδόσεις: ΕΚΔΟΣΕΙΣ ΚΡΙΤΙΚΗ ΑΕ
										</div>
										<div class="specs">
											ISBN: 978-960-218-397-7
										</div>
									</div>
								</div>			
							</div>
							
						</form>
				  	</div>
					
					<!--- Eisagogi ston programmatismo -->
					<div id="programmatismos" class="main_panel" style="display: none; height: inherit; top: 23px;">
						<form id="hide" >
							<div id="note_1" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="programmatismos_1">Η γλώσσα προγραμματισμού C<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: BRIAN W. KERNIGHAN, DENNIS M. RITCHIE
										</div>
										<div class="specs">
											Εκδόσεις: ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ ΕΠΕ
										</div>
										<div class="specs">
											ISBN: 978-960-461-132-4
										</div>
									</div>
								</div>			
							</div>
							
							<div id="note_2" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="programmatismos_1">Οδηγός της C<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: Schildt Herbert
										</div>
										<div class="specs">
											Εκδόσεις: Χ. ΓΚΙΟΥΡΔΑ & ΣΙΑ ΕΕ
										</div>
										<div class="specs">
											ISBN: 978-960-512-228-7
										</div>
									</div>
								</div>			
							</div>
							
							<div id="note_3" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="programmatismos_1">C: Aπό τη Θεωρία στην Εφαρμογή<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς:  Γ. Σ. Τσελίκης, Ν. Δ. Τσελίκας
										</div>
										<div class="specs">
											Εκδόσεις: ΝΙΚΟΛΑΟΣ ΤΣΕΛΙΚΑΣ
										</div>
										<div class="specs">
											ISBN: 978-960-93-1961-4
										</div>
									</div>
								</div>			
							</div>
							
						</form>
				  	</div>
					
					<!--- Grammiki Algeura -->
					<div id="grammiki_algeura" class="main_panel" style="display: none; height: inherit; top: 23px;">
						<form id="hide" >
							<div id="note_1" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="grammiki_algeura_1">Μια εισαγωγή στη γραμμική Άλγεβρα<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: ΒΑΡΣΟΣ ΔΗΜΗΤΡΗΣ, ΔΕΡΙΖΙΩΤΗΣ ΔΗΜΗΤΡΗΣ, ΕΜΜΑΝΟΥΗΛ ΓΙΑΝΝΗΣ, ΜΑΛΙΑΚΑΣ ΜΗΧΑΛΗΣ, ΜΕΛΑΣ ΑΝΤΩΝΗΣ, ΤΑΛΕΛΛΗ ΟΛΥΜΠΙΑ
										</div>
										<div class="specs">
											Εκδόσεις: "σοφία" Ανώνυμη Εκδοτική & Εμπορική Εταιρεία
										</div>
										<div class="specs">
											ISBN: 978-960-6706-36-3
										</div>
									</div>
								</div>			
							</div>
							
							<div id="note_2" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="grammiki_algeura_1">Γραμμική Άλγεβρα και Εφαρμογές<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: STRANG GILBERT
										</div>
										<div class="specs">
											Εκδόσεις: ΙΔΡΥΜΑ ΤΕΧΝΟΛΟΓΙΑΣ & ΕΡΕΥΝΑΣ-ΠΑΝΕΠΙΣΤΗΜΙΑΚΕΣ ΕΚΔΟΣΕΙΣ ΚΡΗΤΗΣ
										</div>
										<div class="specs">
											ISBN: 978-960-524-7309-70-9
										</div>
									</div>
								</div>			
							</div>
							
						</form>
				  	</div>
					
					<!--- Logiki Sxediasi --->
					<div id="logiki_sxediasi" class="main_panel" style="display: none; height: inherit; top: 23px;">
						<form id="hide" >
							<div id="note_1" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="logiki_sxediasi_1">Ψηφιακή Σχεδίαση<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: JOHN F. WAKERLY
										</div>
										<div class="specs">
											Εκδόσεις: ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ ΕΠΕ
										</div>
										<div class="specs">
											ISBN: 960-209-728-0
										</div>
									</div>
								</div>			
							</div>
						</form>
				  	</div>
					
					<!--- Diktia 1 --->
					<div id="diktia_1" class="main_panel" style="display: none; height: inherit; top: 23px;">
						<form id="hide" >
							<div id="note_1" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="diktia_1">Δικτύωση Υπολογιστών, 6η Έκδοση<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: J.F. Kurose, K.W. Ross
										</div>
										<div class="specs">
											Εκδόσεις:  Χ. ΓΚΙΟΥΡΔΑ & ΣΙΑ ΕΕ
										</div>
										<div class="specs">
											ISBN: 978-960-512-6575
										</div>
									</div>
								</div>			
							</div>
							
							<div id="note_2" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="diktia_1">Δίκτυα επικοινωνιών, ένα πρώτο μάθημα<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: JEAN WALRAND
										</div>
										<div class="specs">
											Εκδόσεις:  ΕΤΑΙΡΕΙΑ ΑΞΙΟΠΟΙΗΣΕΩΣ ΚΑΙ ΔΙΑΧΕΙΡΙΣΕΩΣ ΤΗΣ ΠΕΡΙΟΥΣΙΑΣ ΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ ΑΘΗΝΩΝ
										</div>
										<div class="specs">
											ISBN: 960-6608-15-8
										</div>
									</div>
								</div>			
							</div>
						</form>
				  	</div>
					
					<!--- Texniti noimosini --->
					<div id="texniti_noimosini" class="main_panel" style="display: none; height: inherit; top: 23px;">
						<form id="hide" >
							<div id="note_1" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="texniti_noimosini_1">Τεχνητή Νοημοσύνη<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: ΒΛΑΧΑΒΑΣ Ι.,ΚΕΦΑΛΑΣ Π.,ΒΑΣΙΛΕΙΑΔΗΣ Ν.,ΚΟΚΚΟΡΑΣ Φ.,ΣΑΚΕΛΛΑΡΙΟΥ Η.
										</div>
										<div class="specs">
											Εκδόσεις:  ΕΤΑΙΡΙΑ ΑΞΙΟΠΟΙΗΣΗΣ ΚΑΙ ΔΙΑΧΕΙΡΙΣΗΣ ΠΕΡΙΟΥΣΙΑΣ ΤΟΥ ΠΑΝΕΠΙΣΤΗΜΙΟΥ ΜΑΚΕΔΟΝΙΑΣ
										</div>
										<div class="specs">
											ISBN: 978-960-8396-64-7
										</div>
									</div>
								</div>			
							</div>
							
							<div id="note_2" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="texniti_noimosini_1">Τεχνητή Νοημοσύνη, μια σύγχρονη προσέγγιση<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: STUART RUSSELL, PETER NORVIG
										</div>
										<div class="specs">
											Εκδόσεις:  ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ ΕΠΕ
										</div>
										<div class="specs">
											ISBN: 960-209-873-2
										</div>
									</div>
								</div>			
							</div>
						</form>
				  	</div>
					
					<!--- Diktia 2 --->
					<div id="diktia_2" class="main_panel" style="display: none; height: inherit; top: 23px;">
						<form id="hide" >
							<div id="note_1" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="diktia_2">Δικτύωση Υπολογιστών, 6η Έκδοση<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: J.F. Kurose, K.W. Ross
										</div>
										<div class="specs">
											Εκδόσεις:  Χ. ΓΚΙΟΥΡΔΑ & ΣΙΑ ΕΕ
										</div>
										<div class="specs">
											ISBN: 978-960-512-6575
										</div>
									</div>
								</div>			
							</div>
							
							<div id="note_2" class="post_region_box">
								<div class="post_region_content note" id="view_quesiton_note">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
									</a>	
									<h2 class="post_region_title">
										<input type="radio" name="vivlio" value="diktia_2">Δίκτυα Υπολογιστών<br>
									</h2>
									
									<div class="post_region_text" id="questionText">
										<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
											<img type="image" class="book" src="pictures/book-icon.gif">
										</a>
										<div class="specs">
											Συγγραφείς: ANDREW S. TANENBAUM, DAVID J. WETHERALL
										</div>
										<div class="specs">
											Εκδόσεις: ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ ΕΠΕ
										</div>
										<div class="specs">
											ISBN: 978-960-461-447-9
										</div>
									</div>
								</div>			
							</div>
						</form>
				  	</div>
					
					
					<!--- Check out Cart --->
					<div id="check_out_cart" class="main_panel" style="display: none; height: inherit; top: 23px;">
						<div id="note_1" class="post_region_box">
							<div class="post_region_content note" id="view_quesiton_note">
								<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
								</a>	
								<h2 class="post_region_title">
									Εισαγωγή στη θεωρία υπολογισμού<br>
								</h2>
								
								<div class="post_region_text" id="questionText">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
										<img type="image" class="book" src="pictures/book-icon.gif">
									</a>
									<div class="specs">
										Συγγραφείς: SIPSER MICHAEL
									</div>
									<div class="specs">
										Εκδόσεις: ΙΤΕ-ΠΑΝΕΠΙΣΤΗΜΙΑΚΕΣ ΕΚΔΟΣΕΙΣ ΚΡΗΤΗΣ
									</div>
									<div class="specs">
										ISBN: 978-960-524-243-5
									</div>
								</div>
							</div>		
						</div>
						
						<div id="note_2" class="post_region_box">
							<div class="post_region_content note" id="view_quesiton_note">
								<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
								</a>	
								<h2 class="post_region_title">
									Ψηφιακή Σχεδίαση<br>
								</h2>
								
								<div class="post_region_text" id="questionText">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
										<img type="image" class="book" src="pictures/book-icon.gif">
									</a>
									<div class="specs">
										Συγγραφείς: JOHN F. WAKERLY
									</div>
									<div class="specs">
										Εκδόσεις: ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ ΕΠΕ
									</div>
									<div class="specs">
										ISBN: 960-209-728-0
									</div>
								</div>
							</div>		
						</div>
						
						<div id="note_3" class="post_region_box">
							<div class="post_region_content note" id="view_quesiton_note">
								<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
								</a>	
								<h2 class="post_region_title">
									Δίκτυα Υπολογιστών<br>
								</h2>
								
								<div class="post_region_text" id="questionText">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
										<img type="image" class="book" src="pictures/book-icon.gif">
									</a>
									<div class="specs">
										Συγγραφείς: ANDREW S. TANENBAUM, DAVID J. WETHERALL
									</div>
									<div class="specs">
										Εκδόσεις: ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ ΕΠΕ
									</div>
									<div class="specs">
										ISBN: 978-960-461-447-9
									</div>
								</div>
							</div>			
						</div>
							
						<div id="note_4" class="post_region_box">
							<div class="post_region_content note" id="view_quesiton_note">
								<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
								</a>	
								<h2 class="post_region_title">
									Τεχνητή Νοημοσύνη, μια σύγχρονη προσέγγιση<br>
								</h2>
								
								<div class="post_region_text" id="questionText">
									<a href="book_specs.html" onclick="javascript:void window.open('book_specs.html','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');return false;">
										<img type="image" class="book" src="pictures/book-icon.gif">
									</a>
									<div class="specs">
										Συγγραφείς: STUART RUSSELL, PETER NORVIG
									</div>
									<div class="specs">
										Εκδόσεις:  ΕΚΔΟΣΕΙΣ ΚΛΕΙΔΑΡΙΘΜΟΣ ΕΠΕ
									</div>
									<div class="specs">
										ISBN: 960-209-873-2
									</div>
								</div>
							</div>			
						</div>
				  	</div>
				</div>
				
				<!--- Choices --->
				<div id="choices" class="page_choices">
					<div style="top: 61px;" id="years" class="scrollable">	
						<div>
							<!--- group_1 --->	
							<div title="First Year" onclick="javascript:toggle('bucket_1');" id="group_1" class="bucket_header">
								<span>▾ 1o Έτος</span>
							</div>
							
							<?php
							//run a query
							$rs=$db->executeQuery("SELECT ID, Name,Year, Mathima FROM user WHERE Year='1';");

							echo "<ul style=\"display: none;\" id=\"bucket_1\">";
							
							//get all rows
							while($rs->next())
							{
								//read next line
								list($id,$name,$year,$mathima)=$rs->getCurrentValues();
								echo "<li class=\"list_item\" id=\"$id\" onclick=\"javascript:toggle('$name');\">";
									
									echo "<div class=\"content\">";
										echo "<div>";
											echo "<span class=\"title_text\" style=\"max-width: 235px;\">$mathima (έτος:$year)</span>";
										echo "</div>";
									echo"</div>";
								echo "</li>";
								
							}
							
							echo "</ul>";
							?>
							<!--- <div title="First Year" onclick="javascript:toggle('bucket_1');" id="group_1" class="bucket_header">
								<span>▾ First Year</span>
							</div>
							<ul style="display: none;" id="bucket_1">
								<li class="list_item" id="1" onclick="javascript:toggle_mathimata('theoria_upologismou');">
									
									<div class="content">
										<div>
											<span class="title_text" style="max-width: 235px;">Προγραμματισμός σε C</span>
										</div>
									</div>
								</li>
								
								<li class="list_item" id="2" onclick="P.feed.feedItemClick(event, this)">
									<div class="content">
										<div>
											<span class="title_text" style="max-width: 235px;">Διακριτά Μαθηματικά</span>
										</div>
									</div>
								</li>

							</ul>
							--->
							<!--- group_2 --->
							<div title="Second Year" onclick="javascript:toggle('bucket_2');" id="group_2" class="bucket_header">
								<span>▾ 2o Έτος</span>
							</div>
							<?php
							//run a query
							$rs=$db->executeQuery("SELECT ID, Name,Year, Mathima FROM user WHERE Year='2';");

							echo "<ul style=\"display: none;\" id=\"bucket_2\">";
							
							//get all rows
							while($rs->next())
							{
								//read next line
								list($id,$name,$year,$mathima)=$rs->getCurrentValues();
								echo "<li class=\"list_item\" id=\"$id\" onclick=\"javascript:toggle('$name');\">";
									
									echo "<div class=\"content\">";
										echo "<div>";
											echo "<span class=\"title_text\" style=\"max-width: 235px;\">$mathima (έτος:$year)</span>";
										echo "</div>";
									echo"</div>";
								echo "</li>";
								
							}
							
							echo "</ul>";
							?>
							
							<!--- group_3 --->
							<div title="Third Year" onclick="javascript:toggle('bucket_3');" id="group_3" class="bucket_header">
								<span>▾ 3o Έτος</span>
							</div>
							<?php
							//run a query
							$rs=$db->executeQuery("SELECT ID, Name,Year, Mathima FROM user WHERE Year='3';");

							echo "<ul style=\"display: none;\" id=\"bucket_3\">";
							
							//get all rows
							while($rs->next())
							{
								//read next line
								list($id,$name,$year,$mathima)=$rs->getCurrentValues();
								echo "<li class=\"list_item\" id=\"$id\" onclick=\"javascript:toggle('$name');\">";
									
									echo "<div class=\"content\">";
										echo "<div>";
											echo "<span class=\"title_text\" style=\"max-width: 235px;\">$mathima (έτος:$year)</span>";
										echo "</div>";
									echo"</div>";
								echo "</li>";
								
							}
							
							echo "</ul>";
							?>
							
							<!--- group_4 --->
							<div title="Fourth Year" onclick="javascript:toggle('bucket_4');" id="group_4" class="bucket_header">
								<span>▾ 4o Έτος</span>
							</div>
							<?php
							//run a query
							$rs=$db->executeQuery("SELECT ID, Name,Year, Mathima FROM user WHERE Year='4';");

							echo "<ul style=\"display: none;\" id=\"bucket_4\">";
							
							//get all rows
							while($rs->next())
							{
								//read next line
								list($id,$name,$year,$mathima)=$rs->getCurrentValues();
								echo "<li class=\"list_item\" id=\"$id\" onclick=\"javascript:toggle('$name');\">";
									
									echo "<div class=\"content\">";
										echo "<div>";
											echo "<span class=\"title_text\" style=\"max-width: 235px;\">$mathima (έτος:$year)</span>";
										echo "</div>";
									echo"</div>";
								echo "</li>";
								
							}
							
							echo "</ul>";
							?>
							
							<!--- group_5 --->
							<div title="Optional Cources" onclick="javascript:toggle('bucket_5');" id="group_5" class="bucket_header">
								<span>▾ Ελευθερα Μαθηματα</span>
							</div>
							<?php
							//run a query
							$rs=$db->executeQuery("SELECT ID, Name,Year, Mathima FROM user WHERE Year='5';");

							echo "<ul style=\"display: none;\" id=\"bucket_5\">";
							
							//get all rows
							while($rs->next())
							{
								list($id,$name,$year,$mathima)=$rs->getCurrentValues();
								echo "<li class=\"list_item\" id=\"$id\" onclick=\"javascript:toggle('$name');\">";
									
									echo "<div class=\"content\">";
										echo "<div>";
											echo "<span class=\"title_text\" style=\"max-width: 235px;\">$mathima (έτος:$year)</span>";
										echo "</div>";
									echo"</div>";
								echo "</li>";
								
							}
							echo "</ul>";
							?>
						</div>
					</div>
				
				</div>
				
				<!--- Cart --->
				<div id="cart" class="page_cart">
					<div style="top: 61px;" id="cart_books" class="scrollable">
						<div>
							<div title="Book Cart" onclick="javascript:toggle('cart_bucket');" id="cart_group" class="bucket_header">
								<span>▾ Επιλεγμένα Συγγράμματα</span>
							</div>
							<ul style="display: none;" id="cart_bucket">
								<li class="list_item" id="item_1" onclick="javascript:toggle_mathimata('check_out_cart');">
									<div class="content">
										<div>
											<span class="title_text">Θεωρία Υπολογισμού</span>
										</div>
										
										<div>
											<img class="delete_book" src="pictures/delete-icon.gif" onclick="javascript:toggle_delete('item_1');">
										</div>
									</div>
								</li>
								
								<li class="list_item" id="item_2" onclick="javascript:toggle_mathimata('check_out_cart');">
									<div class="content">
										<div>
											<span class="title_text">Λογική Σχεδίαση</span>
										</div>
										
										<div>
											<img class="delete_book" src="pictures/delete-icon.gif" onclick="javascript:toggle_delete('item_2');">
										</div>
									</div>
								</li>

							</ul>
							
						</div>
						
						<!--- Button to next step --->
						<div>
							<a href="#" onclick="javascript:confirmCheck_out();" >
								<img type="image" class="continue" src="pictures/continue-icon.gif">
							</a>
						</div>
					</div>
					
				</div>
		</div>
		
		<div id="seperate"> 
				<hr> 
			</div> 
			<div id="bottom"> 
				<a href="http://www.minedu.gov.gr/"><img id="ypourgeio" src="pictures/ypourgeio1.jpg" alt="Υπουργείο Παιδείας και Θρησκευμάτων" ></a> 
				<a href="https://www.grnet.gr/"><img id="grnet" src="pictures/grnet2.jpg" alt="GR.net"></a> 
				<a href="http://europa.eu/"><img id="eu" src="pictures/eu1.jpg" alt="Ευρωπαϊκό Τμήμα Περιφερειακής Ανάπτυξης"></a> 
				<a href="http://www.digitalplan.gov.gr/portal/"><img id="digitalgreece" src="pictures/digitalgreece1.jpg" alt="Ψηφιακή Ελλάδα"></a> 
				<a href="http://www.espa.gr/el/Pages/Default.aspx"><img id="espa" src="pictures/espa1.jpg" alt="ΕΣΠΑ 2007-2013"></br></br></br></a> 
				<div id="credits"> 
					<p style="text-align: center"> Με τη συγχρηματοδότηση της Ελλάδας & της Ευρωπαϊκής Ένωσης </p>
				</div> 
			</div>
	</div>

</body></html>