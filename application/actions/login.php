<?php
require_once 'application/helpers/queries/user.php';

$user = user($email, $mdp);

if ($user==NULL){
  header('Location: ' . URL_INDEX . "?page=login");
} else {
  $_SESSION["id"]= $user["id"];
  $_SESSION["login"]= $user["login"];
  header('Location: ' . URL_INDEX);
}
