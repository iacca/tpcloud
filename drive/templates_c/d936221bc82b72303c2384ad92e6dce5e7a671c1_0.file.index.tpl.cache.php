<?php
/* Smarty version 3.1.30, created on 2016-10-14 18:14:39
  from "C:\xampp\htdocs\drive\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5801046f9ed255_05403242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd936221bc82b72303c2384ad92e6dce5e7a671c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\drive\\templates\\index.tpl',
      1 => 1476458767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5801046f9ed255_05403242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '239295801046f9aabd4_45752017';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
<meta name="Keywords" content="integracion, google, drive" />
<meta name="Description" content="App de Integraci&oacute;n con Google Drive" />
<meta name="Autor" content="Grupo 2" />
<title>App de Integraci&oacute;n con Google Drive</title>
<link id="estilo" rel="stylesheet" type="text/css" href="estilos/iacca.css" />
</head>
<body>
<div class="contentPrincipal">
    <div class="header">
	<div class="titulo">App de Integraci&oacute;n con Google Drive</div>
    </div>
    
    <div class="sesion" ><a href="<?php echo $_smarty_tpl->tpl_vars['authUrl']->value;?>
"><img src='./images/login-button.png' style='cursor: pointer;' /></a></div>
    
</div>

</div>
</body>
</html><?php }
}
