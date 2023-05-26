<?php
        include 'config.php';
            try {
                $connString = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
                $conn = new PDO($connString, DB_USER, DB_PSWD);
                echo "connexion réussis" . "<br />";
            }
            catch(PDOException $e){
                die("Erreur : " . $e->getMessage());
            }
?>