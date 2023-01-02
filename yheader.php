<style type="text/css">
#nav {
    display: block;
	width: 1158px;
	height: 60px;
	padding-top: 10px;
	text-align: center;
	margin: 0 auto;
	background: #0099CC;
	background-color: #0099CC;
}
#nav li {
    margin:10px;
    float:left;
	text-align:center;
    position:relative;
    list-style:none;
}
#nav a {
    font: bold 150% Arial, Helvetica, sans-serif;
    color:#e7e5e5;
    text-decoration:none;
    display:block;
    padding:8px 20px;

    border-radius:20px; /*some css3*/
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    text-shadow:0 2px 2px rgba(0,0,0, .7);
}

/* selected menu element */
#nav .current a, #nav li:hover > a {
    background:#7788aa url(iterfaceimage/line.png) repeat-x 0 -20px;
     color: #1D1D1D;
    border-top:1px solid #f8f8f8;

    box-shadow:0 2px 2px rgba(0,0,0, .7); /*some css3*/
    -moz-box-shadow:0 2px 2px rgba(0,0,0, .7);
    -webkit-box-shadow:0 2px 2px rgba(0,0,0, .7);
    text-shadow:0 2px 2px rgba(255,255,255, 0.7);
}

/* sublevels */
#nav ul li:hover a, #nav li:hover li a {
    background:none;
    border:none;
    color:#000;
}
#nav ul li a:hover {
    background:#335599 url(iterfaceimage/line.png) repeat-x 0 -100px;
    color:#fff;

    border-radius:10px; /*some css3*/
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    text-shadow:0 2px 2px rgba(0,0,0, 0.7);
}
#nav ul li:first-child > a {
    -moz-border-radius-topleft:10px; /*some css3*/
    -moz-border-radius-topright:10px;
    -webkit-border-top-left-radius:10px;
    -webkit-border-top-right-radius:10px;
}
#nav ul li:last-child > a {
    -moz-border-radius-bottomleft:10px; /*some css3*/
    -moz-border-radius-bottomright:10px;
    -webkit-border-bottom-left-radius:10px;
    -webkit-border-bottom-right-radius:10px;
}

/* drop down */
#nav li:hover > ul {
    opacity:1;
    visibility:visible;
}
#nav li:visited > ul {
    opacity:1;
    visibility:visible;
}
#nav ul {
    opacity:0;
    visibility:hidden;
    padding:0;
    width:175px;
    position:absolute;
    background:#aabbcc url(iterfaceimage/line.png) repeat-x 0 0;
    border:1px solid #7788aa;

    border-radius:10px; /*some css3*/
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    box-shadow:0 2px 2px rgba(0,0,0, .5);
    -moz-box-shadow:0 2px 2px rgba(0,0,0, .5);
    -webkit-box-shadow:0 2px 2px rgba(0,0,0, .5);

    -moz-transition:opacity .25s linear, visibility .1s linear .1s;
    -webkit-transition:opacity .25s linear, visibility .1s linear .1s;
    -o-transition:opacity .25s linear, visibility .1s linear .1s;
    transition:opacity .25s linear, visibility .1s linear .1s;
}
#nav ul li {
    float:none;
    margin:0;
}
#nav ul a {
    font-weight:normal;
    text-shadow:0 2px 2px rgba(255,255,255, 0.7);
}
#nav ul ul {
    left:160px;
    top:0px;
}
.auto-style1 {
	margin-left: 42px;
}
.auto-style2 {
	margin-left: 30px;
}
</style>
<header class="auto-style2" style="width: 903px">
        <hgroup class="auto-style1" style="width: 877px">
		<div>
	<ul id="nav">
	<li><a href="admin.php" style="width: 62px"><font color="white">HOME</font></a></li>
			<li><a href="registor.php"><font color="white">Registor Employee</a></li>
			<li><a href="#">Manage Account</a> 
			<ul>

	  <li><a href="createaccount.php" style="width: 117px"><b><font color="white">Creat Account</font></b></a></li>
	  <li><a href="manageacc1.php"><b><font color="white"> control account</font></b></a></li>
	  <li><a href="update.php" style="width: 117px"><b><font color="white">Update Account</font></b></a></li>
	  <li><a href="delete.php" style="width: 108px"><b><font color="white">Delete Account</font></b></a></li>
			</ul></li>
			<li><a href="comment.php"><b><font color="white">View contact</font></b></a></li>
	  <li><a href="viewreport.php"><font color="white">view report</font></b></a></li>
	  
		<li><a href="change.php"><b><font color="white">change password</font></b></a></li>
	 	  <li><b><a href="logout.php"><font color="white">logout</font></a></li>

				
				</div>
 </hgroup>
</header>   