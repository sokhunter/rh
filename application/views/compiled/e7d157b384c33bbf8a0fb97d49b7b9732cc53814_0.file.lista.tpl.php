<?php /* Smarty version 3.1.27, created on 2019-10-18 23:23:01
         compiled from "C:\wamp\www\rh\application\views\lista.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:123285daa4955517067_15912328%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7d157b384c33bbf8a0fb97d49b7b9732cc53814' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\lista.tpl',
      1 => 1571440979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123285daa4955517067_15912328',
  'variables' => 
  array (
    'titulo_tabla' => 0,
    'btn_agregar' => 0,
    'tabla' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5daa49555250a6_90495440',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5daa49555250a6_90495440')) {
function content_5daa49555250a6_90495440 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '123285daa4955517067_15912328';
?>
<div class="container">
	<p class="h2">
		<?php echo $_smarty_tpl->tpl_vars['titulo_tabla']->value;?>

		<?php if (isset($_smarty_tpl->tpl_vars['btn_agregar']->value)) {?>
		<a class="btn bg-dark text-white float-right" href="<?php echo $_smarty_tpl->tpl_vars['btn_agregar']->value;?>
">Agregar</a>
		<?php }?>
	</p>
	<div class="card rounded border-top-danger">
		<div class="card-body">
			<?php echo $_smarty_tpl->tpl_vars['tabla']->value;?>

		</div>
	</div>
</div><?php }
}
?>