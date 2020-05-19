<?php

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    
    function mailUser($email,$otp){
            
        //Create instance of PHPMailer
        $mail = new PHPMailer();
        //Set mailer to use smtp
            $mail->isSMTP();
        //Define smtp host
            $mail->Host = "smtp.gmail.com";
        //Enable smtp authentication
            $mail->SMTPAuth = true;
        //Set smtp encryption type (ssl/tls)
            $mail->SMTPSecure = "tls";
        //Port to connect smtp
            $mail->Port = "587";
        //Set gmail username
            //$mail->Username = "developer.adi.kotkar@gmail.com";
            $mail->Username = "events.iste.vesit@gmail.com";
        //Set gmail password
            //$mail->Password = "sxkmrqplsickjcjx";
            $mail->Password = "owmkjwpfkckerluw";
        //Email subject
            $mail->Subject = "OTP for 221B Baker Street";
        //Set sender email
            //$mail->setFrom('developer.adi.kotkar@gmail.com');
            $mail->setFrom('events.iste.vesit@gmail.com');
        //Enable HTML
            $mail->isHTML(true);
        //Email body
            $mail->Body = "<h1>Welcome to 221B Baker Street.</h1></br><p>Requested OTP: ".$otp."</p></br><p>Have fun solving the mystery!</p>";
        //Add recipient
            $mail->addAddress($email);
        //Finally send email
            if ( $mail->send() ) {
                echo "Email Sent..!";
            }else{
                echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
            }
        //Closing smtp connection
            $mail->smtpClose();
    
    }


    function mailUserRegistered($email,$otp){
            
        //Create instance of PHPMailer
        $mail = new PHPMailer();
        //Set mailer to use smtp
            $mail->isSMTP();
        //Define smtp host
            $mail->Host = "smtp.gmail.com";
        //Enable smtp authentication
            $mail->SMTPAuth = true;
        //Set smtp encryption type (ssl/tls)
            $mail->SMTPSecure = "tls";
        //Port to connect smtp
            $mail->Port = "587";
        //Set gmail username
            //$mail->Username = "developer.adi.kotkar@gmail.com";
            $mail->Username = "events.iste.vesit@gmail.com";
        //Set gmail password
            //$mail->Password = "sxkmrqplsickjcjx";
            $mail->Password = "owmkjwpfkckerluw";
        //Email subject
            $mail->Subject = "OTP for 221B Baker Street";
        //Set sender email
            //$mail->setFrom('developer.adi.kotkar@gmail.com');
            $mail->setFrom('events.iste.vesit@gmail.com');
        //Enable HTML
            $mail->isHTML(true);
        //Email body
            $mail->Body = "<h1>Welcome to 221B Baker Street.</h1></br><p>(Registered) Requested OTP: ".$otp."</p></br><p>Have fun solving the mystery!</p>";
        //Add recipient
            $mail->addAddress($email);
        //Finally send email
            if ( $mail->send() ) {
                echo "Email Sent..!";
            }else{
                echo "Message could not be sent. Mailer Error: "{$mail->ErrorInfo};
            }
        //Closing smtp connection
            $mail->smtpClose();
    
    }

