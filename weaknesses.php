<?php
//handle signup logic
if(getFormData()!=false)
{
	$skills = $_POST["weak"];
			
		if(count($skills)<1 || count($skills)>3)
		{
			echo "You must pick 3 weakness.";
			
		}else
		{
			//clean skills
			$skills[0] = escape($skills[0]);
			$skills[1] = escape($skills[1]);
			$skills[2] = escape($skills[2]);
			
			$stage3 = Sessions::get('stage2');			
			$stage3['weak'] = implode(",", $skills);
			
			/*****Insert into database here*********/
			$user = new Users();
			$user->create('dreamers',$stage3);
			
			/**************************************/			
			Sessions::delete('stage2');
			Sessions::put('reg', 'done');
			$fileDatabase = FDBase::getInstance('application/models',"theRealAjay", "manIWIshIwasIsaac", "helpIngHand");
			$fileDatabase->openDB();
			$fileDatabase->setFields("dreamLander", array("email"=>0));
			$fileDatabase->insert("dreamLander", array("email"=>$stage3['email']));
			$fileDatabase->closeDB();
			Dir::createDir(appDir::modelsFolder()."sleeping/".$stage3['email']);
			
			redirect_to('?app=doneReg');
		}
	
	
}else if(!Sessions::exists('stage2'))
{
	if(Sessions::exists('stage1'))
	{
		redirect_to("?app=Strengths");
	}else
	{
		redirect_to("?app=Register");
	}
}
?>

<!DOCTYPE html>

</div>

<form action="" method="Post">
 <div class="background" style="height: 90vh;">
 	
		
	<div id="grid" style="top:67%;left:40%;padding-bottom:10vh;width:60%;height:60%">
		<h1 style="position:center;color:white;font-size:5vh">SELECT YOUR THREE MAIN WEAKNESSES</h1>
		
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
  </form>
 