<?php
//ob_start();
//session_save_path ("/home/users/web/b2072/ipg.ljsolutionscom/cgi-bin/tmp");
//Initialize session
session_start();
include('../conexion.php');
$actualizar = $_SESSION['actualizar'];//sirve para actualizar y borrar registros de permisos actuales
$usuario_nombre = $_POST['usuario-nombre'];	
$usuario_email = $_POST['usuario-email'];
echo "usuario nombre: ".$usuario_nombre;
echo "usuario email: ".$usuario_email;
echo "this is the id we are dealing with ".$actualizar."<br>";
$queryUsuario = "UPDATE usuario SET usuario_nombre = '$usuario_nombre', usuario_email = '$usuario_email' WHERE id = $actualizar";
$result = mysql_query($queryUsuario) or die ('Could not execute Usuario query');
//Query para borrar todos los permisos actuales
$queryEliminar = "DELETE FROM usuarioxrol WHERE usuario_id=$actualizar";
$resultx = mysql_query($queryEliminar) or die ('Could not execute Eliminar query');
//Reingresa todos los registros nuevos
if(!empty($_POST['rol'])) {
	// Counting number of checked checkboxes.
	$checked_count = count($_POST['rol']);		
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['rol'] as $xrol_id) {				
		$queryRol = "INSERT INTO usuarioxrol (usuario_id, rol_id) values ('$actualizar', '$xrol_id')";
		$result = mysql_query($queryRol) or die ('Could not execute Rol query');
		//echo "This is the checkbox value: ".$selected."</br>";
		}	
}
?>
<?php
header('Location: ../usuario-crear.php');
?>