<?php
/* Smarty version 5.5.1, created on 2025-06-26 22:03:40
  from 'file:creditCardFormSale.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685da79c8bd567_90052830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '960e60bae14965135ef96ada16dcbaade5142706' => 
    array (
      0 => 'creditCardFormSale.tpl',
      1 => 1750964963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685da79c8bd567_90052830 (\Smarty\Template $_smarty_tpl) {
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

  

  
  <div class="services" style="background-image: url(/WebApp/directory/Smarty/assets/images/other-image-fullscren-1-1920x900.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5">
          <div class="custom-license-card">
          <div class="card-header"><h5 style="color:white">Riepilogo</h5></div>
              <div class="card-body">
                <h6 style="color:white"> Auto selezionata: <?php echo $_smarty_tpl->getValue('car')->getBrand();?>
<small> </small><?php echo $_smarty_tpl->getValue('car')->getModel();?>
</h6>
                <h7  style="color:white"> Prezzo totale: <?php echo $_smarty_tpl->getValue('amount');?>
</h7>
                
              </div>
          </div>

          <div class="custom-license-card mt-4">
            
          <div class="card-header">
            <h5 style="color:white"> le tue carte </h5>
          </div>

            <form class="needs-validation"  method="post" action="/WebApp/User/showOverviewSale">
                  
            <div class="card-body">        
              <div class="form-group ">
                <label style="color:white" for="card-select">Seleziona una carta salvata (opzionale)</label>
                  <select class="form-control" name="cardNumber" id="card-select" onchange="toggleManualFields(this)"
                    <?php if (!$_smarty_tpl->getValue('cards') || $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('cards')) == 0) {?>disabled<?php }?>>
                    <option value="">-- <p style="color:white">Seleziona una carta</p> --</option>
                      <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cards'), 'card');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('card')->value) {
$foreach0DoElse = false;
?>
                        <option value="<?php echo $_smarty_tpl->getValue('card');?>
">
                          Carta: **** **** **** <?php echo substr((string) $_smarty_tpl->getValue('card'), (int) -4);?>

                    </option>
                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                  </select>
              </div>


              <hr class="md-6 mb-3">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
           </div>
            </form>        
        </div>
        </div>

         
          <div class="col-md-6 ">
           <div class="custom-license-card">
              <h5  style="color:white" class="card-header">Pagamento</h5>
                <form class="needs-validation"  method="post" action="/WebApp/User/showOverviewSale">
                  
            <div class="card-body ">
            <div class="d-block  pl-0 pr-0">
              <div class="custom-control custom-radio" >
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit"  style="color:white" >Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debit"  style="color:white" >Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal"  style="color:white" >Paypal</label>
              </div>
            </div>
            <div id="credit-fields">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name" style="margin-top: 10px">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="" name="cardName">
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number" style="margin-top: 10px">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" name="cardNumber" placeholder="" pattern="[0-9]&#123;13,16&#125;">
                <div class="invalid-feedback">
                Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration"  style="color:white" >Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" name="cardExpiry" placeholder="MM/YY" required="" pattern="(0[1-9]|1[0-2])/[0-9]&#123;2&#125;" title="Formato MM/YY">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" name="cardCVV" placeholder="123" required="" pattern="[0-9]&#123;3,4&#125;" t>
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>
            </div>
            <div id="paypal-fields" style="display: none;">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="paypal-email">PayPal Email</label>
                  <input type="email" class="form-control" id="paypal-email" name="paypal-email" placeholder="email@paypal.com">
                </div>
                <div class="col-md-6 mb-3">
                  <label for="paypal-password">PayPal Password</label>
                  <input type="password" class="form-control" id="paypal-password" name="paypal-password" placeholder="••••••••">
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
           
          </form>
        </div> <!-- chiusura col-md-6 per il form -->
      </div> <!-- chiusura row -->
    </div> <!-- chiusura container -->
  </div>
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

    <?php echo '<script'; ?>
>
      document.addEventListener("DOMContentLoaded", function () {
        const creditFields = document.getElementById("credit-fields");
        const paypalFields = document.getElementById("paypal-fields");
        const paymentMethods = document.querySelectorAll("input[name='paymentMethod']");

        function togglePaymentFields() {
          const selected = document.querySelector("input[name='paymentMethod']:checked").id;
          if (selected === "paypal") {
            creditFields.style.display = "none";
            paypalFields.style.display = "block";
          } else {
            creditFields.style.display = "block";
            paypalFields.style.display = "none";
          }
        }

        paymentMethods.forEach(el => el.addEventListener("change", togglePaymentFields));
        togglePaymentFields();

        // Controllo iniziale per i campi manuali carta
        if (document.getElementById('card-select')) {
          toggleManualFields(document.getElementById('card-select'));
        }
      });

      function toggleManualFields(select) {
        const disabled = select.value !== "";
        document.getElementById('cc-name').disabled = disabled;
        document.getElementById('cc-number').disabled = disabled;
        document.getElementById('cc-expiration').disabled = disabled;
        document.getElementById('cc-cvv').disabled = disabled;
      }
    <?php echo '</script'; ?>
>

  </body>


</html>
<?php }
}
