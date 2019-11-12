<?php /* Smarty version 3.1.27, created on 2019-11-12 00:37:35
         compiled from "C:\wamp\www\rh\application\views\menu_empresa.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:202545dc9fecfe3efb6_10436282%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89521a2fc2fb8ecfad555c03f3859772545b844b' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\menu_empresa.tpl',
      1 => 1573519053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202545dc9fecfe3efb6_10436282',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dc9fecff08bc1_03451383',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dc9fecff08bc1_03451383')) {
function content_5dc9fecff08bc1_03451383 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '202545dc9fecfe3efb6_10436282';
?>
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'rh') {?>active<?php }?>">
		<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
empresa/home">RH <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'empleado') {?>active<?php }?>">
		<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
empresa/empleado/listar">Empleados <span class="sr-only">(current)</span></a>
	</li>
</ul><?php }
}
?>