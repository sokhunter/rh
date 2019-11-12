<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item {if $active == 'empresa'}active{/if}">
		<a class="nav-link" href="{$base_url}admin/empresa/listar">Empresa <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item {if $active == 'empleado'}active{/if}">
		<a class="nav-link" href="{$base_url}admin/empleado/listar">Empleado <span class="sr-only">(current)</span></a>
	</li>
</ul>