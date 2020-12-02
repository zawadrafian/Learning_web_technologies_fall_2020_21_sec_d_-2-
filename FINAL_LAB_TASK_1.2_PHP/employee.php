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
	  $query1="insert into employee VALUES('$ename','$cno','$uname','$pass')";

mysqli_query($conn,$query1);
echo "done";




}
else{
	$hasError="";
	
}

}


if(isset($_POST["rm"])){
	if(empty($_POST["un"])){
		$err3="*";
		$hasError=true;
		
		
	}
	else{
		$uname=$_POST["un"];
		
		
	}
if($hasError!=true){
	  $query2="DELETE FROM `employee` WHERE username='$uname'";

mysqli_query($conn,$query2);
echo "done1";



}

else{
	$hasError="";
	
}
	

}

if(isset($_POST["sr"])){
	
	if(empty($_POST["un"])){
		$err="*";
		$hasError=true;
		
		
	}
	else{
      $uname=$_POST["un"];
	echo"  
	
   <table>
   <tr>
	    <td>Employee Name</td>
		<td>Contact No</td>
		<td>User Name</td>
		<td>Password</td>
		
	  
	  </tr>
	 ";

$result = mysqli_query($conn,"SELECT * FROM `employee` where `username`='$uname'" );
while($row = mysqli_fetch_assoc($result)){
	$ename1 = $row['Employee name'];
  $cno1 = $row['contact no'];
$uname1 = $row['username'];
$pass1 = $row['password'];


    echo "
  
      <tr>
	    <td>'".$ename1."'</td>
		<td>'".$cno1."'</td>
		<td>'".$uname1."'</td>
		<td>'".$pass1."'</td>
		
	  
	  </tr>";
}
	echo" </table>
   ";
   

    


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
					  <input type="submit"name="rm" value="REMOVE" style="margin-left:100px;">
					   <input type="submit"name="sr" value="SEARCH" style="margin-left:100px;">
                   </div>
				  </fieldset>
				 </form>
				</center>
				</body>
			</html>