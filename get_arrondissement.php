<?php
   
    include("connexion.php");
    header('Content-Type: text/html; charset=utf-8');
    // Where
    $where = "";
    $sql = "SELECT OGR_FID as id, c_arinsee as code, surface as surface,ST_AsGeoJSON(arrondissements.shape2) as coordonnees FROM arrondissements" . $where;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysqli_error($conn);
        exit;
    }
    $liste_arrondissement = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $liste_arrondissement[] = array("ID" => $row["id"], "CODE POSTAL" => utf8_encode($row["code"]), "Coordonnees" => $row["coordonnees"],"Surface"=> $row["surface"]);
     }
?>