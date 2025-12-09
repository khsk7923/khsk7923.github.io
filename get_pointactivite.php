<?php
    include("connexion.php");
    header('Content-Type: text/html; charset=utf-8');
    // Where
    $where = "";
    $sql = "SELECT OGR_FID as id, nom as nom, code_posta as code, ST_AsGeoJSON(zones_activite_sociale.shape) as coordonnees FROM zones_activite_sociale" . $where;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysqli_error($conn);
        exit;
    }
    $liste_point_activite = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $liste_point_activite[] = array("ID" => $row["id"], "NOM" => utf8_encode($row["nom"]), "Coordonnees" => $row["coordonnees"],"CODE POSTAL" => $row["code"]);
     }
?>