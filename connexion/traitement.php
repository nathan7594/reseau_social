<?php

function verification(){
    include "../connectDb.php";
    session_start();
    $inputemail = $_POST['email'];
    $inputmdp = md5($_POST['mdp']);
    $sql ="SELECT * FROM `users` WHERE email='".$inputemail."'";
    $res = $conn->query($sql); // $res renvoie un objet qu'il faut mettre dans un tableau pour itéré dessus
    // $sql1= "SELECT mdp FROM `users` WHERE email='".$inputemail."'"; 
    // $res1 = $conn->query($sql1);
    // Explication on récupère tout deja dans la premiere requete pourquoi rerécupérer la meme chose ?
        
        foreach($res as $row){
            $id = $row['id'];
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $email = $row['email'];
            $mdp = $row['mdp'];
        }
        if($row['email'] == $inputemail && $row['mdp'] == $inputmdp){
            header("Location:../profil/profil.php");
        }
        else{
            echo "Mauvais E-mail";
        }
        $_SESSION['id'] =$id;
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['email'] = $email;
        $_SESSION['mdp'] = $mdp;
        
        // foreach($res1 as $row1){
        //     if($row['email'] == $inputemail && $row1['mdp'] == $inputmdp){
        //         header("Location:../profil/profil.php");
        //     }
        //     else{
        //         echo "Mauvais E-mail";
        //     }
    
        // }

        

}
verification();






?>