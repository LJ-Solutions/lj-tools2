<?php
//error_reporting(0);
//ob_start();
//session_save_path ("/home/users/web/b2072/ipg.ljsolutionscom/cgi-bin/tmp");
//Initialize session
session_start();
include('../conexion.php');
$usuario_nombre = $_POST['usuario-nombre'];	
$usuario_email = $_POST['usuario-email'];
$queryUsuario = "INSERT INTO usuario (usuario_nombre, usuario_email) values ('$usuario_nombre', '$usuario_email')";
$resultUsuario = mysql_query($queryUsuario) or die ('Could not execute Usuario query');
//Rutina para obtener el id del ultimo record ingresado.
//Funcion necesaria para poder llenar la tabla de usuarioxrol
$queryFindUsuario="SELECT id FROM usuario ORDER BY id DESC LIMIT 1";
$resultFindUsuario=mysql_query($queryFindUsuario) or die ("Could not execute FindUsuario query.");
$rowFindUsuario = mysql_fetch_assoc($resultFindUsuario);
extract($rowFindUsuario);
$findUsuario = $id;
if(!empty($_POST['rol'])) {
	// Counting number of checked checkboxes.
	$checked_count = count($_POST['rol']);
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['rol'] as $xrol_id) {		
		$queryUsuarioxRol = "INSERT INTO usuarioxrol (usuario_id, rol_id) values ('$findUsuario', '$xrol_id')";
		$result = mysql_query($queryUsuarioxRol) or die ('Could not execute UsuarioxRol query');
		//echo "This is the checkbox value: ".$selected."</br>";
		}	
}
?>
<?php
header('Location: ../usuario-crear.php');
?>
