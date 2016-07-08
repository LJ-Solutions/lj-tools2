<html ng-app="modalTest">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular.min.js"></script>
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.6.0.js" type="text/javascript"></script>
    <script src="http://m-e-conroy.github.io/angular-dialog-service/javascripts/dialogs.min.js" type="text/javascript"></script>
  
  <?php
		include('conexion.php');
		include('head.php');		
	?>    
  </head>
  <body ng-controller="dialogServiceTest" class="pad">
    <h2>Bootstrap 3 & AngularJS Dialog/Modals</h2><br />
    
    <div class="row">
      <div class="col-md-12">        
    	<form>
        <button class="btn btn-success" ng-click="launch('confirm')" name="confirmation" value="2"><span class="fa fa-times"></span></button>        
        </form>
      </div>
    </div>
    <br />
    <div class="row">
      <div class="col-md-12">
        <p>
          <span class="text-info">From Confirm Dialog</span>: {{confirmed}}
        </p>
      </div>
    </div>
    <br />
    
  <script src="js/popup.js"></script>  
  </body>
</html>