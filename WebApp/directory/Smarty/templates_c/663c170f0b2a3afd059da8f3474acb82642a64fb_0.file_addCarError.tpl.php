<?php
/* Smarty version 5.5.1, created on 2025-06-26 17:53:16
  from 'file:addCarError.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685d6cec8cf693_14118572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '663c170f0b2a3afd059da8f3474acb82642a64fb' => 
    array (
      0 => 'addCarError.tpl',
      1 => 1750951506,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685d6cec8cf693_14118572 (\Smarty\Template $_smarty_tpl) {
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
        background-color: #e41414;
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </div>
                    <h4 class="congratulation-contents-title"> Ops! </h4>
                    <p class="congratulation-contents-para"> C'è stato un errore. </p>
                    <div class="btn-wrapper mt-4">
                        <a href="/WebApp/Admin/home" class="cmn-btn btn-bg-1"> Riprova </a>
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
