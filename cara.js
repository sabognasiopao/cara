// JavaScript Document


function submitform() {
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var address = document.getElementById("address").value;
	
	if (validation()) // Calling validation function
	{
		document.getElementById("Join").submit(); //form submission
		alert(" Name : " + name + " \n Email : " + email + " \n Address : " + address + "\n \n Form Submitted Successfully......");
	}
}


function validation() {
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var address = document.getElementById("address").value;
var nationality = document.getElementById("nationality").value;
var occupation = document.getElementById("occupation").value;
var age = document.getElementById("age").value;

	if (name === '' || email === '' || address === '' || nationality === '' || occupation === '' || age === '') {
		alert("Please fill up all fields !");
		return false;
	} 
	
	else {
		return true;
	}
}

function validationsecond() {
var message = document.getElementById("contact").value;
var emailcontact = document.getElementById("emailuser").value;


	if (message === '' || emailcontact === '' ) {
		alert("Please fill up all fields !");
		return false;
	} 
	
	else {
		return true;
	}
}

function sendMail() {
	
	if (validationsecond()) // Calling validation function
	{
    var link = "mailto:delirioushoran@gmail.com"
             + "?cc=" + encodeURIComponent(document.getElementById('emailuser').value)
             + "&subject=" + encodeURIComponent("CARA")
             + "&body=" + encodeURIComponent(document.getElementById('contact').value)
    ;
    	alert("Message Sent Successfully!");
    window.location.href = link;
	}
}

