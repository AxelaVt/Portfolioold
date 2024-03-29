<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexa Vermenot">
    <title>Portefolio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>

  <body data-spy="scroll" data-target="#myScrollspy" data-offset="1">

    <div class="container-fluid">
      <div id="top"><a class="nav-link" href="#home">
        <!-- <img src="img/treesf.png" alt="accueil"></a> -->
        <span>AlexaVermenot</span><img src="img/logo.png" alt="accueil"><span>WebDeveloper</span>
        <!-- ajouter logo -->
      </div>

      <div class="container" id="nav">
        <nav class="col-sm-6 col-8" id="myScrollspy">
           <ul class="nav nav flex-column">
            <li class="nav-item d col-sm3 col-4 ">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item g col-sm3 col-4">
              <a class="nav-link" href="#projets">Projets</a>
            </li>
            <li class="nav-item d col-sm3 col-4">
              <a class="nav-link" href="#article">Articles</a>
            </li>
            <li class="nav-item g col-sm3 col-4">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

<!-- page presentation -->
    <div class="container-fluid">
      <section class="row" id="about">
        <h1 class="col-sm-12 col-lg-6">About</h1>
        <p class="col-sm-12 col-lg-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Try to scroll this page and look at the menu while scrolling!</p>
      </section>
    </div>
    <!-- page projets -->
    <div class="container-fluid">
      <section class="row" id="projets">
        <h1 class="col-sm-12 col-lg-6">Projets</h1>
        <div class="card-body col-sm-12 col-lg-6">
            <div class="card">
              <img class="card-img-top p-2" src="img/Screenshot-projet-integration-bootstrap-.png" alt="bslite">
              <div class="card-img-overlay">
                <!-- <p class="card-text text-center">Intégration template BisLite avec HTML et framework bootstrap</p> -->
                <a href="#pageprojet" class="card-link"><p class="card-text text-center">Intégration template BisLite avec HTML et framework bootstrap</p></a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top p-2" src="img/Screenshot-projet-integration-html-css-.png" alt="gratia"></a>
              <div class="card-img-overlay">
                <!-- <p class="card-text text-center">Intégration template Gratia avec HTML CSS</p> -->
                <a href="#pageprojet" class="card-link"><p class="card-text text-center">Intégration template Gratia avec HTML CSS</p></a>
              </div>
            </div>
              <div class="card">
                  <img class="card-img-top p-2" src="img/bomberbird.png" alt="bomberbird">
                  <div class="card-img-overlay">
                    <!-- <p class="card-text text-center">Réalisation d'un bomberman en javascript</p> -->
                    <a href="#pageprojet" class="card-link"><p class="card-text text-center text-align-midle">Réalisation d'un bomberman en javascript</p></a>
                  </div>
              </div>
      </section>
    </div>
    <div class="container-fluid">
      <section class="row" id="projets">
        <h1 class="col-sm-12 col-lg-6">Projets</h1>
        <div class="card-body col-sm-12 col-lg-6">
            <div class="card">
              <img class="card-img-top p-2" src="img/Screenshot-projet-integration-bootstrap-.png" alt="bslite">
              <div class="card-img-overlay">
                <!-- <p class="card-text text-center">Intégration template BisLite avec HTML et framework bootstrap</p> -->
                <a href="#pageprojet" class="card-link"><p class="card-text text-center">Intégration template BisLite avec HTML et framework bootstrap</p></a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top p-2" src="img/Screenshot-projet-integration-html-css-.png" alt="gratia"></a>
              <div class="card-img-overlay">
                <!-- <p class="card-text text-center">Intégration template Gratia avec HTML CSS</p> -->
                <a href="#pageprojet" class="card-link"><p class="card-text text-center">Intégration template Gratia avec HTML CSS</p></a>
              </div>
            </div>
              <div class="card">
                  <img class="card-img-top p-2" src="img/bomberbird.png" alt="bomberbird">
                  <div class="card-img-overlay">
                    <!-- <p class="card-text text-center">Réalisation d'un bomberman en javascript</p> -->
                    <a href="#pageprojet" class="card-link"><p class="card-text text-center text-align-midle">Réalisation d'un bomberman en javascript</p></a>
                  </div>
              </div>
      </section>
    </div>
<!-- page articles -->
    <div class="container-fluid">
      <section class="row" id="article">
        <h1 class="col-sm-12 col-lg-6">Articles</h1>
        <div class="card-body col-sm-12 col-lg-6">
        </div>
      </section>
    </div>





    <div class="container-fluid">
      <section class="row" id="contact">
        <h1 class="col-sm-12 col-lg-6">Contact</h1>
        <div class="card-body col-sm-12 col-lg-6">
        </div>
      </section>
    </div>


</body>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
