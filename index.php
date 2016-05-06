<?php 
	include('../libs/smarty-3.1.29/libs/Smarty.class.php');
	include('config.php');

	$smarty = new Smarty;
	$smarty->debugging = true;
	$smarty->caching = true;
	$smarty->cache_lifetime = 120;
	

	$smarty->display('index.tpl');

?>