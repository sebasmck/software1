<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador</title>
	<?php include('partials/head.php') ?>
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
					<li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
				</ul>
			</li>
			
			
			<li class=""><a title="" href="<?= base_url();?>index.php/login/sessionDestroy"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
		</ul>
	</div>
	<!--close-top-Header-menu-->
	
	<!--sidebar-menu-->
	<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
		<ul>
			<li class=""><a href="<?= base_url();?>index.php/PageController/dashboard"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
		<li class="active"><a href="<?= base_url();?>index.php/PageController/subirArchivo"><i class="icon icon-th-list"></i> <span>Subir archivo</span></a> </li>
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


	</div>
	

<?php include("partials/main_footer.php"); ?>	


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
</html>