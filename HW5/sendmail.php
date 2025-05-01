<?php
$link = mysqli_connect(
    'localhost',
    'root',
    '',
    'hw'
);
$userName=$_GET["userName"];
mysqli_set_charset($link, "utf8");

$no;
$userEmail;
$userPhoto;

$sql = "SELECT * FROM hw WHERE Name='$userName'";
if ($result = mysqli_query($link, $sql)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $no = $row["no"];
        $userEmail = $row["email"];
        $userPhoto = $row["photo"];
    }
}
echo "姓名: $userName<br>";
echo "信箱: $userEmail<br>";
echo "照片連結: $userPhoto<br>";
echo "<img src='$userPhoto' alt='photo' style='width:75%'><br>";
echo "<br>";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
   
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'ryan940725@gmail.com';                     
    $mail->Password   = '';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    $mail->setFrom('ryan940725@gmail.com', 'Mailer');
    $mail->addAddress($userEmail);              
    $mail->isHTML(true);                                 
    $subject="恭喜註冊網站";
    $mail->CharSet = "UTF-8";
    $mail->Subject = $subject;
    $mail->Body    = "
    恭喜".$userName."註冊成功<br>
    以下是你上傳的照片<br>
    <img src='$userPhoto' alt='photo' style='width:75%'><br>";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>