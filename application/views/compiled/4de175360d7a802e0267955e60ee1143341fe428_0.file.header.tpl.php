<?php /* Smarty version 3.1.27, created on 2019-10-18 23:50:42
         compiled from "C:\wamp\www\rh\application\views\header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10865daa4fd2c5abb8_95171912%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4de175360d7a802e0267955e60ee1143341fe428' => 
    array (
      0 => 'C:\\wamp\\www\\rh\\application\\views\\header.tpl',
      1 => 1571442637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10865daa4fd2c5abb8_95171912',
  'variables' => 
  array (
    'titulo_pagina' => 0,
    'base_url' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5daa4fd31cd0f9_29597674',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5daa4fd31cd0f9_29597674')) {
function content_5daa4fd31cd0f9_29597674 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10865daa4fd2c5abb8_95171912';
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
public/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
        
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/plugins/DataTables/datatables.css">
        
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
public/css/style.css">
    </head>
    <body class="body-full bg-light">
		<nav class="navbar navbar-expand-lg navbar-dark bg-danger mb-4">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="#">Sistema RH</a>
				<?php if (isset($_smarty_tpl->tpl_vars['menu']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['menu']->value;?>

                <?php }?>
				<ul class="navbar-nav mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="btn bg-dark text-white" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
auth/login/salir">Salir <span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>
<?php }
}
?>