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
                <h3>Proveedor crear h3</h3>
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
                    <form class="form-horizontal form-label-left input_mask" method="post" action="procesos/p-cliente-crear.php">

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="proveedor-nombre-comercial" placeholder="Nombre Comercial" required>                        
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" name="telefono" placeholder="Teléfono">
                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                      </div>

                     <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="proveedor-nombre-contacto" placeholder="Nombre de Contacto" required>
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
                        <input type="text" class="form-control has-feedback-left" name="direccion1" placeholder="Dirección 1" required>                        
                        <span class="fa fa-road form-control-feedback left" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control" name="direccion2" placeholder="Dirección 2">                        
                        <span class="fa fa-road form-control-feedback right" aria-hidden="true"></span>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="ciudad" placeholder="Ciudad" required>                        
                        <span class="fa fa-map form-control-feedback left" aria-hidden="true"></span>
                      </div>
						
                                                
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        
                        <?php
							include('provincias.php');
						?> 
     					<span class="fa fa-caret-down form-control-feedback right" aria-hidden="true"></span>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" name="codigo-postal" placeholder="Código Postal">                        
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
                          <textarea id="message" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="1000" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10" placeholder="Información adicional."></textarea>
                    </div>
            	
              </div>
            </div> 
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Categoria</h2>
                    <?php
						include('toggle-category-plus.php');
					?>
                    <br />
                    <br />
                    <div class="x_title"></div>
                     <h2>Productos</h2>
                    <?php
						include('toggle-category-plus.php');
					?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <!--<form class="form-horizontal form-label-left input_mask">-->			
                      
                      <h2>Categoria #1</h2>                     
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">                        
                        <input type="checkbox" name="productos[]" id="producto1" value="producto1" class="flat" /> producto1
                        <br />
						<br />
                        <input type="checkbox" name="productos[]" id="producto2" value="producto2" class="flat" /> producto2
                        <br />            
                      </div>                      
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <input type="checkbox" name="productos[]" id="producto3" value="producto3" class="flat" /> producto3
                        <br />
                        <br />
                        <input type="checkbox" name="productos[]" id="producto4" value="producto4" class="flat" /> producto4
                        <br />                  
                      </div>
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <input type="checkbox" name="productos[]" id="producto5" value="producto5" class="flat" /> producto5
                        <br />
                        <br />
                        <input type="checkbox" name="productos[]" id="producto6" value="producto6" class="flat" /> producto6
                        <br />                       
                      </div>                      
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="checkbox" name="productos[]" id="producto7" value="producto7" class="flat" /> producto7
                        <br />
                        <br />
                        <input type="checkbox" name="productos[]" id="producto8" value="producto8" class="flat" /> producto8
                        <br />                             
                      </div> 
                      <div class="clearfix"></div>  
						 
                    <!--</form>-->
                    
                    <!--<form class="form-horizontal form-label-left input_mask">-->			
                      
                      <h2>Categoria #2</h2>                     
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">                        
                        <input type="checkbox" name="productos[]" id="producto1" value="producto1" class="flat" /> producto1
                        <br />
						<br />
                        <input type="checkbox" name="productos[]" id="producto2" value="producto2" class="flat" /> producto2
                        <br />            
                      </div>                      
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <input type="checkbox" name="productos[]" id="producto3" value="producto3" class="flat" /> producto3
                        <br />
                        <br />
                        <input type="checkbox" name="productos[]" id="producto4" value="producto4" class="flat" /> producto4
                        <br />                  
                      </div>
                      
                      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
                        <input type="checkbox" name="productos[]" id="producto5" value="producto5" class="flat" /> producto5
                        <br />
                        <br />
                        <input type="checkbox" name="productos[]" id="producto6" value="producto6" class="flat" /> producto6
                        <br />                       
                      </div>                      
                      
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="checkbox" name="productos[]" id="producto7" value="producto7" class="flat" /> producto7
                        <br />
                        <br />
                        <input type="checkbox" name="productos[]" id="producto8" value="producto8" class="flat" /> producto8
                        <br />                             
                      </div>
                                  	
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