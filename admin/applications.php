	<!DOCTYPE html>
	<html lang="en">
	
<!-- Mirrored from eduport.webestica.com/admin-earning.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:09:08 GMT -->
<head>
		<title>Eduport- LMS, Education and Course Theme</title>

		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Webestica.com">
		<meta name="description" content="Eduport- LMS, Education and Course Theme">
		<base href="../">

		<!-- Dark mode -->
	<script>
		const storedTheme = localStorage.getItem('theme')
 
		const getPreferredTheme = () => {
			if (storedTheme) {
				return storedTheme
			}
			return window.matchMedia('(prefers-color-scheme: light)').matches ? 'light' : 'light'
		}

		const setTheme = function (theme) {
			if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
				document.documentElement.setAttribute('data-bs-theme', 'dark')
			} else {
				document.documentElement.setAttribute('data-bs-theme', theme)
			}
		}

		setTheme(getPreferredTheme())

		window.addEventListener('DOMContentLoaded', () => {
		    var el = document.querySelector('.theme-icon-active');
			if(el != 'undefined' && el != null) {
				const showActiveTheme = theme => {
				const activeThemeIcon = document.querySelector('.theme-icon-active use')
				const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
				const svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

				document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
					element.classList.remove('active')
				})

				btnToActive.classList.add('active')
				activeThemeIcon.setAttribute('href', svgOfActiveBtn)
			}

			window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
				if (storedTheme !== 'light' || storedTheme !== 'dark') {
					setTheme(getPreferredTheme())
				}
			})

			showActiveTheme(getPreferredTheme())

			document.querySelectorAll('[data-bs-theme-value]')
				.forEach(toggle => {
					toggle.addEventListener('click', () => {
						const theme = toggle.getAttribute('data-bs-theme-value')
						localStorage.setItem('theme', theme)
						setTheme(theme)
						showActiveTheme(theme)
					})
				})

			}
		})
		
	</script>

		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">

		<!-- Google Font -->
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

		<!-- Plugins CSS -->
		<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
		<link rel="stylesheet" type="text/css" href="assets/vendor/apexcharts/css/apexcharts.css">
		<link rel="stylesheet" type="text/css" href="assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	</head>

	<body>
	    
	    <?php include 'common/navbar.php'; ?>
		<!-- Top bar END -->

		<!-- Page main content START -->
		<div class="page-content-wrapper border">

			<!-- Title -->
			<div class="row mb-3">
				<div class="col-12">
					<h1 class="h3 mb-0">Applications</h1>
				</div>
			</div>
			
			<?php
			$monthsales = (int)$applicationsRepo->aggregate("count","id","");
            $pending = (int)$applicationsRepo->aggregate("count","id","not `status` = 'approved'");
            $totalapplications = (int)$applicationsRepo->aggregate("count","id","");
			
			
			?>

			<div class="row g-4 mb-4">
				<!-- Earning item -->
				<div class="col-sm-6 col-lg-4">
					<div class="p-4 bg-primary bg-opacity-10 rounded-3">
						<h6>Applications this month</h6>
						<h2 class="mb-0 fs-1 text-primary"><?php echo $monthsales; ?></h2>
					</div>
				</div>

				<!-- Earning item -->
				<div class="col-sm-6 col-lg-4">
					<div class="p-4 bg-purple bg-opacity-10 rounded-3">
						<h6>To be paid
							<a tabindex="0" class="h6 mb-0" role="button" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="top" data-bs-content="After US royalty withholding tax" data-bs-original-title="" title="">
								<i class="bi bi-info-circle-fill small"></i>
							</a>
						</h6>
						<h2 class="mb-0 fs-1 text-purple"><?php echo $pending; ?></h2>
					</div>
				</div>

				<!-- Earning item -->
				<div class="col-sm-6 col-lg-4">
					<div class="p-4 bg-orange bg-opacity-10 rounded-3">
						<h6>Lifetime Applications</h6>
						<h2 class="mb-0 fs-1 text-orange"><?php echo $totalapplications; ?></h2>
					</div>
				</div>
			</div> <!-- Row END -->
			
			<!-- All review table START -->
			<div class="card bg-transparent border">

				<!-- Card header START -->
				<div class="card-header bg-light border-bottom">
					<h5 class="mb-0">Applications History</h5>
				</div>
				<!-- Card header END -->

				<!-- Card body START -->
				<div class="card-body pb-0">
					<!-- Table START -->
					<div class="table-responsive border-0">
					    
					    <!-- Card body START -->
					<div class="card-body">
						<form>
						<!-- Search and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-4">
							<!-- Content -->
							<div class="col-md-6">
								
									<input class="form-control pe-5 bg-transparent" type="search" name="search" placeholder="Search By Student Or College" aria-label="Search"  value="<?php
                            if(isset($_REQUEST['search'])){echo $_REQUEST['search']; }?>">
							</div>

							<!-- Select option -->
							<div class="col-md-6">
								<!-- Short by filter -->
								
									<select class="form-select js-choice" aria-label=".form-select-sm" name="student" selected="<?php
                            if(isset($_REQUEST['student'])){echo $_REQUEST['student']; }?>">
                                    <option value=""> Select Student</option>
									<?php
										$students = $usersRepo->fetchby("`counsler` ='$email'");
										foreach($students as $student){
											$studentEmail = $student['email'];
											$studentName = $student['name'];
                                    ?>
                                    <option value="<?php echo $studentEmail ?>"> <?php echo "$studentName"; ?> </option>
									<?php } ?>
									</select>
							</div>

							<div class="col-md-6">
								<!-- Short by filter -->
								
									<select class="form-select js-choice" aria-label=".form-select-sm" name="college">
                                    <option value=""> Select College</option>
									<?php
										$colleges = $collegesRepo->fetchBy("");
										foreach($colleges as $college){
											$collegeId = $college['id'];
											$collegeName = $college['name'];
                                    ?>
                                    <option value="<?php echo $collegeId ?>"> <?php echo "$collegeName"; ?> </option>
									<?php } ?>
									</select>
							</div>
							<div class="col-md-6">
							<button class="col-md-12 btn btn-purple" type="submit">search</button>
							</div>

						</div>
						</form>
						
						<!-- Search and select END -->
					    
					    
						<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
							<!-- Table head -->
							<thead>
								<tr>
									<th scope="col" class="border-0 rounded-start">Application ID</th>
									<th scope="col" class="border-0">College</th>
									<th scope="col" class="border-0">Student</th>
									<th scope="col" class="border-0">Counsler</th>
									
									<th scope="col" class="border-0">Date</th>
									<!--<th scope="col" class="border-0">application Method</th>-->
									<th scope="col" class="border-0">Amount</th>
									<th scope="col" class="border-0">Status</th>
									<th scope="col" class="border-0 rounded-end">Action</th>
								</tr>
							</thead>

							<!-- Table body START -->
							<tbody>
							    
							    <?php

                                if(isset($_REQUEST['search']) && $_REQUEST['search']!=""){
											$search = $_REQUEST['search'];
											$applications = $applicationsRepo->fetchBy("`counsler` = '$email' AND (`email` LIKE '%$search%' or `college` LIKE '%$search%')");
								}
								else if(isset($_REQUEST['student']) && $_REQUEST['student']!=""){
									$student = $_REQUEST['student'];
									$applications = $applicationsRepo->fetchBy("`counsler` = '$email' AND `email` = '$student'");
									
								}
								else if(isset($_REQUEST['college']) && $_REQUEST['college']!=""){
									$college = $_REQUEST['college'];
									$applications = $applicationsRepo->fetchBy("`counsler` = '$email' AND `collegeId` = '$college'");
									
								}
								else{
									$applications = $applicationsRepo->fetchBy("`counsler` = '$email'");
								}
                                foreach($applications as $application){
                            	$collegeName = $application['college'];
                            	$applicationid = "#".$application['id'];
                             	
                               	$applicationdate = $application['date'];
                            	$applicationamount = $application['fees'];
                             	$applicationstatus = $application['status'];
                             	$student = $application['email'];
                             	$counsler = $application['counsler'];
                             	
                                ?>
							
								<!-- Table row -->
								<tr>
									<!-- Table data -->
									<td><?php echo $applicationid ?></td>
									
									<!-- Table data -->
									<td>
										<h6 class="table-responsive-title mb-0"><a href="#"><?php echo $collegeName ?></a></h6>
									</td>
									<!-- Table data -->
									<td>
										<h6 class="table-responsive-title mb-0"><a href="#"><?php echo $student ?></a></h6>
									</td>

									<!-- Table data -->
									<td>
										<h6 class="table-responsive-title mb-0"><a href="#"><?php echo $counsler ?></a></h6>
									</td>

									<!-- Table data -->
									<td><?php echo $applicationdate ?></td>

									<!-- Table data -->
									<!--<td>-->
									<!--	<img src="assets/images/client/mastercard.svg" class="h-50px" alt="">-->
									<!--</td>-->

									<!-- Table data -->
									<td>$<?php echo $applicationamount ?>
										<!-- Dropdown icon -->
										<a href="#" class="h6 mb-0" role="button" id="dropdownShare1" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="bi bi-info-circle-fill"></i>
										</a>
										<!-- Dropdown items -->
										<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare1">
											<li>
												<div class="d-flex justify-content-between">
													<span class="small">Commission</span>
													<span class="h6 mb-0 small">$86</span>
												</div>
												<hr class="my-1"> <!-- Divider -->
											</li>

											<li>
												<div class="d-flex justify-content-between">
													<span class="me-4 small">Us royalty withholding</span>
													<span class="text-danger small">-$0.00</span>
												</div>
												<hr class="my-1"> <!-- Divider -->
											</li>
											
											<li>
												<div class="d-flex justify-content-between">
													<span class="small">Earning</span>
													<span class="h6 mb-0 small">$86</span>
												</div>
											</li>
										</ul>
									</td>

									<!-- Table data -->
									<td>
										<div class="badge bg-success bg-opacity-10 text-success"><?php echo $applicationstatus ?></div>
									</td>

									<!-- Table data -->
									<td>
										<a href="#" class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Download" aria-label="Download">
											<i class="bi bi-download"></i>
										</a>
									</td>
								</tr>
								
								<?php } ?>

							</tbody>
							<!-- Table body END -->
						</table>
					</div>
					<!-- Table END -->
				</div>
				<!-- Card body END -->

				<!-- Card footer START -->
				<div class="card-footer bg-transparent">
					<!-- Pagination START -->
					<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
						<!-- Content -->
						<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
						<!-- Pagination -->
						<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
							<ul class="pagination pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
								<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
								<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
								<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
								<li class="page-item mb-0"><a class="page-link" href="#">3</a></li>
								<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
							</ul>
						</nav>
					</div>
					<!-- Pagination END -->
				</div>
				<!-- Card footer END -->
			</div>
			<!-- All review table END -->
		</div>
		<!-- Page main content END -->
	</div>
	<!-- Page content END -->

	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

	<!-- Bootstrap JS -->
	<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Vendors -->
	<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
	<script src="assets/vendor/apexcharts/js/apexcharts.min.js"></script>
	<script src="assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js"></script>

	<!-- Template Functions -->
	<script src="assets/js/functions.js"></script>

	</body>
	
<!-- Mirrored from eduport.webestica.com/admin-earning.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:09:08 GMT -->
</html>