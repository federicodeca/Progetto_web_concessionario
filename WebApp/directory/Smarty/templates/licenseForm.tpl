<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/WebApp/directory/Smarty/assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PHPJabbers.com | Free Car Rental Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="/WebApp/directory/Smarty/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/style.css">
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/owl.css">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    
   <!--dati per login-->
  <script>
    const isLogged = {$isLogged|@json_encode|default:'false'};
    const username = "{$username|escape:'javascript'|default:''}";
    
  </script>
  <script src="/WebApp/directory/Smarty/js/login-box.js"></script>
  <script src="/WebApp/directory/Smarty/js/license-calendar.js"></script>

  </head>
  <input type="hidden" id="actualMethod" value="home">


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
          <a class="navbar-brand" href="index.html"><h2>Car Rental <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="WebApp/User/home">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="fleet.html">Acquista</a></li>

                <li class="nav-item"><a class="nav-link" href="offers.html">Noleggia</a></li>

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

      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar" style="width: 50%"></div>
  </div>
  
      <div class="services" style="background-image: url(/WebApp/directory/Smarty/assets/images/other-image-fullscren-1-1920x900.jpg);">
        <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="card">
            <div class="card-header">
            <h2>License</h2>
            </div> 

            
          <form method="POST" action="...">
 

            <div class="col-md-12 my-5">
              <div class="mb-5">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
              </div>
            </div>

            <div class="col-md-12 mb-3">
                <input type="text" id ="exp" name="exp" placeholder="10/24/1984" required="" />

            </div>

            <div class="col-md-4">
              <button class="btn btn-primary mb-3" style="color:aliceblue" type="submit" >Invia</button>
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
    <script src="/WebApp/directory/Smarty/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="/WebApp/directory/Smarty/assets/js/custom.js"></script>
    <script src="/WebApp/directory/Smarty/assets/js/owl.js"></script>

   

  </body>

</html>
