/**
*Author: Shan Lu
*Target: enquiry.html
*Purpose: To check user entered data
*Created: 25/04/21
*Last Updated: 25/04/21
*Credits: assignment2
*/

"use strict";

function storeData (fname, lname, email, address, subtown, state, postcode, phone, equipment, qty, preferEmail, preferPost, preferPhone, feture1, feture2, feture3, feture4, feture5, feture6, feture7, feture8) {
	var contactMethod = "";
	if (preferEmail) contactMethod = "preferEmail";
	if (preferPost) contactMethod = "preferPost";
	if (preferPhone) contactMethod = "preferPhone";
	
	var feture = "";
	if (feture1) {
		feture = feture + "feture1";
	}
	if (feture2) {
		feture = feture + "feture2";
	}
	if (feture3) {
		feture = feture + "feture3";
	}
	if (feture4) {
		feture = feture + "feture4";
	}
	if (feture5) {
		feture = feture + "feture5";
	}
	if (feture6) {
		feture = feture + "feture6";
	}
	if (feture7) {
		feture = feture + "feture7";
	}
	if (feture8) {
		feture = feture + "feture8";
	}
	
	sessionStorage.fname = fname;
	sessionStorage.lname = lname;
	sessionStorage.email = email;
	sessionStorage.address = address;
	sessionStorage.subtown = subtown;
	sessionStorage.state = state;
	sessionStorage.postcode = postcode;
	sessionStorage.phone = phone;
	sessionStorage.equipment = equipment;
	sessionStorage.qty = qty;
	sessionStorage.contactMethod = contactMethod;
	sessionStorage.feture = feture;
	
	
}


function validate () {

	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var email = document.getElementById("email").value;
	var address = document.getElementById("staddress").value;
	var subtown = document.getElementById("subtown").value;
	var state = document.getElementById("state").value;
	var postcode = document.getElementById("postcode").value;
	var phone = document.getElementById("phone").value;
	var equipment = document.getElementById("equipment").value;
	var qty = document.getElementById("days").value;
	
	var preferEmail = document.getElementById("pemail").checked;
	var preferPost = document.getElementById("ppost").checked;
	var preferPhone = document.getElementById("pphone").checked;
	

	var feture1 = document.getElementById("feture1").checked;
	var feture2 = document.getElementById("feture2").checked;
	var feture3 = document.getElementById("feture3").checked;
	var feture4 = document.getElementById("feture4").checked;
	var feture5 = document.getElementById("feture5").checked;
	var feture6 = document.getElementById("feture6").checked;
	var feture7 = document.getElementById("feture7").checked;
	var feture8 = document.getElementById("feture8").checked;

	var cost = 0;
	var price = 0;
	if (equipment == "ballon") {
		cost = 60;
		
	}
	if (equipment == "tableChairs") {
		cost = 35;
		
	}
	if (equipment == "cateringEquipment") {
		cost = 45;
		
	}
	if (equipment == "lighting") {
		cost = 50;
		
	}
	if (equipment == "soundEquipment") {
		cost = 70;
		
	}
	if (equipment == "stagingCatwalk") {
		cost = 170;
		
	}
	
	price = cost * qty;
	sessionStorage.price = price;
	
	storeData (fname, lname, email, address, subtown, state, postcode, phone, equipment, qty, preferEmail, preferPost, preferPhone, feture1, feture2, feture3, feture4, feture5, feture6, feture7, feture8);

	

}

function init () {
	var enform = document.getElementById("enform");
	enform.onsubmit = validate;
	
	
}	

window.onload = init;