<?php
/* Smarty version 5.5.1, created on 2025-07-04 09:46:40
  from 'file:CarDetails.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_686786e0f03e14_29939487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ddbbe866e71ba0b9073494e9bdfa7f8cf7e1ad6' => 
    array (
      0 => 'CarDetails.tpl',
      1 => 1751571039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_686786e0f03e14_29939487 (\Smarty\Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="/RentalTopGear/directory/Smarty/assets/css/calendar-custom.css">
      <!-- Additional icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" /> 
    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    
   
    <?php echo '<script'; ?>
>
      const isLogged = <?php echo (($tmp = json_encode($_smarty_tpl->getValue('isLogged')) ?? null)===null||$tmp==='' ? 'false' ?? null : $tmp);?>
;
      const username = "<?php echo (($tmp = strtr((string)$_smarty_tpl->getValue('username'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{")) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
";
      const permission = "<?php echo (($tmp = strtr((string)$_smarty_tpl->getValue('permission'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", 
						"\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S",
						"`" => "\\`", "\${" => "\\\$\{")) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
";
    <?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
>
    const indisp = <?php echo json_encode($_smarty_tpl->getValue('indisp'));?>
;
    const surcharges = <?php echo json_encode($_smarty_tpl->getValue('surcharges'));?>
;
    const basePrice=<?php echo (($tmp = $_smarty_tpl->getValue('basePrice') ?? null)===null||$tmp==='' ? 50 ?? null : $tmp);?>
;
    <?php echo '</script'; ?>
>
   

  </head>

  <body>

  <input type="hidden" id="actualMethod" value="selectCarForRent">
 

  
    


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
                <li class="nav-item">
                    <a class="nav-link" href="/RentalTopGear/User/home">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

              <li class="nav-item"><a class="nav-link" href="/RentalTopGear/User/carSearcher/">Acquista</a></li>

              <li class="nav-item"><a class="nav-link active" href="/RentalTopGear/User/showCarsForRent/">Noleggia</a></li>

                

                <li class="nav-item"><a class="nav-link" href="/RentalTopGear/User/showAboutUs/">About Us</a></li>
                
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

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(/RentalTopGear/directory/Smarty/assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
             
              <h2><?php echo $_smarty_tpl->getValue('car')->getBrand();?>
 <?php echo $_smarty_tpl->getValue('car')->getModel();?>
</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
     <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Prenota ora </h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              
              <form id="contact-form" action="/RentalTopGear/User/loginAndCreditRequirement" method="post">
                <input type="hidden" id="idAuto" name="idAuto" value="<?php echo $_smarty_tpl->getValue('car')->getIdAuto();?>
">

                <i class="fa-solid fa-calendar-days mr-2"></i>
                <input type="text"  id="date-range" name="dateRange" class="form-control w-50" placeholder="Seleziona intervallo date" style="length: 20px" />
                <input type="hidden" id="startDate" name="startDate" />
                <input type="hidden" id="endDate" name="endDate" />
               

                <div class="col-lg-12">
                    <fieldset>
                      
                      <div>Prezzo totale: <span id="totalPriceDisplay">0</span> €</div>
                      <br>
                      <p>Per procedere al noleggio è necessario effettuare il login<br> o registrarsi se non si è ancora iscritti.</p>
                      
                    </fieldset>
                  </div>

                <div class="col-lg-12" style= "margin-top: 20px">
                    <fieldset>
                    <?php if ($_smarty_tpl->getValue('permission') == 'admin' || $_smarty_tpl->getValue('permission') == 'owner') {?>
                      <?php } else { ?>
                      <button type="submit" id="form-submit"  class="filled-button">Submit</button>
                      <?php }?>
                    </fieldset>
                  </div>

              </form>
            </div>
          </div>

          <div class="col-md-4">
              <div class="left-content">

                <p>Seguici sulle nostre pagine social per rimanere aggiornato sulle novità e per ricevere sconti</p>


                <br> 

                <ul class="social-icons">
                  <li><a href="#"> <i class="fa-brands fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-square-x-twitter"></i></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div style="margin-top:100px"></div>
  
   


      
    
    

    <div class="products">
      <div class="container" >
        <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Informazioni</h2>
              </div>
            </div>

            <div class="col-md-8">
                <h5><i class="fa-solid fa-car mr-2"></i>Marca: <?php echo $_smarty_tpl->getValue('car')->getBrand();?>
</h5>

                <br>

                <h5><i class="fa-solid fa-gear mr-2"></i> Modello: <?php echo $_smarty_tpl->getValue('car')->getModel();?>
</h5>

                <br>

                <h5><i class="fa-solid fa-bolt-lightning mr-2"></i>Cavalli: <?php echo $_smarty_tpl->getValue('car')->getHorsePower();?>
</h5>

                <br>

                  <h5 ><i class="fa-solid fa-fire mr-2"></i>Cilindrata: <?php echo $_smarty_tpl->getValue('car')->getDisplacement();?>
</h5>
                
                <br>

                <h5><i class="fa-solid fa-user mr-2"></i>Numero Posti: <?php echo $_smarty_tpl->getValue('car')->getSeats();?>
</h5>

                <br>
                
                <h5><i class="fas fa-gas-pump mr-2"></i>Alimentazione: <?php echo $_smarty_tpl->getValue('car')->getFuelType();?>
</h5>
            </div>

            <div class="col-md-4">
              <div class="left-content">
                <h5>Regole di contratto</h5>

                <br>
                
                <p>Noleggiando un nostro veicolo si acconsente al trattamento dei propri dati </p>
                
                <p>Si ricorda che per procedere con il noleggio di un veicolo si necessita la verifica di possesso di patente europea valida. Procedi al login per inserire il tuo documento. Leggere attentatmente le condizoni di noleggio, in caso di mancato rispetto delle regole verrà trattenuta una mora in percentuale variabile</p>
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

              <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('car')->getPhoto(), 'photo', false, NULL, 'carosello', array (
  'first' => true,
  'iteration' => true,
  'index' => true,
));
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('photo')->value) {
$foreach0DoElse = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_carosello']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_carosello']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_carosello']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_carosello']->value['index'];
?>
                    <div class="carousel-item <?php if (($_smarty_tpl->getValue('__smarty_foreach_carosello')['first'] ?? null)) {?>active<?php }?>">
                      <img    src="data:<?php echo $_smarty_tpl->getValue('photo')->getType();?>
;base64,<?php echo $_smarty_tpl->getValue('photo')->getEncodedData();?>
" class="d-block w-100 image-carousel-custom" alt="Immagine <?php echo ($_smarty_tpl->getValue('__smarty_foreach_carosello')['iteration'] ?? null);?>
">
                    </div>
                  <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                </div>
                  <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

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
              <form action="RentalTopGear/User/loginAndCreditRequirement" id="modal-contact">
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
 src="/RentalTopGear/directory/Smarty/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"><?php echo '</script'; ?>
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
    <?php echo '<script'; ?>
 src="/RentalTopGear/directory/Smarty/js/calendar.js"><?php echo '</script'; ?>
>
 


  </body>
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
              <i class="fa-solid fa-phone"></i><h4> +39 123 456 789</h4>

            </div>
          </div>
        </div>
      </div>
    </footer>


</html >
<?php }
}
