<?php
/* Smarty version 5.5.1, created on 2025-07-02 18:33:43
  from 'file:addCarForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68655f67696a08_37008729',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb380ca0f8a72c44fbf15bca09e498df7e60df18' => 
    array (
      0 => 'addCarForm.tpl',
      1 => 1751474014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68655f67696a08_37008729 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Paolo\\Documents\\GitHub\\Progetto_web_concessionario\\RentalTopGear\\directory\\Smarty\\templates';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="/RentalTopGear/directory/Smarty/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/style.css">
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/owl.css">


    <?php echo '<script'; ?>
 src="/RentalTopGear/directory/Smarty/js/admin-choice.js"><?php echo '</script'; ?>
>

  </head>

  <body>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>
      </div>
    </nav>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Aggiungi auto</h2>
              </div>
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
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link"></a>
        </p>
        </div>
    </footer> 

    <?php echo '<script'; ?>
 src="js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
    <!-- https://jquery.com/download/ -->
    <?php echo '<script'; ?>
 src="jquery-ui-datepicker/jquery-ui.min.js"><?php echo '</script'; ?>
>
    <!-- https://jqueryui.com/download/ -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- https://getbootstrap.com/ -->
    <?php echo '<script'; ?>
>
      $(function() {
        $("#expire_date").datepicker();
      });
    <?php echo '</script'; ?>
>
  </body>
</html>
<?php }
}
