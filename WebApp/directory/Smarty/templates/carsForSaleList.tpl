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
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="custom-license-card">
              <form method="post" action="carsForSaleList/0"
            <h4> Che auto cerchi?</h4>
            
              <div class="input-group mb-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                <input type="text" class="form-control" name="brand" aria-label="Text input with dropdown button">

              </div><div class="input-group mb-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
                <input type="text" class="form-control" name="model" aria-label="Text input with dropdown button">

                <button type="submit" class="btn btn-primary" style="color:aliceblue">Sign in</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-1-370x270.jpg" alt="">

              <div class="down-content">
                <h4>Large: Premium</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-2-370x270.jpg" alt="">

              <div class="down-content">
                <h4>Large: Premium</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-3-370x270.jpg" alt="">

              <div class="down-content">
                <h4>Large: Premium</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-4-370x270.jpg" alt="">

              <div class="down-content">
                <h4>Large: Premium</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-5-370x270.jpg" alt="">

              <div class="down-content">
                <h4>Large: Premium</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <img src="assets/images/product-6-370x270.jpg" alt="">

              <div class="down-content">
                <h4>Large: Premium</h4>

                <h6><small>from</small> $99 <small>per weekend</small></h6>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, aliquam!</p>

                <small>
                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                </small>

                <span>
                  <a href="#" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                </span>
              </div>
            </div>
          </div>

          <nav aria-label="Pagination">
            <ul class="pagination">
              
              {* Previous Page *}
              {if $currentPage > 1}
                <li class="page-item">
                  <a class="page-link" href="/WebApp/CarSale/CarList/{$currentPage - 1}">Previous</a>
                </li>
              {else}
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
              {/if}

              {* Page Numbers: only previous, current, next *}
              {assign var="prevPage" value=$currentPage - 1}
              {assign var="nextPage" value=$currentPage + 1}

              {if $prevPage >= 1}
                <li class="page-item">
                  <a class="page-link" href="/WebApp/CarSale/CarList/{$prevPage}">{$prevPage}</a>
                </li>
              {/if}

              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">{$currentPage}</a>
              </li>

              {if $nextPage <= $totalPages}
                <li class="page-item">
                  <a class="page-link" href="/WebApp/CarSale/CarList/{$nextPage}">{$nextPage}</a>
                </li>
              {/if}

              {* Next Page *}
              {if $currentPage < $totalPages}
                <li class="page-item">
                  <a class="page-link" href="/WebApp/CarSale/CarList/{$currentPage + 1}">Next</a>
                </li>
              {else}
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
                </li>
              {/if}

            </ul>
          </nav>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>




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
