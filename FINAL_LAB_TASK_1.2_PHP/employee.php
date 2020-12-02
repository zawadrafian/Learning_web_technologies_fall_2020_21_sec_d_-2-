<?php
$ename="";
$uname="";
$pass="";
$cno="";
$err1="";
$err2="";
$err3="";
$err4="";

$hasError="";
$servername="localhost";
$username="root";
$password="";
$dbname="wt_project";

$conn=mysqli_connect($servername,$username,$password,$dbname);



if(isset($_POST["add1"])){
	if(empty($_POST["en"])){
		$err1="*";
		$hasError=true;
		
		
	}
	else{
		$ename=$_POST["en"];
		
		
	}
    if(empty($_POST["cn"])){
		$err2="*";
		$hasError=true;
		
		
	}
	else{
		$cno=$_POST["cn"];
		
		
	}
      if(empty($_POST["un"])){
		$err3="*";
		$hasError=true;
		
		
	}
	else{
		$uname=$_POST["un"];
		
		
	}
	 if(empty($_POST["pass"])){
		$err4="*";
		$hasError=true;
		
		
	}
	else{
		$pass=$_POST["pass"];
		
		
	}
 if($hasError!=true){
	  $query2="insert into employee VALUES('$ename','$cno','$uname','$pass')";
//$query1="Select * from employee";
mysqli_query($conn,$query2);
echo "done";




}
else{
	$hasError="";
	
}

}












?>













<html >
    <head>
     
      <title>Management</title>
     </head>
     <body>
     
     <center>
        <form action="" method="post">
            <fieldset style="height: fit-content; width: fit-content;" name="sn">
                <legend>Employee</legend>
            
                <div id="container">
				     
                    <label>Employee Name:</label>
                    <input type="text" name="en">
					<label><?php echo $err1; ?></label><br>
                    
                    <label>Contact No:</label>
                    <input type="text" name="cn" >
					<label><?php echo $err2 ;?></label><br>
                    <label>UserName:</label>
                    <input type="text"name="un" >
					<label><?php echo $err3; ?></label><br>
					
					  <label>Password:</label>
                    <input type="password"name="pass" id="pass">
					<label><?php echo $err4; ?></label><br>
					 <input type="submit"name="add1" value="Register" style="margin-left:100px;">
					  <input type="submit"name="rm1" value="REMOVE" style="margin-left:100px;">
					   <input type="submit"name="src" value="SEARCH" style="margin-left:100px;">
                   </div>
				  </fieldset>
				 </form>
				</center>
				</body>
			</html>