<?php
include("./Scripts/php/connectToDb.php");

$query = $db->query("SELECT * FROM `Pages`");
$rowsAll = $query -> fetchAll(PDO::FETCH_ASSOC);

$query = $db->query("SELECT * FROM `Pages` WHERE id=".$_GET["id"]."");
$rows = $query -> fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CMS WEBSITE</title>
        <link rel="stylesheet" href="./Source/HomePageContent/PageCss/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="background-image: linear-gradient(<?php print ($rows[0]["color"]) ?> 20%, rgba(153, 204, 255, 0.9) 96%)">
            <!-- Banner -->
            <div class="row">
                <div class="col-12 banner" style="background-image: linear-gradient(rgba(153, 204, 255, 0.9) 4%, <?php print ($rows[0]["color"]."cc") ?> 90%); box-shadow: 0px 10px 50px -10px <?php print ($rows[0]["color"]."cc") ?>;">
                    <h1 class="title" style="color: <?php print $rows[0]["color"] ?>; text-shadow: 3px 3px <?php print ($rows[0]["color"]."99") ?>"><?php print $rows[0]["title"] ?></h1>
                </div>
            </div>
            <!-- Body -->
            <div class="row pb-5">
                <div class="col-7 offset-1">
                    <div class="content">
                        <h3 class="subtitle"><?php print $rows[0]["subtitle"] ?></h3>
                        <p class="textArea" id="textArea"></p>
                    </div>
                </div>
                <div class="col-2 offset-1">
                    <div class="menu">
                        <h5>MENU</h5>
                        <!-- PHP -->
                            <?php
                            for($i = 0; $i < 3; $i++) {
                                if(isset($rowsAll[$i]["title"]))
                                    echo '
                                        <hr>
                                        <p>'.$rowsAll[$i]["title"].'</p>
                                    ';
                            }
                            ?>
                        <!-- /PHP -->
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div class="row footer">
                <p class="col-4">
                    Copyright &copy;2022
                </p>
                <p class="col-4">
                    Oskar Waszkiewicz
                </p>
                <p class="col-4">
                    IVGTP
                </p>
            </div>
        </div>    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        <script src="./Scripts/js/addingPage.js"></script>
    </body>
</html>