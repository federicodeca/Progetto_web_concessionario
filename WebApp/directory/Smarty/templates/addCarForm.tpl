<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="/WebApp/directory/Smarty/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/style.css">
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/owl.css">

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
                <h2 class="tm-block-title d-inline-block">Add car</h2>
              </div>
            </div>
            
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form class="tm-edit-product-form" method="post" action="/WebApp/Admin/addCar" enctype="multipart/form-data">
                
                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Model</label>
                <input type="text" class="form-control" id="car-model" placeholder="" required="" name="carModel">
                <div class="invalid-feedback">
                Car model is required
                </div>
                </div>
                    <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Brand</label>
                <input type="text" class="form-control" id="car-brand" required="" name="carBrand">
                <div class="invalid-feedback">
                Car brand is required
                </div>
                </div>

                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Color</label>
                <input type="text" class="form-control" id="car-color" placeholder="" required="" name="carColor">
                <div class="invalid-feedback">
                Car color is required
                </div>
                </div>

                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Horsepower</label>
                <input type="text" class="form-control" id="car-horsepower" placeholder="" required="" name="carHorsepower">
                <div class="invalid-feedback">
                Car horsepower is required
                </div>
                </div>

                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Displacement</label>
                <input type="text" class="form-control" id="car-displacement" placeholder="" required="" name="carDisplacement">
                <div class="invalid-feedback">
                Car displacement is required
                </div>
                </div>

                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Seats</label>
                <input type="text" class="form-control" id="car-seats" placeholder="" required="" name="carSeats">
                <div class="invalid-feedback">
                Car seats are required
                </div>
                </div>
                
                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Fuel type</label>
                <input type="text" class="form-control" id="car-fuel-type" placeholder="" required="" name="carFuelType">
                <div class="invalid-feedback">
                Car fuel type is required
                </div>
                </div>

                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Price</label>
                <input type="text" class="form-control" id="car-price" placeholder="" required="" name="carPrice">
                <div class="invalid-feedback">
                Car price type is required
                </div>
                </div>

                <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Description for rent car</label>
                <input type="text" class="form-control" id="car-description" placeholder="" name="carDescription">
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
                      id="category" name="carType"
                    >
                      <option selected>Select Type</option>
                      <option value="rental_car">Car for rent</option>
                      <option value="car_for_sale">Car for sale</option>
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
                <button class="btn btn-primary btn-lg btn-block" type="submit">ADD CAR</button>
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>
