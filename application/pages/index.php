<?php

if (isset($_SESSION["id"]))
  header('Location: ' . URL_INDEX . "?page=panierdujour");


echo $blade->run("index");



?>
