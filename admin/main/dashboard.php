<?php
	include("./include/header.php");
	include('./include/sidebar.php')
?>
  


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xl-9 col-12">
					<div class="row">
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body py-0">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<h5 class="text-fade">Applications</h5>
											<h2 class="fw-500 mb-0">132.0K</h2>
										</div>
										<div>
											<div id="revenue1"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body py-0">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<h5 class="text-fade">Shortlisted</h5>
											<h2 class="fw-500 mb-0">10.9k</h2>
										</div>
										<div>
											<div id="revenue2"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-body py-0">
									<div class="d-flex justify-content-between align-items-center">
										<div>
											<h5 class="text-fade">On Hold</h5>
											<h2 class="fw-500 mb-0">03.1k</h2>
										</div>
										<div>
											<div id="revenue3"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					
					</div>
				</div>				
			
			</div>
		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->
<?php
	include('./include/footer.php');
?>
<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
<script src="../assets/vendor_components/moment/min/moment.min.js"></script>
<script src="../assets/vendor_components/fullcalendar/fullcalendar.js"></script>

<script src="js/pages/dashboard.js"></script>
<script src="js/pages/calendar-dash.js"></script>
