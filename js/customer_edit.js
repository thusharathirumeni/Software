$(document).ready(function(){
 $("#cust_edit").on("submit",function(){
   var val_name= /^[A-Za-z ]+$/;
   var val_email= /^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
   var val_username= /^[0-9a-zA-Z]+$/;
   $name= $('#name').val();
   $email= $('#email').val();
   $username= $('#username').val();
   if(isset($_POST['submit']))
   if(!val_name.test($name)){
     $("#name").focus();
     alert("enter name ,name must be alphabets only");
     return false;
   }
   else if (!val_email.test($email)) {
     $("#email").focus();
     alert("enter a valid email");
     return false;
   }
       else if (!val_username.test($username)) {
     $("#username").focus();
     alert("enter username");
     return false;
   }
   else {
     return true;
   }
 }
 });
});
