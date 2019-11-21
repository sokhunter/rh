<div class="container">
	<p class="h2">
		Agregar recibo por honorarios
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<div class="row">
				<div class="col-12">
					<form id="regForm" class="sendForm" action="{$get_url}rh/guardar" method="post">
						<div class="response"></div>
						<div class="tab">
							<div class="form-group row">
								<label for="documento" class="col-4 col-form-label">RUC</label>
								<div class="col-2">
									<input type="text" name="documento" class="form-control required" id="documento" placeholder="RUC"  value="{if isset($registro)}{$registro.documento}{elseif isset($empresa)}{$empresa.documento}{/if}">
								</div>
								<div class="col-2">
									<a href="#" id="validar_documento" class="btn btn-secondary btn-sm" data-type="2">Validar</a>
								</div>
							</div>
							<div class="form-group row">
								<label for="razon_social" class="col-4 col-form-label">Razón Social</label>
								<div class="col-6">
									<input {if !isset($registro)}disabled=""{/if} type="text" name="razon_social" class="form-control validacion_doc required" id="razon_social" placeholder="Razón Social"  value="{if isset($registro)}{$registro.razon_social}{$registro.documento}{elseif isset($empresa)}{$empresa.razon_social}{/if}">
								</div>
							</div>
							<div class="form-group row">
								<label for="direccion" class="col-4 col-form-label">Dirección</label>
								<div class="col-6">
									<input {if !isset($registro)}disabled=""{/if} type="text" name="direccion" class="form-control validacion_doc" id="direccion" placeholder="Dirección"  value="{if isset($registro)}{$registro.direccion}{$registro.documento}{elseif isset($empresa)}{$empresa.direccion}{/if}">
								</div>
							</div>
							<div class="form-group row">
								<label for="f_emision" class="col-4 col-form-label">Fecha de emisión</label>
								<div class="col-3">
									<input type="date" min="{'-2'|fecha}" max="{'+0'|fecha}" name="f_emision" class="form-control required" id="f_emision" placeholder="Fecha de emisión"  value="{if isset($registro)}{$registro.f_emision}{/if}">
								</div>
							</div>
							<div class="form-group row">
								<label for="f_pago" class="col-4 col-form-label">Fecha de pago</label>
								<div class="col-3">
									<input type="date" min="{'+0'|fecha}" name="f_pago" class="form-control required" id="f_pago" placeholder="Fecha de pago"  value="{if isset($registro)}{$registro.f_pago}{/if}">
								</div>
							</div>
							<div class="form-group row">
								<label for="f_adelanto" class="col-4 col-form-label">Fecha de adelanto</label>
								<div class="col-3">
									<input type="date" min="{'+0'|fecha}" name="f_adelanto" class="form-control" id="f_adelanto" placeholder="Fecha de adelanto"  value="{if isset($registro)}{$registro.f_adelanto}{/if}">
								</div>
							</div>
							<div class="form-group row">
								<label for="descripcion" class="col-4 col-form-label">Descripción</label>
								<div class="col-8">
									<textarea name="descripcion" class="form-control required" id="descripcion" placeholder="Descripción" value="{if isset($registro)}{$registro.descripcion}{/if}"></textarea> 
								</div>
							</div>
							<div class="form-group row">
								<label for="observacion" class="col-4 col-form-label">Observación</label>
								<div class="col-8">
									<textarea name="observacion" class="form-control" id="observacion" placeholder="Observación"  value="{if isset($registro)}{$registro.observacion}{/if}"></textarea> 
								</div>
							</div>
							<div class="form-group row">
								<label for="tipo_renta" class="col-4 col-form-label">Tipo renta</label>
								<div class="col-1">
									<select name="tipo_renta" class="form-control" id="tipo_renta" placeholder="Tipo renta">
										<option {if isset($registro) && $registro.tipo_renta=="A"}selected=""{/if} value="A">A</option>
										<option {if isset($registro) && $registro.tipo_renta=="B"}selected=""{/if} value="B">B</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="retencion" class="col-4 col-form-label">Retención (8%)</label>
								<div class="col-5">
									<input type="checkbox" name="retencion" class="" id="retencion" placeholder="Retención">
								</div>
							</div>
							<div class="form-group row">
								<label for="moneda" class="col-4 col-form-label">Moneda</label>
								<div class="col-3">
									<select name="moneda" class="form-control" id="moneda" placeholder="Moneda">
										{foreach $monedas as $m}
										<option {if isset($registro) && $registro.moneda_id == $m.id}selected=""{/if} value="{$m.id}">{$m.nombre}</option>
										{/foreach}
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="total" class="col-4 col-form-label">Monto</label>
								<div class="col-2">
									<input type="number" min="0" step=".01" name="total" class="form-control moneda required" id="total" placeholder="Monto"  value="{if isset($registro)}{$registro.total}{/if}">
								</div>
							</div>
							<input type="hidden" name="id" value="{if isset($registro)}{$registro.id}{/if}">
						</div>
						<div class="tab" style="color: #6c757d">
							<div class="col-12">
								<p class="text-right rh_fecha">22 de setiembre del 2019</p>
							</div>
							<h4>
								<small>
									{$empleado.nombre} {$empleado.a_paterno} {$empleado.a_materno}
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
									<p>Subtotal</p>
									<p>Retencion (8%)</p>
									<p>Total</p>
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
</div>
{* FORMSTEPS *}
<script type="text/javascript" src="{$base_url}public/js/formSteps.js"></script>