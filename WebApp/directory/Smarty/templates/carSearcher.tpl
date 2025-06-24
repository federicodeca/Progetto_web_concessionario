<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/Webapp/directory/Smarty/assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Car Rental Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/WebApp/directory/Smarty/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/style.css">
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/owl.css">

    <!--dati per login-->
    <script>
      const isLogged = {$isLogged|@json_encode|default:'false'};
      const username = "{$username|escape:'javascript'|default:''}";
    </script>
    <script src="/WebApp/directory/Smarty/js/login-box.js"></script>
    <script src="/WebApp/directory/Smarty/js/select-car.js"></script>

  </head>

  <body>

  <input type="hidden" id="actualMethod" value="showCarsForSale">
 

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
          <a class="navbar-brand"   href="index.html"><h2>Concessionario<em>TopGear</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/WebApp/User/home">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 
    
              <li class="nav-item"><a class="nav-link" href="/WebApp/CarSale/showCarsForSale/">Acquista</a></li>

              <li class="nav-item"><a class="nav-link active" href="/WebApp/User/showCarsForRent/">Noleggia</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="blog.html">Blog</a>
                      <a class="dropdown-item" href="team.html">Team</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                      <a class="dropdown-item" href="terms.html">Terms</a>
                    </div>
                </li>

                <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li>
                
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>

                <li class="nav-item"> <div id="login-box" ></div> </li>
                  

            </ul>
          </div>
        </div>
      </nav>
    </header>

     <!-- Page Content -->
    <div class="page-heading about-heading header-text"  style="background-image: url(/WebApp/directory/Smarty/assets/images/other-image-fullscren-1-1920x900.jpg);"">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="custom-license-card">
              <form method="post" action="/WebApp/CarSale/showCarsForSale/1">
                <div class="card-header">
                  <h4 class=" mb-3" style="color:white">Che auto cerchi?</h4>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                      <ul class="dropdown-menu">
                        {foreach $models as $brand => $modelList}
                          <li><a class="dropdown-item" href="#" onclick="selectBrand('{$brand}')">{$brand}</a></li>
                        {/foreach}
                      </ul>
                      <input type="text" class="form-control" name="brand" readonly id="brandInput" aria-label="Text input with dropdown button" placeholder="brand">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <button class="btn btn-outline-secondary dropdown-toggle" disabled="" id="modelButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                      <ul class="dropdown-menu" disabled="" id="modelDropdown">
                        {foreach $models as $brand => $modelList}
                          {foreach $modelList as $model}
                            <li class="dropdown-model-item" data-brand="{$brand}">
                              <a class="dropdown-item" href="#" onclick="selectModel('{$model}')">{$model}</a>
                            </li>
                          {/foreach}
                        {/foreach}
                      </ul>
                      <input type="text" class="form-control" name="model" readonly id="modelInput" aria-label="Text input with dropdown button" placeholder="model" disabled>
                    </div>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary mb-3 " style="color:aliceblue">Cerca</button>
                </div>
              </form>
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
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
   
  



    <!-- Bootstrap core JavaScript -->
    <script   src="/WebApp/directory/Smarty/vendor/jquery/jquery.min.js"></script>
    <script src= "/WebApp/directory/Smarty/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/WebApp/directory/Smarty/assets/js/custom.js"></script>
    <script src="/WebApp/directory/Smarty/assets/js/owl.js"></script>
    <script src="/WebApp/directory/Smarty/js/login-box.js"></script>

    <!-- Popper.js (necessario per Bootstrap dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>



  </body>

</html>
