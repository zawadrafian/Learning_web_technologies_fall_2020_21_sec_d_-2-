<?php
$a="";
if(isset($_POST["sub"])){
$a=$_POST["gndr"];
}
echo $a;
?>

<html>
   <head>
     <title>Html Form 3</title>
   </head>
   <body>
   <form action="Form3.php" method="post">
     <fieldset>
	    <legend>Gender</legend>
    
	 <input type="radio" name="gndr" value="Male">Male
	  <input type="radio" name="gndr" value="Female">Female
	   <input type="radio" name="gndr" value="Other">Other<br>
	
        </fieldset>
		 <input type="submit" name="sub" value="Submit">
    </form>

   </body>





</html>