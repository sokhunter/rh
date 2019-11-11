<div class="container">
	<p class="h2">
		{$titulo_tabla}
		{if isset($btn_agregar)}
		<a class="btn bg-dark text-white float-right" href="{$btn_agregar}">Agregar</a>
		{/if}
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			{$tabla}
		</div>
	</div>
</div>