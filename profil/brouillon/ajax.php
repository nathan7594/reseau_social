<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div id="message"></div>
</body>
</html>
<script>
$.post(
    'ajaxx.php', // Le fichier à appeler sur le serveur.
    'false',
    load_message, //fonction de retour
    'text' // Format des données retournées par le serveur
);

setInterval('load_message()',500);
        function load_message(){
            $('#message').load('ajaxx.php')
        }
</script>


