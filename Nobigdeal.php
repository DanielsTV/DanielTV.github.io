<html>
<title>Contact</title>
<head>
<link rel="stylesheet" type="text/css" href="Nobigdeal.css"/>
<link href="skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
	
	<script src="js/jquery-1.6.3.min.js"></script>
	<script src="js/jquery.skitter.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script>
	$(document).ready(function() {
		
		var options = {};
	
		if (document.location.search) {
			var array = document.location.search.split('=');
			var param = array[0].replace('?', '');
			var value = array[1];
			
			if (param == 'animation') {
				options.animation = value;
			}
			else if (param == 'type_navigation') {
				if (value == 'dots_preview') {
					$('.border_box').css({'marginBottom': '40px'});
					options['dots'] = true;
					options['preview'] = true;
				}
				else {
					options[value] = true;
					if (value == 'dots') $('.border_box').css({'marginBottom': '40px'});
				}
			}
		}
		
		$('.box_skitter_large').skitter(options);
		
		// Highlight
		$('pre.code').highlight({source:1, zebra:1, indent:'space', list:'ol'});
		
	});
	</script>

<style type="Text/css">
.error{
color:#ff0000;
}

#header{
height:750px;
width:350px;
float:right;
text-align:left;
background:#00112b;
color:#ffffff;
border-radius:50px;
}

#header input{
padding:10px;
width:300px;
border-radius:20px;
}

#head{
height:750px;
width:850px;
float:left;
text-align:center;
background-image:url(image/Z1.jpg);
background-repeat:no-repeat;
background-size:650px 750px;
font-size:30px;
color:#ffffff;
border-radius:50px;
}
#head h2{
color:#00112b;
font-size:70px;
}

</style>

</head>
<body>

<div class="Container">
<div id="Headcon">
         <div id="Headcon-left">
         <img src="Pictures/meme.png">
		 <label>DANIELTV.COM</label>
		 <strong>THE BEST WEB DEVELOPER SITE.</strong>
        </div>
		
		
		<div id="Headcon-right">
		     <div id="Headcon-up">
			  <p><span style="Color:#00ff00;">FOR</span> MORE <span style="Color:violet;">INFORMATION</span> <span style="Color:skyblue;">PLEASE</span> <span style="Color:#ff0404;">VISIT</span> <span style="Color:orange;">THE</span> <span style="Color:#ffffff;">FOLLOWING:</span></p> 
			 </div>
			<div id="Headcon-down">
			<a href="https://www.facebook.com/ target" target="_blank"><img src="Pictures/dota_2_by_jjcool87-dagbd0q.png"></a>
			<a href="https://www.facebook.com/ target" target="_blank"><img src="Pictures/dota_2_icon_for_windows_7_by_excharny-d5ook5y.png"></a>
			<a href="https://www.facebook.com/ target" target="_blank"><img src="Pictures/meme.png"></a>
		    </div>
      </div>
</div>

 <div id ="Navigation">
   <div class="fullwidth">
     <header class ="mainheader">
      <nav>
	  <ul>
	     <li><a href = "Excercise5.html"><b><span style="color:#00ff00;">HOME</span></b></a></li>
		 <li><a href = "channel.html"><b>CHANNEL</b></a></li>
		 <li><a href = "Videos.html"><b>VIDEOS</b></a></li>
		 <li ><a href = "about.html"><b>ABOUT</b></a></li>
		 <li><a href = "Nobigdeal.php"><b>CONTACT</b></a></li>
		 <li><a href = "news.html"><b>NEWS</b></a></li>
		 <li><a href = "Media.html"><b>MEDIA</b></a></li>
		 <li><a href = "DanielTv.html"><b>DANIEL'S TV.COM</b></a></li>
		 <li><a href = "More innformation.html"><b>MORE INFORMATION</b></a></li>
	   </ul>
	   </nav>
	   </header>
	   </div>


</div>

        <div id="Body">
                   
				
<div id="Body-right">
           
		   <div class="box_skitter box_skitter_large " style= " z-index:0;">
				<ul>
					<li><a href="#blindHeight"><img src="image/Ronald1.jpg" class="random" /></a></li>
					<li><a href="#blindWidth"><img src="image/Ronald2.jpg" class="random" /></a></li>
					<li><a href="#blindHeight"><img src="image/Ronald3.jpg" class="random" /></a></li>
					<li><a href="#blindWidth"><img src="image/Ronald4.png" class="random" /></a></li>
					<li><a href="#blindHeight"><img src="image/Ronald5.jpg" class="random" /></a></li>
			        <li><a href="#blindHeight"><img src="image/Ronald6.png" class="random" /></a></li>
                    <li><a href="#blindHeight"><img src="image/Ronald7.jpg" class="random" /></a></li>
					<li><a href="#blindHeight"><img src="image/Ronald8.jpg" class="random" /></a></li>
					<li><a href="#blindHeight"><img src="image/Ronald9.jpg" class="random" /></a></li>
				</ul>
			</div>  

      </div> 
                     
