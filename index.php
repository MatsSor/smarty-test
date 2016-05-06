<?php 
	include('../libs/smarty-3.1.29/libs/Smarty.class.php');

	$smarty = new Smarty;
	$smarty->assign('name', 'george smith');
	$smarty->assign('address', '45th & harris');

	$smarty->display('index.tpl');

?>