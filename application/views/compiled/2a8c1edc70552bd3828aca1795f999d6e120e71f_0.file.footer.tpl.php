<?php /* Smarty version 3.1.27, created on 2019-11-19 17:21:34
         compiled from "C:\wamp\www\rh\application\views\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14275dd4249e2df9e9_08953297%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a8c1edc70552bd3828aca1795f999d6e120e71f' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\footer.tpl',
      1 => 1574184049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14275dd4249e2df9e9_08953297',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dd4249e70b7a9_90214336',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dd4249e70b7a9_90214336')) {
function content_5dd4249e70b7a9_90214336 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14275dd4249e2df9e9_08953297';
?>
        <footer class="bg-secondary text-white text-center">
            <p>Todos los derechos reservados. Copyright <?php echo date('Y');?>
</p>
        </footer>
        
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap-4.3.1/jquery.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap-4.3.1/popper.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap-4.3.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/DataTables/datatables.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/numeric.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/process.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/js/script.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>