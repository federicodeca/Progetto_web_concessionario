<?php
/* Smarty version 5.5.1, created on 2025-06-20 15:57:44
  from 'file:CarDetails.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685568d8979502_23901406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6bb786b6e909ea21903c566614bc58f28d77b6ff' => 
    array (
      0 => 'CarDetails.tpl',
      1 => 1750427781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685568d8979502_23901406 (\Smarty\Template $_smarty_tpl) {
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
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/calendar-custom.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    
   
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
>
    const indisp = <?php echo json_encode($_smarty_tpl->getValue('indisp'));?>
;
    const surcharges = <?php echo json_encode($_smarty_tpl->getValue('surcharges'));?>
;
    const basePrice=<?php echo (($tmp = $_smarty_tpl->getValue('basePrice') ?? null)===null||$tmp==='' ? 50 ?? null : $tmp);?>
;
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/WebApp/directory/Smarty/js/login-box.js"><?php echo '</script'; ?>
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
          <a class="navbar-brand" href="index.html"><h2>Piselloni <em>TopGear</em></h2></a>
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

              <li class="nav-item"><a class="nav-link" href="fleet.html">Acquista</a></li>

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
    <div class="page-heading about-heading header-text" style="background-image: url(/WebApp/directory/Smarty/assets/images/heading-6-1920x500.jpg);">
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
              
              <form id="contact-form" action="/WebApp/User/loginAndCreditRequirement" method="post">
                <input type="hidden" id="idAuto" name="idAuto" value="<?php echo $_smarty_tpl->getValue('car')->getIdAuto();?>
">
                <input type="text" id="date-range" name="dateRange" class="form-control w-50" placeholder="Seleziona intervallo date" style="length: 20px" />
                <input type="hidden" id="startDate" name="startDate" />
                <input type="hidden" id="endDate" name="endDate" />

                <div class="col-lg-12">
                    <fieldset>
                      
                      <div>Prezzo totale: <span id="totalPriceDisplay">0</span> €</div>
                      
                    </fieldset>
                  </div>

                <div class="col-lg-12" style= "margin-top: 20px">
                    <fieldset>
                      <button type="submit" id="form-submit"  class="filled-button">Submit</button>
                    </fieldset>
                  </div>

              </form>
            </div>
          </div>

          <div class="col-md-4">
              <div class="left-content">

                <p>seguici sulle nostre pagine social per rimanere aggiornato sulle novità e per ricevere sconti</p>

                <br> 

                <ul class="social-icons">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
        </div>
      </div>
    </div>

    <div style="margin-top:100px"></div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <img 
            src="data:<?php echo $_smarty_tpl->getValue('car')->getPhoto()->getType();?>
;base64,<?php echo $_smarty_tpl->getValue('car')->getPhoto()->getEncodedData();?>
" 
            style="max-width: 100%; height: auto;" 
            loading="lazy" 
            alt="Img">
        </div>
      </div>
    </div>
   
      
    
    

    <div class="products">
      <div class="container" >
        <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Informazioni</h2>
              </div>
            </div>

            <div class="col-md-8">
                <h5>Marca: <?php echo $_smarty_tpl->getValue('car')->getBrand();?>
</h5>

                <br>

                <h5> Modello: <?php echo $_smarty_tpl->getValue('car')->getModel();?>
</h5>

                <br>

                <h5>Cavalli: <?php echo $_smarty_tpl->getValue('car')->getHorsePower();?>
</h5>

                <br>

               <h5>Cilindrata: <?php echo $_smarty_tpl->getValue('car')->getDisplacement();?>
</h5>

                <br>
                <h5>Numero Posti: <?php echo $_smarty_tpl->getValue('car')->getSeats();?>
</h5>

                <br>
                <h5>Alimentazione: <?php echo $_smarty_tpl->getValue('car')->getFuelType();?>
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
            <p>Id auto: <?php echo $_smarty_tpl->getValue('car')->getIdAuto();?>
</p>
              <p>Copyright © 2020 Company Name - Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></p>
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
              <form action="WebApp/User/loginAndCreditRequirement" id="modal-contact">
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
 src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"><?php echo '</script'; ?>
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
    <?php echo '<script'; ?>
 src="/WebApp/directory/Smarty/js/calendar.js"><?php echo '</script'; ?>
>
 


  </body>

</html >
<?php }
}
