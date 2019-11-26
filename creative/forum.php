<?php
//include 'classes/class_forum.php';

//$forum = new Forum();
?>
<!DOCTYPE html>
<html>
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Forúm</title>



        <!-- Font Awesome Icons -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Theme CSS - Includes Bootstrap -->
        <link href="css/creative.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <?php
        include '../navbar.php'; // ELA ETSA ALI SÓ ESTA BRANCA MSM
        ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1">
                </div>


                <div class="col-md-10" style="margin-top: 90px;">
                    <div class="shadow p-3 mb-5 bg-white rounded">
                        <div class="row">
                            <div class="flex-column">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">URI</a>

                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Resistencia Série</a>

                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Resistencia Paraleleo</a>

                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Resistencia Misto</a>

                                     <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-pri" role="tab" aria-controls="v-pills-settings" aria-selected="false">PRI</a>

                                      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-pur" role="tab" aria-controls="v-pills-settings" aria-selected="false">PUR</a>

                                       <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-pui" role="tab" aria-controls="v-pills-settings" aria-selected="false">PUI</a>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><form method="post" action="forum.php">
                                        <input type="text" name="postagem" placeholder="Faça sua pergunta..." title="Postagem">
                                        <input type="submit" value="->">
                                        </form></div>

                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>

                                     <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>

                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>

                                     <div class="tab-pane fade" id="v-pills-pri" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>

                                      <div class="tab-pane fade" id="v-pills-pur" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>

                                       <div class="tab-pane fade" id="v-pills-pui" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <div class="col-md-1">
                </div>




                <?php

                ?>



            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-light py-5">
            <div class="container">
                <div class="small text-center text-muted">Copyright &copy; 2019 - FarPhysic</div>
            </div>
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Custom scripts for this template -->
        <script src="js/creative.min.js"></script>


    </body>
</html>
