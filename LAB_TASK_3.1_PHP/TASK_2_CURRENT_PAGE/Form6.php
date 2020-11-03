
<?php
if(isset($_POST["sub"])){
echo $_POST["bg"];
}
?>
 
 
<html>
   <head>
   <title>Html Form 6</title>
   </head>
     <body>
	   <form action="" method="post">
	      Blood Group
		  <select name="bg">
		     <option value="A+">A+</option>
			  <option value="B+">B+</option>
			   <option value="O+">O+</option>
			   <option value="AB+">AB+</option>
			    <option value="AB-">AB-</option>
				 <option value="B-">B-</option>
				  <option value="O-">O-</option>
		  
		  
		  </select><br>
	   ____________________________ <br><br>
	   <input type="submit" name="sub" value="Submit">
	   
	   
	   </form>
	 
	 
	 
	 
	 </body>




</html>