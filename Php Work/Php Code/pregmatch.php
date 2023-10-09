<?php
$str = "demo";
$pattern = "/demo/i";
echo preg_match($pattern, $str);
?>
<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); 

?>
<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "demo", $str); 
?>