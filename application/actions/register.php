<?php
require_once 'application/helpers/queries/user.php';

// Etape 1 : verifier que l'utilisateur n'est pas déjà connecté
if (isset($_SESSION["id"]) == true)
  header('Location: ' . URL_INDEX);

// Etape 2 : controler les mdp (mdp == mdp1)
if ($mdp != $mdp1)
  header('Location: ' . URL_INDEX . "?page=register");

// Etape 3 : vérifier que l'adresse mail n'est pas déjà utilisée
if (checkUser($email) == true)
  header('Location: ' . URL_INDEX . "?page=register");

// Etape 4 : créer le compte
// Par défaut il s'agit d'un compte utilisateur et non commercant (False)
$id = createUser($login, $email, $mdp, False);

// Etape 5 : rediriger l'utilisateur vers le form de login ou connecter l'utilisateur
$_SESSION["id"]= $id;
$_SESSION["login"]= $login;

header('Location: ' . URL_INDEX);
