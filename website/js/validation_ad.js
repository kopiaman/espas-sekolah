/*
Created 09/27/09										
Questions/Comments: jorenrapini@gmail.com						
COPYRIGHT NOTICE		
Copyright 2009 Joren Rapini
*/

$(document).ready(function(){
	// Place ID's of all required fields here.
	required = ["f_title", "f_brand", "f_model","f_price", "f_type", "f_deal", "f_warranty", "f_condition","f_state","f_desc","coderad"];
	// If using an ID other than #email or #error then replace it here
	email = $("");
	errornotice = $("#error");
	// The text to show up within a field when it is incorrect
	emptyerror = "Cannot leave blank";
	emailerror = "Please put valid email";

	$("#form_ad").submit(function(){	
		//Validate required fields
		for (i=0;i<required.length;i++) {
			var input = $('#'+required[i]);
			if ((input.val() == "") || (input.val() == emptyerror)) {
				input.addClass("needsfilled");
				input.val(emptyerror);
				errornotice.fadeIn(750);
			} else {
				input.removeClass("needsfilled");
			}
		}
		// Validate the e-mail.
		if (!/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(email.val())) {
			email.addClass("needsfilled");
			email.val(emailerror);
		}

		//if any inputs on the page have the class 'needsfilled' the form will not submit
		if ($(":input").hasClass("needsfilled")) {
			return false;
		} else {
			errornotice.hide();
			return true;
		}
	});
	
	// Clears any fields in the form when the user clicks on them
	$(":input").focus(function(){		
	   if ($(this).hasClass("needsfilled") ) {
			$(this).val("");
			$(this).removeClass("needsfilled");
	   }
	});
	
	
});	


