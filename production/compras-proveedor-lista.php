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
                <h3>Elija un proveedor</h3>
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
           <form class="form-horizontal form-label-left input_mask" method="post" action="compras-crear-proveedor.php">
           
           <div class="x_content">
           
                    <button type="submit" value="Proveedor 1" name="proveedor" class="btn btn-default">Proveedor 1</button>

                    <button type="submit" value="Proveedor 2" name="proveedor" class="btn btn-primary">Proveedor 2</button>

                    <button type="submit" value="Proveedor 3" name="proveedor" class="btn btn-success">Proveedor 3</button>

                    <button type="submit" value="Proveedor 4" name="proveedor" class="btn btn-info">Proveedor 4</button>

                    <button type="submit" value="Proveedor 5" name="proveedor" class="btn btn-warning">Proveedor 5</button>

                    <button type="submit" value="Proveedor 6" name="proveedor" class="btn btn-danger">Proveedor 6</button>

                    <button type="submit" value="Proveedor 7" name="proveedor" class="btn btn-dark">Proveedor 7</button>
                  
                  </div>
            </form> 
			</div>
		</div>            
            
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