document.getElementById("forgetForm").addEventListener("submit", forgetFunction);
 
 function forgetFunction(e) 
 {
     let isValid = true;
 
     
 
     let femail = document.getElementById("fremail").value;
     if (femail == "") {
         document.getElementById("femailError").innerHTML = "Please enter your email";
         isValid = false;
     } 
     else if (femail.indexOf("@") == -1) {
         document.getElementById("femailError").innerHTML = "Email must contain @ symbol";
         isValid = false;
     }
     if (isValid == false) {
        e.preventDefault();
    }
}
 