<?php
require_once 'application/helpers/queries/panier.php';

$panier = panier_par_id($index);



//Array
//(
//    [0] => Array
//        (
//            [id] => 2
//            [dateRetrait] => 2025-06-11
//            [heureDebut] => 14:00:00
//            [heureFin] => 14:30:00
//            [img_url] => img/s1.png
//            [prix] => 6.99
//            [nbPanier] => 3
//            [description] => Le crous gourmand vous propose de récupérer un panier surprise ; retrouvez un assortiment de minimum 5 composantes parmi entrées, sandwich, pasta box et/ou paninis
//            [idEntreprise] => 1
//            [idCategorie] => 2
//            [nom] => Crous Gourmand
//            [adresse] => IUT de Lens, rue de l'université
//            [ville] => LENS
//            [codePostal] => 62300
//            [intitule] => Repas
//        )
//
//)

echo $blade->run("visupanier", compact('panier'));



?>