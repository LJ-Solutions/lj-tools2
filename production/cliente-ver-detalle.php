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
                <h3>Detalle de cliente</h3>
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
                    <form class="form-horizontal form-label-left input_mask" method="post" action="procesos/p-ver-detalle-actualizar.php">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="cliente-nombre" placeholder="Alejandro">                        
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" name="telefono" placeholder="Teléfono">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="cliente-apellido" placeholder="Mazzini">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div> 
                     
                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-right" name="celular" placeholder="0978695861"> <!--SHOULD BE CUSTOM-->                       
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>   

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="email" class="form-control has-feedback-left" name="email" placeholder="amazzini@lj-solutions.com"> <!--SHOULD BE CUSTOM-->
                        <span class="fa fa-envelope-o form-control-feedback left" aria-hidden="true"></span>
                      </div> 
                    
                  </div>
                </div>
              </div>
            </div>
            
            <!-- DIRECCION-->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dirección</h2>
                    <?php
						include('toggle.php');
					?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <!--<form class="form-horizontal form-label-left input_mask">-->

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="direccion1" placeholder="Alborada 5ta">                        
                        <span class="fa fa-road form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" name="direccion2" placeholder="">                        
                        <span class="fa fa-road form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="ciudad" placeholder="Guayaquil">                        
                        <span class="fa fa-map form-control-feedback left" aria-hidden="true"></span>
                      </div>
						
                                                
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        
                        <?php
							include('provincias.php');
						?> 
     					<span class="fa fa-caret-down form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="codigo-postal" placeholder="070901">                        
                        <span class="fa fa-compass form-control-feedback left" aria-hidden="true"></span>                        
                      </div>                      
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-right" name="pais" value="Ecuador" placeholder="Ecuador">                        
                        <span class="fa fa-globe form-control-feedback right" aria-hidden="true"></span>                        
                      </div>
                       
                     </div> 
                    
                  </div>
                </div>
              </div>
            </div>
                        
            <!-- INFORMACION ADICIONAL -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Información Adicional</h2>
                    <?php
						include('toggle.php');
					?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <!--<form class="form-horizontal form-label-left input_mask">-->
					<div class="col-md-6 col-sm-6 col-xs-12 ">                      
                          <textarea id="message" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="1000" data-parsley-minlength-message="Vamos! Digita al menos w2 caracteres en tu mensaje.."
                            data-parsley-validation-threshold="10" placeholder="Necesita conseguir 3 vendedores y  un programador."></textarea>
                    </div>
            	
              </div>
            </div>          
            
            
            <?php
				include('end-form-submit-actualizar.php');
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