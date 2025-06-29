<?php
/* Smarty version 5.5.1, created on 2025-06-29 12:28:08
  from 'file:registrationForm.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68611538c5a113_44640315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b85b16d5e501a9abd067276fec5667e07b44fae3' => 
    array (
      0 => 'registrationForm.tpl',
      1 => 1751192071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68611538c5a113_44640315 (\Smarty\Template $_smarty_tpl) {
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
          <a class="navbar-brand" href="index.html"><h2>Rental <em>Website</em></h2></a>
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
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
 

    <div class="services" style="background-image: url(/RentalTopGear/directory/Smarty/assets/images/other-image-fullscren-1-1920x900.jpg);">
      <div class="container" style="width:auto; height: auto; padding: 20px; margin-top: 100px;">
           <form  method="post" action="/RentalTopGear/User/registration">
            <div class="custom-license-card">

            <div class="form-row">
              <div class="col-md-6">
              <label for="inputName" class="form-label" style="color:aliceblue"> Name </label>
              <input type="text" class="form-control" id="inputName" name="name">
            </div>
             <div class="col-md-6">
              <label for="inputName" class="form-label" style="color:aliceblue"> Surname </label>
              <input type="text" class="form-control" id="inputSurname" name="surname">
            </div>
           </div> 
            
          <div class="form-row">
            <div class="col-md-6" style="margin-top: 20px;">
              <label for="inputEmail4" class="form-label" style="color:aliceblue"> Email </label>
              <input type="email" class="form-control" id="inputEmail4" name="email">
            </div>

             <div class="col-md-6" style="margin-top: 20px;" >
              <label for="inputAddress" class="form-label" style="color:aliceblue" >Username</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="pippo" name="username">
            </div>
          </div>  

          <div class="form-row">
            <div class="col-md-6" style="margin-top: 20px;">
              <label for="inputPhone" class="form-label" style="color:aliceblue"> Phone </label>
              <input type="text" class="form-control" id="namePhone" name="phone">
            </div>

            
            <div class="col-md-6" style="margin-top: 20px;">
              <label for="inputPassword4" class="form-label" style="color:aliceblue">Password</label>
              <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
          </div>  

          <div class="form-row">
            <div class="col-md-6" style="margin-top: 20px;" >
              <label for="inputCity" class="form-label" style="color:aliceblue" >City</label>
              <input type="text" class="form-control" id="inputCity"  name="city">
            </div>
 
            
            <div class="col-md-2" style="margin-top: 20px;" >
              <label for="inputZip" class="form-label" style="color:aliceblue">Zip</label>
              <input type="text" class="form-control" id="inputZip" name="zip">
            </div>
          </div> 

             <div class="col-12" style="margin-top: 20px;" >
              <label for="inputAddress" class="form-label" style="color:aliceblue" >Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="pippo" name="address">
            </div>

            <div class="col-12" style="margin-top: 20px;" >
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck" style="color:aliceblue">
                  Check me out
                </label>
              </div>
            </div>
            <div class="col-12" style="margin-top: 20px;" >
              <button type="submit" class="btn btn-primary" style="color:aliceblue">Sign in</button>
            </div>
          </form>
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
              <img src="/RentalTopGear/directory/Smarty/assets/images/about-1-570x350.jpg" alt="">
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
              <i class="fa-solid fa-phone"></i><h4> +39 123 456 789</h4>

            </div>
          </div>
        </div>
      </div>
    </footer>



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

</html>
<?php }
}
