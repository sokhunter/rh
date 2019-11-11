<?php /* Smarty version 3.1.27, created on 2019-10-18 22:05:31
         compiled from "C:\wamp\www\rh\application\views\body.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:283855daa372bcdf1d0_99298925%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '211f11b4266b4a225ac12c221951c4ad47b567f0' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\body.tpl',
      1 => 1571436318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283855daa372bcdf1d0_99298925',
  'variables' => 
  array (
    'titulo_tabla' => 0,
    'btn_agregar' => 0,
    'tabla' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5daa372bda4725_76160065',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5daa372bda4725_76160065')) {
function content_5daa372bda4725_76160065 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '283855daa372bcdf1d0_99298925';
?>
<div class="container">
	<p class="h2">
		<?php echo $_smarty_tpl->tpl_vars['titulo_tabla']->value;?>

		<?php if (isset($_smarty_tpl->tpl_vars['btn_agregar']->value)) {?>
		<a class="btn bg-dark text-white float-right" href="<?php echo $_smarty_tpl->tpl_vars['btn_agregar']->value;?>
">Agregar</a>
		<?php }?>
	</p>
	<div class="card rounded border-top-danger bg-light">
		<div class="card-body">
			<?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>

		</div>
	</div>
</div><?php }
}
?>