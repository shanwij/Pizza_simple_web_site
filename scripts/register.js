function myFunction() {
    var num, em,pass,repass,name;

    // Get the value of the input field with id="numb"
    num = document.forms["signinForm"]["phn"].value;
    name = document.forms["signinForm"]["name"].value;
    em = document.forms["signinForm"]["email"].value;
    pass = document.forms["signinForm"]["pass"].value;
    pass = document.forms["signinForm"]["repass"].value;
    



     if (name.length == 0) {
         alert("Enter your name");
        return false;
    
    }
  
    else if (isNaN(num) || num.length > 10 || num.length < 10 || num.length == 0) {
         alert("Enter an valid phone Number");
          return false;
    } 




    else if (em.length == 0) {
       alert("Enter your email");
    
        return false;
    }

    else if (pass.length == 0 || repass.length == 0 ) {
          alert("Enter a password");

         return false;
    
    }

    else if (pass != repass) {
          alert("password is not the same one");
    
         return false;
    }
	
    
}