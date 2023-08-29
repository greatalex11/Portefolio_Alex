<?php

function checkDataForm($data): bool
{
   if (
      isset($data['name']) && !empty($data['name']) &&
      isset($data['subject']) && !empty($data['subject']) &&
      isset($data['email']) && !empty($data['email']) &&
      isset($data['msg']) && !empty($data['msg'])
   ) {
      return true;
   } else {
      return false;
   }
}

function cleanDataForm($data): array
{
   $data["name"] = strip_tags($data['name']);
   $data["email"] = strip_tags($data['email']);
   $data["subject"] = strip_tags($data['subject']);
   $data["msg"] = strip_tags($data['msg']);

   return $data;
}
