<?php
/* Smarty version 5.5.1, created on 2025-07-03 12:27:40
  from 'file:homeOwner.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68665b1c5e45a4_33655859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '804004ec4119f6032b65ece78419f841f4788a75' => 
    array (
      0 => 'homeOwner.tpl',
      1 => 1751536475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68665b1c5e45a4_33655859 (\Smarty\Template $_smarty_tpl) {
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

     <!-- Additional icon  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" /> 



    <!--dati per login-->
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

      const rentPerDay=<?php echo (($tmp = json_encode($_smarty_tpl->getValue('rentPerDay')) ?? null)===null||$tmp==='' ? '[]' ?? null : $tmp);?>
;
      const salePerDay=<?php echo (($tmp = json_encode($_smarty_tpl->getValue('salePerDay')) ?? null)===null||$tmp==='' ? '[]' ?? null : $tmp);?>
;
      
    <?php echo '</script'; ?>
>
  </head>

<body>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/RentalTopGear/directory/Smarty/js/home-chart.js"><?php echo '</script'; ?>
>


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
          <a class="navbar-brand" href="index.html"><h2>Rental <em>TopGear</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <!-- Spazio riservato al login/user box -->
              <li id="user-box" class="nav-item d-flex align-items-center"></li>

              <li class="nav-item active">
                <a class="nav-link" href="RentalTopGear/User/home">Home <span class="sr-only">(current)</span></a>
              </li>

              <li class="nav-item"><a class="nav-link" href="/RentalTopGear/Owner/showSaleStatsForPeriod">Numero vendite</a></li>

              <li class="nav-item"><a class="nav-link" href="/RentalTopGear/Owner/+/">Clienti</a></li>


              <li class="nav-item"><a class="nav-link" href="/RentalTopGear/Owner/showRentStatsForPeriod/">Statistiche noleggi</a></li>


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
                      <?php if ($_smarty_tpl->getValue('permission') === 'owner') {?>
                        <a class="dropdown-item" href="/RentalTopGear/Owner/home">Resoconto Azienda</a>
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

    


  
        
    <div class="services">
        <div class="container">
            <div class="row my-5">
                
   
            <!-- row -->
          
                <!--- Lista degli ordini -->
                <div class="col-12 tm-block-col my-4">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll" style="height: 500px; overflow-y: auto; border: 1px solid #ccc; padding: 10px;">
                        <h2 class="tm-block-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                            </svg>
                            Lista Vendite</h2>
                        <table class="table" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">NUM. ORDINE</th>
                                    <th scope="col">NOME</th>
                                    <th scope="col">COGNOME</th>
                                    <th scope="col">MARCA AUTO</th>
                                    <th scope="col">MODELLO AUTO</th>
                                    <th scope="col">DATA ORDINE</th>
                                    <th scope="col">TOTALE</th>
                                </tr>
                            </thead>
                            <tbody>
                        

                                
                         
                                <!--- Lista auto vendita -->
                                <?php $_smarty_tpl->assign('total', 0, false, NULL);?>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('saleOrders'), 'sale');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('sale')->value) {
$foreach0DoElse = false;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->getValue('sale')->getOrderId();?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('sale')->getUser()->getFirstName();?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('sale')->getUser()->getLastName();?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('sale')->getCarForSale()->getBrand();?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('sale')->getCarForSale()->getModel();?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('sale')->getOrderDate()->format("Y/m/d");?>
</td>
                                        <td><?php echo $_smarty_tpl->getValue('sale')->getPrice();?>
</td>
                                        <?php $_smarty_tpl->assign('total', $_smarty_tpl->getValue('total')+$_smarty_tpl->getValue('sale')->getPrice(), false, NULL);?>
                                    </tr>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?> 
                                </tbody>
                        </table> 
                    </div>
                </div>
        
            
                <div class="col-sm-12 col-md-12 my-4">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                            <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                            </svg>
                            Totale vendite:  <small>€ <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('total'),2,",",".");?>
</small></h2>
                        <canvas id="lineChart"></canvas>
                    </div>
                </div>
                <!-- Scatter chart Vendite (Data vs Prezzo) -->
                <div class="col-12 tm-block-col mb-5">
                  <div class="tm-bg-primary-dark tm-block">
                    <h2 class="tm-block-title">Vendite </h2>
                    <canvas id="salesScatterChart" class="graphic-custom"></canvas>
                  </div>
                </div>
            </div>
        </div>

            
        <div class="container">
            <div class="row ">
                <div class="col-12 tm-block-col" >    
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll" style="height: 500px; overflow-y: auto; border: 1px solid #ccc; padding: 10px;">
                        <h2 class="tm-block-title">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                    <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8m0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5m-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0M4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/>
                    </svg>
                    Lista ordini</h2>

                        <table class="table" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">NUM. ORDINE</th>
                                    <th scope="col">NOME</th>
                                    <th scope="col">COGNOME</th>
                                    <th scope="col">MARCA AUTO</th>
                                    <th scope="col">MODELLO AUTO</th>
                                    <th scope="col">DATA ORDINE</th>
                                    <th scope="col">TOTALE</th>
                                </tr>
                            </thead>
                            <tbody>  
                                <!--- Lista auto noleggio-->
                                <?php $_smarty_tpl->assign('totalRent', 0, false, NULL);?>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('rentOrders'), 'rent');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('rent')->value) {
$foreach1DoElse = false;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->getValue('rent')->getOrderId();?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('rent')->getUser()->getFirstName();?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('rent')->getUser()->getLastName();?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('rent')->getAuto()->getBrand();?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('rent')->getAuto()->getModel();?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('rent')->getOrderDate()->format("Y/m/d");?>
</td>
                                    <td><?php echo $_smarty_tpl->getValue('rent')->getTotalPrice();?>
</td>
                                    <?php $_smarty_tpl->assign('totalRent', $_smarty_tpl->getValue('totalRent')+$_smarty_tpl->getValue('rent')->getTotalPrice(), false, NULL);?>
                                </tr>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </tbody>
                        </table>
                    </div>
                </div>
  
        
                <div class="col-sm-12 col-md-12 my-4">
                    <div class="tm-bg-primary-dark tm-block">
                        <h2 class="tm-block-title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                            <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                            </svg>
                            Totale noleggi:  <small>€ <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('totalRent'),2,",",".");?>
</small></h2>
                        <canvas id="barChart"></canvas>
                    </div>
                </div>
                                <!-- Scatter chart Vendite (Data vs Prezzo) -->
                <div class="col-12 tm-block-col my-4">
                  <div class="tm-bg-primary-dark tm-block">
                    <h2 class="tm-block-title">Noleggi </h2>
                    <canvas id="rentScatterChart" class="graphic-custom"></canvas>
                  </div>
                </div>
            </div>
        </div>




    
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

              <p> RentalTopGear  <a href="/RentalTopGear/User/home"></a> </p>
              <p>Copyright &copy; 2023 TopGear</p>
              <i class="fa-solid fa-phone mr-2"></i><h4> +39 123 456 789</h4> 
                

            </div>
          </div>
        </div>
      </div>
    </footer>





    <!-- Chart.js scatter chart for Vendite (Data vs Prezzo) -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chart.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/moment@2.29.1/moment.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/chartjs-adapter-moment@1.0.0"><?php echo '</script'; ?>
>
    
   

    <!-- Bootstrap core JavaScript -->
    <?php echo '<script'; ?>
 src="/RentalTopGear/directory/Smarty/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
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
     
</body>
</html><?php }
}
