<?php /* Smarty version 3.1.27, created on 2019-11-13 16:44:36
         compiled from "C:\wamp\www\rh\application\views\menu_empleado.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:215515dcc32f4874741_72512168%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e931c73e08c9419ef9d246197d868e547aa15e48' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\menu_empleado.tpl',
      1 => 1573663472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215515dcc32f4874741_72512168',
  'variables' => 
  array (
    'active' => 0,
    'get_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dcc32f48dda49_83748073',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dcc32f48dda49_83748073')) {
function content_5dcc32f48dda49_83748073 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '215515dcc32f4874741_72512168';
?>
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'empresa') {?>active<?php }?>">
		<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
empresa/listar">Empresa <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'rh') {?>active<?php }?>">
		<a class="nav-link" href="#">RH <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'emitir') {?>active<?php }?>">
		<a class="nav-link" href="#">Emitir RH <span class="sr-only">(current)</span></a>
	</li>
</ul><?php }
}
?>