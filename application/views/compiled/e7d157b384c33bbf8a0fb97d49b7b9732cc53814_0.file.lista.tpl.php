<?php /* Smarty version 3.1.27, created on 2019-11-19 21:05:24
         compiled from "C:\wamp\www\rh\application\views\lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:62175dd459144fc2f7_96312499%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7d157b384c33bbf8a0fb97d49b7b9732cc53814' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\lista.tpl',
      1 => 1574197513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62175dd459144fc2f7_96312499',
  'variables' => 
  array (
    'titulo_tabla' => 0,
    'btn_agregar' => 0,
    'cartera' => 0,
    'get_url' => 0,
    'cartera_emp' => 0,
    'filtro_empleado' => 0,
    'filtro_fecha' => 0,
    'tabla' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dd459145904f2_37868505',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dd459145904f2_37868505')) {
function content_5dd459145904f2_37868505 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '62175dd459144fc2f7_96312499';
?>
<div class="container">
	<p class="h2">
		<?php echo $_smarty_tpl->tpl_vars['titulo_tabla']->value;?>

		<?php if (isset($_smarty_tpl->tpl_vars['btn_agregar']->value)) {?>
		<a class="btn bg-dark text-white float-right" href="<?php echo $_smarty_tpl->tpl_vars['btn_agregar']->value;?>
">Agregar</a>
		<?php }?>
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="response"></div>
			<?php if (isset($_smarty_tpl->tpl_vars['cartera']->value)) {?>
				<form action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
cartera/listar" method="post">
					<div class="row">
						<?php if (isset($_smarty_tpl->tpl_vars['cartera_emp']->value)) {?>
						<div class="col-2 form-group">
							<label for="filtro_empleado">N° Doc. Empleado</label>
						</div>
						<div class="col-3 form-group">
							<input type="text" class="form-control" name="filtro_empleado" value="<?php echo $_smarty_tpl->tpl_vars['filtro_empleado']->value;?>
" id="filtro_empresa">
						</div>
						<?php }?>
						<div class="col-2 form-group">
						    <label for="filtro_fecha">Fecha de emisión</label>
						</div>
						<div class="col-3 form-group">
							<input type="date" class="form-control" name="filtro_fecha" value="<?php echo $_smarty_tpl->tpl_vars['filtro_fecha']->value;?>
" id="filtro_fecha">
						</div>
						<div class="col-1 form-group">
							<input type="submit" class="btn btn-secondary btn-sm" value="Filtrar">
						</div>
					</div>
				</form>
			<?php }?>
			<?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>

		</div>
	</div>
</div><?php }
}
?>