<?php
$myfile = fopen("registration.txt", "w") or die("Unable to open file!");
$txt1="hello world\n";
fwrite($myfile, $txt1);

fclose($myfile);




if($hasError==false){
		$check=fopen("signup.txt","r");
		$content1=fread($check,filesize("signup.txt"));
		
		
		if(strpos($content1,$_POST["name"])!== false && strpos($content1,$_POST["pass"])!== false){
		 header("Profile.php");
	
		}
		else{
			echo "Invalid Information";
		}
	
}

?>	