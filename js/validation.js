$(document).ready(function(){

  $("#myForm").on("submit",function(){
    var val_name= /^[A-Za-z ]+$/;
    var val_age= /^[^&]+$/;
    var val_address=/^[0-9a-zA-Z ]+$/;
    var val_phone= /^[0-9]{9,12}$/;
    var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
    var val_language= /^[0-9a-zA-Z]+$/;
    var val_experiance= /^[0-9]{1,10}$/;
    var val_photo= /^[^&]+$/;
    var val_username= /^[0-9a-zA-Z]+$/;
    var val_password= /^[0-9a-zA-Z]+$/;
	    var val_gender=/^[0-9a-zA-Z ]+$/;

     $name= $('#name').val();
    $age= $('#age').val();
    $address= $('#address').val();
    $phone= $('#phone').val();
    $email= $('#email').val();
    $language= $('#language').val();
    $experiance=$('#experiance').val();
    $photo= $('#photo').val();
    $username= $('#username').val();
    $password= $('#password').val();
	    $gender= $('#gender').val();

     if(!val_name.test($name)){
     // $("#name").focus();
      alert("Enter Name, Name Must be Alphabets Only");
      return false;
    }
    else if (!val_age.test($age)) {
      alert(" Enter A Valid Age ");
      return false;
    }
    else if (!val_address.test($address)) {
      alert("enter address");
      return false;
    }
    else if (!val_phone.test($phone)) {
      alert("enter valid phone number");
      return false;
    }
    else if (!val_email.test($email)) {
      alert("enter email");
      return false;
    }
    else if (!val_language.test($language)) {
      alert("enter language");
      return false;
    }
    else if (!val_experiance.test($experiance)) {
      alert("enter experiance");
      return false;
    }
    else if (!val_photo.test($photo)) {
      alert("enter photo");
      return false;
    }
    else if (!val_username.test($username)) {
      alert("enter username");
      return false;
    }
    else if (!val_password.test($password)) {
      alert("enter password");
      return false;
    }
	else if (!val_gender.test($gender)) {
      alert("enter gender");
      return false;
    }
    else {
      return true;
    }
  });

  $("#name").focusout(function(){
    var val_name=  /^[a-zA-Z ]*$/;
    $name= $('#name').val();
	if($name == "" ){
		$('#name_error').html(" Enter Name");
		return false;
		}
    else if(!val_name.test($name)){
		$(this).css('border','2px solid red');
		$('#name_error').html("Invalid Name , Name Must be Alphabets Only");
		return false;
        }
    else {
		$(this).css('border','NONE');
		$('#name_error').html("");
      return true;
    }
  });

    $("#age").focusout(function(){
    var val_age= /^[^&]+$/;
    $age= $('#age').val();
	if($age == "" ){
		$('#age_error').html(" Enter age");
		return false;
		}
    else if(!val_age.test($age)){
		$(this).css('border','2px solid red');
		$('#age_error').html("Invalid Age , Enter A Valid Age");
		return false;
    }
    else {
		$(this).css('border','NONE');
		$('#age_error').html("");

      return true;
    }
  });

      $("#address").focusout(function(){
		var val_address= /^[0-9a-zA-Z ]+$/;
		$address= $('#address').val();
		if(!val_address.test($address)){
			$(this).css('border','2px solid red');
	  		$('#address_error').html("Enter Address");
		return false;
			}
		else {
		$(this).css('border','NONE');
		$('#address_error').html("");
      return true;
			}
  });
        $("#phone").focusout(function(){
		var val_phone= /^[0-9]{9,12}$/;
		$phone= $('#phone').val();
		if($phone == "" ){
		$('#phone_error').html(" Enter phone number");
		return false;
		}
		else if(!val_phone.test($phone)){
			$(this).css('border','2px solid red');
	  		$('#phone_error').html("Phone Number Must Contain 10 Digits");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#phone_error').html("");
		return true;
			}
  });
         $("#email").focusout(function(){
			var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
			$email= $('#email').val();
			if($email == "" ){
			$('#email_error').html(" Enter Email");
			return false;
		}

			else if(!val_email.test($email)){
				$(this).css('border','2px solid red');
	  	  		$('#email_error').html("Invalid email , Email must Like abc@gmail.com");
				return false;
			}
			else {
				$(this).css('border','NONE');
				$('#email_error').html("");
				return true;
			}
	});
       $("#language").focusout(function(){
		var val_language= /^[0-9a-zA-Z]+$/;
		$language= $('#language').val();
		if(!val_language.test($language)){
			$(this).css('border','2px solid red');
			$('#language_error').html("Enter Language");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#language_error').html("");
		return true;
		}
	});
		$("#experiance").focusout(function(){
		var val_experiance= /^[0-9]{1,10}$/;
		$experiance= $('#experiance').val();
		if($experiance == "" ){
		$('#experiance_error').html(" Enter Experiance");
		return false;
		}
		else if(!val_experiance.test($experiance)){
			$(this).css('border','2px solid red');
	  	  	$('#experiance_error').html("Enter A Valid experiance , Experiance Must Contain Numbers Only");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#experiance_error').html("");
		return true;
		}
	});
		$("#photo").focusout(function(){
		var val_photo= /^[^&]+$/;
		$photo= $('#photo').val();
    var fileExtension = ['jpg','jepg','png','gif','bmp'];
			if(!val_photo.test($photo)){
				$(this).css('border','2px solid red');
	  	  		$('#photo_error').html("Invalid photo");
		return false;
		}
    else if ($.inArray($("#photo").val().split('.').pop().toLowerCase(), fileExtension) == -1){
      $(this).css('border','2px solid red');
      $('#photo_error').html("image must be in a format of 'jpg','jepg','png','gif','bmp'");
      document.getElementById('photo').value='';
      $(this).css('border','2px solid red');
      $('#photo_error').html("Enter A valid image,image must be in a format of 'jpg','jepg','png','gif','bmp'");
      return false;
    }
		else {
				$(this).css('border','NONE');
				$('#photo_error').html("");
		return true;
			}
	});
       $("#username").focusout(function(){
		var val_username= /^[0-9a-zA-Z]+$/;
		$username= $('#username').val();
		if(!val_username.test($username)){
			$(this).css('border','2px solid red');
	  	  	$('#username_error').html("Invalid Username ");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#username_error').html("");

		return true;
		}
  });

		$("#password").focusout(function(){
		var val_password= /^[0-9a-zA-Z]+$/;
		$password= $('#password').val();
		if(!val_password.test($password)){
			$(this).css('border','2px solid red');
	  	  	$('#password_error').html("Invalid password ");
		return false;
		}
		else {
			$(this).css('border','NONE');
			$('#password_error').html("");
		return true;
		}
  });

 });
