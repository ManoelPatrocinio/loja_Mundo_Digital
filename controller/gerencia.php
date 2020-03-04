<?php
if ($_SESSION['logado'] && $_SESSION['adm']) {
    $smarty = new Template();
} else {
    header('Location: http://localhost/loja/');
}



$smarty->display('gerencia.tpl');

?>
