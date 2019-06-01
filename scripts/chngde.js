function valid()
{
	var name;
	var passa;
	var passb;
	
	name= document.getElementById("fname").value;
	passa= document.getElementById("pswrda").value;
	passb= document.getElementById("pswrdb").value;
	
	if( name === "")
		document.getElementById("fname").innerHTML = "Missing name";
	else
		document.getElementById("fname").innerHTML = "";
	if( passa === "")
		document.getElementById("pswrda").innerHTML = "Missing last name";
	else
		document.getElementById("pswrda").innerHTML = "";
	if( passb === "")
		document.getElementById("pswrdb").innerHTML = "missing password ";
	else
		document.getElementById("pswrdb").innerHTML = "";
}
