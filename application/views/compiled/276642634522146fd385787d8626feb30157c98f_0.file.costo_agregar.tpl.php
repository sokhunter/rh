<?php /* Smarty version 3.1.27, created on 2019-11-21 13:34:16
         compiled from "C:\wamp\www\rh\application\views\costo_agregar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:163465dd69258dbd096_60358963%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '276642634522146fd385787d8626feb30157c98f' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\costo_agregar.tpl',
      1 => 1574343249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163465dd69258dbd096_60358963',
  'variables' => 
  array (
    'get_url' => 0,
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dd69258ea3871_90120622',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dd69258ea3871_90120622')) {
function content_5dd69258ea3871_90120622 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '163465dd69258dbd096_60358963';
?>
<div class="container">
	<p class="h2">
		Agregar costo/gasto
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<form class="sendForm" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
costos/guardar" method="post">
						<div class="response"></div>
						<div class="form-group row">
							<label for="nombre" class="col-4 col-form-label">Nombre</label>
							<div class="col-6">
								<input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];
}?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="monto" class="col-4 col-form-label">Monto</label>
							<div class="col-6">
								<input type="text" name="monto" class="form-control moneda" id="monto" placeholder="Monto"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['monto'];
}?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="tipo" class="col-4 col-form-label">Tipo</label>
							<div class="col-6">
								<select name="inicial" class="form-control" id="tipo">
									<option value="1" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['inicial'] == 1) {?>selected=""<?php }?>>Inicial</option>
									<option value="0" <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['inicial'] == 0) {?>selected=""<?php }?>>Final</option>
								</select>
							</div>
						</div>
						<input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['id'];
}?>">
						<input type="submit" class="save btn btn-dark" value="Guardar">
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
?>