<?php
$a="";
$b="";
$c="";
$d="";

if(isset($_POST["sub"])){
$a=$_POST["day"];
$b=$_POST["month"];

$c=$_POST["year"];
$d="/";

}
echo $a.$d.$b.$d.$c;


?>

 <html>
   <head>
     <title>Html Form 4</title>
   </head>
   <body>
   <form action="" method="post">
     <fieldset>
	    <legend>Date Of Birth</legend>
    
	<table>
	  <tr>
	     <th>dd </th>
		 <th>mm </th>
		 <th>yyyy </th>
	   
	   
	   </tr>
	   <tr>
	     <td><input type="text" name="day"> / </td>
		   <td><input type="text" name="month"> / </td>
		     <td><input type="text" name="year"></td>
	   
	   
	   </tr>
	   
	   <tr>
	    <td><input type="submit" name="sub" value="Submit"></td>
	   </tr>
	
	
	</table>
	
        </fieldset>
		 
    </form>

   </body>





</html>