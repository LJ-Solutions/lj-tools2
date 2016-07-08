<?php
//ob_start();
//session_save_path ("/home/users/web/b2072/ipg.ljsolutionscom/cgi-bin/tmp");
//Initialize session
session_start();
include('../conexion.php');
$eliminar = $_SESSION['eliminar'];
$queryEliminar = "DELETE FROM usuario WHERE id=$eliminar";
$result = mysql_query($queryEliminar) or die ('Could not execute Eliminar query');
?>
<?php
header('Location: ../usuario-crear.php');
?>
