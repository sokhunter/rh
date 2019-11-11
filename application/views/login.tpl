<!DOCTYPE html>
<html class="html-full">
    <head>
        <title>{$titulo_pagina}</title>
        <meta name="description" content="" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true" />
        <meta name="KeyWords" content="" />
        <meta name="author" content="Stefany Livaque" />
        <meta name="google-site-verification" content="" />
        <meta name="msvalidate.01" content="" />
        {*META*}
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
        <!-- <link rel="icon" href="{$base_url}public/img/logo/favicon.png" type="image/x-icon" /> -->
        <!-- <link rel="shortcut icon" href="{$base_url}public/img/logo/favicon.png" type="image/x-icon" /> -->
        <script> var base_url = "{$base_url}";</script>
        {* FUENTES *}
        <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> -->
        {* BOOTSTRAP *}
        <link rel="stylesheet" type="text/css" href="{$base_url}public/plugins/bootstrap-4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{$base_url}public/css/login.css">
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

        {* JQUERY *}
        <script type="text/javascript" src="{$base_url}public/plugins/bootstrap-4.3.1/jquery.min.js"></script>
        {* POOPER *}
        <script type="text/javascript" src="{$base_url}public/plugins/bootstrap-4.3.1/popper.min.js"></script>
        {* BOOTSTRAP *}
        <script type="text/javascript" src="{$base_url}public/plugins/bootstrap-4.3.1/js/bootstrap.min.js"></script>
        {* SCRIPT GENERAL *}
        <script type="text/javascript" src="{$base_url}public/js/process.js"></script>
    </body>
</html>