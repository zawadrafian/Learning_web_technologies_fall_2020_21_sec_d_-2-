<?php
$myfile = fopen("registration.txt", "w") or die("Unable to open file!");
$txt1="hello world\n";
fwrite($myfile, $txt1);

fclose($myfile);


?>	