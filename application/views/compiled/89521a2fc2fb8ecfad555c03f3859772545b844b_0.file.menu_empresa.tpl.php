<?php /* Smarty version 3.1.27, created on 2019-10-18 22:54:18
         compiled from "C:\wamp\www\rh\application\views\menu_empresa.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:130825daa429aa56f61_86884842%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89521a2fc2fb8ecfad555c03f3859772545b844b' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\menu_empresa.tpl',
      1 => 1571439219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130825daa429aa56f61_86884842',
  'variables' => 
  array (
    'active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5daa429aae2ec8_73715024',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5daa429aae2ec8_73715024')) {
function content_5daa429aae2ec8_73715024 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '130825daa429aa56f61_86884842';
?>
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'rh') {?>active<?php }?>">
		<a class="nav-link" href="#">RH <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'empresa') {?>active<?php }?>">
		<a class="nav-link" href="#">Empleados <span class="sr-only">(current)</span></a>
	</li>
</ul><?php }
}
?>