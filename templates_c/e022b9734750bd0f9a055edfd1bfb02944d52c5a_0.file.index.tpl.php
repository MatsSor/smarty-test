<?php
/* Smarty version 3.1.29, created on 2016-05-06 10:23:12
  from "/Applications/XAMPP/xamppfiles/htdocs/phpSmartyTest/templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c5470049ce1_40251835',
  'file_dependency' => 
  array (
    'e022b9734750bd0f9a055edfd1bfb02944d52c5a' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/phpSmartyTest/templates/index.tpl',
      1 => 1462522990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_572c5470049ce1_40251835 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/Applications/XAMPP/xamppfiles/htdocs/libs/smarty-3.1.29/libs/plugins/modifier.capitalize.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<pre>
	User Information:

	Name: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['name']->value);?>

	Address: <?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['address']->value);?>


</pre>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
