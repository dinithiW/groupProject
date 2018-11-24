/**
 * File : addUser.js
 * 
 * This file contain the validation of add user form
 * 
 * Using validation plugin : jquery.validate.js
 * 
 * @author Kishor Mali
 */

$(document).ready(function(){
	
	var addUserForm = $("#addUser");
	
	var validator = addUserForm.validate({
		
		rules:{
			fname :{ required : true },
			lname :{ required : true },
			designation :{required : true},
			address : {required : true},
			email : { required : true, email : true, remote : { url : baseURL + "OperatorIndex/checkEmailExists", type :"post"} },
			/*password : { required : true },
			cpassword : {required : true, equalTo: "#password"},*/
			mobile : { required : true, digits : true },
			gender : { required : true, selected : true}
		},
		messages:{
			fname :{ required : "This field is required" },
			lname :{ required : "This field is required" },
			designation : {required: "This field is required"},
			address : {required : "This field is required"},
			email : { required : "This field is required", email : "Please enter valid email address", remote : "Email already taken" },
			/*password : { required : "This field is required" },
			cpassword : {required : "This field is required", equalTo: "Please enter same password" },*/
			mobile : { required : "This field is required", digits : "Please enter numbers only" },
			gender : { required : "This field is required", selected : "Please select atleast one option" }			
		}
	});
});
