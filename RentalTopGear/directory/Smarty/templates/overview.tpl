<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/RentalTopGear/directory/Smarty/assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Car Rental Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/RentalTopGear/directory/Smarty/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/style.css">
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/owl.css">

      <!-- Additional icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" /> 


    

         <script>
      const isLogged = {$isLogged|@json_encode|default:'false'};
      const username = "{$username|escape:'javascript'|default:''}";
      const permission = "{$permission|escape:'javascript'|default:''}";
    </script>
  </head>

  <body>

   <script src="/RentalTopGear/directory/Smarty/js/login-box.js"></script>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Rental <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="RentalTopGear/User/home">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="fleet.html">Acquista</a></li>

                <li class="nav-item"><a class="nav-link" href="offers.html">Noleggia</a></li>

                <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>

                <li class="nav-item"> <div id="login-box" ></div> </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 75%"></div>
</div>
 
      <div class="services" style="background-image: url(/RentalTopGear/directory/Smarty/assets/images/other-image-fullscren-1-1920x900.jpg);">
        <div class="container">

        <div class="row">

          <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h5><i class="fa-solid fa-info mr-3"></i>Riepilogo ordine</h5></div>
              <div class="card-body">
                <h7>Dal: {$start}</h7><br>
                <h7>Al:   {$end}</h7><br>
              </div>
            </div> <!--fine card-->
          </div>


          <div class="col-md-6">
           <div class="card">
              <h5 class="card-header"><i class="fa-solid fa-gears mr-3"></i>Dettagli auto</h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <ul class="list-group mb-3 p-4"> 
                      <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Marca:</h6>
                              </div>
                              <span class="text-muted">{$car->getBrand()}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Modello:</h6>
                              </div>
                              <span class="text-muted">{$car->getModel()}</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Colore: </h6>
                              </div>
                              <span class="text-muted">{$car->getColor()}</span>
                          </li>
                          
                          <li class="list-group-item d-flex justify-content-between ">
                              <div>
                                  <h6 class="my-0">Potenza: </h6>
                              </div>
                              <span class="text-muted">{$car->getHorsepower()}</span>
                          </li>

                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Cilindrata: </h6>
                              </div>
                              <span class="text-muted">{$car->getDisplacement()}</span>
                          </li>

                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Posti: </h6>
                              </div>
                              <span class="text-muted">{$car->getSeats()}</span>
                          </li>

                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Alimentazione: </h6>
                              </div>
                              <span class="text-muted">{$car->getFuelType()}</span>
                          </li>

                          <li class="list-group-item d-flex justify-content-between">
                              <span>Total (EUR)</span>
                              <strong>Totale: {$amount} </strong>
                          </li>
                      </ul>
                        
                      <hr class="mb-4">
                      <a href="/RentalTopGear/User/confirmRent" class="btn btn-primary btn-lg btn-block">Acquista</a>
                     
                    </div>
                </div>
              </div>
            </div>
          </div> <!-- chiusura col-md-6 per il form -->
        </div> <!-- chiusura row -->
      </div> <!-- chiusura container -->
    </div>
  </div>


     
   <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Explicabo, esse consequatur alias repellat in excepturi inventore ad <a href="#">asperiores</a> tempora ipsa. Accusantium tenetur voluptate labore aperiam molestiae rerum excepturi minus in pariatur praesentium, corporis, aliquid dicta.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
              </ul>
              <a href="about-us.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="/RentalTopGear/directory/Smarty/assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
    


  <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
                    <div class="row ">
        <div class="col-md-12">
          <i class="fa-brands fa-cc-paypal fa-2x mr-2"></i>
          <i class="fa-brands fa-cc-visa fa-2x mr-2"></i>
          <i class="fa-brands fa-cc-diners-club fa-2x mr-2"></i>
          <i class="fa-brands fa-cc-mastercard fa-2x mr-2"></i>
          <i class="fa-brands fa-cc-discover fa-2x mr-2"></i>
          <i class="fa-brands fa-cc-amex fa-2x"></i>
            
         </div>
        </div>

              <p> RentalTopGear  <a href="/RentalTopGear/User/home"></a> </p>
              <p>Copyright &copy; 2023 TopGear</p>
              <i class="fa-solid fa-phone"></i><h4> +39 123 456 789</h4>

            </div>
          </div>
        </div>
      </div>
    </footer>



    <!-- Bootstrap core JavaScript -->
    <script src="/RentalTopGear/directory/Smarty/vendor/jquery/jquery.min.js"></script>
    <script src="/RentalTopGear/directory/Smarty/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/RentalTopGear/directory/Smarty/assets/js/custom.js"></script>
    <script src="/RentalTopGear/directory/Smarty/assets/js/owl.js"></script>

  </body>

</html>
