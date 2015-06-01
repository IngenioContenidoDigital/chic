<?php
if(isset($_POST['email'])) { 
    $email_to = "daniel.quinones@ingeniocontenido.co";
    $email_subject = "contacto web chic";
    $email_from=$_POST['email'];
    $email_message=$_POST['message'];
 
    /*function died($error) {
        // your error code can go here
        echo "Lo sentimos ocurrio un error";
        echo "Estos fueron los errores.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor intentelo de nuevo.<br /><br />";
        die();
    }
 
    // validation expected data exists 
    if(!isset($_POST['from']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('Lo sentimos pero ocurrio un problema con el envio');       
    }
 
     
    $first_name = $_POST['from']; // required
    $last_name = $_POST['message']; // required
    $email_from = $_POST['subject']; // required 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'La direccion de correo no es valida<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'El nombre parece no ser correcto<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
  
  $email_message = "Form details below.\n\n";
 
function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

    $email_message .= "First Name: ".clean_string($first_name)."\n"; 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";*/
 
// create email headers
/*$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();*/

$cabeceras = 'From: no-responder@chicperformance.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($email_to, $email_subject, $email_from.': '.$email_message,$cabeceras);  
header("Location: index.php");
}
?>