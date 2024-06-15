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

				<!-- Counter boxes START -->
				<div class="row mb-4">
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
						<div class="d-flex justify-content-center align-items-center p-4 bg-orange bg-opacity-15 rounded-3">
							<span class="display-6 lh-1 text-orange mb-0"><i class="fas fa-tv fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
									
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo $totalAppications; ?>"	data-purecounter-delay="100">0</h5>
								</div>
								<p class="mb-0 h6 fw-light">Applications</p>
							</div>
						</div>
					</div>
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
						<div class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-15 rounded-3">
							<span class="display-6 lh-1 text-purple mb-0"><i class="fas fa-clipboard-check fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo $approvedApplications; ?>"	data-purecounter-delay="200">0</h5>
								</div>
								<p class="mb-0 h6 fw-light">Approved</p>
							</div>
						</div>

					</div>
					<!-- Counter item -->
					<div class="col-sm-6 col-lg-4 mb-3 mb-lg-0">
						<div class="d-flex justify-content-center align-items-center p-4 bg-success bg-opacity-10 rounded-3">
							<span class="display-6 lh-1 text-success mb-0"><i class="fas fa-medal fa-fw"></i></span>
							<div class="ms-4">
								<div class="d-flex">
									<h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="<?php echo $totalColleges; ?>" data-purecounter-delay="300">0</h5>
								</div>
								<p class="mb-0 h6 fw-light">Total Colleges</p>
							</div>
						</div>
					</div>
				</div>
				<!-- Counter boxes END -->

				<!-- Card START -->
				<?php include('common/students.php'); ?>
				<!-- Card END -->
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
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/instructor-studentlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:08:02 GMT -->
</html>