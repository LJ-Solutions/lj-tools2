<?php
//ob_start();
//session_save_path ("/home/users/web/b2072/ipg.ljsolutionscom/cgi-bin/tmp");
//Initialize session
session_start();
include('../conexion.php');
$actualizar = $_SESSION['actualizar'];//sirve para actualizar y borrar registros de permisos actuales
$rol_nombre = $_POST['rol-nombre'];	
$rol_descripcion = $_POST['rol-descripcion'];
echo "rol nombre: ".$rol_nombre;
echo "rol descripcion: ".$rol_descripcion;
echo "actualizar: ".$actualizar;
$queryRol = "UPDATE rol SET rol_nombre = '$rol_nombre', rol_descripcion = '$rol_descripcion' WHERE id = $actualizar";
$result = mysql_query($queryRol) or die ('Could not execute Rol query');
//Query para borrar todos los permisos actuales
$queryEliminar = "DELETE FROM rolxpermiso WHERE rol_id=$actualizar";
$resultx = mysql_query($queryEliminar) or die ('Could not execute Eliminar query');
//Reingresa todos los registros nuevos
if(!empty($_POST['permiso'])) {
	// Counting number of checked checkboxes.
	$checked_count = count($_POST['permiso']);
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['permiso'] as $xpermiso_id) {		
		$queryRol = "INSERT INTO rolxpermiso (rol_id, permiso_id) values ('$actualizar', '$xpermiso_id')";
		$result = mysql_query($queryRol) or die ('Could not execute Rol query');
		//echo "This is the checkbox value: ".$selected."</br>";
		}	
}
?>
<?php
header('Location: ../rol-crear.php');
?>