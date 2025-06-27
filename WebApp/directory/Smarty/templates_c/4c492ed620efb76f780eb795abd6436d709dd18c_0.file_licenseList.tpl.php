<?php
/* Smarty version 5.5.1, created on 2025-06-27 22:11:37
  from 'file:licenseList.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685efaf9475233_92838962',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c492ed620efb76f780eb795abd6436d709dd18c' => 
    array (
      0 => 'licenseList.tpl',
      1 => 1751051919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685efaf9475233_92838962 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\Users\\Paolo\\Documents\\GitHub\\Progetto_web_concessionario\\WebApp\\directory\\Smarty\\templates';
?><!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Patenti Da Verificare</h2>


    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Email</th>
                <th>Data Scadenza</th>
                <th>Immagine Patente</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('licenses'), 'license');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('license')->value) {
$foreach0DoElse = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->getValue('license')->getUserId()->getFirstname();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('license')->getUserId()->getLastname();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('license')->getUserId()->getEmail();?>
</td>
                    <td><?php echo $_smarty_tpl->getValue('license')->getExp()->format("Y/m/d");?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->getValue('license')->getPhoto()) {?>
                            <img src="data:<?php echo $_smarty_tpl->getValue('license')->getPhoto()->getType();?>
;base64,<?php echo $_smarty_tpl->getValue('license')->getPhoto()->getEncodedData();?>
" alt="patente" class="img-fluid" />

                        <?php } else { ?>
                            <em>Nessuna immagine</em>
                        <?php }?>
                    </td>
                    <td>
                        <a href="/WebApp/Admin/checkLicense/<?php echo $_smarty_tpl->getValue('license')->getIdLicense();?>
" 
                           class="btn btn-primary btn-lg btn-block">
                           Accetta
                        </a>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

</div>

</body>
</html>
<?php }
}
