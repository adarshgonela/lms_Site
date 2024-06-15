<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/admin-instructor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:09:08 GMT -->
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
		<div class="row">
			<div class="col-12">
				<h1 class="h3 mb-2 mb-sm-0">Counslers</h1>
			</div>
		</div>

		<!-- Card START -->
		<div class="card bg-transparent">

			<!-- Card header START -->
			<div class="card-header bg-transparent border-bottom px-0">
				<!-- Search and select START -->
				<div class="row g-3 align-items-center justify-content-between">

					<!-- Search bar -->
					<div class="col-md-8">
						<form class="rounded position-relative">
							<input class="form-control bg-transparent" type="search" name="search" placeholder="Search" aria-label="Search">
							<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
						</form>
					</div>

					<!-- Tab buttons -->
					<div class="col-md-3">
						<!-- Tabs START -->
						<ul class="list-inline mb-0 nav nav-pills nav-pill-dark-soft border-0 justify-content-end" id="pills-tab" role="tablist">
							<!-- Grid tab -->
							<li class="nav-item">
								<a href="#nav-preview-tab-1" class="nav-link mb-0 me-2 active" data-bs-toggle="tab">
									<i class="fas fa-fw fa-th-large"></i>
								</a>
							</li>
							<!-- List tab -->
							<li class="nav-item">
								<a href="#nav-html-tab-1" class="nav-link mb-0" data-bs-toggle="tab">
									<i class="fas fa-fw fa-list-ul"></i>
								</a>
							</li>
						</ul>
						<!-- Tabs end -->
					</div>
				</div>
				<!-- Search and select END -->
			</div>
			<!-- Card header END -->

			<!-- Card body START -->
			<div class="card-body px-0">
				<!-- Tabs content START -->
				<div class="tab-content">

					<!-- Tabs content item START -->
					<div class="tab-pane fade show active" id="nav-preview-tab-1">
						<div class="row g-4">
						    
						   <?php
						   if(isset($_REQUEST['search'])){
                                $search = $_REQUEST['search'];
                                $counslers = $usersRepo->fetchby("`role` Like 'Counsler' AND (name LIKE '%$search%')");
                            }
                            else{
                                $counslers = $usersRepo->fetchby("`role` Like 'Counsler'");
                            }

                            // $counslers = $usersRepo->fetchby("`role` Like 'Counsler'");
                            foreach($counslers as $counsler){
                            	$counslerEmail = $counsler['email'];
                            	$counslerName = $counsler['name'];
                            	$mobile = $counsler['mobile'];
                        		$totalStudents = (int)$usersRepo->aggregate("count","counsler","`counsler`='$counslerEmail'");
                        		$totalApps = (int)$applicationsRepo->aggregate("count","counsler","`counsler`='$counslerEmail'");
                        		$totalpayments = (int)$applicationsRepo->aggregate("sum","fees","`counsler`='$counslerEmail'");


                            // 	$EnrolledDate = $counsler['date'];
                            	
                            ?>

							<!-- Card item START -->
							<div class="col-md-6 col-xxl-4">
								<div class="card bg-transparent border h-100"> 
									<!-- Card header -->
									<div class="card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between">
										<div class="d-sm-flex align-items-center">
											<!-- Avatar -->
											<div class="avatar avatar-md flex-shrink-0">
												<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
											</div>
											<!-- Info -->
											<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
												<h5 class="mb-0"><a href="#"><?php echo $counslerName ?></a></h5>
												<p class="mb-0 small"><?php echo $mobile ?></p>
											</div>
										</div>

										<!-- Edit dropdown -->
										<div class="dropdown">
											<a href="admin/counsler.php?counsler=<?php echo $counslerEmail ?>" target="_blank" class="btn btn-sm btn-light btn-round small mb-0" role="button" id="dropdownShare1">
												<i class="bi bi-eye-fill fw-bold"></i>
											</a>
											<!-- dropdown button -->
										
										</div>
									</div>

									<div class="card-body">
										<!-- Total students -->
										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0"><i class="fas fa-user-graduate fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Students</h6>
											</div>
											<span class="mb-0 fw-bold"><?php echo $totalStudents; ?></span>
										</div>

										<!-- Total courses -->
										<div class="d-flex justify-content-between align-items-center mb-3">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0"><i class="fas fa-book fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Total Applications</h6>
											</div>
											<span class="mb-0 fw-bold"><?php echo $totalApps; ?></span>
										</div>
									
									
									    <div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<div class="icon-md bg-success bg-opacity-10 text-success rounded-circle flex-shrink-0"><i class="bi bi-currency-dollar fa-fw"></i></div>
												<h6 class="mb-0 ms-2 fw-light">Payments</h6>
											</div>
											<span class="mb-0 fw-bold"><?php echo $currency.$totalpayments ?></span>
										</div>
									</div>

									<!-- Card footer -->
									<div class="card-footer bg-transparent border-top">
										<div class="d-flex justify-content-between align-items-center">
											<!-- Rating star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
											</ul>
											<!-- Message button -->
											<a href="admin/counsler.php" class="btn btn-link text-body p-0 mb-0">
												<i class="bi bi-envelope-fill"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Card item END -->
							
							<?php
							}
							    if(count($counslers)==0){
								    echo "<tr><td colspan='5' class='text-center'>No data found</td></tr>";
							    }
							?>

						
						</div> <!-- Row END -->
					</div>
					<!-- Tabs content item END -->

					<!-- Tabs content item START -->
					<div class="tab-pane fade" id="nav-html-tab-1">
						<!-- Table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">Counsler name</th>
										<th scope="col" class="border-0">Payments</th>
										<th scope="col" class="border-0">Total Applications</th>
										<th scope="col" class="border-0">Total Students</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody>
									<!-- Table row -->
									<?php
						   if(isset($_REQUEST['search'])){
                                $search = $_REQUEST['search'];
                                $counslers = $usersRepo->fetchby("`role` Like 'Counsler' AND (name LIKE '%$search%')");
                            }
                            else{
                                $counslers = $usersRepo->fetchby("`role` Like 'Counsler'");
                            }

                            // $counslers = $usersRepo->fetchby("`role` Like 'Counsler'");
                            foreach($counslers as $counsler){
                            	$counslerEmail = $counsler['email'];
                            	$counslerName = $counsler['name'];
                            	$mobile = $counsler['mobile'];
                        		$totalStudents = (int)$usersRepo->aggregate("count","counsler","`counsler`='$counslerEmail'");
                        		$totalApps = (int)$applicationsRepo->aggregate("count","counsler","`counsler`='$counslerEmail'");
                        		$totalpayments = (int)$applicationsRepo->aggregate("sum","fees","`counsler`='$counslerEmail'");


                            // 	$EnrolledDate = $counsler['date'];
                            	
                            ?>
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md">
													<img src="assets/images/avatar/09.jpg" class="rounded-circle" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="#" class="stretched-link"><?php echo $counslerName ?></a></h6>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<h6 class="mb-0"><?php echo $currency.$totalpayments ?></h6>
										</td>

										<!-- Table data -->
										<td><?php echo $totalApps; ?></td>

										<!-- Table data -->
										<td><?php echo $totalStudents; ?></td>

										<!-- Table data -->
										<td>
											<a href="admin/counsler.php?counsler=<?php echo $counslerEmail ?>" target="_blank"  class="btn btn-info-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
												<i class="bi bi-eye-fill"></i>
											</a>
											<a href="#" class="btn btn-success-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
												<i class="bi bi-pencil-square"></i>
											</a>
											<!--<button class="btn btn-danger-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">-->
											<!--	<i class="bi bi-trash"></i>-->
											<!--</button>-->
										</td>
									</tr>
									
									<?php } 
									    if(count($counslers)==0){
									       echo "<tr><td colspan='5' class='text-center'>No data found</td></tr>";
									    }
									
									?>

								
								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Table END -->
					</div>
					<!-- Tabs content item END -->

				</div>
				<!-- Tabs content END -->
			</div>
			<!-- Card body END -->

			<!-- Card footer START -->
			<div class="card-footer bg-transparent p-0">
				<!-- Pagination START -->
				<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
					<!-- Content -->
					<!--p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
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
		<!-- Card END -->
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
<script src="assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/admin-instructor-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:09:08 GMT -->
</html>