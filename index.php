<?php
include("./Scripts/php/connectToDb.php");

$query = $db->query("SELECT * FROM `Pages`");
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
        <div class="container">
            <!-- Banner -->
            <div class="row">
                <div class="col-12 banner">
                    <h1 class="title">STRONA GŁÓWNA</h1>
                </div>
            </div>
            <!-- Body -->
            <div class="row pb-5">
                <div class="col-7 offset-1">
                    <div class="content">
                        <!-- PHP -->
                        <?php
                            foreach ($rows as $row) {
                                echo '
                                    <div class="page">
                                        <h1 class="pageTitle">
                                            '.$row["title"].'
                                        </h1>
                                        <h3 class="pageSubtitle">
                                            '.$row["subtitle"].'
                                        </h3>
                                        <h5 class="smth">
                                            '.$row["color"].'
                                        </h5>
                                        <a href="templatePage.php?id='.$row["id"].'">Go to website</a>
                                    </div>
                                ';
                            }
                        ?>
                        <!-- /PHP -->
                        
                        <img class="add-button" id="addButton" src="./Source/HomePageContent/PagePhotos/add-icon.png" alt="Add_Button" data-bs-toggle="modal" data-bs-target="#exampleModal"/>

                            <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <label for="title">Tytuł</label>
                                    <input type="text" name="title" id="title"><br>
                                    <label for="subtitle">Podtytuł</label>
                                    <input type="text" name="subtitle" id="subtitle"><br>
                                    <label for="color">Kolor</label>
                                    <input type="color" name="color" id="color">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="createButton">Create Page</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-2 offset-1">
                    <div class="menu">
                        <h5>MENU</h5>
                        <!-- PHP -->
                            <?php
                            for($i = 0; $i < 5; $i++) {
                                if(isset($rows[$i]["title"]))
                                    echo '
                                        <hr>
                                        <p>'.$rows[$i]["title"].'</p>
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