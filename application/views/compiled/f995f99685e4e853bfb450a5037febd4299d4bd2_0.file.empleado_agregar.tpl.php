<?php /* Smarty version 3.1.27, created on 2019-11-21 15:16:11
         compiled from "C:\wamp\www\rh\application\views\empleado_agregar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:95425dd6aa3bddf188_22468920%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f995f99685e4e853bfb450a5037febd4299d4bd2' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\empleado_agregar.tpl',
      1 => 1574349327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95425dd6aa3bddf188_22468920',
  'variables' => 
  array (
    'get_url' => 0,
    'registro' => 0,
    'session_id' => 0,
    'cargos' => 0,
    'c' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dd6aa3c1192c7_80853805',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dd6aa3c1192c7_80853805')) {
function content_5dd6aa3c1192c7_80853805 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '95425dd6aa3bddf188_22468920';
?>
<div class="container">
	<p class="h2">
		Agregar empleado
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<form class="sendForm" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
empleado/guardar" method="post">
						<div class="response"></div>
						<div class="form-group row">
							<label for="documento" class="col-4 col-form-label">N° Documento</label>
							<div class="col-4">
								<input type="text" name="dni" class="form-control documento" id="documento" placeholder="N° Documento"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['documento'];
}?>">
							</div>
							<div class="col-2">
								<a href="#" id="validar_documento" class="btn btn-secondary btn-sm" data-type="3">Validar</a>
							</div>
						</div>
						<div class="form-group row">
							<label for="nombre" class="col-4 col-form-label">Nombre</label>
							<div class="col-6">
								<input type="text" name="nombre" class="form-control validacion_doc" id="nombre" placeholder="Nombre"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];
}?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="a_paterno" class="col-4 col-form-label">Apellido paterno</label>
							<div class="col-5">
								<input type="text" name="a_paterno" class="form-control validacion_doc" id="a_paterno" placeholder="Apellido paterno"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['a_paterno'];
}?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="a_materno" class="col-4 col-form-label">Apellido materno</label>
							<div class="col-5">
								<input type="text" name="a_materno" class="form-control validacion_doc" id="a_materno" placeholder="Apellido materno"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['a_materno'];
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
						<?php if (isset($_smarty_tpl->tpl_vars['session_id']->value)) {?>
						<div class="form-group row">
							<label for="cargo" class="col-4 col-form-label">Cargo</label>
							<div class="col-5">
								<select name="cargo" class="form-control" id="cargo">
									<option value="">Seleccione un cargo</option>
									<?php
$_from = $_smarty_tpl->tpl_vars['cargos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['c'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['c']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
$foreach_c_Sav = $_smarty_tpl->tpl_vars['c'];
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['c']->value['nombre'];?>
</option>
									<?php
$_smarty_tpl->tpl_vars['c'] = $foreach_c_Sav;
}
?>
								</select>
							</div>
						</div>
						<?php }?>
						<input type="hidden" name="session_id" value="<?php if (isset($_smarty_tpl->tpl_vars['session_id']->value)) {
echo $_smarty_tpl->tpl_vars['session_id']->value;
}?>">
						<input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['id'];
}?>">
						<input type="submit" class="save btn btn-dark" value="Guardar">
					</form>
				</div>
				<div class="col-3">
					<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {?>
					<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['registro']->value['a_paterno'];?>
 <?php echo $_smarty_tpl->tpl_vars['registro']->value['a_materno'];?>
</h5>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><i class="fa fa-user text-warning"></i> <?php echo $_smarty_tpl->tpl_vars['registro']->value['usuario'];?>
</li>
							<li class="list-group-item"><i class="fa fa-envelope text-primary"></i> <?php echo $_smarty_tpl->tpl_vars['registro']->value['email'];?>
</li>
							<li class="list-group-item"><i class="fa fa-id-card"></i> <?php echo $_smarty_tpl->tpl_vars['registro']->value['documento'];?>
</li>
						</ul>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
?>