/**
*Author: Shan Lu
*Target: enquiry.html
*Purpose: To check user entered data
*Created: 25/04/21
*Last Updated: 25/04/21
*Credits: assignment2
*/
function validate () {
	var result = ture;
	return result;
}



function makepayment () {

	if (sessionStorage.fname != undefined) {
	
		document.getElementById("confirm_name").textContent = sessionStorage.fname + "" +sessionStorage.lname;
		document.getElementById("confirm_email").textContent = sessionStorage.email;
		document.getElementById("confirm_address").textContent = sessionStorage.address;
		document.getElementById("confirm_subtwon").textContent = sessionStorage.subtown;
		document.getElementById("confirm_state").textContent = sessionStorage.state;
		document.getElementById("confirm_postcode").textContent = sessionStorage.postcode;
		document.getElementById("confirm_number").textContent = sessionStorage.phone;
		document.getElementById("confirm_equipment").textContent = sessionStorage.equipment;
		document.getElementById("confirm_qty").textContent = sessionStorage.qty;
		document.getElementById("confirm_contact").textContent = sessionStorage.contactMethod;
		document.getElementById("confirm_feture").textContent = sessionStorage.feture;
	

		document.getElementById("confirm_cost").textContent = sessionStorage.price;
	
		document.getElementById("fname").value = sessionStorage.fname;
		document.getElementById("lname").value = sessionStorage.lname;
		document.getElementById("email").value = sessionStorage.email;
		document.getElementById("address").value = sessionStorage.address;
		document.getElementById("subtwon").value = sessionStorage.subtown;
		document.getElementById("state").value = sessionStorage.state;
		document.getElementById("postcode").value = sessionStorage.postcode;
		document.getElementById("phone").value = sessionStorage.phone;
		document.getElementById("equipment").value = sessionStorage.equipment;
		document.getElementById("qty").value = sessionStorage.qty;
		document.getElementById("contactMethod").value = sessionStorage.contactMethod;
		document.getElementById("feture").value = sessionStorage.feture;
		document.getElementById("cost").value = sessionStorage.price ;
	
	}
}

function clearredirect () {
	sessionStorage.clear();
	window.location = "enquiry.html"
}

function init () {
	makepayment ();
	var checkout = document.getElementById("checkout");
	checkout.onsubmit = validate;
	
	var cancel = document.getElementById("cancelbutton");
	cancel.onclick = clearredirect;
	
 }

window.onload = init;
