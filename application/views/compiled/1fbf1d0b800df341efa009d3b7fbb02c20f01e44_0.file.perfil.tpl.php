<?php /* Smarty version 3.1.27, created on 2019-11-21 15:46:02
         compiled from "C:\wamp\www\rh\application\views\perfil.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:253515dd6b13ad77217_43393211%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fbf1d0b800df341efa009d3b7fbb02c20f01e44' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\perfil.tpl',
      1 => 1574351160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253515dd6b13ad77217_43393211',
  'variables' => 
  array (
    'base_url' => 0,
    'registro' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dd6b13adde468_21140835',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dd6b13adde468_21140835')) {
function content_5dd6b13adde468_21140835 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '253515dd6b13ad77217_43393211';
?>
<div class="container">
	<p class="h2">
		Perfil
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<form class="sendForm" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
auth/perfil/guardar" method="post">
						<div class="response"></div>
						<div class="form-group row">
							<label for="documento" class="col-4 col-form-label">N° Documento</label>
							<div class="col-4">
								<input type="text" name="documento" class="form-control documento" id="documento" placeholder="N° Documento"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['documento'];
}?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-4 col-form-label">Correo</label>
							<div class="col-5">
								<input type="email" name="email" class="form-control validacion_doc" id="email" placeholder="Correo"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['email'];
}?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="password" class="col-4 col-form-label">Contraseña</label>
							<div class="col-8">
								<input type="password" name="clave" class="form-control" id="password" placeholder="Contraseña" value="">
							</div>
						</div>
						<div class="form-group row">
							<label for="repassword" class="col-4 col-form-label">Contraseña</label>
							<div class="col-8">
								<input type="password" name="clavem" class="form-control" id="repassword" placeholder="Contraseña" value="">
							</div>
						</div>
						<input type="submit" class="save btn btn-dark" value="Guardar">
					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
?>