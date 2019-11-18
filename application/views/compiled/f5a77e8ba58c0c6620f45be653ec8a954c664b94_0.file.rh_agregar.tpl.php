<?php /* Smarty version 3.1.27, created on 2019-11-18 01:04:39
         compiled from "C:\wamp\www\rh\application\views\rh_agregar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:121595dd1ee276aa622_56703301%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a77e8ba58c0c6620f45be653ec8a954c664b94' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\rh_agregar.tpl',
      1 => 1574039045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121595dd1ee276aa622_56703301',
  'variables' => 
  array (
    'get_url' => 0,
    'registro' => 0,
    'empresa' => 0,
    'monedas' => 0,
    'm' => 0,
    'empleado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dd1ee28533610_33348874',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dd1ee28533610_33348874')) {
function content_5dd1ee28533610_33348874 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '121595dd1ee276aa622_56703301';
?>
<div class="container">
	<p class="h2">
		Agregar recibo por honorarios
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<form id="regForm" class="sendForm" action="<?php echo $_smarty_tpl->tpl_vars['get_url']->value;?>
rh/guardar" method="post">
						<div class="response"></div>
						<div class="tab">
							<div class="form-group row">
								<label for="documento" class="col-4 col-form-label">RUC</label>
								<div class="col-2">
									<input type="text" name="documento" class="form-control" id="documento" placeholder="RUC"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['documento'];
} elseif (isset($_smarty_tpl->tpl_vars['empresa']->value)) {
echo $_smarty_tpl->tpl_vars['empresa']->value['documento'];
}?>">
								</div>
								<div class="col-2">
									<a href="#" id="validar_documento" class="btn btn-secondary btn-sm" data-type="2">Validar</a>
								</div>
							</div>
							<div class="form-group row">
								<label for="razon_social" class="col-4 col-form-label">Razón Social</label>
								<div class="col-6">
									<input <?php if (!isset($_smarty_tpl->tpl_vars['registro']->value)) {?>disabled=""<?php }?> type="text" name="razon_social" class="form-control validacion_doc" id="razon_social" placeholder="Razón Social"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['razon_social'];
echo $_smarty_tpl->tpl_vars['registro']->value['documento'];
} elseif (isset($_smarty_tpl->tpl_vars['empresa']->value)) {
echo $_smarty_tpl->tpl_vars['empresa']->value['razon_social'];
}?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="direccion" class="col-4 col-form-label">Dirección</label>
								<div class="col-6">
									<input <?php if (!isset($_smarty_tpl->tpl_vars['registro']->value)) {?>disabled=""<?php }?> type="text" name="direccion" class="form-control validacion_doc" id="direccion" placeholder="Dirección"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['direccion'];
echo $_smarty_tpl->tpl_vars['registro']->value['documento'];
} elseif (isset($_smarty_tpl->tpl_vars['empresa']->value)) {
echo $_smarty_tpl->tpl_vars['empresa']->value['direccion'];
}?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="f_emision" class="col-4 col-form-label">Fecha de emisión</label>
								<div class="col-3">
									<input type="date" name="f_emision" class="form-control" id="f_emision" placeholder="Fecha de emisión"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['f_emision'];
}?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="f_pago" class="col-4 col-form-label">Fecha de pago</label>
								<div class="col-3">
									<input type="date" name="f_pago" class="form-control" id="f_pago" placeholder="Fecha de pago"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['f_pago'];
}?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="f_adelanto" class="col-4 col-form-label">Fecha de adelanto</label>
								<div class="col-3">
									<input type="date" name="f_adelanto" class="form-control" id="f_adelanto" placeholder="Fecha de adelanto"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['f_adelanto'];
}?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="descripcion" class="col-4 col-form-label">Descripción</label>
								<div class="col-8">
									<textarea name="descripcion" class="form-control" id="descripcion" placeholder="Descripción"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['descripcion'];
}?>"></textarea> 
								</div>
							</div>
							<div class="form-group row">
								<label for="observacion" class="col-4 col-form-label">Observación</label>
								<div class="col-8">
									<textarea name="observacion" class="form-control" id="observacion" placeholder="Observación"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['observacion'];
}?>"></textarea> 
								</div>
							</div>
							<div class="form-group row">
								<label for="tipo_renta" class="col-4 col-form-label">Tipo renta</label>
								<div class="col-1">
									<select name="tipo_renta" class="form-control" id="tipo_renta" placeholder="Tipo renta">
										<option <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['tipo_renta'] == "A") {?>selected=""<?php }?> value="A">A</option>
										<option <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['tipo_renta'] == "B") {?>selected=""<?php }?> value="B">B</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="retencion" class="col-4 col-form-label">Retención (8%)</label>
								<div class="col-5">
									<input type="checkbox" name="retencion" class="" id="retencion" placeholder="Retención"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['retencion'];
}?>">
								</div>
							</div>
							<div class="form-group row">
								<label for="moneda" class="col-4 col-form-label">Moneda</label>
								<div class="col-3">
									<select name="moneda" class="form-control" id="moneda" placeholder="Moneda">
										<?php
$_from = $_smarty_tpl->tpl_vars['monedas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['m'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['m']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
$foreach_m_Sav = $_smarty_tpl->tpl_vars['m'];
?>
										<option <?php if (isset($_smarty_tpl->tpl_vars['registro']->value) && $_smarty_tpl->tpl_vars['registro']->value['moneda_id'] == $_smarty_tpl->tpl_vars['m']->value['id']) {?>selected=""<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['m']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['m']->value['nombre'];?>
</option>
										<?php
$_smarty_tpl->tpl_vars['m'] = $foreach_m_Sav;
}
?>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="total" class="col-4 col-form-label">Monto</label>
								<div class="col-2">
									<input type="number" min="0" step=".01" name="total" class="form-control moneda" id="total" placeholder="Monto"  value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['total'];
}?>">
								</div>
							</div>
							<input type="hidden" name="id" value="<?php if (isset($_smarty_tpl->tpl_vars['registro']->value)) {
echo $_smarty_tpl->tpl_vars['registro']->value['id'];
}?>">
						</div>
						<div class="tab" style="color: #6c757d">
							<div class="col-12">
								<p class="text-right rh_fecha">22 de setiembre del 2019</p>
							</div>
							<h4>
								<small>
									<?php echo $_smarty_tpl->tpl_vars['empleado']->value['nombre'];?>
 <?php echo $_smarty_tpl->tpl_vars['empleado']->value['a_paterno'];?>
 <?php echo $_smarty_tpl->tpl_vars['empleado']->value['a_materno'];?>

								</small>
							</h4>
							<div class="rh_cuerpo">
								<p>
									Recibí de <b>Empresa</b> identificado con RUC número <b>234234234</b><br>
									domiciliado en <b>dirección</b><br>
									por concepto de <b>descripcion</b><br>
									con tipo de renta <b>A</b>
								</p>
								<p>
									Observación:<br>
									<b>observaciones</b><br>
									Se solicita un adelanto del pago para la fecha <b>12/11/19</b><br>
									<b>* Los montos indicados no estan sujetos a los descuentos por pago adelantado</b>
								</p>
							</div>
							<div class="row">
								<div class="col-10 text-right">
									<p>Total por honorarios</p>
									<p>Retencion (8%)</p>
									<p>Total neto</p>
								</div>
								<div class="col-2 rh_totales">
									<p><b>1,600.00</b><b> Soles</b></p>
									<p><b>(0.00)</b><b> Soles</b></p>
									<p><b>1,600.00</b><b> Soles</b></p>
								</div>
							</div>
						</div>

						<div style="overflow:auto;">
						  <div style="float:right;">
						    <button type="button" class="btn btn-dark" id="prevBtn" onclick="nextPrev(-1)">Anterior</button>
						    <button type="button" class="btn btn-dark" id="nextBtn" onclick="nextPrev(1)">Siguiente</button>
							<input type="submit" class="save btn btn-dark" id="submitBtn" value="Guardar">
						  </div>
						</div>

						<!-- Circles which indicates the steps of the form: -->
						<div style="text-align:center;margin-top:40px;">
						  <span class="step"></span>
						  <span class="step"></span>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
?>