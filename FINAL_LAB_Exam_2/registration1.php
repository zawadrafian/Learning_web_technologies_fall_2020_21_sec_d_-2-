<?php

 $id=$_GET["Id"];
 $pass=$_GET["pass"];
 $cpass=$_GET["cpass"];
 $name=$_GET["name"];
 $email=$_GET["email"];
 $utype=$_GET["utype"];
 if($pass==$cpass){
    $query1="insert into registration VALUES('$id','$pass','$cpass','$name','email','utype')";

mysqli_query($conn,$query1);
echo "done"
 }
 else{
	 echo "Confirm Password doesnot match";
	 
	 
 }










?>