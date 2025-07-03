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
      <form  method="post" action="/RentalTopGear/Admin/showFormModify" enctype="multipart/form-data">
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


      {if isset($car)}
        {if $car->getEntity()== 'ECarForRent'}
        <form method="post" action="/RentalTopGear/Admin/modifyCar" enctype="multipart/form-data">
          <div class="form-group col-md-12">
            <label for="brand">Marca</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{$car->getBrand()}"  required>
          </div>
          <div class="form-group col-md-12">
            <label for="model">Modello</label>    
            <input type="text" class="form-control" id="model" name="model" value="{$car->getModel()}"  required>
          </div>
          <div class="form-group col-md-12">
            <label for="color">colore</label>
            <input type="text" class="form-control" id="color" name="color" value="{$car->getColor()}" required>
          </div>
            <div class="form-group col-md-12">
            <label for="color">Cavalli</label>
            <input type="text" class="form-control" id="horsepower" name="horsepower" value="{$car->getHorsepower()}" required>
          </div>
          <div class="form-group col-md-12">
            <label for="color">potenza</label>
            <input type="text" class="form-control" id="displacement" name="displacement" value="{$car->getDisplacement()}" required>
          </div>
          <div class="form-group col-md-12">
            <label for="color">posti</label>
            <input type="text" class="form-control" id="seats" name="seats" value="{$car->getSeats()}" required>
          </div>
          <div class="form-group col-md-12">
            <label for="color">Alimentazione</label>
            <input type="text" class="form-control" id="fuelType" name="fuelType" value="{$car->getFuelType()}" required>
          </div>
          
          <div class="form-group col-md-12">
            <label for="price">Prezzo</label> 
            <input type="number" class="form-control" id="price" name="price" value="{$car->getPrice()}" required>
          </div>
          <div class="form-group col-md-12">
            <label for="description">Descrizione</label>
            <input class="form-control" id="description" name="description" value="{$car->getDescription()}" required></input>
          </div>
          <div class="form-group col-md-12">
            <label for="image">Immagine</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
          </div>
         
          <div class="btn btn-primary btn-block mx-auto">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Modifica auto</button>
          </div>
        </form>
        {elseif $car->getEntity() == 'ECarForSale'}
        <form method="post" action="/RentalTopGear/Admin/modifyCarForSale"
              enctype="multipart/form-data">
          <div class="form-group col-md-12">
            <label for="brand">Marca</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{$car->getBrand()}" required>
          </div>
          <div class="form-group col-md-12">
            <label for="model">Modello</label>    
            <input type="text" class="form-control" id="model" name="model" value="{$car->getModel()}" required>
          </div>
          <div class="form-group col-md-12">
            <label for="year">Anno</label>
            <input type="number" class="form-control" id="year" name="year" value="{$car->getYear()}" required>
          </div>
          <div class="form-group col-md-12">
            <label for="price">Prezzo</label> 
            <input type="number" class="form-control" id="price" name="price" value="{$car->getPrice()}" required>
          </div>
          <div class="form-group col-md-12">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{$car->getDescription()}</textarea>
          </div>
          <div class="form-group col-md-12">
            <label for="image">Immagine</label>
            <input type="file" class="form-control-file" id="image" name="image" accept="image/*">
          </div>
          <input type="hidden" name="idAuto" value="{$car->getIdAuto()}">
          <div class="btn btn-primary btn-block mx-auto">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Modifica auto</button>
          </div>
        </form>


      {/if}






    





   

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
