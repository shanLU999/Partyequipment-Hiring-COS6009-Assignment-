<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'header.inc';?>
	<title>Product Enquiry</title>
	  <!-- other meta stuff-->
	<link href= "style/productequiry.css" rel="stylesheet">
	<script src="scripts/part2.js"></script>
</head>

<body>
	<div class="gap">
		&nbsp;
	</div>

	<div class="gap">
		&nbsp;
	</div>
	
	
	
	<?php include 'menu.inc';?>

	<div class="gap">
		&nbsp;
	</div>


	
	<fieldset>
		<legend>Receipt:</legend>
		<p>Order_id : <?php echo $_SESSION["order_id"];?></p>
		
		<p>First Name : <?php echo $_SESSION["fname"];?></p>
		<p>Last Name : <?php echo $_SESSION["lname"];?></p>
		<p>Email : <?php echo $_SESSION["email"];?></p>
		<p>Address : <?php echo $_SESSION["address"];?></p>
		<p>Subtwon : <?php echo $_SESSION["subtwon"];?></p>
		<p>State : <?php echo $_SESSION["state"];?></p>
		<p>Postcode : <?php echo $_SESSION["postcode"];?></p>
		<p>phone : <?php echo $_SESSION["phone"];?></p>
		<p>Equipment : <?php echo $_SESSION["equipment"];?></p>
		<p>Qty : <?php echo $_SESSION["qty"];?></p>
		<p>Contact Method : <?php echo $_SESSION["contactMethod"];?></p>
		<p>Feture : <?php echo $_SESSION["feture"];?></p>
		<p>Cost : <?php echo $_SESSION["cost"];?></p>
		<p>Card Type : <?php echo $_SESSION["cardType"];?></p>
		<p>Name On Card : <?php echo $_SESSION["nameOnCard"];?></p>
		<p>Card Number : <?php echo $_SESSION["cardNumber"];?></p>
		<p>Expiry : <?php echo $_SESSION["expiry"];?></p>
		<p>Verification : <?php echo $_SESSION["verification"];?></p>
		<br>
		<p>Order_status : PENDING</p>	
	</fieldset>


	<div class="gap">
		&nbsp;
	</div>

	<div class="gap">
		&nbsp;
	</div>
	<div class="gap">
		&nbsp;
	</div>
	
  <!-- footer-->

	<?php include 'footer.inc';?>
</body>
</html>