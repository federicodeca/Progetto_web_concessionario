<?php
/* Smarty version 5.5.1, created on 2025-06-26 12:55:38
  from 'file:success.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685d272a8cc5b2_18179196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3650ebb769daf341a29c124c5d5fbea75ae50243' => 
    array (
      0 => 'success.tpl',
      1 => 1750602891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685d272a8cc5b2_18179196 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Paolo\\Documents\\GitHub\\Progetto_web_concessionario\\WebApp\\directory\\Smarty\\templates';
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Congratulations Page Design By WebJourney - Html Template </title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/style.css">
    <link rel="stylesheet" href="/WebApp/directory/Smarty/assets/css/owl.css">
    <style>
    
    .congratulation-contents-icon {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 100px;
        width: 100px;
        background-color: #40c75b;
        color: #fff;
        font-size: 50px;
        border-radius: 50%;
        margin-bottom: 30px;
    }
    
    .cmn-btn.btn-bg-1 {
        background: #5464ce;
        color: #fff;
        border: 2px solid transparent;
        border-radius:3px;
        text-decoration: none;
        padding:5px;
    }
    </style>
</head>

<body>
    <!-- Congratulations area start -->
    <div class="congratulation-area text-center mt-5">
        <div class="container">
            <div class="congratulation-wrapper">
                <div class="congratulation-contents center-text">
                    <div class="congratulation-contents-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <h4 class="congratulation-contents-title"> Ottimo! </h4>
                    <p class="congratulation-contents-para"> Il tuo account è pronto per l'uso. </p>
                    <div class="btn-wrapper mt-4">
                        <a href="/WebApp/User/home" class="cmn-btn btn-bg-1"> Torna alla Home </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Congratulations area end -->

<!-- Latest compiled JavaScript -->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
