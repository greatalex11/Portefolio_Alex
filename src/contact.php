<?php
require __DIR__ . './../vendor/autoload.php';
require "repository.php";
require "lib.php";

session_start();
$envFilePath = __DIR__ . '/.env';

if (file_exists($envFilePath)) {
   $dotenvValues = parse_ini_file($envFilePath);
   $myPublicKey = $dotenvValues['myKeyPublic'];
   $myKeyPrivate = $dotenvValues['myKeyPrivate'];
}


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['recaptcha-response'])) {
   // je creer ma request pour google captcha
   $post_data = http_build_query(
      array(
         'secret' => $myKeyPrivate,
         'response' => $_POST['recaptcha-response'],
         'remoteip' => $_SERVER['REMOTE_ADDR']
      )
   );

   $opts = array(
      'http' =>
      array(
         'method'  => 'POST',
         'header'  => 'Content-type: application/x-www-form-urlencoded',
         'content' => $post_data
      )
   );

   $context  = stream_context_create($opts);
   // j'envois la requeste que j'ai créer a google et je stock la reponse
   $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
   if ($response) {
      $data = json_decode($response);

      if ($data->success) {

         if (checkDataForm($_POST['form'])) {
            $errors = regex($_POST['form']);

            if (empty($errors)) {
               $message = cleanDataForm($_POST['form']);
               $message_id = saveDataForm($_POST['form']);
               $sucess = "Message de {$message['nom']} envoyé et sauvegardé en base avec l'id {$message_id}";
               copyToMail($message);
               //mail de confirmation envoyé


               $msgBD = returMessage();
               $nomBD = $msgBD["nom"];
               $prenomnomBD = $msgBD["prenom"];
               $emailBD = $msgBD["email"];
               $date = $msgBD["date"];
               $messageBD = $msgBD["message"];
               // retour BD :dernier enregistrement

               echo json_encode(["success" => true, "message" => $sucess]);
               echo json_encode(["success" => true, "confirmation" => $messageBD, $date, $emailBD]);
               //Affichage d'une fenêtre de récap
               return;
            } else {
               echo json_encode(["success" => false, "message" => $errors]);
               return;
            }
         } else {
            echo json_encode(["success" => false, "message" => "Le formulaire n'est pas bien rempli"]);
            return;
         }
      } else {
         echo json_encode(["success" => false, "message" => "Google captcha ma répondu non"]);
         return;
      }
   } else {

      echo json_encode(["success" => false, "message" => "Google capatcha ma pas répondu"]);
      return;
   };
};
