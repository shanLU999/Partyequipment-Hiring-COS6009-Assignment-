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
<!---------------------------------------------------------------------------->
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
	<fieldset>
		<form id="byInformation" method="post" action="">
			<select id="information" name="information" >
				<option value="allOrders">Load All Orders</option>
				<option value="fname">First Name</option>
				<option value="lname">Last Name</option>
				<option value="equipment">product</option>
				<option value="cost">Total Cost</option>
				<option value="PENDING">PENDING</option>
			</select>
			<label for="content">Details: </label></th>
			<input type="text" id="content" name="content" >
			<div class="gap">
			&nbsp;
			</div>	
			<div class="gap">
			&nbsp;
			</div>
			<input type="submit" value="Upload All Orders">
		</form>
	</fieldset>
<!-------------------------------------------------------------------------------------------->

<?php
	require_once("settings.php");

	$conn = @mysqli_connect(
		$host,
		$user,
		$pwd,
		$sql_db
	);
?>
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
	<div class="gap">
		&nbsp;
	</div>	
	<div class="gap">
		&nbsp;
	</div>
<!--------------------------------------SHOW Title-------------------------------------->	
	
	
	
	
<!--------------------------------------SHOW Information-------------------------------------->
<?php
	if (isset($_POST["information"])){
	
		$information = $_POST["information"];
		
		echo "<table><tr>
				<td>order_id</td>
				<td>First Name</td><td>Last Name</td>
				<td>email</td><td>address</td>
				<td>subtwon</td><td>state</td>
				<td>postcode</td><td>phone</td>
				<td>equipment</td><td>qty</td>
				<td>contactMethod</td><td>feture</td>
				<td>order_cost</td>
				<td>status</td>
			</tr>";
	
		if ($information == "allOrders"){
			$result = mysqli_query($conn,"SELECT * FROM orders");
			
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr><td>" . $row["order_id"] . "</td>
						<td>" . $row["fname"] . "</td><td> " . $row["lname"] . "</td>
						<td>" . $row["email"] . "</td><td> " . $row["address"] . "</td>
						<td>" . $row["subtwon"] . "</td><td> " . $row["state"] . "</td>
						<td>" . $row["postcode"] . "</td><td> " . $row["phone"] . "</td>
						<td>" . $row["equipment"] . "</td><td> " . $row["qty"] . "</td>
						<td>" . $row["contactMethod"] . "</td><td> " . $row["feture"] . "</td>
						<td>" . $row["order_cost"] . "</td>
						<td>" . $row["order_status"] . "</td>
					</tr>"; 
			}
			
		}else if ($information == "fname") {
			$content = $_POST["content"];
			$result = mysqli_query($conn,"SELECT * FROM orders WHERE fname = '$content'");
			if (!$result) {
				printf("Error: %s\n", mysqli_error($conn));
				exit();
			}
			
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr><td>" . $row["order_id"] . "</td>
						<td>" . $row["fname"] . "</td><td> " . $row["lname"] . "</td>
						<td>" . $row["email"] . "</td><td> " . $row["address"] . "</td>
						<td>" . $row["subtwon"] . "</td><td> " . $row["state"] . "</td>
						<td>" . $row["postcode"] . "</td><td> " . $row["phone"] . "</td>
						<td>" . $row["equipment"] . "</td><td> " . $row["qty"] . "</td>
						<td>" . $row["contactMethod"] . "</td><td> " . $row["feture"] . "</td>
						<td>" . $row["order_cost"] . "</td>
						<td>" . $row["order_status"] . "</td>
					</tr>"; 
			}
			
		}else if ($information == "lname"){
			$content = $_POST["content"];
			$result = mysqli_query($conn,"SELECT * FROM orders WHERE lname = '$content'");
			if (!$result) {
				printf("Error: %s\n", mysqli_error($conn));
				exit();
			}
			
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr><td>" . $row["order_id"] . "</td>
						<td>" . $row["fname"] . "</td><td> " . $row["lname"] . "</td>
						<td>" . $row["email"] . "</td><td> " . $row["address"] . "</td>
						<td>" . $row["subtwon"] . "</td><td> " . $row["state"] . "</td>
						<td>" . $row["postcode"] . "</td><td> " . $row["phone"] . "</td>
						<td>" . $row["equipment"] . "</td><td> " . $row["qty"] . "</td>
						<td>" . $row["contactMethod"] . "</td><td> " . $row["feture"] . "</td>
						<td>" . $row["order_cost"] . "</td>
						<td>" . $row["order_status"] . "</td>
					</tr>"; 
			}
			
		}else if ($information == "equipment"){
			$content = $_POST["content"];
			$result = mysqli_query($conn,"SELECT * FROM orders WHERE equipment = '$content'");
			if (!$result) {
				printf("Error: %s\n", mysqli_error($conn));
				exit();
			}
			
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr><td>" . $row["order_id"] . "</td>
						<td>" . $row["fname"] . "</td><td> " . $row["lname"] . "</td>
						<td>" . $row["email"] . "</td><td> " . $row["address"] . "</td>
						<td>" . $row["subtwon"] . "</td><td> " . $row["state"] . "</td>
						<td>" . $row["postcode"] . "</td><td> " . $row["phone"] . "</td>
						<td>" . $row["equipment"] . "</td><td> " . $row["qty"] . "</td>
						<td>" . $row["contactMethod"] . "</td><td> " . $row["feture"] . "</td>
						<td>" . $row["order_cost"] . "</td>
						<td>" . $row["order_status"] . "</td>
					</tr>"; 
			}
			
		}else if ($information == "cost"){
			$content = $_POST["content"];
			$result = mysqli_query($conn,"SELECT * FROM orders WHERE order_cost = '$content'");
			if (!$result) {
				printf("Error: %s\n", mysqli_error($conn));
				exit();
			}
			
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr><td>" . $row["order_id"] . "</td>
						<td>" . $row["fname"] . "</td><td> " . $row["lname"] . "</td>
						<td>" . $row["email"] . "</td><td> " . $row["address"] . "</td>
						<td>" . $row["subtwon"] . "</td><td> " . $row["state"] . "</td>
						<td>" . $row["postcode"] . "</td><td> " . $row["phone"] . "</td>
						<td>" . $row["equipment"] . "</td><td> " . $row["qty"] . "</td>
						<td>" . $row["contactMethod"] . "</td><td> " . $row["feture"] . "</td>
						<td>" . $row["order_cost"] . "</td>
						<td>" . $row["order_status"] . "</td>
					</tr>"; 
			}
			
		}else if ($information == "PENDING"){
			$result = mysqli_query($conn,"SELECT * FROM orders WHERE tatus = PENDING");
			if (!$result) {
				printf("Error: %s\n", mysqli_error($conn));
				exit();
			}
			
			while($row = mysqli_fetch_array($result))
			{
				echo "<tr><td>" . $row["order_id"] . "</td>
						<td>" . $row["fname"] . "</td><td> " . $row["lname"] . "</td>
						<td>" . $row["email"] . "</td><td> " . $row["address"] . "</td>
						<td>" . $row["subtwon"] . "</td><td> " . $row["state"] . "</td>
						<td>" . $row["postcode"] . "</td><td> " . $row["phone"] . "</td>
						<td>" . $row["equipment"] . "</td><td> " . $row["qty"] . "</td>
						<td>" . $row["contactMethod"] . "</td><td> " . $row["feture"] . "</td>
						<td>" . $row["order_cost"] . "</td>
						<td>" . $row["order_status"] . "</td>
					</tr>"; 
			}
			
		}
	}	
		

		echo "</table>";

 
?>

<fieldset>
	<form>
		<select id="updateStatu" name="status" method="post" action="">
						<option value="pending">PENDING</option>
						<option value="fulfilled">Fulfilled</option>
						<option value="paid">Paid</option>
						<option value="archived">Archived</option>
		</select>
		<input type="submit" value="Update Status">
	</form>
</fieldset>
<!--------------------------------------Update tables-------------------------------------->
<?php
	$status = $_POST["status"]
	$query = "UPDATE orders
			SET order_status = $status
			WHERE $information = '$content'";
			
	$result = mysqli_query($conn, $query);
	
	if(!$result){
		echo "<p class=\"wrong\">Something is wrong with ", $query,"</p>";
	} else {
		echo "<p class=\"ok\">Successfully Update statu</p>";
	}
	
	mysqli_close($conn);

?>
<!--------------------------------------Update tables-------------------------------------->

<!-------------------------------------------------------------------------------------------->

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