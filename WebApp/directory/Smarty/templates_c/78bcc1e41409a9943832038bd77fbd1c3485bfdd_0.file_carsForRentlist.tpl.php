<?php
/* Smarty version 5.5.1, created on 2025-06-24 22:46:12
  from 'file:carsForRentlist.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685b0e94cb1ca0_70827707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78bcc1e41409a9943832038bd77fbd1c3485bfdd' => 
    array (
      0 => 'carsForRentlist.tpl',
      1 => 1750797655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685b0e94cb1ca0_70827707 (\Smarty\Template $_smarty_tpl) {
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

  <input type="hidden" id="actualMethod" value="showCarsForRent">
 

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
          <a class="navbar-brand"   href="index.html"><h2>Piselloni<em>TopGear</em></h2></a>
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

              <li class="nav-item"><a class="nav-link" href="/WebApp/CarSale/carSearcher/">Acquista</a></li>

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

 <!-- Page Content pagination (smarty side only)-->

     <div class="page-heading about-heading header-text" style="background-image: url(/WebApp/directory/Smarty/assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Lorem ipsum dolor sit amet</h4>
              <h2>Fleet</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $_smarty_tpl->assign('perPage', 6, false, NULL);?>                       <!-- Number of cars per page -->
<?php $_smarty_tpl->assign('page', (($tmp = $_GET['page'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp), false, NULL);?> <!-- Current page, default to 1 if not set reda page=x-->
<?php $_smarty_tpl->assign('start', ($_smarty_tpl->getValue('page')-1)*$_smarty_tpl->getValue('perPage'), false, NULL);?>     <!-- Calculate the starting index for the current page -->
<?php $_smarty_tpl->assign('end', $_smarty_tpl->getValue('start')+$_smarty_tpl->getValue('perPage'), false, NULL);
echo $_smarty_tpl->getSmarty()->getFunctionHandler('math')->handle(array('assign'=>"totalPages",'equation'=>"ceil(x / y)",'x'=>$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('cars')),'y'=>$_smarty_tpl->getValue('perPage')), $_smarty_tpl);?>
  <!-- Calculate total pages based on the number of cars and perPage -->
<?php $_smarty_tpl->assign('index', 0, false, NULL);?>  
    <div class="products">
      <div class="container">

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('cars')) > 0) {?>
   
        <!-- mostra auto -->
    

<?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cars'), 'car');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('car')->value) {
$foreach0DoElse = false;
?>
  <?php if ($_smarty_tpl->getValue('index') >= $_smarty_tpl->getValue('start') && $_smarty_tpl->getValue('index') < $_smarty_tpl->getValue('end')) {?>
    <?php if (($_smarty_tpl->getValue('index')-$_smarty_tpl->getValue('start'))%3 == 0) {?><div class="row"><?php }?>
    <div class="col-md-4"> <!--row in 12,every column start on 4 from 12-->
    <a href='/WebApp/User/selectCarForRent/<?php echo $_smarty_tpl->getValue('car')->getIdAuto();?>
'>
      <div class="product-item" >
       <img src="data:<?php echo $_smarty_tpl->getValue('car')->getPhoto()->getType();?>
;base64,<?php echo $_smarty_tpl->getValue('car')->getPhoto()->getEncodedData();?>
" loading="lazy" alt="Img">
        <div class="down-content">
          <h4><?php echo $_smarty_tpl->getValue('car')->getModel();?>
</h4>
          <h6><small>from</small> <?php echo $_smarty_tpl->getValue('car')->getBasePrice();?>
€ <small>per weekend</small></h6>
          <p><?php echo $_smarty_tpl->getValue('car')->getDescription();?>
</p>
        </div>
        </a>
      </div>
    </div>

    <?php if (($_smarty_tpl->getValue('index')-$_smarty_tpl->getValue('start'))%3 == 2 || $_smarty_tpl->getValue('index') == $_smarty_tpl->getValue('end')-1 || $_smarty_tpl->getValue('index') == $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('cars'))-1) {?></div><?php }?>
  <?php }?>
  <?php $_smarty_tpl->assign('index', $_smarty_tpl->getValue('index')+1, false, NULL);?>

<?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>


    

<?php } else { ?>
 <div class="banner-item-03">
  <b class="text-content">  Non ci sono auto disponibili</b>
</div>
<?php }?>
</div>
</div>

<footer>
   <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
<?php if ($_smarty_tpl->getValue('totalPages') > 1) {?>
  
    <ul class="pages d-flex justify-content-center list-unstyled" style="gap:12px">
      <?php if ($_smarty_tpl->getValue('page') > 1) {?>
 
        <li><a href="?page=<?php echo $_smarty_tpl->getValue('page')-1;?>
"><i class="fa fa-angle-double-left"></i></a></li>
      <?php }?>
 
    
      <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('totalPages')) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new \Smarty\Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php $_smarty_tpl->assign('p', ($_smarty_tpl->getValue('__smarty_section_i')['index'] ?? null)+1, false, NULL);?>
        <li <?php if ($_smarty_tpl->getValue('p') == $_smarty_tpl->getValue('page')) {?> class="active"<?php }?>>
          <a href="?page=<?php echo $_smarty_tpl->getValue('p');?>
"><?php echo $_smarty_tpl->getValue('p');?>
</a>
        </li>

      <?php
}
}
?>

      <?php if ($_smarty_tpl->getValue('page') < $_smarty_tpl->getValue('totalPages')) {?>
        
        <li><a href="?page=<?php echo $_smarty_tpl->getValue('page')+1;?>
"><i class="fa fa-angle-double-right"></i></a></li>
       
      <?php }?>
    </ul>
  
<?php }?> 
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
