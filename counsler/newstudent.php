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

<!-- =======================
Main part START -->
<section>
	<div class="container">
		<div class="row g-5 justify-content-between">
			<!-- Admission form START -->
			<div class="col-md-8 mx-auto">
				<!-- Title -->
				<h2 class="mb-3">Apply for Admission</h2>
				<p>You can apply online by filling up below form or <a href="#">Download a pdf</a> and submit. Any question related admission process, please contact our admission office at <a href="#">+123 456 789</a> or <a href="#">example@email.com</a>.</p>
				<p class="mb-1">Before you proceed with the form please read below topics:</p>
				<ul class="ps-3">
					<li>Application fee is $49</li>
					<li>Fees are non-refundable</li>
					<li>Field required with <span class="text-danger">*</span> are required to complete the admission form</li>
				</ul>
				<!-- Form START -->
				<form class="row g-3" action="counsler/redirect/users/add.php">
					<h5 class="mb-0">Personal information</h5>

					<!-- First name -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Student first name <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="firstName" name="fname">
							</div>
						</div>
					</div>

					<!-- Middle name
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Student middle name <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="middleName">
							</div>
						</div>
					</div> -->

					<!-- Last name -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Student last name <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="lastName"  name="lname">
							</div>
						</div>
					</div>

					<!-- Gender -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Gender <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<div class="d-flex">
									<div class="form-check radio-bg-light me-4">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
										<label class="form-check-label" for="flexRadioDefault1">
											Male
										</label>
									</div>
									<div class="form-check radio-bg-light">
										<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
										<label class="form-check-label" for="flexRadioDefault2">
											Female
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Date of birth -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Date of birth</h6>
							</div>
							<div class="col-lg-8">
								<input type="date" class="form-control" id="email" name="dob">
							</div>
							
						</div>
					</div>

					<!-- Email -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Email <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="email" class="form-control" id="email" name="email">
							</div>
						</div>
					</div>
					<!-- password -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Password <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="password" class="form-control" id="password" name="password">
							</div>
						</div>
					</div>


					<!-- Phone number -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Phone number <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="phoneNumber" name="mobile">
							</div>
						</div>
					</div>

					<!-- Home address -->
					<div class="col-12">
						<div class="row g-xl-0">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Your address <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<textarea class="form-control" rows="3" placeholder="" name="address"></textarea>
							</div>
						</div>
					</div>
        <hr>
					
					<!-- Education -->
					<h5 class="mt-0">Education</h5>

					<!-- School or college name -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">School or college name <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="collegeName" name="college">
							</div>
						</div>
					</div>

					<!-- Year of passing -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Year of passing <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="number" class="form-control" id="passingYear" name="passingYear">
							</div>
						</div>
					</div>

					<!-- Board of university -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Board of university <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="board">
							</div>
						</div>
					</div>

					<!-- Class grad -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Cgpa <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
							<input type="number" class="form-control" id="cgpa" name="cgpa">
							</div>
						</div>
					</div>

					<!-- School or college address
					<div class="col-12">
						<div class="row g-xl-0">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">School or college address <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<textarea class="form-control" rows="3" placeholder=""></textarea>
							</div>
						</div>
					</div> -->

					<!-- Button -->
					<div class="col-12 text-sm-end">
						<button type="submit" class="btn btn-primary mb-0">Submit</button>
					</div>
				</form>
				<!-- Form END -->
			</div>
			<!-- Admission form END -->	
		</div>
	</div>
</section>
<!-- =======================
Main part END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="bg-light pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4 justify-content-between">

			<!-- Widget 1 START -->
			<div class="col-md-5 col-lg-4">
				<!-- logo -->
				<a class="me-0" href="index-2.html">
					<img class="light-mode-item h-40px" src="assets/images/logo.svg" alt="logo">
					<img class="dark-mode-item h-40px" src="assets/images/logo-light.svg" alt="logo">
        </a>

				<p class="my-3">Eduport education theme, built specifically for the education centers which is dedicated to teaching and involve learners.</p>
				<!-- Newsletter -->
				<form class="row row-cols-lg-auto g-2">
					<div class="col-12">
						<input type="email" class="form-control" placeholder="Enter your email address">
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-dark m-0">Subscribe</button>
					</div>
				</form>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-md-7 col-lg-6">
				<div class="row g-4 g-lg-5">
					<!-- Link block -->
					<div class="col-6 col-sm-4">
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link pt-0" href="#">Blog</a></li>
							<li class="nav-item"><a class="nav-link" href="#">About</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Documentation</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Sitemap</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-sm-4">
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link pt-0" href="#">Become instructor</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Download</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Services</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6 col-sm-4">
						<ul class="nav flex-column">
							<li class="nav-item"><a class="nav-link pt-0" href="#"><i class="fab fa-facebook-square text-facebook me-2"></i>Facebook</a></li>
							<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram-square text-instagram-gradient me-2"></i>Instagram</a></li>
							<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter-square text-twitter me-2"></i>Twitter</a></li>
							<li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-linkedin text-linkedin me-2"></i>Linkedin</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Widget 2 END -->

		</div><!-- Row END -->

		<hr> <!-- Divider -->

		<!-- Bottom footer -->
		<div class="row">
			<div class="col-12">
				<div class="d-md-flex justify-content-between align-items-center pt-2 pb-4 text-center">
					<!-- copyright text -->
					<div class="text-primary-hover"> Copyrights ©2024 Eduport. Build by <a href="https://www.webestica.com/" target="_blank" class="text-reset">Webestica</a>.</div>
					<!-- copyright links-->
					<div class="nav justify-content-center mt-3 mt-md-0">
						<ul class="list-inline mb-0">
							<li class="list-inline-item"><a class="nav-link" href="#">Terms of use</a></li>
							<li class="list-inline-item"><a class="nav-link" href="#">Privacy policy</a></li>
							<li class="list-inline-item pe-0"><a class="nav-link" href="#">Cookies</a></li>
						</ul>
					</div>
				</div>
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

<!-- Mirrored from eduport.webestica.com/university-admission-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:07:59 GMT -->
</html>