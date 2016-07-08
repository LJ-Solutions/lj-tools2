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
                <h3>Compras crear h3</h3>
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
                            			<input type="text" class="form-control" placeholder="autocomplete">
                            			<span class="input-group-btn">
                                              <button type="button" class="btn btn-primary"><span class="fa fa-shopping-cart"></span></button>                                              
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
                <div class="x_panel">
                  <div class="x_title">                    
                     <h2>Producto #1</h2>
                    <?php
						include('toggle-category-plus.php');
					?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left input_mask" method="post" action="procesos/p-compras-crear.php">
                      <h2><!---->                      	
                        <button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>                        
                         <div class="col-md-1 col-sm-1 col-xs-1">
                        	<input type="text" class="form-control" name="cantidad" placeholder="cantidad">
                        </div>                        
                        <button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         caja(s)
                      </h2>                      
                      <br />                     
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">                        
                        <input type="radio" name="proveedor1" id="proveedor1" value="proveedor1" class="flat" /> proveedor 1                        
                        <br />            
                      </div>                      
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <input type="radio" name="proveedor2" id="proveedor2" value="proveedor2" class="flat" /> proveedor 2                        
                        <br />                  
                      </div>
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <input type="radio" name="proveedor3" id="proveedor3" value="proveedor3" class="flat" /> proveedor 3                        
                        <br />                       
                      </div>                      
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="radio" name="proveedor4" id="proveedor4" value="proveedor4" class="flat" /> proveedor 4                        
                        <br />                             
                      </div> 
                    <div class="clearfix"></div>  
            	
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">                    
                     <h2>Producto #2</h2>
                    <?php
						include('toggle-category-plus.php');
					?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <!--<form class="form-horizontal form-label-left input_mask">-->
                      <h2>                      	
                        <button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>                        
                         <div class="col-md-1 col-sm-1 col-xs-1">
                        	<input type="text" class="form-control" placeholder="cantidad">
                        </div>                        
                        <button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         libra(s)
                      </h2>                      
                      <br />                     
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">                        
                        <input type="radio" name="proveedor1" id="proveedor1" value="proveedor1" class="flat" /> proveedor 1                        
                        <br />            
                      </div>                      
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <input type="radio" name="proveedor2" id="proveedor2" value="proveedor2" class="flat" /> proveedor 2                        
                        <br />                  
                      </div>
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <input type="radio" name="proveedor3" id="proveedor3" value="proveedor3" class="flat" /> proveedor 3                        
                        <br />                       
                      </div>                      
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="radio" name="proveedor4" id="proveedor4" value="proveedor4" class="flat" /> proveedor 4                        
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