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

	<div class="gap">
		&nbsp;
	</div>

  <!-------form------->
<form id="enform" action="payment.php" class="enquiryForm" novalidate>

	<table  >
		<caption>Product Enquiry Form</caption>
		<tr>
			<th><label for="fname">First name: </label></th>
			<th><input type="text" id="fname" name="fname" maxlength="25" ></th>
			<th><label for="lname">Last name: </label></th>
			<th><input type="text" id="lname" name="lname" maxlength="25" ></th>
		</tr>
		<tr>
			<td ><label for="email">E-mail:</label></td>
			<td colspan="3" ><input type="email" id="email" name="email"  ></td>
		</tr>


		<tr>
			<th rowspan="3" >Address</th>
			<td ><label for="staddress">Street Address</label></td>
			<td colspan="2" ><input type="text" id="staddress" name="staddress" maxlength="40"  class="addressbox"></td>
		</tr>
		<tr>
			<td ><label for="subtown">Suburb/town</label></td>
			<td colspan="2" ><input type="text" id="subtown" name="subtown" maxlength="20"  class="addressbox"></td>
		</tr>
		<tr>
			<td>
				<label for="state">Slect Your State:</label>
				<select id="state" name="state">
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
			<td><input type="text" id="postcode" name="postcode" pattern = "^[0-9]{4}$"  placeholder="Postcode"></td>
		</tr>

		<tr>
			<th><label for="phone">Phone</label></th>
			<th><input type="text" id="phone" name="phone"  placeholder="0400000000"  ></th>
			<th id="preferredContact">Preferred Contact</th>
			<th class="radiobox" >

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
				<select name="equipment" id="equipment">
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
			<td><input type="number" id="days" name="days" min="1" >day/days</td>
			<td></td>
			<td></td>
		</tr>
		
		<tr>
			<td ><label for="comments">Comments:</label></td>
			<td colspan="3">
			<input type="text" id="comments" name="comments" maxlength="40" placeholder="Type your particular aspect interesed in..."  class="commentcre">
			</td>
		</tr>
		
		<tr>
			<td><input type="submit" value="Pay Now" class="submitbutton"></td>
			<td><input type="reset" value="Reset"></td>
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
