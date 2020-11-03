<?php
$a="";
$b="";

$c="";
if(isset($_POST["deg1"])){
$a=$_POST["deg1"];
}
if(isset($_POST["deg2"])){
$b=$_POST["deg2"];
}

if(isset($_POST["deg3"])){
$c=$_POST["deg3"];
}
echo $a."<br>".$b."<br>".$c;

?>