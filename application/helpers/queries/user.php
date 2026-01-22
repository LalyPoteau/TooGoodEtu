<?php
require_once 'application/core/database.php';

function user($email, $mdp) {
  $pdo = get_pdo();
  $sql = 'select * from user where email=? and mdp=sha1(?)';
  $query = $pdo->prepare($sql);
  $query->execute([$email, $mdp]);
  $result =  $query->fetchAll();
  if (count($result) == 0)
    return NULL;
  else
    return $result[0];
}

function checkUser($email) {
  $pdo = get_pdo();
  $sql = 'select * from user where email=?';
  $query = $pdo->prepare($sql);
  $query->execute([$email]);
  $result =  $query->fetchAll();
  if (count($result) == 0)
    return false;
  else
    return true;
}

function createUser($login, $email, $mdp, $commercant){
  $pdo = get_pdo();
  $sql = 'insert into user (login, mdp, email, commercant) values (?, sha1(?), ?, ?)';
  $query = $pdo->prepare($sql);
  $query->execute([$login, $mdp, $email, $commercant]);
  return $pdo->lastInsertId();
}
