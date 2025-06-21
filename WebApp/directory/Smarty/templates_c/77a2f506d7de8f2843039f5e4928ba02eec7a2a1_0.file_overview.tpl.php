<?php
/* Smarty version 5.5.1, created on 2025-06-21 09:15:03
  from 'file:overview.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68565bf714ca18_39372117',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77a2f506d7de8f2843039f5e4928ba02eec7a2a1' => 
    array (
      0 => 'overview.tpl',
      1 => 1750489628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68565bf714ca18_39372117 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Paolo\\Documents\\GitHub\\Progetto_web_concessionario\\WebApp\\directory\\Smarty\\templates';
?><!DOCTYPE html>
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

  </head>

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
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 75%"></div>
</div>
 
      <div class="services" style="background-image: url(/WebApp/directory/Smarty/assets/images/other-image-fullscren-1-1920x900.jpg);">
        <div class="container">

        <div class="row">

          <div class="col-md-6">
            <div class="card">
              <div class="card-header"><h5>Riepilogo ordine</h5></div>
              <div class="card-body">
                <h7>Dal: <?php echo $_smarty_tpl->getValue('start');?>
</h7><br>
                <h7>Al:   <?php echo $_smarty_tpl->getValue('end');?>
</h7><br>
              </div>
            </div> <!--fine card-->
          </div>


          <div class="col-md-6">
           <div class="card">
              <h5 class="card-header">Dettagli auto</h5>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <ul class="list-group mb-3 p-4"> 
                      <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Marca:</h6>
                              </div>
                              <span class="text-muted"><?php echo $_smarty_tpl->getValue('car')->getBrand();?>
</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Modello:</h6>
                              </div>
                              <span class="text-muted"><?php echo $_smarty_tpl->getValue('car')->getModel();?>
</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Colore: </h6>
                              </div>
                              <span class="text-muted"><?php echo $_smarty_tpl->getValue('car')->getColor();?>
</span>
                          </li>
                          
                          <li class="list-group-item d-flex justify-content-between ">
                              <div>
                                  <h6 class="my-0">Potenza: </h6>
                              </div>
                              <span class="text-muted"><?php echo $_smarty_tpl->getValue('car')->getHorsepower();?>
</span>
                          </li>

                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Cilindrata: </h6>
                              </div>
                              <span class="text-muted"><?php echo $_smarty_tpl->getValue('car')->getDisplacement();?>
</span>
                          </li>

                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Posti: </h6>
                              </div>
                              <span class="text-muted"><?php echo $_smarty_tpl->getValue('car')->getSeats();?>
</span>
                          </li>

                          <li class="list-group-item d-flex justify-content-between lh-condensed">
                              <div>
                                  <h6 class="my-0">Alimentazione: </h6>
                              </div>
                              <span class="text-muted"><?php echo $_smarty_tpl->getValue('car')->getFuelType();?>
</span>
                          </li>

                          <li class="list-group-item d-flex justify-content-between">
                              <span>Total (EUR)</span>
                              <strong>Totale: <?php echo $_smarty_tpl->getValue('amount');?>
 </strong>
                          </li>
                      </ul>
                        
                      <hr class="mb-4">
                      <a href="/WebApp/User/confirmRent" class="btn btn-primary btn-lg btn-block">Acquista</a>
                     
                    </div>
                </div>
              </div>
            </div>
          </div> <!-- chiusura col-md-6 per il form -->
        </div> <!-- chiusura row -->
      </div> <!-- chiusura container -->
    </div>
  </div>


     
   <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Explicabo, esse consequatur alias repellat in excepturi inventore ad <a href="#">asperiores</a> tempora ipsa. Accusantium tenetur voluptate labore aperiam molestiae rerum excepturi minus in pariatur praesentium, corporis, aliquid dicta.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
              </ul>
              <a href="about-us.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="/WebApp/directory/Smarty/assets/images/about-1-570x350.jpg" alt="">
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
    <?php echo '<script'; ?>
 src="/WebApp/directory/Smarty/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/WebApp/directory/Smarty/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>


    <!-- Additional Scripts -->
    <?php echo '<script'; ?>
 src="/WebApp/directory/Smarty/assets/js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/WebApp/directory/Smarty/assets/js/owl.js"><?php echo '</script'; ?>
>

  </body>

</html>
<?php }
}
