<?php /* Smarty version 3.1.27, created on 2019-11-11 23:12:02
         compiled from "C:\wamp\www\rh\application\views\menu_admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:282185dc9eac220daf8_29649660%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12d0ee4bc472c3564e13eb195458abd8bc58d959' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\menu_admin.tpl',
      1 => 1573513920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282185dc9eac220daf8_29649660',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dc9eac2949562_40616863',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dc9eac2949562_40616863')) {
function content_5dc9eac2949562_40616863 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '282185dc9eac220daf8_29649660';
?>
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'empresa') {?>active<?php }?>">
		<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/empresa/listar">Empresa <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'empleado') {?>active<?php }?>">
		<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
admin/empleado/listar">Empleado <span class="sr-only">(current)</span></a>
	</li>
</ul><?php }
}
?>