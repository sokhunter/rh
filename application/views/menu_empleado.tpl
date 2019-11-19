<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	<li class="nav-item {if $active == 'rh'}active{/if}">
		<a class="nav-link" href="{$get_url}rh/listar">RH <span class="sr-only">(current)</span></a>
	</li>
	<!-- <li class="nav-item {if $active == 'rh'}active{/if}">
		<a class="nav-link" href="{$get_url}rh/emitir">Emitir RH <span class="sr-only">(current)</span></a>
	</li> -->
	<li class="nav-item {if $active == 'cartera'}active{/if}">
		<a class="nav-link" href="{$get_url}cartera/listar">Cartera <span class="sr-only">(current)</span></a>
	</li>
	<li class="nav-item {if $active == 'empresa'}active{/if}">
		<a class="nav-link" href="{$get_url}empresa/listar">Empresa <span class="sr-only">(current)</span></a>
	</li>
</ul>