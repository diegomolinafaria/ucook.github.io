<?php 
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer//src/PHPMailer.php';
    require 'phpmailer//src/SMTP.php';
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    if($name != null && $email != null){
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		{
		    $signal = 'bad';
            $msg = 'E-mail inválido. Favor verificar';
        }
        else{
            $mail = new PHPMailer;
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.hostinger.com.br';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'contato@ucook.online';                 // SMTP username
            $mail->Password = '+ucook2019';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            
            $mail->setFrom('contato@ucook.online', 'uCook');
            $mail->addAddress('contato@ucook.online', 'uCook');     // Add a recipient
            $mail->addReplyTo($email, $name);
  
            $mail->isHTML(true);                                  // Set email format to HTML
            
            $mail->Subject = 'Novo inscrito - uCook';
            $mail->Body    = 'Nome: '.$name.' <br />E-mail: '.$email;
            
            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $signal = 'ok';
                $msg = 'Enviado com sucesso!';
            }
        }
    }
    else{
        $signal = 'bad';
        $msg = 'Preencha todos os campos.';
    }
    $data = array(
        'signal' => $signal,
        'msg' => $msg
    );
    echo json_encode($data);
?>