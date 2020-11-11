<?php
$a="";
if(isset($_POST["sub"])){
$a=$_POST["nm"];
}
echo $a;
?>






<html>
   <head>
     <title>Html Form 1</title>
   </head>
   <body>
    <form action="" method="post">
   <fieldset>
   <legend>NAME</legend>
 
	 <input type="text" name="nm"><br><br>
	 <input type="submit" name="sub" value="Submit">
	  </fieldset>
   
       </form>
	  
       </body>





</html>