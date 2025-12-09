<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    <body>
        <h1></h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
	        $dbase='gis_database';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password,$dbase);
            $conn ->query("SET SESSION TRANSACTION ISOLATION LEVEL READ COMMITTED");

            //on verifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }
            echo '';
	    
        ?>
    </body>
</html>