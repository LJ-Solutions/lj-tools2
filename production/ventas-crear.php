<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
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

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>Información de cliente</h3>
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
            
            <div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">                  
						<div class="x_content">
						<br /> 
							<div class="form-group">
								<div class="col-sm-6">                          			
                         			<div class="input-group">
                            			<input type="text" class="form-control" placeholder="autocomplete - Busqueda de cliente - cedula / apellido">
                            			<span class="input-group-btn">
                                              <button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>                                              
                                       	</span>
                          			</div>
                        		</div>
							</div>				 
						</div>
					</div>
				</div>            
			</div>
            
            <!-- GENERAL -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>General</h2>
                    <?php
						include('toggle.php');
					?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method="post" action="procesos/p-cliente-crear.php">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="cliente-nombre" placeholder="Nombre" required>                        
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" name="telefono" placeholder="Teléfono">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="cliente-apellido" placeholder="Apellido" required>
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div> 
                     
                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-right" name="celular" placeholder="Celular"> <!--SHOULD BE CUSTOM-->                       
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>   

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="email" class="form-control has-feedback-left" name="email" placeholder="Correo Electrónico"> <!--SHOULD BE CUSTOM-->
                        <span class="fa fa-envelope-o form-control-feedback left" aria-hidden="true"></span>
                      </div> 
                    
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
                    
                    <h2>Buscar productos</h2> 
                    <div class="x_title"></div>                 
						<div class="x_content">
						<br /> 
							<div class="form-group">
								<div class="col-sm-6">                          			
                         			<div class="input-group">
                            			<input type="text" class="form-control" placeholder="autocomplete">
                            			<span class="input-group-btn">
                                              <button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>                                              
                                       	</span>
                          			</div>
                        		</div>
							</div>				 
						</div>
					</div>
				</div>            
			</div> 
            
            <!-- PRODUCTO-->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"><!---->
                  <div class="x_title">                    
                     <h2>Producto #1</h2>
                    <?php
						include('toggle-category-plus.php');
					?>
                    <div class="clearfix"></div>
                  </div><!---->
                  <div class="x_content">
                    <br />
                    <form> 
                    </form>
                    <form class="form-horizontal form-label-left input_mask" method="post" action="procesos/p-compras-crear.php">
                      <h2>                      	
                        <button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>                        
                         <div class="col-md-1 col-sm-1 col-xs-1">
                        	<input type="text" class="form-control" name="cantidad1" placeholder="cantidad1">
                        </div>                        
                        <button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         caja(s)
                      </h2>                      
                      <br />    
                      
                    <div class="clearfix"></div> 
            	
              </div>
            </div>
            
            <!-- PRODUCTO-->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel"><!---->
                  <div class="x_title">                    
                     <h2>Producto #2</h2>
                    <?php
						include('toggle-category-plus.php');
					?>
                    <div class="clearfix"></div>
                  </div><!---->
                  <div class="x_content">
                    <br />
                    <form> 
                    </form>
                    <form class="form-horizontal form-label-left input_mask" method="post" action="procesos/p-compras-crear.php">
                      <h2>                      	
                        <button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>                        
                         <div class="col-md-1 col-sm-1 col-xs-1">
                        	<input type="text" class="form-control" name="cantidad2" placeholder="cantidad2">
                        </div>                        
                        <button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         caja(s)
                      </h2>                      
                      <br />    
                      
                    <div class="clearfix"></div> 
            	
              </div>
            </div>
           
           <!--FACTURA-->
           <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">                    
                     <h2>Factura</h2>
                    <?php
						include('toggle-category-plus.php');
					?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />                     
                                           
                      <br />
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Producto </label>
                        <br />            
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Cantidad </label>
                        <br />            
                      </div>  
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Precio Unitario </label>
                        <br />            
                      </div>  
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Subtotal </label>
                        <br />            
                      </div>  
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Impuesto </label>
                        <br />            
                      </div>  
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Total </label>
                        <br />            
                      </div>       
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        
        				<input type="text" name="producto" id="producto" value="Producto">        				
                                                 
                        <br />            
                      </div>                      
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="number" name="cantidad" id="cantidad" value="Cantidad">        				
                                                
                        <br />                  
                      </div>
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="number" name="precio-unitario" id="precio-unitario" value="Precio Unitario">
        				
                                              
                        <br />                       
                      </div>                      
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="number" name="subtotal" id="subtotal" value="Sub-total">        				
                                                 
                        <br />                             
                      </div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="number" name="impuesto" id="impuesto" value="Impuesto">        				
                                                 
                        <br />                             
                      </div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="number" name="total" id="total" value="Total">        				
                                                 
                        <br />                             
                      </div> 
                    <div class="clearfix"></div>
            	
              </div>
            </div> 
            
                      
            
            <?php
				include('end-form-submit.php');
			?>
          </div>
        </div>
           </div>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php include('footer.php'); ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
     <?php include('myjs.php'); ?>

  </body>
</html>