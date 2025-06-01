<?php



require_once __DIR__ . '/install/StartSmarty.php';

$smarty = StartSmarty::configuration();
$smarty->assign('nome', 'Federico');
$smarty->display('hello.tpl');