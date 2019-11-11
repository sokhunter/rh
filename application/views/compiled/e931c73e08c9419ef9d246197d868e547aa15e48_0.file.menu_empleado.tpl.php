<?php /* Smarty version 3.1.27, created on 2019-10-18 23:02:50
         compiled from "C:\wamp\www\rh\application\views\menu_empleado.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:965daa449aad6bb3_17157123%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e931c73e08c9419ef9d246197d868e547aa15e48' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\menu_empleado.tpl',
      1 => 1571439362,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '965daa449aad6bb3_17157123',
  'variables' => 
  array (
    'active' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5daa449ab27fc3_44533342',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5daa449ab27fc3_44533342')) {
function content_5daa449ab27fc3_44533342 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '965daa449aad6bb3_17157123';
?>
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'rh') {?>active<?php }?>">
		<a class="nav-link" href="#">RH <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'emitir') {?>active<?php }?>">
		<a class="nav-link" href="#">Emitir RH <span class="sr-only">(current)</span></a>
	</li>
</ul><?php }
}
?>