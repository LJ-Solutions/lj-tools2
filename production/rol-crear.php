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
            
            
             <!-- ROLES -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Roles</h2>
                    <?php
						include('toggle-inverse.php');
					?>
                    <div class="clearfix"></div>                    
                  </div>
                  <div id="rolnuevo" class="collapse">
                  	<div class="x_content" >
                    	<br />
                  		<form class="form-horizontal form-label-left input_mask" method="post" action="procesos/p-rol-crear.php">                  			
                            
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">                  	
                   				<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                  					<label>nombre del rol</label>
                        			<input type="text" class="form-control" name="rol-nombre" placeholder="" required>
                    			</div> 
                  			</div> 
                   
							<div class="col-md-12 col-sm-12 col-xs-12 form-group">	
                    			<div class="col-md-6 col-sm-6 col-xs-12 ">
                    				<label>descripcion del rol</label>                      
                         	 		<textarea class="form-control" name="rol-descripcion" 
                          			data-parsley-validation-threshold="10" placeholder=""></textarea>
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
						$result = mysql_query($queryPermiso) or die ("Could not execute Permiso query.");
						$nrows = mysql_num_rows($result);
						for ($i=0;$i<$nrows;$i++){	
							$row = mysql_fetch_assoc($result);
							extract($row);
					  ?>
                      	<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                      		<input type="checkbox" name="permiso[]" value="<?php echo $id?>" class="icheckbox_flat-green" /> <?php echo $permiso_nombre?>                                                   
                        </div>                                             
					  <?php	
						}     
					  ?>                  
                                                                                 
                      </div>
					</div> 
                      
                      <div class="clearfix"></div>  
                      
              </div>
            </div>            
		</div>
	
            <?php
				include('end-form-submit.php');
			?>
            </div>
          </div>
        </div>
         <div class="clearfix"></div>   
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
            		<div class="x_content">
                    <br />                     
                                           
                      <br />
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">                        
                        <label>ROL <span class="fa fa-sort"></span></label>
                        <br />            
                      </div>
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">                        
                        <label>DESCRIPCION <span class="fa fa-sort"></span></label>
                        <br />            
                      </div>  
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">                        
                        <label for="name">ACCION</label>
                        <br />            
                      </div> 
                      <?php
                        //Query to display all the roles available
						$queryRol = "SELECT * FROM rol";
						$result2 = mysql_query($queryRol) or die ("Could not execute Rol query.");
						$nrows2 = mysql_num_rows($result2);
						for ($i=0;$i<$nrows2;$i++){	
						$row2 = mysql_fetch_assoc($result2);
						extract($row2);						
					  ?>
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">                        
                        
        				<p><?php echo $rol_nombre; ?></p>  
                                   
                      </div>                      
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        
        				<p><?php echo $rol_descripcion ?></p>
                                                                                        
                      </div>
                      
                      <form method="post" action="rol-ver-detalle.php">
                      	<div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback" id='contact-form'>
                      	<button class="btn btn-default" type="submit" value="<?php echo $id ?>" name="boton1"><span class="fa fa-search"> </span></button>  
                        <button class="btn btn-default" type="submit" value="<?php echo $id ?>" name="boton2"><span class="fa fa-times"> </span></button>                     
                       </form> 
                                           
                      </div>
                       <hr>
                       <?php
						}
					  ?>  
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