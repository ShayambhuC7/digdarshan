<?php 





use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/src/PHPMailer.php";

require_once "PHPMailer/src/SMTP.php";

require_once "PHPMailer/src/Exception.php";

$mail = new PHPMailer(true);

$mail->SMTPDebug=0;

$mail->isSMTP();

$mail->Host="smtp.gmail.com";

$mail->SMTPAuth=true;

$mail->SMTPOptions = array(

'ssl' => array(

	'verify_peer' => false,
'verify_peer_name'=>false,
'allow_self_signed'=>true

)
);


$mail->Username="digdarshantourism@gmail.com";
$mail->Password='wewx okqq kgam zeoa';
$mail->SMTPSecure="tls";
$mail->Port = 587;
$mail->From="digdarshantourism@gmail.com";
$mail->FormName="Digdarshan";
$mail->addAddress("digdarshantourism@gmail.com","Digdarshan");
$mail->isHTML(true);
$mail->Subject="Contact From Email";
$message="

<table>

<tr><td>Name:</td><td>" . $_POST['name'] . "</td></tr>
<tr><td>Phone No:</td><td>" . $_POST['mobile'] . "</td></tr>
<tr><td>Email No:</td><td>" . $_POST['email'] . "</td></tr>

<tr><td>Place:</td><td>" . $_POST['place'] . "</td></tr>


<tr><td>Message:</td><td>" . $_POST['message'] . "</td></tr>
</table>
";


$mail->Body = $message;
try{

	$mail->send();
	
echo '<script>alert("Message Sent Successfully.")</script>';
echo "<script>window.location.href ='index.html'</script>";
}
catch(Exception $e){

echo "Mailer Error:". $mail->ErrorInfo;

}


?>