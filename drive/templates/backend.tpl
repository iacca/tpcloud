<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
<meta name="Keywords" content="integracion, google, drive" />
<meta name="Description" content="App de Integraci&oacute;n con Google Drive" />
<meta name="Autor" content="Grupo 2" />
<script type="text/javascript" src="js/formularioInscripcion.js"></script>
<title>App de Integraci&oacute;n con Google Drive</title>
<link id="estilo" rel="stylesheet" type="text/css" href="estilos/iacca.css" />
</head>
<body>
<div>
{include file="page_header.tpl"}
{include file="nav_bar.tpl"}
{if $lugar eq 'lista'}
    {include file="table_archivos.tpl"}
{elseif $lugar eq 'menu'}
    <div class="nombre"> <p>Hola, {$nombre}</p> </div>
{elseif $lugar eq 'newDoc'}
 {include file="nuevo_documento.tpl"}
 {elseif $lugar eq 'permisos'}
     {include file="table_permissions.tpl"}
     {include file="compartir_form.tpl"}
 {/if}
</div>
</body>
</html>