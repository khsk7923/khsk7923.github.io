<?php
    include("connexion.php");
    header('Content-Type: text/html; charset=utf-8');
    // Where
    $where = "";
    $sql = "SELECT OGR_FID as id, nom as nom, adresse,tel as tel, ST_AsGeoJSON(hopitaux.shape) as coordonnees FROM hopitaux" . $where;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysqli_error($conn);
        exit;
    }
    $liste_hopital = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $liste_hopital[] = array("ID" => $row["id"], "NOM" => utf8_encode($row["nom"]), "ADRESSE" => utf8_encode($row["adresse"]), "Coordonnees" => $row["coordonnees"],"Telephone" => $row["tel"]);
     }
    //echo json_encode($liste_hopital);
?>