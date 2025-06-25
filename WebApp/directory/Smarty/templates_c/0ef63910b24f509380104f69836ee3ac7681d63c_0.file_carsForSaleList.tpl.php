<?php
/* Smarty version 5.5.1, created on 2025-06-25 19:38:37
  from 'file:carsForSaleList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685c341d8aaec1_95750157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ef63910b24f509380104f69836ee3ac7681d63c' => 
    array (
      0 => 'carsForSaleList.tpl',
      1 => 1750873105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685c341d8aaec1_95750157 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Paolo\\Documents\\GitHub\\Progetto_web_concessionario\\WebApp\\directory\\Smarty\\templates';
?><!DOCTYPE html>
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
 src="/WebApp/directory/Smarty/js/login-box.js"><?php echo '</script'; ?>
>

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
    
              <li class="nav-item"><a class="nav-link active" href="/WebApp/CarSale/carSearcher/">Acquista</a></li>

              <li class="nav-item"><a class="nav-link" href="/WebApp/User/showCarsForRent/">Noleggia</a></li>

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
   <div class="page-heading about-heading header-text"  style="background-image: url(/WebApp/directory/Smarty/assets/images/other-image-fullscren-1-1920x900.jpg);"">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="custom-license-card">
              <form method="post" action="carsForSaleList/0">
                <div class="card-header">
                  <h4 class=" mb-3" style="color:white">Che auto cerchi?</h4>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                      <ul class="dropdown-menu">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('models'), 'modelList', false, 'brand');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('brand')->value => $_smarty_tpl->getVariable('modelList')->value) {
$foreach0DoElse = false;
?>
                          <li><a class="dropdown-item" href="#" onclick="selectBrand('<?php echo $_smarty_tpl->getValue('brand');?>
')"><?php echo $_smarty_tpl->getValue('brand');?>
</a></li>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                      </ul>
                      <input type="text" class="form-control" name="brand" readonly id="brandInput" aria-label="Text input with dropdown button" placeholder="brand">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="input-group mb-3">
                      <button class="btn btn-outline-secondary dropdown-toggle" disabled="" id="modelButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                      <ul class="dropdown-menu" disabled="" id="modelDropdown">
                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('models'), 'modelList', false, 'brand');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('brand')->value => $_smarty_tpl->getVariable('modelList')->value) {
$foreach1DoElse = false;
?>
                          <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('modelList'), 'model');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('model')->value) {
$foreach2DoElse = false;
?>
                            <li class="dropdown-model-item" data-brand="<?php echo $_smarty_tpl->getValue('brand');?>
">
                              <a class="dropdown-item" href="#" onclick="selectModel('<?php echo $_smarty_tpl->getValue('model');?>
')"><?php echo $_smarty_tpl->getValue('model');?>
</a>
                            </li>
                          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                      </ul>
                      <input type="text" class="form-control" name="model" readonly id="modelInput" aria-label="Text input with dropdown button" placeholder="model" disabled>
                    </div>
                  </div>
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-primary mb-3 " style="color:aliceblue">Cerca</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="products">
      <div class="container">
        <div class="row">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('filteredCars'), 'car');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('car')->value) {
$foreach3DoElse = false;
?>
          <div class="col-md-4">
             <div class="product-item" >
                <?php if ($_smarty_tpl->getValue('car')->getIcon()) {?>
                    <img src="data:<?php echo $_smarty_tpl->getValue('car')->getIcon()->getType();?>
;base64,<?php echo $_smarty_tpl->getValue('car')->getIcon()->getEncodedData();?>
" loading="lazy" alt="Img">
                  <?php } else { ?>
                    <img src="/WebApp/directory/Smarty/assets/images/default-car.jpg" loading="lazy" alt="Nessuna immagine disponibile">
                  <?php }?>
                  <div class="down-content">
                    <h4><?php echo $_smarty_tpl->getValue('car')->getModel();?>
</h4>
                    <h6><small>Prezzo: </small> <?php echo $_smarty_tpl->getValue('car')->getPrice();?>
€</h6>
                  </div>
              </div>
            </div> 
          </div>
          <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>    
            

          

          <nav aria-label="Pagination">
            <ul class="pagination">
              
                            <?php if ($_smarty_tpl->getValue('currentPage') > 1) {?>
                <li class="page-item">
                  <a class="page-link" href="/WebApp/CarSale/CarList/<?php echo $_smarty_tpl->getValue('currentPage')-1;?>
">Previous</a>
                </li>
              <?php } else { ?>
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
              <?php }?>

                            <?php $_smarty_tpl->assign('prevPage', $_smarty_tpl->getValue('currentPage')-1, false, NULL);?>
              <?php $_smarty_tpl->assign('nextPage', $_smarty_tpl->getValue('currentPage')+1, false, NULL);?>

              <?php if ($_smarty_tpl->getValue('prevPage') >= 1) {?>
                <li class="page-item">
                  <a class="page-link" href="/WebApp/CarSale/CarList/<?php echo $_smarty_tpl->getValue('prevPage');?>
"><?php echo $_smarty_tpl->getValue('prevPage');?>
</a>
                </li>
              <?php }?>

              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#"><?php echo $_smarty_tpl->getValue('currentPage');?>
</a>
              </li>

              <?php if ($_smarty_tpl->getValue('nextPage') <= $_smarty_tpl->getValue('totalPages')) {?>
                <li class="page-item">
                  <a class="page-link" href="/WebApp/CarSale/CarList/<?php echo $_smarty_tpl->getValue('nextPage');?>
"><?php echo $_smarty_tpl->getValue('nextPage');?>
</a>
                </li>
              <?php }?>

                            <?php if ($_smarty_tpl->getValue('currentPage') < $_smarty_tpl->getValue('totalPages')) {?>
                <li class="page-item">
                  <a class="page-link" href="/WebApp/CarSale/CarList/<?php echo $_smarty_tpl->getValue('currentPage')+1;?>
">Next</a>
                </li>
              <?php } else { ?>
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Next</a>
                </li>
              <?php }?>

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
    <?php echo '<script'; ?>
   src="/WebApp/directory/Smarty/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src= "/WebApp/directory/Smarty/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>


    <!-- Additional Scripts -->
    <?php echo '<script'; ?>
 src="/WebApp/directory/Smarty/assets/js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/WebApp/directory/Smarty/assets/js/owl.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/WebApp/directory/Smarty/js/login-box.js"><?php echo '</script'; ?>
>
    <!-- Popper.js (necessario per Bootstrap dropdown) -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap JS -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>

</html>
<?php }
}
