<?php
$a="";
$b="";

$c="";
$d="<br>";
if(isset($_POST["sub"])){
	
 if(isset($_POST["deg1"])){
$a=$_POST["deg1"];
}
if(isset($_POST["deg2"])){
$b=$_POST["deg2"];
}

if(isset($_POST["deg3"])){
$c=$_POST["deg3"];
}
}
echo $a.$d.$b.$d.$c;

?>


<html>
   <head>
     <title>Html Form 5</title>
   </head>
   <body>
   <form action="" method="post">
     <fieldset>
	    <legend>Degree</legend>
    
	 <input type="Checkbox" name="deg1" value="SSC">SSC
	  <input type="Checkbox" name="deg2" value="HSC">HSC
	   <input type="Checkbox" name="deg3" value="Bsc">Bsc<br>
	
        </fieldset>
		 <input type="submit" name="sub" value="Submit">
    </form>

   </body>





</html>