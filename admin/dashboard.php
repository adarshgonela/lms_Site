<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:08:03 GMT -->
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
		<div class="row">
			<div class="col-12 mb-3">
				<h1 class="h3 mb-2 mb-sm-0">Dashboard</h1>
			</div>
		</div>

		<!-- Counter boxes START -->
		<div class="row g-4 mb-4">
		    <?php   
		    $totalpayments = (int)$applicationsRepo->aggregate("sum","fees","");
		    $totalapplications = (int)$applicationsRepo->aggregate("count","id","");
		    $totalStudents = (int)$usersRepo->aggregate("count","id","`role` like 'student'");
		    $totalCounslers = (int)$usersRepo->aggregate("count","id","`role` like 'counsler'");
		    ?>
			<!-- Counter item -->
			<a href="admin/applications.php" class="col-md-6 col-xxl-3">
				<div class="card card-body bg-warning bg-opacity-15 p-4 h-100">
					<div class="d-flex justify-content-between align-items-center">
						<!-- Digit -->
						<div>
							<h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo $totalapplications;?>" data-purecounter-delay="200">0</h2>
							<span class="mb-0 h6 fw-light">Total Applications</span>
						</div>
						<!-- Icon -->
						<div class="icon-lg rounded-circle bg-warning text-white mb-0"><i class="fas fa-tv fa-fw"></i></div>
					</div>
				</div>
			</a>

			<!-- Counter item -->
			<a href="admin/counslers.php" class="col-md-6 col-xxl-3">
				<div class="card card-body bg-purple bg-opacity-10 p-4 h-100">
					<div class="d-flex justify-content-between align-items-center">
						<!-- Digit -->
						<div>
							<h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo $totalCounslers; ?>"	data-purecounter-delay="200">0</h2>
							<span class="mb-0 h6 fw-light">Total Counslers</span>
						</div>
						<!-- Icon -->
						<div class="icon-lg rounded-circle bg-purple text-white mb-0"><i class="fas fa-user-tie fa-fw"></i></div>
					</div>
				</div>
			</a>

			<!-- Counter item -->
			<a href="admin/students.php" class="col-md-6 col-xxl-3">
				<div class="card card-body bg-primary bg-opacity-10 p-4 h-100">
					<div class="d-flex justify-content-between align-items-center">
						<!-- Digit -->
						<div>
							<h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo $totalStudents; ?>"	data-purecounter-delay="200">0</h2>
							<span class="mb-0 h6 fw-light">Total Students</span>
						</div>
						<!-- Icon -->
						<div class="icon-lg rounded-circle bg-primary text-white mb-0"><i class="fas fa-user-graduate fa-fw"></i></div>
					</div>
				</div>
			</a>

			<!-- Counter item -->
			<a href="admin/earnings.php" class="col-md-6 col-xxl-3">
				<div class="card card-body bg-success bg-opacity-10 p-4 h-100">
					<div class="d-flex justify-content-between align-items-center">
						<!-- Digit -->
						<div>
							<div class="d-flex">
								<h2 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo $totalpayments; ?>"data-purecounter-delay="200">0</h2>
								<span class="mb-0 h2 ms-1"><?php echo $currency; ?></span>
							</div>
							<span class="mb-0 h6 fw-light">Payouts</span>
						</div>
						<!-- Icon -->
						<div class="icon-lg rounded-circle bg-success text-white mb-0"><i class="bi bi-stopwatch-fill fa-fw"></i></div>
					</div>
				</div>
			</a>
		</div>
		<!-- Counter boxes END -->

		<!-- Chart and Ticket START -->
		<div class="row g-4 mb-4">

			<!-- Chart START -->
			<div class="col-xxl-8">
				<div class="card shadow h-100">

					<!-- Card header -->
					<div class="card-header p-4 border-bottom">
						<h5 class="card-header-title">Earnings</h5>
					</div>

					<!-- Card body -->
					<div class="card-body">
						<!-- Apex chart -->
						<div id="ChartPayout"></div>
					</div>
				</div>
			</div>
			<!-- Chart END -->

		</div>
		<!-- Chart and Ticket END -->

		<!-- Top listed Cards START -->
		<div class="row g-4">

			<!-- Top instructors START -->
			<div class="col-lg-6 col-xxl-4">
				<div class="card shadow h-100">

					<!-- Card header -->
					<div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
						<h5 class="card-header-title">Top Instructors</h5>
						<a href="#" class="btn btn-link p-0 mb-0">View all</a>
					</div>

					<!-- Card body START -->
					<div class="card-body p-4">

						<!-- Instructor item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<!-- Avatar and info -->
							<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
								<!-- Avatar -->
								<div class="avatar avatar-md flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
									<h6 class="mb-1">Lori Stevens<i class="bi bi-patch-check-fill text-info small ms-1"></i></h6>
									<ul class="list-inline mb-0 small">
										<li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-1"></i>25 Courses</li>
										<li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
									</ul>
								</div>
							</div>
							<!-- Button -->
							<a href="#" class="btn btn-sm btn-light mb-0">View</a>
						</div>
						<!-- Instructor item END -->

						<hr><!-- Divider -->

						<!-- Instructor item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<!-- Avatar and info -->
							<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
								<!-- Avatar -->
								<div class="avatar avatar-md flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/03.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
									<h6 class="mb-1">Dennis Barrett</h6>
									<ul class="list-inline mb-0 small">
										<li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-1"></i>18 Courses</li>
										<li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
									</ul>
								</div>
							</div>
							<!-- Button -->
							<a href="#" class="btn btn-sm btn-light mb-0">View</a>
						</div>
						<!-- Instructor item END -->

						<hr><!-- Divider -->

						<!-- Instructor item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<!-- Avatar and info -->
							<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
								<!-- Avatar -->
								<div class="avatar avatar-md flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
									<h6 class="mb-1">Jacqueline Miller<i class="bi bi-patch-check-fill text-info small ms-1"></i></h6>
									<ul class="list-inline mb-0 small">
										<li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-1"></i>21 Courses</li>
										<li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-1"></i>4.8/5.0</li>
									</ul>
								</div>
							</div>
							<!-- Button -->
							<a href="#" class="btn btn-sm btn-light mb-0">View</a>
						</div>
						<!-- Instructor item END -->

						<hr><!-- Divider -->

						<!-- Instructor item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<!-- Avatar and info -->
							<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
								<!-- Avatar -->
								<div class="avatar avatar-md flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/04.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
									<h6 class="mb-1">Billy Vasquez</h6>
									<ul class="list-inline mb-0 small">
										<li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-1"></i>15 Courses</li>
										<li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
									</ul>
								</div>
							</div>
							<!-- Button -->
							<a href="#" class="btn btn-sm btn-light mb-0">View</a>
						</div>
						<!-- Instructor item END -->

						<hr><!-- Divider -->

						<!-- Instructor item START -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<!-- Avatar and info -->
							<div class="d-sm-flex align-items-center mb-1 mb-sm-0">
								<!-- Avatar -->
								<div class="avatar avatar-md flex-shrink-0">
									<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
								</div>
								<!-- Info -->
								<div class="ms-0 ms-sm-2 mt-2 mt-sm-0">
									<h6 class="mb-1">Amanda Reed<i class="bi bi-patch-check-fill text-info small ms-1"></i></h6>
									<ul class="list-inline mb-0 small">
										<li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i class="fas fa-book text-purple me-1"></i>29 Courses</li>
										<li class="list-inline-item fw-light me-2 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-1"></i>4.5/5.0</li>
									</ul>
								</div>
							</div>
							<!-- Button -->
							<a href="#" class="btn btn-sm btn-light mb-0">View</a>
						</div>
						<!-- Instructor item END -->
						
					</div>
					<!-- Card body END -->
				</div>
			</div>
			<!-- Top instructors END -->
			<!-- Traffic sources START -->
			<div class="col-lg-6 col-xxl-4">
				<div class="card shadow h-100">

					<!-- Card header -->
					<div class="card-header border-bottom d-flex justify-content-between align-items-center p-4">
						<h5 class="card-header-title">Traffic Sources</h5>
						<a href="#" class="btn btn-link p-0 mb-0">View all</a>
					</div>

					<!-- Card body START -->
					<div class="card-body p-4">
						<!-- Chart -->
						<div class="col-sm-6 mx-auto">
							<div id="ChartTrafficViews"></div>
						</div>

						<!-- Content -->
						<ul class="list-group list-group-borderless mt-3">
							<li class="list-group-item"><i class="text-primary fas fa-circle me-2"></i>Create a Design System in Figma</li>
							<li class="list-group-item"><i class="text-success fas fa-circle me-2"></i>The Complete Digital Marketing Course - 12 Courses in 1</li>
							<li class="list-group-item"><i class="text-warning fas fa-circle me-2"></i>Google Ads Training: Become a PPC Expert</li>
							<li class="list-group-item"><i class="text-danger fas fa-circle me-2"></i>Microsoft Excel - Excel from Beginner to Advanced</li>
						</ul>
					</div>
				</div>
				<!-- Card body END -->
			</div>
			<!-- Traffic sources END -->

		</div>
		<!-- Top listed Cards END -->

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

<!-- Mirrored from eduport.webestica.com/admin-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:08:08 GMT -->
</html>