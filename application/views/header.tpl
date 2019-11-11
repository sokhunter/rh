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
        {* FONT AWESOME *}
        <link rel="stylesheet" type="text/css" href="{$base_url}public/plugins/fontawesome-free-5.11.2-web/css/all.min.css">
        {* DATATABLES *}
        <link rel="stylesheet" type="text/css" href="{$base_url}public/plugins/DataTables/datatables.css">
        {* STYLE *}
        <link rel="stylesheet" type="text/css" href="{$base_url}public/css/style.css">
    </head>
    <body class="body-full bg-light">
		<nav class="navbar navbar-expand-lg navbar-dark bg-danger mb-4">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="#">Sistema RH</a>
				{if isset($menu)}
                    {$menu}
                {/if}
				<ul class="navbar-nav mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="btn bg-dark text-white" href="{$base_url}auth/login/salir">Salir <span class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</nav>
