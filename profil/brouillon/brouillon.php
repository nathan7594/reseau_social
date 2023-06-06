<?php
// Ce fichier ajoute un message dans la base de données
// session_start();
// include "../config.php";
// include "../connectDb.php";

// // On vérifie la méthode
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     echo "ok1"." "."<br>";
  
//     // On vérifie si l'utilisateur est connecté
//     if(isset($_SESSION['id'])){
//         echo "ok2"."<br>";
//         // L'utilisateur est connecté
//         // On récupère le message
//         // $donneesJson = '{"message":"ok"}';
//         // $donneesJson = 'php://input';
//         $donneesJson = file_get_contents('php://input');
//         print_r($donneesJson);
//         echo $donneesJson;
//         // $search="=";
//         // $replace=":";
//         // $ok=str_replace($search,$replace,$donneesJson);
//         //  $test = explode("=",$donneesJson);
//             // print_r($test);
//         // On convertit les données
//         $donnees = json_decode($donneesJson);
//         echo $donnees."<br>";
       
//         // On convertit les données en objet PHP
//         // $donnees = json_decode($donneesJson,true);
//         // var_dump($donnees);
//         // if(json_last_error() == JSON_ERROR_SYNTAX){
//         //     echo 'La chaine de caractères ne correspond pas à un format JSON valide';
//         // }
        
//         // On vérifie si on a un message
//         if(isset($donnees->message) && !empty($donnees->message)){
//             require_once('../config.php');
//             require_once('../connectDb.php');
//             echo "oui";
//             // On a un message
//             // On le stocke
//             // On se connecte

//             // On écrit la requête
//             $sql = 'INSERT INTO `post`(`message`, `users_id`) VALUES (:users_id, :content);';
//             // $sql = $conn->prepare('INSERT INTO post(users_id,content)VALUES(:users_id, :content)');
//             // $sql->execute(array('users_id' => $_SESSION['id'],'content' => $content));

//             // On prépare la requête
//             $query = $conn->prepare($sql);

//             // On injecte les valeurs
//             $query->bindValue(':content', strip_tags($donnees->message), PDO::PARAM_STR);
//             $query->bindValue(':user_id', $_SESSION['user']['id'], PDO::PARAM_INT);

//             // On exécute en vérifiant si ça fonctionne
//             if($query->execute()){
//                 http_response_code(201);
//                 echo json_encode(['message' => 'Enregistrement effectué']);
//             }else{
//                 http_response_code(400);
//                 echo json_encode(['message' => 'Une erreur est survenue']);
//             }
//         }else{
//             // Pas de message
//             http_response_code(400);
//             echo json_encode(['message' => 'Le message est vide']);
//         }
//     }else{
//         // Non connecté
//         http_response_code(400);
//         echo json_encode(['message' => 'Vous devez vous connecter']);
//     }
// }else{
//     // Mauvaise méthode
//     http_response_code(405);
//     echo json_encode(['message' => 'Mauvaise méthode']);
// }
// ?>
// <?php
// include "../session.php";
// include "../connectDb.php";
// echo "Bienvenue ".$_SESSION["nom"]." "."<br>";

// $content = $_POST["message"];
// $id = $_SESSION['id'];
// // $sql = "SELECT * FROM users INNER JOIN post ON users.id = post.users_id";
// $req = $conn->prepare('INSERT INTO post(users_id,content)VALUES(:users_id, :content)');
// $req->execute(array('users_id' => $_SESSION['id'],'content' => $content));
// $result = $req->fetchAll();
// $sql = ("SELECT * from post");
// $res = $conn->query($sql);
// $res1 = $res->fetchAll();
// // print_r($res1)." "."<br>";
// foreach($res1 as $res){
//     echo $res["users_id"];
//     echo $res["content"]." "."<br>";
// }

?>
<?php

// include "../connectDb.php";
// include "../session.php";
// $content = $_POST["message"];
// // $sql = "SELECT * FROM users INNER JOIN post ON users.id = post.users_id";
// $req = $conn->prepare('INSERT INTO post(users_id,content)VALUES(:users_id, :content)');
// $req->execute(array('users_id' => $_SESSION['id'],'content' => $content));
// $sql = ("SELECT * from post");
// $res = $conn->query($sql);
// $res1 = $res->fetchAll();
// foreach($res1 as $res){
//     echo $res["users_id"];
//     echo $res["content"]." "."<br>";
// }
// // $sql = "SELECT * FROM users INNER JOIN post ON users.id = post.users_id";
// // $verif_user = $conn->prepare("SELECT id FROM users WHERE id = ?",
// // array($_SESSION['id']));
// // $verif_user = $verif_user->fetch();
// // echo $verif_user;
?>
<!-- <div id="message">
<?php while($row = $res->fetch(PDO::FETCH_ASSOC)) : ?>
     <tr>
       <td><?php echo htmlspecialchars($row['content']); ?></td>
     </tr>
     </div>
     <?php endwhile; ?> -->
     <!-- <div id="messages">
<form method="POST" action="post.php">
        <label>Tape ton message ici pour m'écrire</label>
        <input id="texte" rows="2" cols="30" name="message"></input>
        <input id="valid" type="submit">
    </form>
    </div>
    <section id="message" class="message"></section>
   
     <script>
        setInterval('load_message()',500);
        function load_message(){
            $('#message').load('loadMessages.php')
        }

     </script> -->
     <!-- // Format des données retournées par le serveur
  // setInterval('load_message()',500);
  //       function load_message(){
  //           $('#message').load("loadMessages.php")
  //       } -->