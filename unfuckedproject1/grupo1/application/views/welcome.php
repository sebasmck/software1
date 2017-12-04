<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<?php include('partials/head.php') ?>
</head>
<body>

	<div class="container">
		
		<div class="container-fluid">
			<div class="quick-actions_homepage">
				<ul class="quick-actions">
					<li class="bg_lg span6"> <a  href="<?= base_url();?>index.php/PageController/login_recaudo"> <i class="icon-signal"></i>Departamento de recaudo</a> </li>
					<li class="bg_lo span5"> <a href="<?= base_url();?>index.php/PageController/login_contable"> <i class="icon-th-list"></i> Departamento Contable</a> </li>
				</ul>
			</div>
			<!--End-Action boxes-->    


			<hr>
			<div class="row-fluid">
				<div class="span6">
					<div class="widget-box">
						<div class="widget-title bg_ly" data-toggle="collapse" href="#collapseG2"><span class="icon"><i class="icon-chevron-down"></i></span>
							<h5>Ultimas noticias</h5>
						</div>
						<div class="widget-content nopadding collapse in" id="collapseG2">
							<ul class="recent-posts">
								<li>
									<div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av1.jpg"> </div>
									<div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2017 / Time:09:27 AM </span>
										<p><a href="#">Los prestamos de vivienda han tenido un impacto en los salarios de Agosto... <b>ver mas...</b></a> </p>
									</div>
								</li>
								<li>
									<div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av2.jpg"> </div>
									<div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2017 / Time:09:27 AM </span>
										<p><a href="#">Como declarar renta el ano 2018, <b>Ver mas...</b></a> </p>
									</div>
								</li>
								<li>
									<div class="user-thumb"> <img width="40" height="40" alt="User" src="img/demo/av4.jpg"> </div>
									<div class="article-post"> <span class="user-info"> By: john Deo / Date: 2 Aug 2017 / Time:09:27 AM </span>
										<p><a href="#">Enterese de nuestra jornada de simulacros <b>Ver mas..</b></a> </p>
									</div>
								</li><li>
									<button class="btn btn-warning btn-mini">View All</button>
								</li>
							</ul>
						</div>
					</div>

				</div>
				
				<div class="span6">



					<div class="widget-box">
						<div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
							<h5>To Do list</h5>
						</div>
						<div class="widget-content">
							<div class="todo">
								<ul>
									<li class="clearfix">
										<div class="txt"> Luanch This theme on Themeforest <span class="by label">Alex</span></div>
										<div class="pull-right"> <a class="tip" href="#" data-original-title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" data-original-title="Delete"><i class="icon-remove"></i></a> </div>
									</li>
									<li class="clearfix">
										<div class="txt"> Manage Pending Orders <span class="date badge badge-warning">Today</span> </div>
										<div class="pull-right"> <a class="tip" href="#" data-original-title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" data-original-title="Delete"><i class="icon-remove"></i></a> </div>
									</li>
									<li class="clearfix">
										<div class="txt"> MAke your desk clean <span class="by label">Admin</span></div>
										<div class="pull-right"> <a class="tip" href="#" data-original-title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" data-original-title="Delete"><i class="icon-remove"></i></a> </div>
									</li>
									<li class="clearfix">
										<div class="txt"> Today we celebrate the theme <span class="date badge badge-info">08.03.2013</span> </div>
										<div class="pull-right"> <a class="tip" href="#" data-original-title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" data-original-title="Delete"><i class="icon-remove"></i></a> </div>
									</li>
									<li class="clearfix">
										<div class="txt"> Manage all the orders <span class="date badge badge-important">12.03.2013</span> </div>
										<div class="pull-right"> <a class="tip" href="#" data-original-title="Edit Task"><i class="icon-pencil"></i></a> <a class="tip" href="#" data-original-title="Delete"><i class="icon-remove"></i></a> </div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="widget-box">
						<div class="widget-title"> <span class="icon"><i class="icon-ok"></i></span>
							<h5>Progress Box</h5>
						</div>
						<div class="widget-content">
							<ul class="unstyled">
								<li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 81% Clicks <span class="pull-right strong">567</span>
									<div class="progress progress-striped ">
										<div style="width: 81%;" class="bar"></div>
									</div>
								</li>
								<li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 72% Uniquie Clicks <span class="pull-right strong">507</span>
									<div class="progress progress-success progress-striped ">
										<div style="width: 72%;" class="bar"></div>
									</div>
								</li>
								<li> <span class="icon24 icomoon-icon-arrow-down-2 red"></span> 53% Impressions <span class="pull-right strong">457</span>
									<div class="progress progress-warning progress-striped ">
										<div style="width: 53%;" class="bar"></div>
									</div>
								</li>
								<li> <span class="icon24 icomoon-icon-arrow-up-2 green"></span> 3% Online Users <span class="pull-right strong">8</span>
									<div class="progress progress-danger progress-striped ">
										<div style="width: 3%;" class="bar"></div>
									</div>
								</li>
							</ul>
						</div>
					</div>

				</div>
				


			</div>
		</div>
	</div>


</div>

<?php include("partials/main_footer.php"); ?>	

</body>
</html>