</div>


<?php


$nameErr=$emailErr=$genderErr=$websiteErr=$IDErr="";
$name=$email=$gender=$comment=$website=$ID="";




if($_SERVER["REQUEST_METHOD"]=="POST"){
    
	if(empty($_POST["txtid"])){
	  $IDErr = "ID is required";
	}else{
	 $ID = test_input($_POST["txtid"]);	
	 if(!Ctype_digit($ID)){
	 $IDErr = "Error please input Number Only";
	 }
	}
	
	
	  
	if(empty($_POST["name"])){
	  $nameErr = "name is required";
	}else{
	 $name = test_input($_POST["name"]);	
	 if(!preg_match("/^[a-zA-Z]*$/",$name)){
	 $nameErr = "Error, Only name and white space are allowed";
	 }
	}
	
	
	
	  
	if(empty($_POST["email"])){
	  $emailErr = "email is required";
	}else{
	 $email = test_input($_POST["email"]);	
	 if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	 $emailErr = "Error, Invalid E-mail";
	 }
	}
	
	
	
	  
	if(empty($_POST["website"])){
	  $websiteErr = "website is required";
	}else{
	 $website = test_input($_POST["website"]);	
	 if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)){
	 $websiteErr = "Error, Invalid URL";
	 }
	}


    if(empty($_POST["comment"])){
	  $commentErr = "";
	}else{
	 $comment = test_input($_POST["comment"]);	
	}


    if(empty($_POST["gender"])){
	  $genderErr = "Gender is required";
	}else{
	$gender = test_input($_POST["gender"]);	
	}



} //end

function test_input($data){
   $data =trim($data);
   $data =stripslashes($data);
   $data =htmlspecialchars($data);
   return $data;
}



?>

<div id="header">

<h2><center>Example of Validation Form!</h2>
<hr>
<p><center><span class="error">*Required Value</span></center></p>

<?php include('Niceone.php'); ?>

<form method="post" action="<?php echo htmlspecialchars($_SEVER["PHP_SELF"]);?>">

<fieldset style="border-radius:10px;">
<label>Your ID:<label>
<input type="text" name="txtid" placeholder="Your id here!" value="<?php echo $ID;?>">
<span class="error">*<?php echo $IDErr; ?></span>
</fieldset>

<fieldset style="border-radius:10px;">
<label>Your name:<label>
<input type="text" name="name" placeholder="Your name here!" value="<?php echo $name;?>">
<span class="error">*<?php echo $nameErr; ?></span>
</fieldset>

<fieldset style="border-radius:10px;">
<label>Your email:<label>
<input type="text" name="email" placeholder="Your email here!" value="<?php echo $email;?>">
<span class="error">*<?php echo $emailErr; ?></span>
</fieldset>

<fieldset style="border-radius:10px;">
<label>Your website:<label>
<input type="text" name="website" placeholder="Your website here!" value="<?php echo $website;?>">
<span class="error">*<?php echo $websiteErr; ?></span>
</fieldset>

<fieldset style="border-radius:10px;">
<label>Your Comment Here!:<label>
<textarea name="comment" rows="5" cols="40" style="border-radius:10px;" placeholder="Your Commnet Here!" value="<?php echo $comment; ?>"></textarea>
</fieldset>

<fieldset style="border-radius:10px;">
<label>Gender:</label>
<input type="radio" name="gender"   <?php if (isset($gender) && $gender=="Female") echo "checked";?>  value="Female" style="width:30px;">Female
<input type="radio" name="gender"   <?php if (isset($gender) && $gender=="Male") echo "checked";?>  value="Male" style="width:30px;">Male
<span class="error">*<?php echo $genderErr; ?></span>
<br><br>
<input type="submit" name="submit" value="Submit" style="background:red; color:white; font-size:20px; cursor:pointer; font-family:century;">
</fieldset>
</form>

</div>

<div id="head">
<?php
echo "<H2>Your Output here!</h2>";
//echo "<hr>";
echo  $ID;
echo "<br>";
echo  $name;
echo "<br>";
echo  $email;
echo "<br>";
echo  $website;
echo "<br>";
echo  $comment;
echo "<br>";
echo  $gender;
echo "<br>";

?>
</div>














</div>
</body>
</html>