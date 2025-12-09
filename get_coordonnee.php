<?php
    include("connexion.php");
    header('Content-Type: text/html; charset=utf-8');
    // Where
    $where = "";
    $sql = "SELECT OGR_FID as id, dénominat as denominat, adresse,code_étab as code, ST_AsGeoJSON(ecoles.shape) as coordonnees FROM ecoles" . $where;
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysqli_error($conn);
        exit;
    }
    $liste = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $liste[] = array("ID" => $row["id"], "NOM" => utf8_encode($row["denominat"]), "ADRESSE" => utf8_encode($row["adresse"]), "Coordonnees" => $row["coordonnees"],"CODE_ETAB" => $row["code"]);
     }
    //  echo json_encode($liste);
  
?>