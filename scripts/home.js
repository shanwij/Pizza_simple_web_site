var myIndex = 0;

carousel();
function carousel() {
    var n;
    var x = document.getElementsByClassName("sldeshw");
    for (n = 0; n < x.length; n++) {
       x[n].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[ myIndex -1].style.display = "none";  
    setTimeout(carousel, 2000); 
}

 <!-- 
	  <footer>
<div class ="footer-main-div">

<div class = "footer-social-icons">
	<ul>
		<li><a href="#facebook" target="blank"><img src="images/icon/fb.png" /></a></li>
		<li><a href="#instagram" target="blank"><img src="images/icon/inst.png" /></a></li>
		<li><a href="#google" target="blank"><img src="images/icon/ggle.png" /></a></li>
		<li><a href="#twitter" target="blank"><img src="images/icon/twt.png" /></a></li>
	</ul>
	</div> 
	</div>
	</footer> --> 
	
	.footer-main-div{
		width:100%;
		height:auto;
		margin:auto;
		background:#272727;
		padding: 10px 0px;
		bottom: 0;
}

