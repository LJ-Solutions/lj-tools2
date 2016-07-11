<?php
session_start();
include('conexion.php');
if (isset($_POST["boton2"])) {
	$boton2 = $_POST['boton2'];	
	$_SESSION['eliminar'] = $boton2;//this session contains the id of the record to be deleted	
    header('Location: procesos/p-rol-eliminar.php');
	exit;
}
if (isset($_POST["boton1"])) {
	$boton = $_POST['boton1'];
	$_SESSION['actualizar'] = $boton;//this sessions contains the id of the record to be updated	
	//echo "this is actualizar session1 : ".$_SESSION['actualizar'];
	//exit;  
}
?>
 <?php
	$queryRolId = "SELECT * FROM rol WHERE id='". $boton ."'";
	$resultRolId = $conn->query($queryRolId) or die ("Could not execute RolId query.");
	$rowRolId = $resultRolId->fetch_assoc();
	extract($rowRolId);
	echo "descripcion: ".$permiso_descripcion;
	echo "nombre: ".$permiso_nombre;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
		include('conexion.php');
		include('head.php');		
	?>    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">            
              <a href="dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>DASHBOARD</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu prile quick info CUANDO FUNCIONE HACERLA INCLUDE--> 
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu prile quick info -->

            <br />
			
            <!-- /menu left -->
            <?php
				include('menu-left.php');
			?>
			<!-- /menu left -->
            
            <!-- /menu footer buttons -->
            <?php
				include('menu-footer-button.php');
			?>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <?php
			include('top-navigation.php');
		?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>Roles</h3>
              </div>
                
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
                
          <!--REPORTE-->
           <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">                    
                     <h2>Detalle del rol</h2>                    
                    <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content" >
                    	<br />
                  		<form class="form-horizontal form-label-left input_mask" method="post" action="procesos/p-rol-actualizar.php">                  			
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                  	
                   				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                  					<label>nombre del rol</label>
                        			<input type="text" class="form-control" name="rol-nombre" value="<?php echo $rol_nombre ?>">
                    			</div> 
                  			</div> 
                   
							<div class="col-md-12 col-sm-12 col-xs-12 form-group">	
                    			<div class="col-md-6 col-sm-6 col-xs-12 ">
                    				<label>descripcion del rol</label>                      
                         	 		<textarea class="form-control" name="rol-descripcion"><?php echo $rol_descripcion ?></textarea>
                    			</div>
            				</div>                                             		
            	</div>
           
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">                  
                  <div class="x_content">
                    <br />                    			
                      
                      <h2>Permisos</h2>
                       <br />                      
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                      <?php
					  
                      	$queryPermiso = "SELECT * FROM permiso";
						$result = $conn->query($queryPermiso) or die ("Could not execute Permiso query.");
						$nrows = $result->num_rows;
						for ($i=0;$i<$nrows;$i++){	
							$row = $result->fetch_assoc();
							extract($row);
							
								$queryBoton = "SELECT * FROM rolxpermiso WHERE rol_id='". $boton ."'";								
								$resultBoton = $conn->query($queryBoton) or die ("Could not execute Boton query.");
								$nrowsBoton = $resultBoton->num_rows;
								for ($j=0;$j<$nrowsBoton;$j++){	
									$rowBoton = $resultBoton->fetch_assoc();
									extract($rowBoton);
								
								if ($permiso_id == $id){
									$checkmark = "checked";									
								}
							}//endfor
							 
					  ?>
                      	<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                      		<input type="checkbox" <?php echo $checkmark ?> name="permiso[]" value="<?php echo $id?>" class="icheckbox_flat-green" /> <?php echo $permiso_nombre?> 
                            <?php $checkmark = "" ?>                  
                        </div>                                             
					  <?php	
							
						}//endfor      
					  ?>                  
                                                                                  
                      </div>
					</div> 
                      
                      <div class="clearfix"></div>  
                      
              </div>
            </div>            
		</div>
	
            <?php
				include('end-form-actualizar-submit.php');
			?>
            </div>
          </div>
        </div>
         <div class="clearfix"></div>   
            	
              </div>
            </div> 
            
          </div>
        </div>        
        <!-- /page content -->

        <!-- footer content -->
        <div id='container'>
        
		</div>
		<?php
			include('footer.php');
		?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
     <?php
		include('myjs.php');
	 ?>

  </body>
</html>