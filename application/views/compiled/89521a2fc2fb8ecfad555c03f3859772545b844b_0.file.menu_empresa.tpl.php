<?php /* Smarty version 3.1.27, created on 2019-11-21 12:59:25
         compiled from "C:\wamp\www\rh\application\views\menu_empresa.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:132115dd68a2d5be122_41150501%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89521a2fc2fb8ecfad555c03f3859772545b844b' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\menu_empresa.tpl',
      1 => 1574340923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132115dd68a2d5be122_41150501',
  'variables' => 
  array (
    'active' => 0,
    'base_url' => 0,
    'get_url' => 0,
    'session' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dd68a2e890547_31269656',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dd68a2e890547_31269656')) {
function content_5dd68a2e890547_31269656 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '132115dd68a2d5be122_41150501';
?>
<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'rh') {?>active<?php }?>">
		<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
empresa/home">RH <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'cartera') {?>active<?php }?>">
		<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
empresa/cartera/listar">Cartera <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'costos') {?>active<?php }?>">
		<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
empresa/costos/listar">Costos <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item <?php if ($_smarty_tpl->tpl_vars['active']->value == 'empleado') {?>active<?php }?>">
		<a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
empresa/empleado/listar">Empleados <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="#" data-toggle="modal" data-target="#tasa_descuento">
			TEA 
			<span class="sr-only">(current)</span>
		</a>
	</li>
</ul>
<div class="modal fade" id="tasa_descuento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tasa de descuento</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form class="sendForm" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
tasa_descuento/guardar" method="post">
				<div class="modal-body">
					<div class="response"></div>
					<div class="form-group">
						<label for="valor" class="col-form-label">Valor:</label>
						<input type="number" max="100" min="0" step=".0000001" name="valor" class="form-control tasa" id="valor" value="<?php echo $_smarty_tpl->tpl_vars['session']->value['sys_tasa'];?>
">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					<input type="submit" class="save btn btn-dark" value="Guardar">
				</div>
			</form>
		</div>
	</div>
</div><?php }
}
?>