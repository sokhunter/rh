<?php /* Smarty version 3.1.27, created on 2019-10-18 22:52:57
         compiled from "C:\wamp\www\rh\application\views\menu_admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:277475daa4249366917_60637222%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12d0ee4bc472c3564e13eb195458abd8bc58d959' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\menu_admin.tpl',
      1 => 1571439175,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277475daa4249366917_60637222',
  'variables' => 
  array (
    'active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5daa42493ef6e3_47022582',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5daa42493ef6e3_47022582')) {
function content_5daa42493ef6e3_47022582 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '277475daa4249366917_60637222';
?>
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'empresa') {?>active<?php }?>">
		<a class="nav-link" href="#">Empresa <span class="sr-only">(current)</span></a>
	</li>
</ul><?php }
}
?>