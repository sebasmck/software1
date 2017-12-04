<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/bootstrap-responsive.min.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/matrix-style.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/matrix-media.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('font-awesome/css/font-awesome.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/jquery.gritter.css') ?>">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/datepicker.css') ?>">



	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>




</head>
<body>
	<!--Header-part-->
	<div id="header">
		<h1><a href="dashboard.html">Sistema Recaudo</a></h1>
	</div>
	<!--close-Header-part--> 


	<!--top-Header-menu-->
	<div id="user-nav" class="navbar navbar-inverse">
		<ul class="nav">
			<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
					<li class="divider"></li>
					<li><a href="<?= base_url();?>index.php/ControladorLogin/sessionDestroy"><i class="icon-key"></i> Log Out</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<!--close-top-Header-menu-->
	
	<!--sidebar-menu-->
	<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
		<ul>
			<li class="active"><a href="<?= base_url();?>index.php/PageController/dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
			<li class=""><a href="<?= base_url();?>index.php/PageController/subirArchivo"><i class="icon icon-th-list"></i> <span>Subir archivo</span></a> </li>
		</ul>
	</div>

	<!--sidebar-menu-->

	<!--main-container-part-->
	<div id="content">
		<!--breadcrumbs-->
		<div id="content-header">
			<div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
		</div>
		<!--End-breadcrumbs-->



		<!-- content -->

		<div class="span6">
			
			<form action="<?= base_url() ?>index.php/ReporteControlador/generarReporte" method="POST">

				<select name="id_entidad" class="form-control">
					<?php
					foreach($entidades as $row)
					{ 
						echo '<option value="'.$row->Id.'">'.$row->Nombre_EntidadPago.'</option>';
					}
					?> 
				</select>

				<!-- label for="inicio">Fecha inicial</label>
				<input type="date" name="inicio" value="" id="inicio" class="form-control" max="2017-12-03">

				<label for="inicio">Fecha Final</label>
				<input type="date" name="final" value="" id="final" class="form-control" max="2017-12-03"> -->
				

				<br><br>



				<button type="submit"  class="btn btn-success">Consultar</button>

			</form>


		</div>


	</div>







	<!-- content end -->



</div>


<script src=" <?php echo base_url()?>js/jquery.toggle.buttons.js"></script>
<script src=" <?php echo base_url()?>js/jquery.min.js"></script> 
<script src=" <?php echo base_url();?>js/bootstrap-datepicker.js"></script> 
<script src=" <?php echo base_url()?>js/jquery.min.js"></script> 
<script src=" <?php echo base_url();?>js/jquery.ui.custom.js"></script> 
<script src=" <?php echo base_url();?>js/bootstrap.min.js"></script> 
<script src=" <?php echo base_url();?>js/jquery.flot.min.js"></script> 
<script src=" <?php echo base_url();?>js/jquery.flot.resize.min.js"></script> 
<script src=" <?php echo base_url();?>js/jquery.peity.min.js"></script> 
<script src=" <?php echo base_url();?>js/fullcalendar.min.js"></script> 
<script src=" <?php echo base_url();?>js/matrix.js"></script> 
<script src=" <?php echo base_url();?>js/matrix.dashboard.js"></script> 
<script src=" <?php echo base_url();?>js/jquery.gritter.min.js"></script> 
<script src=" <?php echo base_url();?>js/matrix.interface.js"></script> 
<script src=" <?php echo base_url();?>js/matrix.chat.js"></script> 
<script src=" <?php echo base_url();?>js/jquery.validate.js"></script> 
<script src=" <?php echo base_url();?>js/matrix.form_validation.js"></script> 
<script src=" <?php echo base_url();?>js/jquery.wizard.js"></script> 
<script src=" <?php echo base_url();?>js/jquery.uniform.js"></script> 
<script src=" <?php echo base_url();?>js/select2.min.js"></script> 
<script src=" <?php echo base_url();?>js/matrix.popover.js"></script> 
<script src=" <?php echo base_url();?>js/jquery.dataTables.min.js"></script> 
<script src=" <?php echo base_url();?>js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
          	resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
          	document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
	document.gomenu.selector.selectedIndex = 2;
}
</script> 




</body>
<!-- merged up commit -->
</html>