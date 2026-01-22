<?php
require_once 'application/core/database.php';

        function paniers($date){
        $pdo = get_pdo();
        $sql = "select panier.*, categorie.intitule, entreprise.nom from panier
                inner join entreprise on panier.idEntreprise = entreprise.id
                inner join categorie on panier.idCategorie = categorie.id
                where dateRetrait=? order by dateRetrait, heureDebut";
        $query = $pdo -> prepare($sql);
        $query->execute([$date]);
        return $query->fetchAll();}

        function panier_par_id($id){
            $pdo =get_pdo();
            $sql = "select panier.*, entreprise.adresse, entreprise.codePostal, entreprise.nom, entreprise.ville, categorie.intitule from panier
                  join entreprise on panier.idEntreprise = entreprise.id
                  join categorie on panier.idCategorie = categorie.id
                where panier.id=?";
                        $query = $pdo -> prepare($sql);
        $query->execute([$id]);
        return $query->fetchAll();
    }

        
?>