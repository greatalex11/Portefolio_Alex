<?php


function connexionBD(): ?PDO
{
   $servname = 'localhost';
   $dbname = 'formulairephp2';
   $user = 'alex';
   $pass = 'alex';

   try {
      $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
      $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $dbco;
   } catch (PDOException $e) {
      return null;
   }
}

function saveDataForm($data): int
{
   $dbco = connexionBD();
   $sth = $dbco->prepare("INSERT INTO message(nom,email,sujet,message,date)
                        VALUES(:nom,:email,:sujet,:message,:date)");

   $sth->execute(array(
      ":nom" => $data["name"],
      ":email" =>  $data["email"],
      ":sujet" => $data["subject"],
      ":message" => $data["msg"],
      ":date" => date("Y-m-d"),
   ));
   return $dbco->lastInsertId();
}





function returMessage(): array
{
   $dbco = connexionBD();
   $sth = $dbco->prepare("SELECT * FROM message ORDER BY id_contact DESC LIMIT 1");
   $sth->execute();
   $result = $sth->fetch(PDO::FETCH_ASSOC);

   return $result;
}
