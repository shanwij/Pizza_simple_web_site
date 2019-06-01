function validateForm() {

    var x = document.forms["myForm"]["email"].value;
    var y = document.forms["myForm"]["pass"].value;


    
    if (x.length==0) {
        alert("Email must be filled out");

        return false;
    }
    else if (y.length == 0) {
        alert("Password must be filled out");

        return false;
    }
    

}
