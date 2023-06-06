<?php 
include "../session.php";
$nom = $_SESSION["nom"];
$prenom = $_SESSION["prenom"];
$email = $_SESSION["email"];
$mdp = $_SESSION["mdp"];
echo "Bienvenue"." ".$prenom;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <title>Document</title>
</head>
<body>
<a href="modification/modification.php">Modification information personnelle<a/>
<a href="deconnexion/deconnexion.php">Deconnexion<a/>
<div>
    <input type="text" value="" name="search-user" id="search-user" placeholder="Barre de recherche"/>
</div>
<div id="result-search"></div>
<div id="post"></div>
<div id="message"></div>
</body>
</html>
<script>
  $(document).ready(function(){
    $('#search-user').keyup(function(){
      $('#result-search').html('');
 
      var utilisateur = $(this).val();
 
      if(utilisateur != ""){
        $.ajax({
          type: 'GET',
          url: 'barrederecherche/barrederecherche.php',
          data: 'user=' + encodeURIComponent(utilisateur),
          success: function(data){
              $('#result-search').append(data);
            }
        });
      }
    });
  });
</script>
<script>  

function timestamp(){
    let timestamp1
    // console.log(timestamp1)
    if(timestamp1 == undefined){
      $.ajax({
        type:'GET',
        url:'load.php',
        success:function(response){
        timestamp1 = Date.parse(response)
        // console.log(timestamp1) 
      if (timestamp1 != undefined){
      $.ajax({
        type:'GET',
        url:'test.php',
        success:function(response){
        console.log(timestamp1)
        timestamp2 = Date.parse(response)
        console.log(timestamp2) 
        if(timestamp1 != timestamp2){
        console.log("ok")
        }
        else{
          console.log("nan")
        }
        }
      })
      }
     
        },

    })

    }
}
setInterval('timestamp()',2000);
timestamp()
// setInterval('timestamp',2000);






//   function timestamp(){ 
// let timestamp1
//   if(timestamp1 == undefined){
//   $.ajax({
//     type:'GET',
//     url:'load.php',
//     success:function(response){
//       timestamp1 = Date.parse(response)
//       console.log(timestamp1) 
//     },
//   })
// }

 
//     $.ajax({
//     type:'GET',
//     url:'test.php',
//     success:function(response){
//       let timestamp2 = Date.parse(response)
//       console.log(timestamp2)

//     }
//     })
//   }


// // }
    
// timestamp()
   

</script>


<!-- <script>
  $.ajax({
    type:GET,
    url:'post/post.php'

  })
</script> -->
