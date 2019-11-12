<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item {if $active == 'rh'}active{/if}">
		<a class="nav-link" href="{$base_url}empresa/home">RH <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item {if $active == 'empleado'}active{/if}">
		<a class="nav-link" href="{$base_url}empresa/empleado/listar">Empleados <span class="sr-only">(current)</span></a>
	</li>
</ul>