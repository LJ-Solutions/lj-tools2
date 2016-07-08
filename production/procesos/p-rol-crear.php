<?php
error_reporting(0);
//ob_start();
//session_save_path ("/home/users/web/b2072/ipg.ljsolutionscom/cgi-bin/tmp");
//Initialize session
session_start();
include('../conexion.php');

$rol_nombre = $_POST['rol-nombre'];	
$rol_descripcion = $_POST['rol-descripcion'];

$queryRol = "INSERT INTO rol (rol_nombre, rol_descripcion) values ('$rol_nombre', '$rol_descripcion')";
$result = mysql_query($queryRol) or die ('Could not execute Rol query');

//Rutina para obtener el id del ultimo record ingresado.
//Funcion necesaria para poder llenar la tabla de permisos y enlazarlo al rol_id.
$queryFindRol="SELECT id FROM rol ORDER BY id DESC LIMIT 1";
$result1=mysql_query($queryFindRol) or die ("Could not execute queryFindRol query.");
$row1 = mysql_fetch_assoc($result1);
extract($row1);
$xrol_id = $id;

if(!empty($_POST['permiso'])) {
	// Counting number of checked checkboxes.
	$checked_count = count($_POST['permiso']);
	// Loop to store and display values of individual checked checkbox.
	foreach($_POST['permiso'] as $xpermiso_id) {
		
		$queryRol = "INSERT INTO rolxpermiso (rol_id, permiso_id) values ('$xrol_id', '$xpermiso_id')";
		$result = mysql_query($queryRol) or die ('Could not execute Rol query');
		//echo "This is the checkbox value: ".$selected."</br>";
		}	
}
?>
<?php
header('Location: ../rol-crear.php');
?>
