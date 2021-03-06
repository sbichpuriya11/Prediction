<?php

include 'includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Project</title>
  <link rel="shortcut icon" href="raining.png" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/main.js"></script>
  <!--Bootstrap-->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!--Google Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <!--Fontawesome-->
  <script src="https://kit.fontawesome.com/ac8add5dc3.js" crossorigin="anonymous"></script>
  <!--Custom Bootstrap for celcius and farhenote toggling-->


</head>

<body class="bg">
  <div class="container-fluid background">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-transparent py-2">
        <a class="navbar-brand" href="#">
          <img src="logo.png" alt="">
        </a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div style="border:1px solid white; color:white!important;outline:none;border-radius: 2px; padding:3px;"><span class="navbar-toggler-icon"></span>Menu</div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 p-4">
            <input class="form-control mr-sm-2" type="search" style="font-size:12px" placeholder="Search City or Postcode" aria-label="Search" id="search-field">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search <i class="fas fa-search"></i></button>
          </form>
          <a href="" data-toggle="modal" type="button" data-placement="bottom" data-target="#mymodal">
            IN <i class="fas fa-globe-asia"></i> | C &deg; <i class="fas fa-caret-down"></i>
          </a>
          <div class="modal fade p-3" id="mymodal" role="dialog">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">





                  <div class="section text-left over-hide z-bigger">
                    <div class="col-12 pb-2">
                      <input class="checkbox-tools" type="radio" name="tools" id="tool-1" checked>
                      <label class="for-checkbox-tools" for="tool-1">&#176;C</label>
                      <input class="checkbox-tools" type="radio" name="tools" id="tool-2">
                      <label class="for-checkbox-tools" for="tool-2">&#176;F
                      </label>
                    </div>
                  </div>













                  <div class="accordion pt-5" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link w-100 text-left text-decoration-none text-info" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Asia
                          </button>
                        </h5>
                      </div>
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">

                        <div class="card-body text-dark">
                          <?php
                          include 'includes/asia.php';
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link w-100 text-left text-decoration-none text-info" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Africa

                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body text-dark">

                          <?php
                          include 'includes/africa.php';
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link w-100 text-decoration-none text-info text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Europe
                          </button>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body text-dark">
                          <?php
                          include 'includes/europe.php';
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link w-100 text-decoration-none text-info text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            South America
                          </button>
                        </h5>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body text-dark">
                          <?php
                          include 'includes/southAmerica.php';
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link w-100 text-decoration-none text-info text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                            North America
                          </button>
                        </h5>
                      </div>
                      <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body text-dark">
                          <?php
                          include 'includes/northAmerica.php';
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                          <button class="btn btn-link w-100 text-decoration-none text-info text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                            Oceania
                          </button>
                        </h5>
                      </div>
                      <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body text-dark">
                          <?php
                          include 'includes/oceania.php';
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
















                </div>


              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>




  <div class="container-fluid p-3" id="city-temperature">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 text-center">
          <i class="fas fa-cloud-moon"></i> Current City Temperature
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid p-3" style="background-color:#0C1F3E">
    <div class="container">
      <div class="row">
        <ul class="list-inline m-auto">
          <li class="list-inline-item px-5"><a href="">Today</a></li>
          <li class="list-inline-item px-5"><a href="">Hourly</a></li>
          <li class="list-inline-item px-5"><a href="">5-day</a></li>
          <li class="list-inline-item px-5"><a href="">10-day</a></li>
          <li class="list-inline-item px-5"><a href="">Maps</a></li>
        </ul>
      </div>
    </div>
  </div>


  <div style="display:inline-block;widht:100%; height:1000px;"></div>









  <!-- Footer -->
  <div class="container-fluid" id="footer">
  <footer class="page-footer container font-small pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mt-md-0 mt-3">

          <!-- Content -->
          <h5>About Us</h5>
          <hr style="display:inline-block;width:50%;background-color:white">
          <p>This is an API based rainfall prediction system, which provides the analysis which crop is suitable according to current temperature.</p>

        </div>
        <!-- Grid column -->
        <div class="col-md-2"></div>
        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-2 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">Quick Links</h5>
          <hr style="display:inline-block;width:50%;background-color:white">
          <ul class="list-unstyled">
            <li>
              <a href="#!">Home</a>
            </li>
            <li>
              <a href="#!">Blogs</a>
            </li>
            <li>
              <a href="#!">Notification</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-3" id="contact">

          <!-- Links -->
          <h5 class="text-uppercase">Contact Us</h5>
          <hr style="display:inline-block;width:50%;background-color:white">
          <ul class="list-unstyled">
            <li>
              <i class="fas fa-phone-alt"></i> 123456
            </li>
            <li>
            <i class="far fa-envelope"></i> abc@gmail.com
            </li>
            <li>
              <i class="fas fa-map-marker-alt"></i> GHRCE, Digdoh Hills, Nagpur - 440001
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->
    



    <div class="row py-4" id="end-footer">
      <div class="col-md-12 col-sm-12 text-center">
        <ul>
          <li>
            <a href=""><i class="fab fa-google-plus-g"></i></a>
          </li>
          <li>
            <a href=""><i class="fab fa-facebook-f"></i></a>
          </li>
          <li>
            <a href=""><i class="fab fa-instagram"></i></a>
          </li>
          <li>
            <a href=""><i class="fab fa-youtube"></i></a>
          </li>
          <li>
            <a href=""><i class="fab fa-linkedin-in"></i></a>
          </li>
        </ul>
      </div>
    </div>
    
  </footer>
  <!-- Footer -->

  </div>


  <div class="container-fluid" style="background-color:#0C1F3E">
    <div class="container">
      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://ghrce.raisoni.net/"> GHRCE </a>
      </div>
      <!-- Copyright -->  
    </div>
  </div>


</body>

</html>