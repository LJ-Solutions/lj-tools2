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
                <h3>Proveedor elegido</h3>
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
            
           <!--CATEGORIA -- LOS BOTONES DE MAS Y MENOS TENGO EL LINK DE UN CODIGO EN MY2016-->
           <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">                    
                     <h2>Categoria #1</h2>
                    <?php
						include('toggle-category-plus.php');
					?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <br />
                               
                   <form class="form-horizontal form-label-left input_mask" method="post" action="procesos/p-compras-crear-proveedor.php">                      
                     
                      <br /> 
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">                        
                        <label for="producto1">Producto 1</label>
        				<input type="text" name="producto1" id="producto1" value="0">
        				<button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>
        				<button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         libra(s)                        
                        <br />            
                      </div>                      
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <label for="producto2">Producto 2</label>
        				<input type="text" name="producto2" id="producto2" value="0">
        				<button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>
        				<button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         libra(s)                       
                        <br />                  
                      </div>
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <label for="producto3">Producto 3</label>
        				<input type="text" name="producto3" id="producto3" value="0">
        				<button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>
        				<button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         libra(s)                      
                        <br />                       
                      </div>                      
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="producto4">Producto 4</label>
        				<input type="text" name="producto4" id="producto4" value="0">
        				<button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>
        				<button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         libra(s)                        
                        <br />                             
                      </div> 
                    <div class="clearfix"></div>
            	
              </div>
            </div> 
            
            <!--CATEGORIA-->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">                    
                     <h2>Categoria #2</h2>
                    <?php
						include('toggle-category-plus.php');
					?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />                     
                                           
                      <br /> 
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">                        
                        <label for="producto1">Producto 1</label>
        				<input type="text" name="producto1" id="producto1" value="0">
        				<button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>
        				<button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         libra(s)                        
                        <br />            
                      </div>                      
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <label for="producto2">Producto 2</label>
        				<input type="text" name="producto2" id="producto2" value="0">
        				<button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>
        				<button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         libra(s)                       
                        <br />                  
                      </div>
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <label for="producto3">Producto 3</label>
        				<input type="text" name="producto3" id="producto3" value="0">
        				<button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>
        				<button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         libra(s)                      
                        <br />                       
                      </div>                      
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <label for="producto4">Producto 4</label>
        				<input type="text" name="producto4" id="producto4" value="0">
        				<button type="button" class="btn btn-primary"><span class="fa fa-plus"></span></button>
        				<button type="button" class="btn btn-primary"><span class="fa fa-minus"></span></button>
                         libra(s)                        
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