<?php
// handle signup logic
if (getFormData () != false) {
	$skills = $_POST ["skills"];
	
	if (count ( $skills ) < 1 || count ( $skills ) > 3) {
		echo "You must pick 3 skills.";
	
	} else {
		// clean skills
		$skills [0] = escape ( $skills [0] );
		$skills [1] = escape ( $skills [1] );
		$skills [2] = escape ( $skills [2] );
		
		$stage2 = Sessions::get ( 'stage1' );
		Sessions::delete ( 'stage1' );
		
		$stage2 ['strong'] = implode ( ",", $skills );
		$_SESSION ['stage2'] = $stage2;
		Sessions::delete ( 'stage1' );
		redirect_to ( '?app=Weakness' );
	}

} else if (! Sessions::exists ( 'stage1' )) {
	if (Sessions::exists ( 'stage2' )) {
		redirect_to ( "?app=Weakness" );
	} else {
		redirect_to ( "?app=Register" );
	}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dreemer ı Strengths</title>
<link href="<?=appDir::cssFolder()?>b.css" type="text/css"
	rel="stylesheet" />
<link rel="icon" href="<?=appDir::imagesFolder()?>DREEMER.JPG">
<meta charset="utf-8" />
</head>
<body>
	<div id="container"></div>

	<form action="?app=Strengths" method="Post">
		<div class="background" style="height: 90vh;">

<div id="grid" style="top:67%;left:40%;padding-bottom:10vh;width:60%;height:60%">
				<h1 style="position: center; color: white; font-size: 5vh">SELECT
					YOUR THREE MAIN STRENGTHS</h1>

				<label><input type="checkbox" value="sport" name="skills[]" /><span>SPORT</span></label><!--
	--> 
                                <label><input type="checkbox" value="event" name="skills[]" /><span>EVENT</span></label> <!--
	-->
                                <label><input type="checkbox" name="skills[]" value="political" /><span>POLITICAL</span></label><!--
	-->
				<label><input type="checkbox" value="acting" name="skills[]" /><span>ACTING</span></label> <!--
	-->
                                <label><input type="checkbox" value="science" name="skills[]" /><span>SCIENCE</span></label><!--
	-->
				<label><input type="checkbox" value="tech" name="skills[]" /><span>TECH</span></label><!--
	-->
                                <label><input type="checkbox" value="design" name="skills[]" /><span>DESIGN</span></label> <!--
	-->
                                <label><input type="checkbox" value="gaming" name="skills[]" /><span>GAMING</span></label> <!--
	-->
                                <label><input type="checkbox" value="other" name="skills[]" /><span>OTHER</span></label>


				<Button
					style="position: absolute; top: 70%; left: 1%; font-family: arial; color: black; background-color: white; font-size: 5vh; padding-right: 3vh; padding-left: 3vh">CONFIRM</button>
				<input type="hidden" name="Tokken" value="<?=Token::makeToke();?>" />
			</div>
		</div>
	</form>



	<div class="super-div">
		<div class="options" style="font-family: arial;">
			<div id="profile">
				<h2>COMPLETE SIGNUP.</h2>
			</div>
			<div id="create">
				<h2>COMPLETE SIGNUP.</h2>
			</div>
			<div id="search">
				<h2>COMPLETE SIGNUP.</h2>
			</div>
		</div>
	</div>



</body>
</html>	