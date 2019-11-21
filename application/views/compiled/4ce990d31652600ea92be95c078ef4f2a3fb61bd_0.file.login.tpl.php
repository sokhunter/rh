<?php /* Smarty version 3.1.27, created on 2019-11-21 15:58:12
         compiled from "C:\wamp\www\rh\application\views\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:272295dd6b414c93641_02654906%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ce990d31652600ea92be95c078ef4f2a3fb61bd' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\login.tpl',
      1 => 1574351891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '272295dd6b414c93641_02654906',
  'variables' => 
  array (
    'titulo_pagina' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5dd6b414d0ddd5_25707310',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5dd6b414d0ddd5_25707310')) {
function content_5dd6b414d0ddd5_25707310 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '272295dd6b414c93641_02654906';
?>
<!DOCTYPE html>
<html class="html-full">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['titulo_pagina']->value;?>
</title>
        <meta name="description" content="" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true" />
        <meta name="KeyWords" content="" />
        <meta name="author" content="Stefany Livaque" />
        <meta name="google-site-verification" content="" />
        <meta name="msvalidate.01" content="" />
        
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="GENERATOR" content="Microsoft FrontPage 4.0" />
        <meta name="DC.Identifier" content="index.html" />
        <meta name="DC.Language" SCHEME="RFC1766" content="SPANISH" />
        <meta name="distribution" content="all">
        <meta name="VW96.objecttype" content="Homepage" />
        <meta name="resource-type" content="Homepage" />
        <meta name="Revisit" content="1 days" />
        <meta name="robots" content="index,follow" />
        <meta name="GOOGLEBOT" content="index follow" />
        <meta name="Revisit" content="1 days" /> 
        <meta http-equiv="Pragma" content="no-cache" />
        <meta http-equiv="Cache-Control" content="no-cache" />
        <meta name="ROBOTS" content="ALL" />
        <meta name="ProgId" content="FrontPage.Editor.Document" />
        <meta name="theme-color" content="#1783c0">
        <!-- <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/logo/favicon.png" type="image/x-icon" /> -->
        <!-- <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/img/logo/favicon.png" type="image/x-icon" /> -->
        <?php echo '<script'; ?>
> var base_url = "<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
";<?php echo '</script'; ?>
>
        
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> -->
        
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/bootstrap-4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/login.css">
    </head>
    <body class="body-full">
        
        <div class="wrapper fadeInDown">
			<div id="formContent">
				<div class="fadeIn first">
					<img src="https://s1.logaster.com/static/v3/img/products/logo.png" id="icon" alt="User Icon" />
				</div>
				<form class="sendForm" action="login/ingresar" method="post">
					<div class="response"></div>
					<input type="text" id="email" class="fadeIn second" name="email" placeholder="Usuario">
					<input type="password" id="clave" class="fadeIn third" name="clave" placeholder="Clave">
					<input type="submit" class="save fadeIn fourth" value="Ingresar">
				</form>
				<div id="formFooter">
					<a class="underlineHover" href="#">¿Olvidaste tu contraseña?</a>
				</div>
			</div>
		</div>

        
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
public/js/process.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }
}
?>