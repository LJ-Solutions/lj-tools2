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
                <h3>Compra elegida</h3>
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
                      <form class="form-horizontal form-label-left input_mask" method="post" action="procesos/p-compras-ver-detalle.php">                     
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
                        
        				<input type="text" name="cantidad" id="cantidad" value="Cantidad">        				
                                                
                        <br />                  
                      </div>
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="precio-unitario" id="precio-unitario" value="Precio Unitario">
        				
                                              
                        <br />                       
                      </div>                      
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="subtotal" id="subtotal" value="Sub-total">        				
                                                 
                        <br />                             
                      </div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="impuesto" id="impuesto" value="Impuesto">        				
                                                 
                        <br />                             
                      </div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="total" id="total" value="Total">        				
                                                 
                        <br />                             
                      </div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        
        				<input type="text" name="producto" id="producto" value="Producto">        				
                                                 
                        <br />            
                      </div>                      
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="cantidad" id="cantidad" value="Cantidad">        				
                                                
                        <br />                  
                      </div>
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="precio-unitario" id="precio-unitario" value="Precio Unitario">
        				
                                              
                        <br />                       
                      </div>                      
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="subtotal" id="subtotal" value="Sub-total">        				
                                                 
                        <br />                             
                      </div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="impuesto" id="impuesto" value="Impuesto">        				
                                                 
                        <br />                             
                      </div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
                        
        				<input type="text" name="total" id="total" value="Total">        				
                                                 
                        <br />                             
                      </div>
                      
                      <div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">                        
                        </ br>
                        <label for="name">GRAN TOTAL: $125.40</label>
                        <br />            
                      </div> 
                    <div class="clearfix"></div>
            	
              </div>
            </div>   
            
            <?php
				include('end-form-submit-email.php');
			?>
          </div>
        </div>        
        <!-- /page content -->

        <!-- footer content -->
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