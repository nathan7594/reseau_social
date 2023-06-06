<?php
include "../../config.php";
include "../../connectDb.php";
include "../../session.php";

if(isset($_GET['user'])){

    $user = $_GET['user']; 
    $sql = $conn->prepare("SELECT * FROM `users` WHERE nom LIKE ? LIMIT 10");
    $sql->execute(array("$user%"));
    $nombre = $sql->rowCount();

        if($nombre > 0){
            foreach($sql as $ok){
                ?>
                <li><a href="utilisateur/utilisateur.php?id=<?php echo $ok['id']; ?>"><?php echo $ok["nom"]." ".$ok["prenom"]."<br>";?></li>
                <?php
            }
        }
        else{
            echo "Aucun utilisateur trouvé";
        }
}
?>




        