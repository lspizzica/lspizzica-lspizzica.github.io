<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    header('Content-Type: application/json'); // Définit le type de réponse en JSON

    if (!empty($name) && !empty($email) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            // Configuration SMTP pour Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'leo.spizzica@gmail.com'; // Remplacez par votre adresse Gmail
            $mail->Password = 'utae hqjr dkut ctlk  '; // Remplacez par votre mot de passe d'application Gmail
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Paramètres de l'email
            $mail->setFrom($email, $name);
            $mail->addAddress('leo.spizzica@gmail.com'); // Votre adresse de réception
            $mail->Subject = !empty($subject) ? $subject : "Nouveau message de contact";
            $mail->Body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

            $mail->send();
            echo json_encode(["status" => "success", "message" => "Message envoyé avec succès."]);
        } catch (Exception $e) {
            echo json_encode(["status" => "error", "message" => "Erreur lors de l'envoi du message. Veuillez réessayer plus tard."]);
        
            
        }
        
    } else {
        echo json_encode(["status" => "error", "message" => "Veuillez remplir tous les champs obligatoires."]);
    }
}
?>