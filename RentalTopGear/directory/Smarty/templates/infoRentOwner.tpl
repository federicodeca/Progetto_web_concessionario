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


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <!--dati per login-->
    <script>
      const isLogged = {$isLogged|@json_encode|default:'false'};
      const username = "{$username|escape:'javascript'|default:''}";
      const permission = "{$permission|escape:'javascript'|default:''}";
    </script>

    <!-- dati per il grafico -->
    <script>
      const rentTotalPerDay = {$rentTotalPerDay|@json_encode|default:'{}'};

    </script>
   

  </head>

<body>
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script src="/RentalTopGear/directory/Smarty/js/date-selector-chart.js"></script>
    


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
          <a class="navbar-brand" href="index.html"><h2>Duplex <em>Drive</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <!-- Spazio riservato al login/user box -->
              <li id="user-box" class="nav-item d-flex align-items-center"></li>

              <li class="nav-item">
                <a class="nav-link" href="RentalTopGear/User/home">Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item"><a class="nav-link" href="/RentalTopGear/Owner/showSaleStatsForPeriod">Numero vendite</a></li>

              <li class="nav-item"><a class="nav-link" href="/RentalTopGear/Owner/showClientStats">Clienti</a></li>


              <li class="nav-item"><a class="nav-link active" href="/RentalTopGear/Owner/showRentStatsForPeriod/">Statistiche noleggi</a></li>



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

    


        
    <div class="services">
        <div class="container " style="max-height: auto;">
            <div class="row">

                


   
                <div class="col-md-12">
                  <div class="section-heading">
                    <h2>Statistiche Noleggi</h2>
                    <span>seleziona mese e anno</span>
                    <div class="row">
                      <form method="post" action="/RentalTopGear/Owner/getRentStatsForPeriod" >
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="bdaymonth">Periodo</label>
                            <input type="month" id="month" name="period" class="form-control w-100" required>
                          </div>
                        </div>
                        <div class="col-md-12 mt-2">
                          <button type="submit" class="btn btn-primary">Visualizza Statistiche</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        
                <div class="col-12 tm-block-col my-4 text-center">
       
                    <h2 class="tm-block-title my-5">Noleggi </h2>

                    {if $rentTotalPerDay|@count > 0}      
    
                    <div class="row">
                        <div class="col-md-12">
                        <canvas id="rentScatterChart" class="graphic-custom"></canvas>
                    {else}
                        <div class="alert alert-warning" role="alert">
                          Nessun dato disponibile per il periodo selezionato.
                        </div>
                      {/if}
                  
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

              <p> Duplex Drive  <a href="/RentalTopGear/User/home"></a> </p>
              <p>Copyright &copy; 2023 TopGear</p>
              <i class="fa-solid fa-phone mr-2"></i><h4> +39 123 456 789</h4> 
                

            </div>
          </div>
        </div>
      </div>
    </footer>

    {foreach $rentsPerPeriod item=rent}
    {$rent->getOrderdate()->format('y-m-d')}
    {$rent->getTotalPrice()}
    {/foreach}



    <!-- Chart.js scatter chart for Vendite (Data vs Prezzo) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment@1.0.0"></script>
    




    <!-- Bootstrap core JavaScript -->
    <script src="/RentalTopGear/directory/Smarty/vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="/RentalTopGear/directory/Smarty/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    
   

    <!-- Additional Scripts -->
    <script src="/RentalTopGear/directory/Smarty/assets/js/custom.js"></script>
    <script src="/RentalTopGear/directory/Smarty/assets/js/owl.js"></script>
    <script src="/RentalTopGear/directory/Smarty/js/calendar.js"></script>
 

</body>
</html>