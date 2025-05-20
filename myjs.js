document.getElementById("userForm").addEventListener("submit", customerFunction);
 
 function customerFunction(e) 
 {
     let isValid = true;
 
     
 
     let email = document.getElementById("email").value;
     if (email == "") {
         document.getElementById("emailError").innerHTML = "Please enter your email";
         isValid = false;
     } 
     else if (email.indexOf("@") == -1) {
         document.getElementById("emailError").innerHTML = "Email must contain @ symbol";
         isValid = false;
     }

     let password = document.getElementById("password").value;
     if (password == "") {
         document.getElementById("passwordError").innerHTML = "Please enter your passowrd";
         isValid = false;
     } 

     let cpassword = document.getElementById("confirmPassword").value;
     if (cpassword == "") {
         document.getElementById("cpasswordError").innerHTML = "Please confirm your passowrd";
         isValid = false;
     } 

     if (isValid == false) {
         e.preventDefault();
     }
 }

 