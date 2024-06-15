<!DOCTYPE html>
<html lang="en">

<head>
	<title>Eduport - LMS, Education and Course Theme</title>

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
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/aos/aos.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
</head>

<body>

<!-- Header START -->
<?php include_once('common/header.php'); ?>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

			<!-- Left sidebar END -->
			<?php include_once('common/sidebar.php'); ?>
			<!-- Main content START -->
			<div class="col-xl-9">
				<!-- Student review START -->
				<div class="card border bg-transparent rounded-3">
					<!-- Header START -->
					<div class="card-header bg-transparent border-bottom">
						<div class="row justify-content-between align-middle">
							<!-- Title -->
							<div class="col-sm-6">
								<h3 class="card-header-title mb-2 mb-sm-0">Colleges</h3>
							</div>
							
							<!-- Short by filter -->
							<div class="col-sm-4">
								<form>
									<select class="form-select js-choice z-index-9 bg-white" aria-label=".form-select-sm">
										<option value="">Sort by</option>
										<option>★★★★★ (5/5)</option>
										<option>★★★★☆ (4/5)</option>
										<option>★★★☆☆ (3/5)</option>
										<option>★★☆☆☆ (2/5)</option>
										<option>★☆☆☆☆ (1/5)</option>
									</select>
								</form>
							</div>
						</div>
					</div>
					<!-- Header END -->

					<!-- Reviews START -->
					<div class="card-body mt-2 mt-sm-4">
					<?php

						$colleges = $collegesRepo->fetchBy();
						foreach($colleges as $college){
							$collegeName = $college['name'];
							$location = $college['location'];
							$description = $college['description'];

					?>

						<!-- Review item START -->
						<div class="d-sm-flex">
							<!-- Avatar image -->
							<img class="avatar avatar-lg rounded-circle float-start me-3" src="assets/images/avatar/01.jpg" alt="avatar">
							<div>
								<div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
									<!-- Title -->
									<div>
										<h5 class="m-0"><?php echo $collegeName ?></h5>
										<span class="me-3 small"><?php echo $location ?> </span>
									</div>
									<!-- Review star -->
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
									</ul>	
								</div>
								<!-- Content -->
								<h6><span class="text-body fw-light">Eligibility:</span> GRE AND IELTS</h6>
								<p><?php echo $description ?></p>
								<!-- Button -->
								<div class="text-end">
									<!-- <a href="#" class="btn btn-sm btn-primary-soft mb-1 mb-sm-0">Direct message</a>
									<a class="btn btn-sm btn-light mb-0" data-bs-toggle="collapse" href="#collapseComment" role="button" aria-expanded="false" aria-controls="collapseComment">
										Reply
									</a> -->
									<!-- collapse textarea -->
									<div class="collapse show" id="collapseComment">
									<form action="">
										<div class="d-flex mt-3">
											<textarea class="form-control mb-0" placeholder="Add a comment..." rows="2" spellcheck="false"></textarea>
											<button class="btn btn-sm btn-primary-soft ms-2 px-4 mb-0 flex-shrink-0"><i class="fas fa-paper-plane fs-5"></i><span class="mx-2">Apply</span></button>
										</div>
									</form>
									</div>
								</div>
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Review item END -->
						<?php } ?>
					</div>
					<!-- Reviews END -->

					<div class="card-footer border-top">
						<!-- Pagination START -->
						<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
							<!-- Content -->
							<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
							<!-- Pagination -->
							<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
								<ul class="pagination pagination-sm pagination-primary-soft my-0 py-0">
									<li class="page-item my-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item my-0"><a class="page-link" href="#">1</a></li>
									<li class="page-item my-0 active"><a class="page-link" href="#">2</a></li>
									<li class="page-item my-0"><a class="page-link" href="#">3</a></li>
									<li class="page-item my-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
								</ul>
							</nav>
						</div>
						<!-- Pagination END -->
					</div>
				</div>
				<!-- Student review END -->
			</div>
			<!-- Main content END -->
		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Inner part END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-dark p-3">
	<div class="container">
		<div class="row align-items-center">
			<!-- Widget -->
			<div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
				<!-- Logo START -->
				<a href="index-2.html"> <img class="h-20px" src="assets/images/logo-light.svg" alt="logo"> </a>
			</div>
			
			<!-- Widget -->
			<div class="col-md-4 mb-3 mb-md-0">
				<div class="text-center text-white text-primary-hover">
					Copyrights ©2024 Eduport. Build by <a href="https://www.webestica.com/" target="_blank" class="text-white">Webestica</a>.
				</div>
			</div>
			<!-- Widget -->
			<div class="col-md-4">
				<!-- Rating -->
				<ul class="list-inline mb-0 text-center text-md-end">
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-facebook"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-instagram"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-linkedin-in"></i></a></li>
					<li class="list-inline-item ms-2"><a href="#"><i class="text-white fab fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/choices/js/choices.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/instructor-review.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:08:02 GMT -->
</html>