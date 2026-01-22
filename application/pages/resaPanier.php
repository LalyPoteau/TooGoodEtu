<?php
require_once 'application/helpers/queries/panier.php';

$panier = panier_par_id($index);

echo $blade->run("resaPanier", compact('panier'));



?>