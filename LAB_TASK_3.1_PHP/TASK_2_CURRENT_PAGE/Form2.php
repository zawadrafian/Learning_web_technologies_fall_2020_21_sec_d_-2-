<?php
$a="";
if(isset($_POST["sub"])){
$a=$_POST["mail"];
}
echo $a;
?>


<html>
   <head>
     <title>Html Form 2</title>
   </head>
   <body>
   <form action="Form2.php" method="post">
     Email<br>
	 <input type="email" name="mail"><br><br>
	 <input type="submit" name="sub" value="Submit">
   
       </form>
   </body>





</html>