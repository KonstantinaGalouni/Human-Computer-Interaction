<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link type="text/css" href="css/styles_statement.css" rel="stylesheet">
		
		<script type="text/javascript">
			 var Blank = [''];
			 var Groups = new Array ('g1:Εθνικό και Καποδιστριακό Πανεπιστήμειο Αθηνών','g2:Εθνικό Μετσόβιο Πολυτεχνείο','g3:Οικονομικό Πανεπιστήμιο Αθηνών','g4:Πανεπιστήμιο Πειραιά');

			  var g1 = new Array(':Τμήμα Πληροφορικής και Τηλεπικοινωνιών',':Τμήμα Χημείας');
			  var g2 = new Array(':Σχολή Πολιτικών Μηχανικών',':Σχολή Μηχανολόγων Μηχανικών',':Σχολή Ηλεκτρολόγων Μηχανικών & Μηχανικών Υπολογιστών');  
			  var g3 = new Array(':Τμήμα Οικονομικής Επιστήμης',':Τμήμα Μάρκετινγκ και Επικοινωνίας',':Τμήμα Οργάνωσης και Διοίκησης Επιχειρήσεων',':Τμήμα Στατιστικής');
			  var g4 = new Array(':Οικονομικής Επιστήμης',':Διεθνών και Ευρωπαϊκών Σπουδών',':Χρηματοοικονομικής και Τραπεζικής Διοικητικής',':Ψηφιακών Συστημάτων');
					
			function ListSetUp(level) {
			  switch (level) {
			   case 'Groups' : Populate('LSBox0',Groups);   Populate('LSBox1', Blank); break;
				case 'g1': Populate('LSBox1', g1); break;
				case 'g2': Populate('LSBox1', g2); break;
				case 'g3': Populate('LSBox1', g3); break;
				case 'g4': Populate('LSBox1', g4); break;
				 default : alert('Invalid entry: '+level); break;  // should never ooccur
			  }
			}

			function Populate(IDS,Items){
			  var tmp = [];
			  var sel = document.getElementById(IDS);
			  sel.options.length=0;
			  sel.options[0]=new Option('Παρακαλώ επιλέξτε...','',true,true);
			  for (var i=0;i<Items.length;i++){
				if (Items[i]){
				  tmp = Items[i].split(':');
				  sel.options[sel.options.length]=new Option(tmp[1],tmp[0],true,true);
				}
			  }
			  sel.selectedIndex=0;
			}
			
			
			
		  function Exit() {
			 var x=confirm('Θέλετε να κλείσετε την Δήλωση Συγγραμμάτων;');
			 if(x) window.close();
		   }


		</script>
				
        <title>
		Δήλωση Συγγραμμάτων
        </title>
    </head>
    <body class="background_main" onload="ListSetUp('Groups')">
		<div id="upper">
			<a href="#" onClick="Exit();"><img id="logo" src="pictures/logo_eudoxus3.jpg" alt="Eudoxus Logo"></a>
			<img id="suggrammata" src="pictures/prwtoi_sta_suggrammata1.jpg" alt="Eudoxus Logo">
			<a href="cookie.php"><img id="printer" src="pictures/printer.png" alt="Print"></a>
			<a href="cookie.php"><img id="mail" src="pictures/mail2.png" alt="Mail"></a>
			<a href="cookie.php"><img id="faq" src="pictures/faq3.png" alt="FAQ"></a>
			<a href="cookie.php"><img id="greek" src="pictures/greece1.png" alt="Greek"></a>
			<a href="cookie.php"><img id="english" src="pictures/english.png" alt="English"></a>
		</div>
		<div id="page_main">
			<div class="up_page">
				<div id="background" class="up">
					<img style="width:100%;" src="pictures/books-background.jpg">
				</div>
			</div>
			
			<div class="down_page">
				<form method="get" name="selection" action="main_statement.php">
					<div class="fields">

						Ίδρυμα: <select id="LSBox0" name="select_1" onchange="ListSetUp(this.value)" class="down">
						</select>

						Σχολή:  <select id="LSBox1" name="select_2" onchange="ShowCurrentSelections()" class="down">
						</select>

					</div>
					
					<!--<a href="main_statement.php"></a>
						<!--<input style="margin-left: 34%; margin-top: 5%;" src="pictures/continue-icon.gif" class="button" type="image">-->
						<input onclick="javascript:void window.open('main_statement.php','1405756931496','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');" style="margin-left: 53%;margin-top: -4%;width: 6%;" src="pictures/button-next.png" class="button" type="image">
					
				</form>
				
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
				<a href="http://www.espa.gr/el/Pages/Default.aspx"><img id="espa" src="pictures/espa1.jpg" alt="ΕΣΠΑ 2007-2013"></br></br></br></br></a> 
				<div id="credits"> 
					<p style="text-align: center"> Με τη συγχρηματοδότηση της Ελλάδας & της Ευρωπαϊκής Ένωσης </p>
				</div> 
			</div>
	</body>
</html>