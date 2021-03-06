<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Início</title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.min.css" rel="stylesheet">

    <style>

        #imgCircuitos{
            width: 450px;
            height: 250px;
        }

        #sla{
            display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
width: 100%;
height: 100%;
position: absolute;
bottom: 0;
text-align: center;
opacity: 0;
color: #fff;
background: rgba(244,98,58,.9);
transition: opacity .25s ease;
text-align: center;
        }

    </style>

</head>

<body id="page-top">

  <?php
    include '../navbar.php';
    ?>

  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Não use em provas!</h1>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Projeto de cálculos em circuítos pré-definidos, para o aprendizado de Física e com intuíto de fixar o conteúdo em seus estudos.</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Veja mais!</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="text-white mt-0">Em disponibilidade no sistema!</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4">No menu superior é apresentado <u>sobre</u> o conteúdo de Física (com relação a circuitos elétricos). Também apresentando os <u>circuitos</u> pré-definidos como exemplos, sendo possível a alteração de seus atributos. Não menos importante, sobre as <u>Calculadoras</u> disponívei e que fazem. Para o tópico <u>Fórum</u>, é possível comentar sobre cada circuito ou cálculo apresentado</p>
          <a class="btn btn-light btn-xl js-scroll-trigger" href="#">Conteúdo</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
      <h2 class="text-center mt-0">Calculadoras</h2>
      <hr class="divider my-4">
      <div class="row">
        <div class="col-lg-2 col-md-6 text-center">
          <div class="mt-5">
              <a href="../circuitos/uri.php"><i class="fas fa-4x fa-gem text-primary mb-4"></i>
            <h3 class="h4 mb-2">U = R . I</h3>
            <p class="text-muted mb-0">Calculadora da Formula URI</p></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 text-center">
          <div class="mt-5">
            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
              <a href="index.php#portfolio"><h3 class="h4 mb-2">Req</h3>
            <p class="text-muted mb-0">Calculadora de resistencias equivalentes.</p></a>
          </div>


        </div>
        <div class="col-lg-2 col-md-6 text-center">
          <div class="mt-5">
            <a href="../circuitos/pui.php"><i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">P = U . I</h3>
                <p class="text-muted mb-0">Calculadora da Formula PUI</p></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 text-center">
          <div class="mt-5">
            <a href="../circuitos/pur.php"><i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">P = U² . R</h3>
              <p class="text-muted mb-0">Calculadora da Formula PUR</p></a>
          </div>
        </div>
         <div class="col-lg-2 col-md-6 text-center">
          <div class="mt-5">
            <a href="../circuitos/pri.php"><i class="fas fa-4x fa-globe text-primary mb-4"></i>
            <h3 class="h4 mb-2">P = R . I</h3>
              <p class="text-muted mb-0">Calculadora da Formula PRI</p></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CIRCUITOS -->
  <section id="circuitos">
     <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
         <a class="portfolio-box" href="../circuitos/serie.php" id="imgCircuitos">
            <img class="img-fluid" src="circuitos_img/serie_1.png" alt="Circuito Serie 1">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Circuito Série
              </div>
              <div class="project-name">
                4 Resistores - 1 Bateria
              </div>
            </div>
             </a>
        </div>
        <div class="col-lg-4 col-sm-6">
         <a class="portfolio-box" href="../circuitos/serie.php" id="imgCircuitos">
            <img class="img-fluid" src="circuitos_img/serie_2.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Circuito Série
              </div>
              <div class="project-name">
                7 Resistores - 1 Bateria
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="../circuitos/serie.php" id="imgCircuitos">
            <img class="img-fluid" src="circuitos_img/serie_3.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Circuito Série
              </div>
              <div class="project-name">
                5 Resistores - 1 Baterias
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="../circuitos/paralelo.php" id="imgCircuitos">
            <img class="img-fluid" src="circuitos_img/paralelo_1.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Circuito Paralela
              </div>
              <div class="project-name">
               3 Resistores - 1 Baterias
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="../circuitos/paralelo.php" id="imgCircuitos">
            <img class="img-fluid" src="circuitos_img/paralelo_2.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Circuito Paralela
              </div>
              <div class="project-name">
                4 Resistores - 1 Baterias
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
         <a class="portfolio-box" href="../circuitos/paralelo.php" id="imgCircuitos">
            <img class="img-fluid" src="circuitos_img/paralelo_3.png" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Circuito Paralela
              </div>
              <div class="project-name">
                5 Resistores - 1 Baterias
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
         <a class="portfolio-box" href="../circuitos/misto3.php" id="imgCircuitos">
            <img class="img-fluid" src="circuitos_img/misto_1.png" alt="" style="height: 250px">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Circuito Misto
              </div>
              <div class="project-name">
               8 Resistores - 1 Baterias
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
           <a class="portfolio-box" href="../circuitos/misto2.php" id="imgCircuitos">
            <img class="img-fluid" src="circuitos_img/misto_2.png" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Circuito Misto
              </div>
              <div class="project-name">
                7 Resistores - 1 Baterias
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
           <a class="portfolio-box" href="../circuitos/misto.php" id="imgCircuitos">
            <img class="img-fluid" src="circuitos_img/misto_3.png" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Circuito Misto
              </div>
              <div class="project-name">
                4 Resistores - 1 Baterias
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Faça o login para iniciar!</h2>
      <a class="btn btn-light btn-xl" href="../sb-admin-2/index.php">Login aqui!</a>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Fórum</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Faça suas perguntas! Ou dê sua opnião!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 ml-auto text-center mb-5 mb-lg-0">
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="../creative/forum.php">Iniciar</a>
        </div>
      </div>
    </div>
  </section>

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
