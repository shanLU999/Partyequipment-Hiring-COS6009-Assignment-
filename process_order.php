	<?php
		function sanitise_input($data){
			$data = trim($data);
			$data = stripslashes($data); 
			$data = htmlspecialchars($data);
			return $data;  
		}
	?>
	
	<?php
	
		session_start();
	
		$result=true;
		//first name
		if(isset($_POST["fname"])){
			$fname = sanitise_input($_POST["fname"]);
		}	
			else{
				header("location:enquiry.php"); // directly redirect to the home page.
			}
		
		//last name
		if(isset($_POST["lname"])){
			$lname = sanitise_input($_POST["lname"]);
		}
		
		if(isset($_POST["email"]))
			$eamil = sanitise_input($_POST["email"]);	
		
		if(isset($_POST["address"]))
			$address = sanitise_input($_POST["address"]);
		
		if(isset($_POST["subtwon"]))
			$subtwon = sanitise_input($_POST["subtwon"]);
		
		if(isset($_POST["state"]))
			$state = sanitise_input($_POST["state"]);
		
		if(isset($_POST["postcode"]))
			$postcode = sanitise_input($_POST["postcode"]);
		
		if(isset($_POST["equipment"])){
			$equipment = sanitise_input($_POST["equipment"]);
			$_SESSION["equipment"]=$equipment;
		}
		
		if ($equipment == "ballon") {
			$price = 60;
		
		}
		if ($equipment == "tableChairs") {
			$price = 35;
		
		}
		if ($equipment == "cateringEquipment") {
			$price = 45;
		
		}
		if ($equipment == "lighting") {
			$price = 50;
		
		}
		if ($equipment == "soundEquipment") {
			$price = 70;
		
		}
		if ($equipment == "stagingCatwalk") {
			$price = 170;
			
		}
	

		if(isset($_POST["qty"])) {
			$qty = sanitise_input($_POST["qty"]);
			$_SESSION["qty"]=$qty;
		} else{$result=false;}
		
		
		
		$cost = $price * $qty;
		$_SESSION["cost"]=$cost;
		
		
		
		if(isset($_POST["contactMethod"])){
			$contactMethod = sanitise_input($_POST["contactMethod"]);
			$_SESSION["contactMethod"]=$contactMethod;
		}
		if(isset($_POST["feture"])){
			$feture = sanitise_input($_POST["feture"]);
			$_SESSION["feture"]=$feture;
		}

		if(isset($_POST["cost"]))
			$cost = sanitise_input($_POST["cost"]);
		
		if(isset($_POST["qty"]))
			$qty = sanitise_input($_POST["qty"]);
		
		if(isset($_POST["cardType"])){
			$cardType = sanitise_input($_POST["cardType"]);
			$_SESSION["cardType"]=$cardType;
		}
		
		if(isset($_POST["nameOnCard"]))
			$nameOnCard = sanitise_input($_POST["nameOnCard"]);
		
		if(isset($_POST["cardNumber"]))
			$cardNumber = sanitise_input($_POST["cardNumber"]);
		
		if(isset($_POST["expiry"]))
			$expiry = sanitise_input($_POST["expiry"]);
		
		if(isset($_POST["verification"]))
			$verification = sanitise_input($_POST["verification"]);

		
		
		
		///////////// use preg_match to senitize all input data /////
		
		$errMsg="";
		
		//test for first name
		if($fname=""){
			$errMsg = $errMsg . "<p>You must enter your first name.</p>";
			$_SESSION["fname"]="";
			$result=false;
			
		}
			else if(!preg_match("/^[a-zA-A]+$/",$fname)){
				$errMsg = $errMsg . "<p> Only alpha letters allowed in your first name.</p>";
				$_SESSION["fname"]="";
				$result=false;
			}
			else if(strlen($fname) > 25) {
				$errMsg = $errMsg . "<p> Your first name should be no more than 25 characters.</p>";
				$_SESSION["fname"]="";
				$result=false;
			}
			else {
				$_SESSION["fname"]=$fname;
			}
		
		
		// test for last name
		if($lname==""){
			$errMsg = $errMsg . "<p>You must enter your last name.</p>";
			$_SESSION["lname"]="";
			$result=false;
		}
			else if(!preg_match("/^[a-zA-A]+$/",$lname)){
				$errMsg = $errMsg . "<p> Only alpha letters allowed in your last name.</p>";
				$_SESSION["lname"]="";
				$result=false;
			}
			else if(strlen($lname) > 25) {
				$errMsg = $errMsg . "<p> Your last name should be no more than 25 characters.</p>";
				$_SESSION["lname"]="";
				$result=false;
			}
			else {
				$_SESSION["lname"]=$lname;
			}
		
		
		if($email==""){
			$errMsg = $errMsg . "<p>You must enter your last name.</p>";
			$_SESSION["email"]="";
			$result=false;
		}
			else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errMsg = $errMsg . "<p> Only alpha letters allowed in your last name.</p>";
				$_SESSION["email"]="";
				$result=false;
			}
			else{
				$_SESSION["email"]=$email;
			}
		
		
		if($address==""){
			$errMsg = $errMsg . "<p>You must enter your street adtress.</p>";
			$_SESSION["address"]="";
			$result=false;
		}
			else if(strlen($address) > 40) {
				$errMsg = $errMsg . "<p> Your street address should be no more than 40 characters.</p>";
				$_SESSION["address"]=="";
				$result=false;
			}
			else {
				$_SESSION["address"]=$address;	
			}
		
		
		
		if($subtwon==""){
			$errMsg = $errMsg . "<p>You must enter your subtwon.</p>";
			$_SESSION["subtwon"]="";
			$result=false;
		}
			else if(strlen($subtwon) > 20) {
				$errMsg = $errMsg . "<p> Your subtwon should be no more than 20 characters.</p>";
				$_SESSION["subtwon"]="";
				$result=false;
			}
			else {
				$_SESSION["subtwon"]=$subtwon;
			}
		
		
		if($state==""){
			$errMsg = $errMsg . "<p>You must select your state.</p>";
			$_SESSION["state"]="";
			$result=false;
		}
			else {
				$_SESSION["state"]=$state;
			}
		
		
		
		if($postcode==""){
			$errMsg = $errMsg . "<p>You must enter your last name.</p>";
			$_SESSION["postcode"]="";
			$result=false;
		}
			else if (!(is_numeric($postcode))){
				$errMsg = $errMsg . "<p> Postcode should be  4 digits number.</p>";
				$_SESSION["postcode"]="";
				$result=false;
			}
		
			else if(!(strlen($postcode) == 4)){
				$errMsg = $errMsg . "<p> Postcode should be exactly 4 digits.</p>";
				$_SESSION["postcode"]="";
				$result=false;
			}
			else {
				$_SESSION["postcode"]=$postcode;
			}
		
		
		
		if($phone==""){
			$errMsg = $errMsg . "<p>You must enter your phone number.</p>";
			$_SESSION["phone"]="";
			$result=false;
		}
			else if(strlen($phone) > 10){
				$errMsg = $errMsg . "<p> Phone number should be less than 10 digits.</p>";
				$_SESSION["phone"]="";
			}
			else {
				$_SESSION["phone"]=$phone;
			}
		
		
		if($nameOnCard==""){
			$errMsg = $errMsg . "<p>You must enter your name on card.</p>";
			$result=false;
		}
			else if(!preg_match("/^[a-zA-A]+$/",$nameOnCard)){
				$errMsg = $errMsg . "<p> Only alpha letters allowed in the name on card.</p>";
				$result=false;
			}
			
			else if(strlen($nameOnCard) > 40) {
				$errMsg = $errMsg . "<p> Name on card should be less than 40 characters.</p>";
				$result=false;
			}
			else {
				$_SESSION["nameOnCard"]=$nameOnCard;
			}
		

		
		if($cardNumber==""){
			$errMsg = $errMsg . "<p>You must enter your card number.</p>";
			$result=false;
		}
			else if( strlen($cardNumber) > 16){
				$errMsg = $errMsg . "<p> Your number can only have 15 digits or 16 digits.</p>";
				$result=false;
			}
			else if( strlen($cardNumber) < 15){
				$errMsg = $errMsg . "<p> Your number can only have 15 digits or 16 digits.</p>";
				$result=false;
			}
			else {
				$_SESSION["cardNumber"]=$cardNumber;
			}
		
		if($expiry==""){
			$errMsg = $errMsg . "<p>You must enter expiry date.</p>";
			$result=false;
		}else {
				$_SESSION["expiry"]=$expiry;
			}
		
		
		if($verification==""){
			$errMsg = $errMsg . "<p>You must enter your card verification.</p>";
			$result=false;
		}else {
				$_SESSION["verification"]=$verification;
			}
		
		
		
		
		
		// transfer page
		if(!result){
			$_SESSION["error"]=$errMsg;
			header("location:fix_order.php");
		}
		
			else{
				
				require_once("settings.php");

				$conn = @mysqli_connect(
					$host,
					$user,
					$pwd,
					$sql_db
				);

				if (!$conn) {
					echo "<p> Database connection error</p>";

				} else {
					
					$sql_table = "orders";
					$query = "insert into $sql_table (fname,lname,email,address,subtwon,state,postcode,
						phone,equipment,qty,contactMethod,feture,order_cost,cardType,nameOnCard,cardNumber,expiry,verification) 
						values ('$fname','$lname','$email','$address','$subtwon','$state','$postcode',
						'$phone','$equipment','$qty','$contactMethod','$feture','$order_cost','$cardType',
						'$nameOnCard','$cardNumber','$expiry','$verification')";
					$result = mysqli_query($conn, $query);
					
					
					$result = mysql_query($conn,"SELECT * FROM orders ORDER BY order_id DESC LIMIT 1");
					while($row = mysql_fetch_array($result)) {
						$order_id = $row["order_id'"]; 
					}
		
					$_SESSION["order_id"] = $order_id;					
					mysqli_close($conn);
					
					
					header("location:receipt.php");
				}


				
			
			}	
		
		mysqli_close($conn);
	?>