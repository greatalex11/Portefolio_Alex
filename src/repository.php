<?php


function connexionBD(): ?PDO
{
   $servname = 'localhost';
   $dbname = 'portefolio';
   $user = 'alex';
   $pass = 'alex';

   try {
      $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
      $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $dbco;
   } catch (PDOException $e) {
      var_dump($e);
      return null;
   }
}

function saveDataForm($data): int
{
   $dbco = connexionBD();
   $sth = $dbco->prepare("INSERT INTO message(nom, prenom, email, message,date) VALUES(:nom,:prenom,:email,:message,:date)");

   $sth->execute(array(
      ":nom" => $data["nom"],
      ":prenom" => $data["prenom"],
      ":email" =>  $data["email"],
      ":message" => $data["msg"],
      ":date" => date("Y-m-d"),
   ));
   return $dbco->lastInsertId();
}


function returMessage(): array
{
   $dbco = connexionBD();
   $sth = $dbco->prepare("SELECT * FROM message ORDER BY id DESC LIMIT 1");
   $sth->execute();
   $result = $sth->fetch(PDO::FETCH_ASSOC);

   return $result;
}
