<?php

function checkDataForm($data): bool
{
   if (
      isset($data['nom']) && !empty($data['nom']) &&
      isset($data['prenom']) && !empty($data['prenom']) &&
      isset($data['email']) && !empty($data['email']) &&
      isset($data['msg']) && !empty($data['msg'])

   ) {
      return true;
   } else {
      return false;
   }
}



function regex($data): string
{
   $a = "";
   $b = "";
   $c = "";
   if (!preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $data['email'])) {
      $a = 'L\'adresse ' . $data['email'] . ' est <strong>invalide</strong> !';
   } else if (!preg_match("#^[A-Za-z\é\è\ê\-]+$#", $data['nom'])) {
      $b = 'Le\'nom ' . $data['nom'] . ' est <strong>invalide</strong> !';
   } else if (!preg_match("#^[A-Za-z\é\è\ê\-]+$#", $data['prenom'])) {
      $c = 'Le\'prénom ' . $data['prenom'] . ' est <strong>invalide</strong> !';
   }
   $msgError = $a . $b . $c;
   return $msgError;
}


function cleanDataForm($data): array
{
   $data["nom"] = strip_tags($data['nom']);
   $data["prenom"] = strip_tags($data['prenom']);
   $data["email"] = strip_tags($data['email']);
   $data["msg"] = strip_tags($data['msg']);

   return $data;
}

function sendMail($data)
{
   mail(
      $data['email'],
      "Contact depuis mon portfolio",
      "Un message de ${data['nom']} ${data['prenom']} à été envoyé depuis le portfolio.

Le contenu du mesage est :
${data['msg']}
      "
   );
}
