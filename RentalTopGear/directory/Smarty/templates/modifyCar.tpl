<!DOCTYPE html>
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




  </head>

  <body>
  


  <div class="banner header-text">
    <div class="container my-5">
      <h2 class="header-text text-center mb-5">modifica auto</h2>
      <form  method="post" action="/RentalTopGear/Admin/" enctype="multipart/form-data">
        <div class="form-group col-md-12">
          <label for="car">Seleziona auto</label>
          <select class="form-control form-control-sm mb-5" name="idAuto" id="car" required>
            {foreach from=$cars item=car}
              <option value="{$car->getIdAuto()}" >{$car->getBrand()} {$car->getModel()} {$car->getIdAuto()}</option>
            {/foreach}
          </select>
        </div>
        <div class="btn btn-primary btn-block mx-auto">
          <button class="btn btn-primary btn-lg btn-block" type="submit">scegli auto </button>
        </div>
      </form>






    





   

    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link"></a>
        </p>
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
