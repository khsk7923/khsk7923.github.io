<?php
    
    include("connexion.php");

    mysqli_query($conn, "SET SESSION TRANSACTION ISOLATION LEVEL READ COMMITTED");
    mysqli_begin_transaction($conn);
    header('Content-Type: text/html; charset=utf-8');
    $where="";
    $sql = "SELECT OGR_FID as id, ncc as nom, dep as departement, ST_AsGeoJSON(communes.shape) as coordonnees FROM communes" . $where;
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysqli_error($conn);
        exit;
    }
    $liste_commune = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $liste_commune[] = array("ID" => $row["id"], "NOM" => utf8_encode($row["nom"]), "Departement" => utf8_encode($row["departement"]), "Coordonnees" => $row["coordonnees"]);
     }
     //echo json_encode($liste_commune)

     // 2_ecoles
                 
                 $ecoles="SELECT communes.insee AS code_insee, communes.nccenr AS nom_communes , ST_AsGeoJSON(communes.SHAPE) as coordonnees 
                 FROM communes, ecoles WHERE ST_Intersects(communes.SHAPE, ecoles.SHAPE) 
                 GROUP BY nom_communes,code_insee ,coordonnees 
                 HAVING count(communes.insee)>2 
                 ORDER BY communes.insee DESC ";

                 $result= mysqli_query($conn, $ecoles);
                 if (!$result) {
                 echo "Impossible d'exécuter la requête ($ecoles) dans la base : " . mysqli_error($conn);
                 exit;
                 }
     
                 $liste_2_ecoles = array();
                 while ($row = mysqli_fetch_assoc($result)) {
                     $liste_2_ecoles[] = array( "NOM" => utf8_encode($row["nom_communes"]), "Coordonnees" => $row["coordonnees"]);
                  }
     // 2_km_hop
                 $km_hop="SELECT communes.insee AS code_insee, 
                 communes.nccenr as nom_communes, 
                 ST_AsGeoJSON(communes.SHAPE) as coordonnees
                 FROM communes,hopitaux 
                 WHERE ST_Intersects(ST_Buffer(hopitaux.SHAPE, 0.02),  communes.SHAPE)
                 group by code_insee, nom_communes, coordonnees";
     
                 $result = mysqli_query($conn, $km_hop);
                 if (!$result) {
                 echo "Impossible d'exécuter la requête ($km_hop) dans la base : " . mysqli_error($conn);
                 exit;
                 }
     
                 $liste_2_km_hop= array();
                 while ($row = mysqli_fetch_assoc($result)) {
                     $liste_2_km_hop[] = array( "NOM" => utf8_encode($row["nom_communes"]), "Coordonnees" => $row["coordonnees"]);
                  }
     
     // pas_hopital
                 $pas_hopital="SELECT communes.insee AS code_insee, communes.nccenr as nom_communes, ST_AsGeoJSON(communes.SHAPE) as coordonnees FROM communes WHERE 
                 communes.insee NOT IN ( SELECT distinct communes.insee FROM communes, hopitaux WHERE 
                 st_intersects(ST_Buffer(hopitaux.SHAPE, 0.05), communes.SHAPE) ) order by code_insee";
     
                 $result = mysqli_query($conn,   $pas_hopital);
                 if (!$result) {
                 echo "Impossible d'exécuter la requête (  $pas_hopital) dans la base : " . mysqli_error($conn);
                 exit;
                 }
     
                 $liste_pas_hopital= array();
                 while ($row = mysqli_fetch_assoc($result)) {
                     $liste_pas_hopital[] = array( "NOM" => utf8_encode($row["nom_communes"]), "Coordonnees" => $row["coordonnees"]);
                  }
     
     // 1_zone_ac
                 $zone_ac="SELECT communes.insee AS code_insee, communes.nccenr as nom_communes, ST_AsGeoJSON(communes.SHAPE) as coordonnees 
                 FROM communes,zones_activite_sociale WHERE ST_Intersects(zones_activite_sociale.SHAPE, communes.SHAPE) group by code_insee, nom_communes ,coordonnees 
                 HAVING COUNT(zones_activite_sociale.code_posta) >2 ";
     
                 $result = mysqli_query($conn,   $zone_ac);
                 if (!$result) {
                 echo "Impossible d'exécuter la requête (  $zone_ac) dans la base : " . mysqli_error($conn);
                 exit;
                 }
     
                 $liste_1_zone_ac= array();
                 while ($row = mysqli_fetch_assoc($result)) {
                     $liste_1_zone_ac[] = array( "NOM" => utf8_encode($row["nom_communes"]), "Coordonnees" => $row["coordonnees"]);
                  }

    //  pas_ecole
    
                
                 $pas_ecole="SELECT communes.insee AS code_insee, communes.nccenr as nom_communes, ST_AsGeoJSON(communes.SHAPE) as coordonnees FROM communes WHERE 
                 communes.insee NOT IN ( SELECT distinct communes.insee FROM communes, ecoles WHERE 
                 st_intersects(ST_Buffer(ecoles.SHAPE,0.02), communes.SHAPE) ) order by code_insee";
     
                 $result = mysqli_query($conn,   $pas_ecole);
                 if (!$result) {
                 echo "Impossible d'exécuter la requête (  $pas_ecole) dans la base : " . mysqli_error($conn);
                 exit;
                 }
     
                 $liste_pas_ecole= array();
                 while ($row = mysqli_fetch_assoc($result)) {
                     $liste_pas_ecole[] = array( "NOM" => utf8_encode($row["nom_communes"]), "Coordonnees" => $row["coordonnees"]);
                  }

     
mysqli_commit($conn);  
?>