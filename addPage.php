<?php
    include("./Scripts/php/connectToDb.php");

    $query = $db -> query("INSERT INTO `PAGES` (`title`,`subtitle`,`color`) VALUES ('".$_POST['title']."','".$_POST['subtitle']."','".$_POST['color']."')");
?>