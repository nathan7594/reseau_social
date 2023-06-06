<?php
include "../connectDb.php";
include "../session.php";
$sql=("SELECT * from post ORDER BY date DESC LIMIT 1");
$res=$conn->query($sql);
foreach($res as $row){
    echo $row["date"];
}
?>