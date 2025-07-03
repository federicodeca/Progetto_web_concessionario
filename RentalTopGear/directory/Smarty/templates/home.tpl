<!DOCTYPE html>
<html lang="en">

  <head>

  
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/RentalTopGear/directory/Smarty/assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Rental Top Gear</title>

    <!-- Bootstrap core CSS -->
    <link href="/RentalTopGear/directory/Smarty/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/style.css">
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/owl.css">

    <!-- Additional icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" /> 


    <!--dati per login-->
    <script>
     
      const username = "{$username|escape:'javascript'|default:''}";
      const permission = "{$permission|escape:'javascript'|default:''}";
      
    </script>

  </head>


  <body>


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
          <a class="navbar-brand" href="index.html"><h2>Rental <em>TopGear</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <!-- Spazio riservato al login/user box -->
              <li id="user-box" class="nav-item d-flex align-items-center"></li>

              <li class="nav-item active">
                <a class="nav-link" href="RentalTopGear/User/home">Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item"><a class="nav-link" href="/RentalTopGear/User/carSearcher/">Acquista</a></li>

              <li class="nav-item"><a class="nav-link" href="/RentalTopGear/User/showCarsForRent/">Noleggia</a></li>


              <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>

              <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>

              {if $isLogged}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMore" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      benvenuto {$username} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMore">
                      {if $permission ==='admin'} <a class="dropdown-item" href="/RentalTopGear/Admin/home">admin</a> {/if}
                      {if $permission === 'user'} 
                        <a class="dropdown-item" href="/RentalTopGear/User/insertLicense">Patente</a>
                        <a class="dropdown-item" href="/RentalTopGear/User/insertReview">Recensione</a>
                        <a class="dropdown-item" href="/RentalTopGear/User/showProfile">Profilo</a>
                      {/if}
                      {if $permission === 'owner'}
                        <a class="dropdown-item" href="/RentalTopGear/Owner/home">Resoconto Azienda</a>
                      {/if}
                      <a class="dropdown-item" href="/RentalTopGear/User/logout">Esci</a>
                    </div>
                  </li>
  


              {else}
                  <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                          </a>
                          <div class="dropdown-menu dropdown-menu-right p-2" aria-labelledby="loginDropdown" style="min-width: 250px;">
                            <form method="post" action="/RentalTopGear/User/checkLoginAuto">
                              <input type="text" name="username" placeholder="Username" class="form-control mb-2" required>
                              <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
                              <input type="hidden" name="actualMethod" value="{$smarty.server.REQUEST_URI|escape}">
                              <button type="submit" class="btn btn-primary btn-block">Accedi</button>
                             
                            </form>

                              <button type="button" onclick='window.location.href="/RentalTopGear/User/showRegistrationForm"' class="btn btn-secondary btn-block mt-2">Registrati</button>
                              <div id="login-message" class="text-danger mt-2"></div>
                          
                          </div>
                        </li>
              {/if}          
            

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Qualità</h4>
            <h2>Le migliori auto al miglior prezzo!</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Accoglienza</h4>
            <h2>Impegno e dedizione ogni giorno</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Dal 1998</h4>
            <h2>Regaliamo felicità ai clienti</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="mt-3"></div>

    <div class="offers">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Occasioni</h2>
              <a href="/RentalTopGear/User/carSearcher">scopri di più <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          {if $offers|@count > 2}
   
            <div class="col-md-4">
                <a href='/RentalTopGear/User/selectCarForSale/{$offers[0]->getIdAuto()}'>
                  <div class="product-item">
                    {if $offers[0]->getIcon()}
                      <img class="product-item-icon" src="data:{$offers[0]->getIcon()->getType()};base64,{$offers[0]->getIcon()->getEncodedData()}" loading="lazy" alt="Img">
                    {else}
                      <img src="/RentalTopGear/directory/Smarty/assets/images/default-car.jpg" loading="lazy" alt="Nessuna immagine disponibile">
                    {/if}
                    <div class="down-content">
                      <h4><i class="fas fa-gas-pump mr-2"></i>{$offers[0]->getBrand()} {$offers[0]->getModel()}</h4>
                      <h6><i class="fa-solid fa-money-check-dollar mr-2"></i> <small>from:</small> {$offers[0]->getPrice()}€ <small>prezzo listino</small></h6>
                      <h6><i class="fa-solid fa-hourglass-start mr-2"></i><small>condizione: </small> {$offers[0]->getKm0OrNew()}</h4>
                      <h6><i class="fa-solid fa-droplet mr-2"></i><small>alimentazione: </small>{$offers[0]->getFuelType()} </h4>
                    </div>    
                  </div>
                </a>
              </div>

            <div class="col-md-4">
                <a href='/RentalTopGear/User/selectCarForSale/{$offers[1]->getIdAuto()}'>
                  <div class="product-item">
                    {if $offers[1]->getIcon()}
                      <img class="product-item-icon" src="data:{$offers[1]->getIcon()->getType()};base64,{$offers[1]->getIcon()->getEncodedData()}" loading="lazy" alt="Img">
                    {else}
                      <img src="/RentalTopGear/directory/Smarty/assets/images/default-car.jpg" loading="lazy" alt="Nessuna immagine disponibile">
                    {/if}
                    <div class="down-content">
                      <h4><i class="fas fa-gas-pump mr-2"></i>{$offers[1]->getBrand()} {$offers[1]->getModel()}</h4>
                      <h6><i class="fa-solid fa-money-check-dollar mr-2"></i> <small>from:</small> {$offers[1]->getPrice()}€ <small>prezzo listino</small></h6>
                      <h6><i class="fa-solid fa-hourglass-start mr-2"></i><small>condizione: </small> {$offers[1]->getKm0OrNew()}</h6>
                      <h6><i class="fa-solid fa-droplet mr-2"></i><small>alimentazione: </small>{$offers[1]->getFuelType()} </h6>
                    </div>    
                  </div>
                </a>
              </div>

           <div class="col-md-4">
                <a href='/RentalTopGear/User/selectCarForSale/{$offers[2]->getIdAuto()}'>
                  <div class="product-item">
                    {if $offers[2]->getIcon()}
                      <img class="product-item-icon" src="data:{$offers[2]->getIcon()->getType()};base64,{$offers[2]->getIcon()->getEncodedData()}" loading="lazy" alt="Img">
                    {else}
                      <img src="/RentalTopGear/directory/Smarty/assets/images/default-car.jpg" loading="lazy" alt="Nessuna immagine disponibile">
                    {/if}
                    <div class="down-content">
                      <h4><i class="fas fa-gas-pump mr-2"></i>{$offers[1]->getBrand()} {$offers[2]->getModel()}</h4>
                      <h6><i class="fa-solid fa-money-check-dollar mr-2"></i> <small>from:</small> {$offers[2]->getPrice()}€ <small>prezzo listino</small></h6>
                      <h6><i class="fa-solid fa-hourglass-start mr-2"></i><small>condizione: </small> {$offers[2]->getKm0OrNew()}</h6>
                      <h6><i class="fa-solid fa-droplet mr-2"></i><small>alimentazione: </small>{$offers[2]->getFuelType()} </h6>
                    </div>    
                  </div>
                </a>
              </div>

        {else}
          <div class="col-md-12">
            <p class="text-center">Nessuna offerta disponibile al momento.</p>
          </div>
        {/if}

        </div>
      </div>
    </div>

    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="section-heading">
                <h2>Vieni a trovarci</h2>
              </div>
          </div>
          <div class="col-md-12">
            <div id="map">
             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11793.047504139136!2d13.385407245971683!3d42.35825798648915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sit!2sit!4v1750455923682!5m2!1sit!2sit" width="1200" height="400" style="border:0; cursor: pointer;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>  

    <div class="mt-3"></div>

    <div class="services" style="background-image: url(/RentalTopGear/directory/Smarty/assets/images/other-image-fullscren-1-1920x900.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Dicono di noi</h2>

              <a href="blog.html">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="/RentalTopGear/directory/Smarty/assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="/RentalTopGear/directory/Smarty/assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="/RentalTopGear/directory/Smarty/assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Aperiam modi voluptatum fuga officiis cumque</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h7>Siamo lieti di accoglierti nel nostro store sito in via..</h7>
                  <h7>contattaci:</h7><br>
                  <h7><i class="fa-solid fa-phone mr-2"></i>+39 123 456 789</h7><br>
                  <h7><i class="fa-solid fa-envelope mr-2"></i>carRental@pippo.it</h7>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.html" class="filled-button">Contattaci</a>
                </div>
              </div>
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
              <i class="fa-solid fa-phone mr-2"></i><h4> +39 123 456 789</h4>

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