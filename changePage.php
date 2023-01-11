<?php
    include("./Scripts/php/connectToDb.php");

    $query = $db -> query("UPDATE `Pages` 
    SET `title`='".$_POST["title"]."', 
    `subtitle`='".$_POST["subtitle"]."', 
    `content`='".$_POST["content"]."', 
    `color`='".$_POST["color"]."' 
    WHERE `id`='".$_POST["id"]."';");
    print_r($query);
?>