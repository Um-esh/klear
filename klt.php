<?php
$myfile = fopen("wfile.txt", "w") or die("Unable to open file!");
$skt="".include('l.php')."";
$txt = ".$skt.";

fwrite($myfile, $txt);
//$txt = ".include('con.php').";
fwrite($myfile, $txt);
fclose($myfile);
?>