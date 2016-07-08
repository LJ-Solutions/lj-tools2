<?php

$eliminar = $_GET['eliminar'];

echo "this is eliminar: ".$eliminar; 

// This is the content of the delete button from forms
$output = "<div style='display:none'>
			<div class='contact-top'></div>
				<div class='contact-content'>
					<h1 class='contact-title'>El rol será eliminado</h1>
					<h1>Desea continuar?</h1></br></br>";
					$output .= "
					<label>&nbsp;</label>
					<form class='form-horizontal form-label-left input_mask' method='post' action='procesos/p-rol-eliminar.php'>
						<button type='submit' name = 'eliminar' value = '1' class='btn btn-success' >Send</button>
						<button type='submit' class='contact-cancel btn btn-primary simplemodal-close' tabindex='1007'>Cancel</button>
					</form>	
					<br/>
				</div>
			</div>";
echo $output;
exit;
?>
<?php
header('Location: ../rol-crear.php');
?>