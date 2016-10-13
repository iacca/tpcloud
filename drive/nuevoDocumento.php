<?php

require_once 'conectarDrive.php';
session_start();
$client = getClient();

if (isset($_SESSION['token'])) {

    $client = authenticate($client, $_SESSION['token']);
    
    print "<a class='logout' href='index.php?logout=1'>Logout</a>";
    print "<a class='listar' href='listar_archivos.php'>Volver</a>";
        
} else {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <script type="text/javascript" src="js/formularioInscripcion.js"></script>
</head>
<body>
	<form action="formAction.php" method="POST" name="new" onsubmit="return validarNombreDocumento()">
		<label for="docName">Nombre del nuevo Documento</label>
		<br>
		<input type="text" name="docName" id="docName" />
		<br><br>
		<input type="submit" name="submit" value="Crear" />
	</form>
</body>
</html>
