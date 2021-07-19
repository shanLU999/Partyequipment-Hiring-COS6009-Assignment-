<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'header.inc';?>
  <title>Product Enquiry</title>
  <!-- other meta stuff-->
  <link href= "style/productequiry.css" rel="stylesheet">
  <script src="scripts/payment.js"></script>
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

	<div class="gap">
		&nbsp;
	</div>
	
	
	

  <!-------form------->
<form id="checkout" method="post" action="process_order.php" novalidate>
  <!-------Read Only Data & Hidden Data------->
	<fieldset>
		<legend>Enquiry Information:</legend>
		<p>Your Name: <span id="confirm_name"></span></p>
		<p>E-mail: <span id="confirm_email"></span></p>
		<p>Street Adress: <span id="confirm_address"></span></p>
		<p>Suburb/Town: <span  id="confirm_subtwon"></span></p>
		<p>State: <span  id="confirm_state"></span></p>
		<p>Postcode: <span  id="confirm_postcode"></span></p>
		<p>Phone Number: <span  id="confirm_number"></span></p>
		<p>Equipment: <span  id="confirm_equipment"></span></p>
		<p>Rent days: <span  id="confirm_qty"></span></p>
		<p>Preferred Contact Method: <span  id="confirm_contact"></span></p>
		<p>Fetures wanted: <span  id="confirm_feture"></span></p>
		<p>Total Cost: $<span  id="confirm_cost"></span></p>
		<input type="hidden" name="fname" id="fname" />
		<input type="hidden" name="lname" id="lname" />
		<input type="hidden" name="email" id="email" />
		<input type="hidden" name="address" id="address" />
		<input type="hidden" name="subtwon" id="subtwon" />
		<input type="hidden" name="state" id="state" />
		<input type="hidden" name="postcode" id="postcode" />
		<input type="hidden" name="phone" id="phone" />
		<input type="hidden" name="equipment" id="equipment" />
		<input type="hidden" name="qty" id="qty" />
		<input type="hidden" name="contactMethod" id="contactMethod" />
		<input type="hidden" name="feture" id="feture" />
		<input type="hidden" name="cost" id="cost" />
		
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

	<div class="gap">
		&nbsp;
	</div>

  <!-- footer-->

	<?php include 'footer.inc';?>
</body>
</html>
