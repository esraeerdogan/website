<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMIP.php';

$email = isset($_POST['email']) ? $_POST['email'] : null;

$subject = isset($_POST['subject']) ? $_POST['subject'] : 'Konu';

$content = isset($_POST['content']) ? $_POST['content'] : null;



if($email){
    echo "Lütfen e-mail giriniz."
}
elseif(!$content)
{
    echo "Lütfen mail içeriğini yazınız."
}
else{
    $mail = new PHPMailer(true);
    try()
    
}











?>