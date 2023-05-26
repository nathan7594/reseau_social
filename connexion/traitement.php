<?php

function verification(){
    include "../connectDb.php";
    session_start();
    $inputemail = $_POST['email'];
    $inputmdp = md5($_POST['mdp']);
    $sql ="SELECT * FROM `users` WHERE email='".$inputemail."'";
    $res = $conn->query($sql);
    $sql1= "SELECT mdp FROM `users` WHERE email='".$inputemail."'";
    $res1 = $conn->query($sql1);
        
        foreach($res as $row){
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $email = $row['email'];
        }

        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['email'] = $email;
        foreach($res1 as $row1){
            if($row1['mdp'] == $inputmdp){
                header("Location:../profil/profil.php");
            }
            else{
                echo "Mauvais E-mail";
            }
    
        }

        

}
verification();






?>