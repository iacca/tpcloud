<?php
/* Smarty version 3.1.30, created on 2016-10-14 21:17:11
  from "C:\xampp\htdocs\drive\templates\nav_bar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58012f37a5c081_44919397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a1442811e226370e10441fd868a1675212d6d69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\drive\\templates\\nav_bar.tpl',
      1 => 1476471235,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58012f37a5c081_44919397 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul>
  <li><a class="active" href="backend.php">Home</a></li>
  <li><a href="listar_archivos.php">Lista Archivos</a></li>
  <li><a href="nuevoDocumento">Nuevo documento</a></li>
  <li style="float:right"><a href='index.php?logout=1'>Salir</a></li>
</ul><?php }
}
