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
		<legend>Error Messages:</legend>
	<?phpecho $_SESSION["error"];?>
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
	
	<form id="enform" method="post" action="process_order.php" class="enquiryForm" novalidate>

		<table  >
			<caption>Product Enquiry Form</caption>
			<tr>
			<th><label for="fname">First name: </label></th>
			<th><input type="text" id="fname" name="fname" maxlength="25" value="<?=$_SESSION["fname"]?>"></th>
			<th><label for="lname">Last name: </label></th>
			<th><input type="text" id="lname" name="lname" maxlength="25" value="<?=$_SESSION["lname"]?>"></th>
		</tr>
		<tr>
			<td ><label for="email">E-mail:</label></td>
			<td colspan="3" ><input type="email" id="email" name="email"  value="<?=$_SESSION["email"]?>"></td>
		</tr>


		<tr>
			<th rowspan="3" >Address</th>
			<td ><label for="staddress">Street Address</label></td>
			<td colspan="2" ><input type="text" id="staddress" name="staddress" maxlength="40"  class="addressbox" value="<?=$_SESSION["address"]?>"></td>
		</tr>
		<tr>
			<td ><label for="subtown">Suburb/town</label></td>
			<td colspan="2" ><input type="text" id="subtown" name="subtown" maxlength="20"  class="addressbox" value="<?=$_SESSION["subtown"]?>"></td>
		</tr>
		<tr>
			<td>
				<label for="state">Slect Your State:</label>
				<select id="state" name="state" value="<?=$_SESSION["state"]?>">
					<option value="">State</option>
					<option value="VIC">VIC</option>
					<option value="NSW">NSW</option>
					<option value="QLD">QLD</option>
					<option value="NT">NT</option>
					<option value="WA">WA</option>
					<option value="SA">SA</option>
					<option value="TAS">TAS</option>
					<option value="ACT">ACT</option>
				</select>
			</td>
			<td><label for="postcode">Postcode</label></td>
			<td><input type="text" id="postcode" name="postcode" pattern = "^[0-9]{4}$"  placeholder="Postcode" value="<?=$_SESSION["postcode"]?>"></td>
		</tr>

		<tr>
			<th><label for="phone">Phone</label></th>
			<th><input type="text" id="phone" name="phone"  placeholder="0400000000"  value="<?=$_SESSION["phone"]?>"></th>
			
			<th class="radiobox" value="<?=$_SESSION["contactMethod"]?>">
				<input type="radio" id="pemail" name="preferredContact" value="E-mail">
				<label for="pemail">E-mail</label>
				<input type="radio" id="ppost" name="preferredContact" value="Post">
				<label for="ppost">Post</label>
				<input type="radio" id="pphone" name="preferredContact" value="Phone">
				<label for="pphone">Phone</label>
			</th>
		</tr>

			<tr>
				<td><label for="equipment">Equipment:</label></td>
				<td>
					<select name="equipment" id="equipment" value="<?=$_SESSION["equipment"]?>">
						<option value="">Select one product</option>
						<option value="ballon">Ballon - $60/day</option>
						<option value="tableChairs">Table & Chairs - $35/day</option>
						<option value="cateringEquipment">Catering Equipment - $45/day</option>
						<option value="lighting">Lighting - $50/day</option>
						<option value="soundEquipment">Sound Equipment - $70/day</option>
						<option value="stagingCatwalk">Staging & Catwalk - $170/day</option>
					</select>
				</td>
				<td >Feature:</td>
				<td >
					<input type="checkbox" id="feture1" name="feture1" value="①">
					<label for="feture1"> ①</label>
					<input type="checkbox" id="feture2" name="feture2" value="②">
					<label for="feture2"> ②</label>
					<input type="checkbox" id="feture3" name="feture3" value="③">
					<label for="feture3"> ③</label>
					<input type="checkbox" id="feture4" name="feture4" value="④">
					<label for="feture4"> ④</label>
					<input type="checkbox" id="feture5" name="feture5" value="⑤">
					<label for="feture5"> ⑤</label>
					<input type="checkbox" id="feture6" name="feture6" value="⑥">
					<label for="feture6"> ⑥</label>
					<input type="checkbox" id="feture7" name="feture7" value="⑦">
					<label for="feture7"> ⑦</label>
					<input type="checkbox" id="feture8" name="feture8" value="⑧">
					<label for="feture8"> ⑧</label>

				</td>
				
			</tr>
			
			<tr>
				<td>Rent Days:</td>
				<td><input type="number" id="days" name="days" min="1" value="<?=$_SESSION["qty"]?>">day/days</td>
				<td></td>
				<td></td>
			</tr>
			
			<tr>
				<td ><label for="comments">Comments:</label></td>
				<td colspan="3">
				<input type="text" id="comments" name="comments" maxlength="40" placeholder="Type your particular aspect interesed in..."  class="commentcre">
				</td>
			</tr>
			
		</table>
	</form>
	
	<div class="gap">
		&nbsp;
	</div>
	<div class="gap">
		&nbsp;
	</div>
	
	<table  >
		<caption>Payment Form</caption>
		<tr>
			<th><label for="cardType">Credit Card Type:</label></th>
			<th>
				<select id="cardType" name="cardType">
					<option value="visa">Visa</option>
					<option value="mastercard">MasterCard</option>
					<option value="amex">AmEx</option>
				</select>
			</th>
			<th><label for="nameOnCard"> Name on Card: </label></th>
			<th><input type="text" id="nameOnCard" name="nameOnCard"  required ></th>
		</tr>
		<tr>
			<td><label for="cardNumber">Credit Card Number:</label></td>
			<td><input type="cardNumber" id="cardNumber" name="cardNumber"  required ></td>
			<td><label for="expiry">Credit Card Expiry:</label></td>
			<td><input type="expiry" id="expiry" name="expiry"  placeholder="e.g.0423" required ></td>
		</tr>


		<tr>
			<th><label for="verification">Card Verification Value:</label></th>
			<th><input type="text" id="verification" name="verification" required ></th>
		</tr>

	</table>
	
	<div class="gap">
		&nbsp;
	</div>
	<div class="gap">
		&nbsp;
	</div>
	
	<table>
		<tr>
			<td><input type="submit" value="Check Out" class="submitbutton"></td>
			<td><input type="button" id="cancelbutton" value="Cancle"></td>
		</tr>
	</table>
	
</form>
	
	

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