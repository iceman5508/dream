<?php 
//handle signup logic
stage1();
?>
<!DOCTYPE html>
<html>
<head>
<title>Dreemer ı Signup</title>
<link href="<?=appDir::cssFolder()?>b.css" type="text/css" rel="stylesheet"/>
<link rel="icon" href="<?=appDir::imagesFolder()?>DREEMER.JPG">
<meta charset="utf-8" />
</head>
<body >

<div id="container">
 
</div>

<form action="?app=Register" method="post">
<div class="background" style="height: 90vmin;">
<div class="insert-dreem-box" style=" position:fixed; top:12%;left: 50%;margin-left:-60vmin; width:120vmin ">
<ul>	
<li><h3 style="color:white;font-family:arial;padding-left:2vmin;padding-right:1vmin;font-size:3vmin;position:absolute;top:4%">FIRSTNAME(S).</h3>
<input type="text" size="50"style="position:absolute; top:13%;left:7%; font-fmaily:arial;font-weight:bold; font-size:3vmin"cols="6" name="firstname" ></li>
<li><h3 style="color:white;font-family:arial;padding-left:2vmin;padding-right:1vmin;font-size:3vmin;position:absolute;top:15%">LASTNAME.</h3>
<input type="text"  size="50"style="position:absolute; top:24%;left:7%; font-fmaily:arial;font-weight:bold; font-size:3vmin" cols="6" name="lastname" ></li>
<li><h3 style="color:white;font-family:arial;padding-left:2vmin;padding-right:1vmin;font-size:3vmin;position:absolute;top:26%">LOCATION.</h3>
<input type="text"  size="50"style="position:absolute; top:35%;left:7%; font-fmaily:arial;font-weight:bold; font-size:3vmin"cols="6" name="location" ></li>
<li><h3 style="color:white;font-family:arial;padding-left:2vmin;padding-right:1vmin;font-size:3vmin;position:absolute;top:37%">AGE.</h3>
<input type="text"  size="50"style="position:absolute; top:46%;left:7%; font-fmaily:arial;font-weight:bold; font-size:3vmin"cols="6" name="age" ></li>
<li><h3 style="color:white;font-family:arial;padding-left:2vmin;padding-right:1vmin;font-size:3vmin;position:absolute;top:48%">EMAIL ADRESS.</h3> 
<input type="text"  size="50"style="position:absolute; top:57%;left:7%; font-fmaily:arial;font-weight:bold; font-size:3vmin"cols="6" name="email" ></li>
<li><h3 style="color:white;font-family:arial;padding-left:2vmin;padding-right:1vmin;font-size:3vmin;position:absolute;top:59%">PASSWORD.</h3>
<input type="password" size="50"style="position:absolute; top:68%;left:7%; font-fmaily:arial;font-weight:bold; font-size:3vh" cols="6" name="password" ></li>
<li><h3 style="color:white;font-family:arial;padding-left:2vmin;padding-right:1vmin;font-size:3vmin;position:absolute;top:70%">CONFIRM PASSWORD.</h3>
<input type="password" size="50"style="position:absolute; top:79%;left:7%; font-fmaily:arial;font-weight:bold; font-size:3vmin" name="confirm-password" cols="6" rows="1" ></li>
</ul>
<div class ="button">
	
	<Button style="color:black;text-decoration:none; border:none; 
font-family:arial;padding-left:1vmin;padding-right:1vh;font-size:5vh;font-weight:bold; position:absolute;top:88%;left:7vmin;background-color:white;">CONTINUE</Button></h3>
	 <input type="hidden" name="Tokken" value="<?=Token::makeToke();?>" /> 
</div>
</div>
</div>
</form>


<div class="super-div">
	<div class="options" style="font-family:arial">
		<div id="profile" style="background-color:black;"><h2 style="color:white">COMPLETE SIGNUP.</h2></div></a>
		<div id="create" style="background-color:black;" ><h2 style="color:white">COMPLETE SIGNUP.</h2></a></div>
		<div id="search" style="background-color:black;"><h2 style="color:white">COMPLETE SIGNUP.</h2></div></a>
	</div>
</div>
</body>
<!--PROBLEMS I HAVE WITH THIS PAGE 
	I CAN'T MAKE THE LOGIN FEATURES STAY ON THE LEFT 
	I CANT KEEP THE BLACK BOX IN THE MIDDLE 
-->
</html>
