<?php
    include("./Scripts/php/connectToDb.php");

    $query = $db -> query("DELETE FROM `Pages` WHERE `id`=".$_POST['id'].";");
?>