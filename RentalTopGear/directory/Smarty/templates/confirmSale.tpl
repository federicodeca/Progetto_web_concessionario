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

    <!--dati per login-->
    <script>
      const isLogged = {$isLogged|@json_encode|default:'false'};
      const username = "{$username|escape:'javascript'|default:''}";
      const permission = "{$permission|escape:'javascript'|default:''}";
      
    </script>
    <script src="/RentalTopGear/directory/Smarty/js/login-box.js"></script>

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
          <a class="navbar-brand" href="index.html"><h2>Rental <em>Topgear</em></h2></a>
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
 
  <!--<div class="call-to-action">

      <div class="container">
        <div class="row">
          <div class="col-md-12 mt-5">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.html" class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    
   <div class="call-to-action">
     
        <div class="row">
          <div class="col-md-12 my-5">    


            <table border="0" cellpadding="0" cellspacing="0" width="100%" >
                <tr>
                    <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                    
                    <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                        
                        <tr>
                            <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                                        <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="125" height="120" style="display: block; border: 0px;" style="padding: 20px"/><br>
                                        <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;">
                                            Thank You For Your Order!
                                        </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                        <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium iste ipsa numquam odio dolores, nam.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            
                            </td>
                        </tr>
                        <tr>
                            <td align="center" height="100%" valign="top" width="100%" style="padding: 0 35px 35px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:660px;">
                                <tr>
                                    <td align="center" valign="top" style="font-size:0;">
                                        <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">

                                            <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:300px;">
                                                <tr>
                                                    <td align="left" valign="top" style="font-family: Open Sans, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                        <p style="font-weight: 800;">Riferimento</p>
                                                        <p>ordine numero {$sale->getOrderId()}</p>

                                                        <p style="font-weight: 800;">Potrai ritirare la tua auto presso</p>
                                                        <p>Concessionario <br>Via Roma, 10<br>L'Aquila</p>
                                                        

                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style=" padding: 35px; background-color: red" bgcolor="#1b9ba3">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="padding: 25px 0 15px 0;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="border-radius: 5px;" bgcolor="#1b9ba3">
                                                  <a href="/RentalTopGear/User/home" class="btn btn-primary btn-lg btn-block" style="font-size: 18px; font-family: Open Sans, Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; border-radius: 5px; background-color: #F44336; padding: 15px 30px; border: 1px solid #F44336; display: block;">Torna alla home</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" style=" background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:600px;">
                            </table>
                            </td>
                        </tr>



                    </table>
                    </td>
                </tr>
            </table>  
          </div> 
        </div> 
      </div> 
    </div> 

    
    

    
<!-- fine contenuto -->

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
