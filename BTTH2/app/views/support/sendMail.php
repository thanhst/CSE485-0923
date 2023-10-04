<?php  
include(APP_ROOT."/PHPMailer/src/Exception.php");
include(APP_ROOT."/PHPMailer/src/PHPMailer.php");
include(APP_ROOT."/PHPMailer/src/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pass="dhxp srrv bteo hgza";
$mail =new PHPMailer;

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = 'thanhxk2003@gmail.com';
$mail->Password = $pass ;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->setFrom('thanhxk2003@gmail.com','LeQuangThanh');
$mail->addAddress($mailGet);
$mail->isHTML(true);
$mail->Subject='Email from localhost';
$mail->Body = $bodyContent;
$mail->addAttachment("../testMail/PHPMailer.zip");
$mail->addAttachment("../testMail/index.php","Folder of PHPMailer");
if($mail->send()&&$typeCheck=="forget"){
    header("Location:".DOMAIN."/public/index.php?controller=user&action=nofication&type=forget");
}
else if($mail->send() && $typeCheck== "check"){
    header("Location: ".DOMAIN."/public/index.php?controller=user&action=security");
}




