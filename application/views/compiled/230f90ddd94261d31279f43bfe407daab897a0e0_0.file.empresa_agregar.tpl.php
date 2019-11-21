<?php /* Smarty version 3.1.27, created on 2019-11-21 12:18:55
         compiled from "C:\wamp\www\rh\application\views\empresa_agregar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:325405dd680af49fda0_10133195%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '230f90ddd94261d31279f43bfe407daab897a0e0' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\empresa_agregar.tpl',
      1 => 1574338733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325405dd680af49fda0_10133195',
  'variables' => 
  array (
    'get_url' => 0,
    'registro' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dd680b0204ad8_38529544',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dd680b0204ad8_38529544')) {
function content_5dd680b0204ad8_38529544 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '325405dd680af49fda0_10133195';
?>
<div class="container">
	<p class="h2">
		Agregar empresa
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<form class="sendForm" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
empresa/guardar" method="post">
						<div class="response"></div>
						<div class="form-group row">
							<label for="documento" class="col-4 col-form-label">RUC</label>
							<div class="col-4">
								<input type="text" name="documento" class="form-control documento" id="documento" placeholder="RUC"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['documento'];
}?>">
							</div>
							<!-- <div class="col-2">
								<a href="#" id="validar_documento" class="btn btn-secondary btn-sm" data-type="2">Validar</a>
							</div> -->
						</div>
						<div class="form-group row">
							<label for="razon_social" class="col-4 col-form-label">Razón Social</label>
							<div class="col-6">
								<input type="text" name="razon_social" class="form-control validacion_doc" id="razon_social" placeholder="Razón Social" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['razon_social'];
}?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-4 col-form-label">Correo</label>
							<div class="col-5">
								<input type="email" name="email" class="form-control" id="email" placeholder="Correo" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['email'];
}?>">
							</div>
						</div>
						<div class="form-group row">
							<label for="direccion" class="col-4 col-form-label">Dirección</label>
							<div class="col-8">
								<input type="text" name="direccion" class="form-control validacion_doc" id="direccion" placeholder="Dirección" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['direccion'];
}?>">
							</div>
						</div>
						<input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['id'];
}?>">
						<input type="submit" class="save btn btn-dark" value="Guardar">
					</form>
				</div>
				<div class="col-3">
					<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {?>
					<div class="card">
						<?php if (empty($_smarty_tpl->tpl_vars['registro']->value['imagen'])) {?>
						<img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/imagen/usuario/empty.png" alt="empleado">
						<?php } else { ?>
						<img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/imagen/usuario/<?php echo $_smarty_tpl->tpl_vars['registro']->value['imagen'];?>
" alt="empleado">
						<?php }?>
						<div class="card-body">
							<h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['registro']->value['razon_social'];?>
</h5>
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><i class="fa fa-user text-warning"></i> <?php echo $_smarty_tpl->tpl_vars['registro']->value['usuario'];?>
</li>
							<li class="list-group-item"><i class="fa fa-envelope text-primary"></i> <?php echo $_smarty_tpl->tpl_vars['registro']->value['email'];?>
</li>
							<li class="list-group-item"><i class="fa fa-map-marker-alt text-danger"></i> <?php echo $_smarty_tpl->tpl_vars['registro']->value['direccion'];?>
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