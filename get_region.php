<?php
    include("connexion.php");
    header('Content-Type: text/html; charset=utf-8');
    // Where
    $where = "";
    $sql = "SELECT OGR_FID as id, nom as nom, code_insee as code, surf_km2 as surface,ST_AsGeoJSON(regions.shape) as coordonnees FROM regions" . $where;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysqli_error($conn);
        exit;
    }
    $liste_region = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $liste_region[] = array("ID" => $row["id"], "NOM" => utf8_encode($row["nom"]), "CODE" => utf8_encode($row["code"]), "Coordonnees" => $row["coordonnees"],"Surface"=> $row["surface"]);
     }
?>