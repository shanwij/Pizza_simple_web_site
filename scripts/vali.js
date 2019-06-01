// JavaScript Document

function formValidate(){
	/*var ex = document.getElementById("ex");*/
	
	var firstName= document.getElementById("fname");
	var lastName= document.getElementById("lname");
	var pswd = document.getElementById("pswd");
	var isValid = true;
	
	isEmpty(firstName.value, "First name must give");
	isEmpty(lastName.value, "Last name must give");
	isEmpty(pswd.value, "Card number must give");
}


	/*var resultado = 'error';
	for(var i=0;i<ex.length;i++)
  {
    if((ex[i].checked) && ){
      resultado=ex[i].value;
	  
	
	  resultado=ex[i+1].value;
  }
}*/

function isEmpty(value , message){
	if(value.length == 0)
		alert(message);
}

