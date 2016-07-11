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
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Proveedor ver todos</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Buscar clientes por nombre / cedula">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Buscar</button>
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
                     <h2>LISTADO DE PROVEEDORES</h2>
                    <?php
						include('toggle-category-plus.php');
					?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />                     
                                           
                      <br />
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Nombre comercial </label>
                        <br />            
                      </div>
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Nombre de contacto </label>
                        <br />            
                      </div>  
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Teléfono </label>
                        <br />            
                      </div>  
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Celular </label>
                        <br />            
                      </div>  
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Correo electrónico </label>
                        <br />            
                      </div>  
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        <label for="name">Acción </label>
                        <br />            
                      </div>       
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        
        				<input type="text" name="nombre-comercial" id="nombre-comercial" value="nombre comercial">        				
                                                 
                        <br />            
                      </div>                      
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="nombre-completo" id="nombre-completo" value="nombre completo">        				
                                                
                        <br />                  
                      </div>
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="telefono" id="telefono" value="telefono">
        				
                                              
                        <br />                       
                      </div>                      
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="celular" id="celular" value="celular">        				
                                                 
                        <br />                             
                      </div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="email" name="email" id="email" value="email">        				
                                                 
                        <br />                             
                      </div> 
                      
                      <form method="post" action="proveedor-ver-detalle.php">
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                      <button class="btn btn-default" type="submit" value="search" name="boton"><span class="fa fa-search"> </span></button>
                      <button class="btn btn-default" type="submit" value="delete" name="boton"><span class="fa fa-times"> </span></button>  
                      </form>                  
                        <br />                             
                      </div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        
        				<input type="text" name="nombre-completo" id="nombre-completo" value="nombre-completo">        				
                                                 
                        <br />            
                      </div>                      
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="nombre-comercial" id="nombre-comercial" value="nombre-comercial">        				
                                                
                        <br />                  
                      </div>
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="telefono" id="telefono" value="telefono">
        				
                                              
                        <br />                       
                      </div>                      
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="celular" id="celular" value="celular">        				
                                                 
                        <br />                             
                      </div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="email" name="email" id="email" value="email">        				
                                                 
                        <br />                             
                      </div> 
                      <form method="post" action="cliente-ver-detalle.php">
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                      <button class="btn btn-default" type="submit" value="search" name="boton"><span class="fa fa-search"> </span></button>
                      <button class="btn btn-default" type="submit" value="delete" name="boton"><span class="fa fa-times"> </span></button>
                      </form>
                                         
                        <br />                             
                      </div> 
                    <div class="clearfix"></div>
            	
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