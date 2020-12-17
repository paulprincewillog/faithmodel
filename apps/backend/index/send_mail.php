<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require "../../../initialize.php";
    require '../_lib/PHPMailer.php';
    require '../_lib/PHPMailer-SMTP.php';
    require '../_lib/PHPMailer-Exception.php';
    $x = [];

    $mail = new PHPMailer(true);
        
    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_CONNECTION;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'otwopaul@gmail.com';                     // SMTP username
        $mail->Password   = 'o21997ogheneminE';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('otwopaul@gmail.com', 'Your website');
        $mail->addAddress('otwopaul@gmail.com', 'Paul Princewill');

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Someone sent you an email from your website';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
        
        $x['dd_success'] = true;
        $x['dd_feedback'] = "success"; 

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
        $x['dd_success'] = false;
        $x['dd_feedback'] = "Failed"; 
    }
    
    echo json_encode($x);