<?php
/* Smarty version 5.5.1, created on 2025-07-04 12:51:33
  from 'file:addCarForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6867b235055ed0_09030021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb380ca0f8a72c44fbf15bca09e498df7e60df18' => 
    array (
      0 => 'addCarForm.tpl',
      1 => 1751625958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6867b235055ed0_09030021 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Paolo\\Documents\\GitHub\\Progetto_web_concessionario\\RentalTopGear\\directory\\Smarty\\templates';
?><!DOCTYPE html>
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



  </head>

  <body>
     <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/RentalTopGear/Admin/home/"><h2>Dashboard<em></em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <!-- Spazio riservato al login/user box -->
              <li id="user-box" class="nav-item d-flex align-items-center"></li>

              <li class="nav-item">
                <a class="nav-link" href="/RentalTopGear/Admin/home/">Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item"><a class="nav-link active" href="/RentalTopGear/Admin/showCarForm/">Aggiungi auto</a></li>

          

              <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Modifica auto</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/RentalTopGear/Admin/showAllCars/Rent">Auto Noleggio</a>
                      <a class="dropdown-item" href="/RentalTopGear/Admin/showAllCars/Sale">Auto Acquisto</a>
                      <a class="dropdown-item" href="/RentalTopGear/Admin/showAllRentCarsForUnavailabilities/">Indisponibilità</a>
                      <a class="dropdown-item" href="/RentalTopGear/Admin/showAllRentCarsForSurcharges/">Prezzi </a>

                  
                    </div>
                </li>

              <li class="nav-item"><a class="nav-link" href="/RentalTopGear/Admin/showLicenseNotChecked/">Verifica patente</a></li>

              <li class="nav-item"><a class="nav-link" href="/RentalTopGear/User/home">Vista cliente</a></li>



              <?php if ($_smarty_tpl->getValue('isLogged')) {?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMore" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      benvenuto <?php echo $_smarty_tpl->getValue('username');?>
 <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMore">
                      <?php if ($_smarty_tpl->getValue('permission') === 'admin') {?> <a class="dropdown-item" href="/RentalTopGear/Admin/home">admin</a> <?php }?>
                      <?php if ($_smarty_tpl->getValue('permission') === 'user') {?> 
                        <a class="dropdown-item" href="/RentalTopGear/User/insertLicense">Patente</a>
                        <a class="dropdown-item" href="/RentalTopGear/User/insertReview">Recensione</a>
                        <a class="dropdown-item" href="/RentalTopGear/User/showProfile">Profilo</a>
                      <?php }?>
                      <a class="dropdown-item" href="/RentalTopGear/User/logout">Esci</a>
                    </div>
                  </li>
  


              <?php } else { ?>
                  <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="" id="loginDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Login
                          </a>
                          <div class="dropdown-menu dropdown-menu-right p-2" aria-labelledby="loginDropdown" style="min-width: 250px;">
                            <form method="post" action="/RentalTopGear/User/checkLoginAuto">
                              <input type="text" name="username" placeholder="Username" class="form-control mb-2" required>
                              <input type="password" name="password" placeholder="Password" class="form-control mb-2" required>
                              <input type="hidden" name="actualMethod" value="<?php echo htmlspecialchars((string)$_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8', true);?>
">
                              <button type="submit" class="btn btn-primary btn-block">Accedi</button>
                             
                            </form>

                              <button type="button" onclick='window.location.href="/RentalTopGear/User/showRegistrationForm"' class="btn btn-secondary btn-block mt-2">Registrati</button>
                              <div id="login-message" class="text-danger mt-2"></div>
                          
                          </div>
                        </li>
              <?php }?>          
            

            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="services">
      <div class="container mt-5">
        <h2 class="text-center mb-4">Aggiungi Auto</h2>
     
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              
            </div>
            
            <div class="row tm-edit-product-row">
              <div class="container">
                <form class="tm-edit-product-form" method="post" action="/RentalTopGear/Admin/addCar" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-6 mb-3">
                  <label for="cc-name" style="margin-top: 10px">Modello</label>
                  <input type="text" class="form-control" id="car-model" placeholder="" required="" name="carModel">
                  <div class="invalid-feedback">
                  Car model is required
                  </div>
                  </div>
                      <div class="col-md-6 mb-3">
                  <label for="cc-name" style="margin-top: 10px">Marchio</label>
                  <input type="text" class="form-control" id="car-brand" required="" name="carBrand">
                  <div class="invalid-feedback">
                  Car brand is required
                  </div>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-md-6 mb-3">
                  <label for="cc-name" style="margin-top: 10px">Colore</label>
                  <input type="text" class="form-control" id="car-color" placeholder="" required="" name="carColor">
                  <div class="invalid-feedback">
                  Car color is required
                  </div>
                  </div>

                  <div class="col-md-6 mb-3">
                  <label for="cc-name" style="margin-top: 10px">Cavalli</label>
                  <input type="text" class="form-control" id="car-horsepower" placeholder="" required="" name="carHorsepower">
                  <div class="invalid-feedback">
                  Car horsepower is required
                  </div>
                  </div>
              </div>  
              <div class="row">
                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Cilindrata</label>
                <input type="text" class="form-control" id="car-displacement" placeholder="" required="" name="carDisplacement">
                <div class="invalid-feedback">
                Car displacement is required
                </div>
                </div>

                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Posti</label>
                <input type="text" class="form-control" id="car-seats" placeholder="" required="" name="carSeats">
                <div class="invalid-feedback">
                Car seats are required
                </div>
                </div>
              </div>
              
              
              <div class="row">  
                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Alimentazione</label>
                <input type="text" class="form-control" id="car-fuel-type" placeholder="" required="" name="carFuelType">
                <div class="invalid-feedback">
                Car fuel type is required
                </div>
                </div>

                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Prezzo</label>
                <input type="text" class="form-control" id="car-price" placeholder="" required="" name="carPrice">
                <div class="invalid-feedback">
                Car price type is required
                </div>
                </div>
              </div>  

                <div class="col-md-6 mb-3 " id="car-description" style="display: none;">
                <label for="cc-name" style="margin-top: 10px">Desrizione</label>
                <input type="text" class="form-control" id="carDescription" placeholder="" name="carDescription">
                <div class="invalid-feedback">
                Car description type is required
                </div>
                </div>
                
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Type</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="car-type" name="carType"
                    >
                      <option selected>Select Type</option>
                      <option value="rental_car">Auto a noleggio</option>
                      <option value="car_for_sale">Auto in vendita</option>
                    </select>
                  </div>

                   <div class="form-group mb-3" id="condition-select" style="display: none;">
                    <label
                      for="category"
                      >Type</label
                    >
                    <select
                      class="custom-select tm-select-accounts"
                      id="category" name="condition"
                    >
                      <option selected>Select conditions</option>
                      <option value="Km0">Km0</option>
                      <option value="New">Nuova</option>
                    </select>
                  </div>
                  
              </div>

              <div class="col-md-6 mb-3">
                <label for="car-images" style="margin-top: 10px">Immagini auto</label>
                <input type="file" class="form-control" id="car-images" name="carImages[]" multiple required>
                <div class="invalid-feedback">
                  Almeno un'immagine richiesta
                </div>
              </div>


              <div class="btn btn-primary btn-block mx-auto">
                <button class="btn btn-primary btn-lg btn-block" type="submit">AGGIUNGI AUTO</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link"></a>
        </p>
        </div>
    </footer> 

    <!-- Bootstrap core JavaScript -->
    <?php echo '<script'; ?>
 src="/RentalTopGear/directory/Smarty/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/RentalTopGear/directory/Smarty/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>


    <!-- Additional Scripts -->
    <?php echo '<script'; ?>
 src="/RentalTopGear/directory/Smarty/assets/js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/RentalTopGear/directory/Smarty/assets/js/owl.js"><?php echo '</script'; ?>
>
     
  
  </body>
</html>
<?php }
}
