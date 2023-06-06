<?php
include "../connectDb.php";
include "../session.php";

$sql=("SELECT * FROM post");
$res=$conn->query($sql);
while($row = $res->fetch(PDO::FETCH_ASSOC)){?>
<div>
    <tr>
        <td>
            <?php echo htmlspecialchars($row['content']); ?>
        </td>
     </tr>
</div>
<?php
}