<?php
/* Smarty version 3.1.30, created on 2016-10-14 21:17:11
  from "C:\xampp\htdocs\drive\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58012f37a199e9_81999843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd936221bc82b72303c2384ad92e6dce5e7a671c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\drive\\templates\\index.tpl',
      1 => 1476472512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_header.tpl' => 1,
    'file:nav_bar.tpl' => 1,
    'file:page_footer.tpl' => 1,
  ),
),false)) {
function content_58012f37a199e9_81999843 (Smarty_Internal_Template $_smarty_tpl) {
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
<div>
<?php $_smarty_tpl->_subTemplateRender("file:page_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ($_smarty_tpl->tpl_vars['menu']->value == 'true') {?>
    <?php $_smarty_tpl->_subTemplateRender("file:nav_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
    <section>
    <div class="sesion" ><a href="oauth2callback.php?code=1"><img src='./images/login-button.png' style='cursor: pointer;' /></a></div>
    </section>
<?php }?>   
    
<?php $_smarty_tpl->_subTemplateRender("file:page_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
</body>
</html><?php }
}
