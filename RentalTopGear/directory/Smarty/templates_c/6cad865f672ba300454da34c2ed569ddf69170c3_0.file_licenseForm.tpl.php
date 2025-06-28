<?php
/* Smarty version 5.5.1, created on 2025-06-26 16:24:49
  from 'file:licenseForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685d5831ddaa20_41155813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cad865f672ba300454da34c2ed569ddf69170c3' => 
    array (
      0 => 'licenseForm.tpl',
      1 => 1750927552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685d5831ddaa20_41155813 (\Smarty\Template $_smarty_tpl) {
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

    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    
   <!--dati per login-->
  <?php echo '<script'; ?>
>
    const isLogged = <?php echo (($tmp = json_encode($_smarty_tpl->getValue('isLogged')) ?? null)===null||$tmp==='' ? 'false' ?? null : $tmp);?>
;
    const username = "<?php echo (($tmp = strtr((string)$_smarty_tpl->getValue('username'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{")) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
";
  <?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 src="/RentalTopGear/directory/Smarty/js/login-box.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/RentalTopGear/directory/Smarty/js/license-calendar.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/RentalTopGear/directory/Smarty/js/size-image.js"><?php echo '</script'; ?>
>


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

      <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
    <div class="progress-bar" style="width: 50%"></div>
  </div>
  
      <div class="services" style="background-image: url(/RentalTopGear/directory/Smarty/assets/images/other-image-fullscren-1-1920x900.jpg);">
        <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5">
            <div class="custom-license-card">
            <div class="card-header">
            <h2 style="color:white">License</h2>
            </div>
            <?php echo '<script'; ?>
>
  console.log("licenseInserted =", <?php echo json_encode($_smarty_tpl->getValue('licenseInserted'));?>
);
<?php echo '</script'; ?>
> 

                  <?php if (!$_smarty_tpl->getValue('licenseInserted')) {?>
                  <form id="uploadForm" method="POST" action="/RentalTopGear/User/uploadLicense" enctype="multipart/form-data">
                    <div class="col-md-12 my-5">
                      <div class="mb-5">
                        <label for="formFile" class="form-label">Carica la patente</label>
                        <input class="form-control" type="file" id="photo" name="photo" required>
                      </div>
                    </div>

                    <div class="col-md-12 mb-3">
                      <input type="text" id="exp" name="exp" placeholder="YYYY-MM-DD" required>
                    </div>

                    <div class="col-md-4">
                      <button class="btn btn-primary mb-3" style="color:aliceblue" type="submit">Invia</button>
                    </div>  
                  </form>
                <?php } else { ?>
                  <div class="card-body">
                  <br>
                  <h5 style="color:white">Patente già verificata</h5><br>
                  <h7 style="color:white">Gentile cliente ha gia fornito una patente valida.<br> Torni alla home</h7>
                  <div class="col-md-12 my-5 ">
                  <a class="btn btn-primary" href="RentalTopGear/User/home">Vai alla Home</a>
                  </div>
                <?php }?>
              
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
