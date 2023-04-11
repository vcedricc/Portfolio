<?php
// Vérification des données du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $email = $phone = $subject = $message = "";
    
    // Vérification du nom
    if (!empty($_POST["name"])) {
      $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $name_error = "Seuls les lettres et les espaces sont autorisés";
      }
    } else {
      $name_error = "Le nom est obligatoire";
    }
    
    // Vérification de l'email
    if (!empty($_POST["email"])) {
      $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "L'adresse email est invalide";
      }
    } else {
      $email_error = "L'email est obligatoire";
    }
    
    // Vérification du numéro de téléphone
    if (!empty($_POST["phone"])) {
      $phone = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
      if (!preg_match("/^[0-9]{10}$/",$phone)) {
        $phone_error = "Le numéro de téléphone doit comporter 10 chiffres";
      }
    } else {
      $phone_error = "Le numéro de téléphone est obligatoire";
    }
    
    // Vérification de l'objet
    if (!empty($_POST["subject"])) {
      $subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    } else {
      $subject_error = "L'objet est obligatoire";
    }
    
    // Vérification du message
    if (!empty($_POST["message"])) {
      $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    } else {
      $message_error = "Le message est obligatoire";
    }
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers PHPMailer
require '../../PHPMailer/src/Exception.php';
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';

// Vérifier si le formulaire a été soumis
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['subject']) && isset($_POST['message'])) {
    // Récupérer les données du formulaire
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Appeler la fonction pour envoyer l'e-mail
    envoi_mail($name, $email, $phone, $subject, $message);
}

function envoi_mail($name, $email, $phone, $subject, $message){
    // Créer une instance de PHPMailer
    $mail = new PHPMailer();

    // Configurer les paramètres SMTP de Gmail
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'varesanocedric@gmail.com';
    $mail->Password = 'bwchfosneiwlcwct';
    $mail->Port = 465;

    // Configurer l'e-mail à envoyer
    $mail->setFrom($email, $name);
    $mail->addAddress('varesanocedric@gmail.com','DevCed');
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->setLanguage('fr', '/optional/path/to/language/directory/');

    // Envoyer l'e-mail
    if (!$mail->send()) {
        echo $mail->ErrorInfo;
    } else {
        echo "<h1>Votre message a été envoyé</h1>";
        echo "<p>Cette fenêtre se fermera automatiquement dans 
            <span id=\"countdown\">5</span> secondes</p>"; 
            echo "<script>
            var seconds = 5;
            var countdown = setInterval(function() {
                seconds--;
                document.getElementById('countdown').textContent = seconds;
                if (seconds <= 0) {
                    clearInterval(countdown);
                    window.close();
                }
            }, 1000);
        </script>";    
    }
}
