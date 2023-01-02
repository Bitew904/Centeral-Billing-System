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

    border-radius:10px; /*some css3*/
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    text-shadow:0 2px 2px rgba(0,0,0, .7);
}

/* selected menu element */
#nav .current a, #nav li:hover > a {
    background:#7788aa url(iterfaceimage/line.png) repeat-x 0 -20px;
    color:#000;
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
	<li><a href="employee.php" style="width: 62px"><font color="white">HOME</font></a></li>
			<li><a href="#">Payment</a> 
			<ul>

       <li><a href="billsearch.php"><font color="white">pay online</font></a></li>
	   <li><a href="cash.php"><font color="white">pay incash</font></a></li>
			</ul></li>
			<li><a href="ch.php"><font color="white">check payment</font></a></li>
				   <li><a href="insertmoney.php"><font color="white">Add money</font></a></li>
	  <li><a href="report.php"><font color="white">Generate report</font></a></li>
	  <li><a href="changepassword.php""><b><font color="white">change password</font></b></a></li>
	 <li><a href="logout.php"><b><font color="white">logout</font></b></a></li>
	

				
				</div>
 </hgroup>
</header>   