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
	<link rel="stylesheet" type="text/css" href="assets/vendor/aos/aos.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
</head>

<body>
<!-- Header START -->
<header class="navbar-light navbar-sticky">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index-2.html">
				<img class="light-mode-item navbar-brand-item" src="assets/images/logo.svg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/logo-light.svg" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->
			<div class="navbar-collapse w-100 collapse" id="navbarCollapse">

				<!-- Nav Main menu START -->
				<ul class="navbar-nav navbar-nav-scroll mx-auto">
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="demoMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Demos</a>
						<ul class="dropdown-menu" aria-labelledby="demoMenu">
							<li> <a class="dropdown-item" href="index-2.html">Home Default</a></li>
							<li> <a class="dropdown-item" href="index-3.html">Home Education</a></li>
							<li> <a class="dropdown-item" href="index-4.html">Home Academy</a></li>
							<li> <a class="dropdown-item" href="index-5.html">Home Course</a></li>
							<li> <a class="dropdown-item" href="index-6.html">Home University</a></li>
							<li> <a class="dropdown-item" href="index-7.html">Home Kindergarten</a></li>
							<li> <a class="dropdown-item" href="index-8.html">Home Landing</a></li>
							<li> <a class="dropdown-item" href="index-9.html">Home Tutor</a></li>
							<li> <a class="dropdown-item" href="index-10.html">Home School</a></li>
							<li> <a class="dropdown-item" href="index-11.html">Home Abroad</a></li>
							<li> <a class="dropdown-item" href="index-12.html">Home Workshop</a></li>
						</ul>
					</li>

					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Course</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="course-categories.html">Course Categories</a></li>
									<li> <hr class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="course-grid.html">Course Grid Classic</a></li>
									<li> <a class="dropdown-item" href="course-grid-2.html">Course Grid Minimal</a></li>
									<li> <hr class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="course-list.html">Course List Classic</a></li>
									<li> <a class="dropdown-item" href="course-list-2.html">Course List Minimal</a></li>
									<li> <hr class="dropdown-divider"></li>
									<li> <a class="dropdown-item" href="course-detail.html">Course Detail Classic</a></li>
									<li> <a class="dropdown-item" href="course-detail-min.html">Course Detail Minimal</a></li>
									<li> <a class="dropdown-item" href="course-detail-adv.html">Course Detail Advance</a></li>
									<li> <a class="dropdown-item" href="course-detail-module.html">Course Detail Module</a></li>
									<li> <a class="dropdown-item" href="course-video-player.html">Course Full Screen Video</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">About</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="about.html">About Us</a></li>
									<li> <a class="dropdown-item" href="contact-us.html">Contact Us</a></li>
									<li> <a class="dropdown-item" href="blog-grid.html">Blog Grid</a></li>
									<li> <a class="dropdown-item" href="blog-masonry.html">Blog Masonry</a></li>
									<li> <a class="dropdown-item" href="blog-detail.html">Blog Detail</a></li>
									<li> <a class="dropdown-item" href="pricing.html">Pricing</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Hero Banner</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="docs/snippet-hero-12.html">Hero Form</a></li>
									<li> <a class="dropdown-item" href="docs/snippet-hero-13.html">Hero Vector</a></li>
									<li> <p class="dropdown-item mb-0">Coming soon....</p></li>
								</ul>
							</li>

							<li> <a class="dropdown-item" href="instructor-list.html">Instructor List</a></li>
							<li> <a class="dropdown-item" href="instructor-single.html">Instructor Single</a></li>
							<li> <a class="dropdown-item" href="become-instructor.html">Become an Instructor</a></li>
							<li> <a class="dropdown-item" href="abroad-single.html">Abroad Single</a></li>
							<li> <a class="dropdown-item" href="workshop-detail.html">Workshop Detail</a></li>
							<li> <a class="dropdown-item" href="event-detail.html">Event Detail</a></li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Shop</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="shop.html">Shop grid</a></li>
									<li> <a class="dropdown-item" href="shop-product-detail.html">Product detail</a></li>
									<li> <a class="dropdown-item" href="cart.html">Cart</a></li>
									<li> <a class="dropdown-item" href="checkout.html">Checkout</a></li>
									<li> <a class="dropdown-item" href="empty-cart.html">Empty Cart</a></li>
									<li> <a class="dropdown-item" href="wishlist.html">Wishlist</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Help</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="help-center.html">Help Center</a></li>
									<li> <a class="dropdown-item" href="help-center-detail.html">Help Center Single</a></li>
									<li> <a class="dropdown-item" href="faq.html">FAQs</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Authentication</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="sign-in.html">Sign In</a></li>
									<li> <a class="dropdown-item" href="sign-up.html">Sign Up</a></li>
									<li> <a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Form</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="request-demo.html">Request a demo</a></li>
									<li> <a class="dropdown-item" href="book-class.html">Book a Class</a></li>
									<li> <a class="dropdown-item" href="request-access.html">Free Access</a></li>
									<li> <a class="dropdown-item" href="university-admission-form.html">Admission Form</a></li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Specialty</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="error-404.html">Error 404</a></li>
									<li> <a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<!-- Nav item 3 Account -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="accounntMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accounts</a>
						<ul class="dropdown-menu" aria-labelledby="accounntMenu">
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-user-tie fa-fw me-1"></i>Instructor</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="instructor-dashboard.html"><i class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
									<li> <a class="dropdown-item" href="instructor-manage-course.html"><i class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
									<li> <a class="dropdown-item" href="instructor-create-course.html"><i class="bi bi-file-earmark-plus-fill fa-fw me-1"></i>Create Course</a> </li>
									<li> <a class="dropdown-item" href="course-added.html"><i class="bi bi-file-check-fill fa-fw me-1"></i>Course Added</a> </li>
									<li> <a class="dropdown-item" href="instructor-quiz.html"><i class="bi bi-question-diamond fa-fw me-1"></i>Quiz</a> </li>
									<li> <a class="dropdown-item" href="instructor-earning.html"><i class="fas fa-chart-line fa-fw me-1"></i>Earnings</a> </li>
									<li> <a class="dropdown-item" href="instructor-studentlist.html"><i class="fas fa-user-graduate fa-fw me-1"></i>Students</a> </li>
									<li> <a class="dropdown-item" href="instructor-order.html"><i class="bi bi-cart-check-fill fa-fw me-1"></i>Orders</a> </li>
									<li> <a class="dropdown-item" href="instructor-review.html"><i class="bi bi-star-fill fa-fw me-1"></i>Reviews</a> </li>
									<li> <a class="dropdown-item" href="instructor-payout.html"><i class="fas fa-wallet fa-fw me-1"></i>Payout</a> </li>
								</ul>
							</li>

							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-user-graduate fa-fw me-1"></i>Student</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="student-dashboard.html"><i class="bi bi-grid-fill fa-fw me-1"></i>Dashboard</a> </li>
									<li> <a class="dropdown-item" href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-1"></i>My Subscriptions</a> </li>
									<li> <a class="dropdown-item" href="student-course-list.html"><i class="bi bi-basket-fill fa-fw me-1"></i>Courses</a> </li>
									<li> <a class="dropdown-item" href="student-course-resume.html"><i class="far fa-fw fa-file-alt me-1"></i>Course Resume</a> </li>
									<li> <a class="dropdown-item" href="student-quiz.html"><i class="bi bi-question-diamond fa-fw me-1"></i>Quiz </a> </li>	
									<li> <a class="dropdown-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front-fill fa-fw me-1"></i>Payment Info</a> </li>
									<li> <a class="dropdown-item" href="student-bookmark.html"><i class="fas bi-cart-check-fill fa-fw me-1"></i>Wishlist</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="admin-dashboard.html"><i class="fas fa-user-cog fa-fw me-1"></i>Admin</a> </li>
							<li> <hr class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="instructor-edit-profile.html"><i class="fas fa-fw fa-edit me-1"></i>Edit Profile</a> </li>
							<li> <a class="dropdown-item" href="instructor-setting.html"><i class="fas fa-fw fa-cog me-1"></i>Settings</a> </li>
							<li> <a class="dropdown-item" href="instructor-delete-account.html"><i class="fas fa-fw fa-trash-alt me-1"></i>Delete Profile</a> </li>
							
							<li> <hr class="dropdown-divider"></li>
							<!-- Dropdown Level -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">

									<!-- dropdown submenu open right -->
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
										<ul class="dropdown-menu" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>

									<!-- dropdown submenu open left -->
									<li class="dropdown-submenu dropstart">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
										<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
								</ul>
							</li>
						</ul>
					</li>

					<!-- Nav item 4 Component-->
					<li class="nav-item"><a class="nav-link" href="docs/alerts.html">Components</a></li>

					<!-- Nav item 5 link-->
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="advanceMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fas fa-ellipsis-h"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-end min-w-auto" data-bs-popper="none">
							<li> 
								<a class="dropdown-item" href="https://support.webestica.com/" target="_blank">
									<i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="docs/index.html" target="_blank">
									<i class="text-danger fa-fw bi bi-card-text me-2"></i>Documentation
								</a> 
							</li>
							<li> <hr class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="rtl/index.html" target="_blank">
									<i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
								</a> 
							</li>
							<li> 
								<a class="dropdown-item" href="https://themes.getbootstrap.com/store/webestica/" target="_blank">
									<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy Eduport!
								</a> 
							</li>
							<li> <hr class="dropdown-divider"></li>
							<li> 
								<a class="dropdown-item" href="docs/alerts.html" target="_blank">
									<i class="text-orange fa-fw bi bi-puzzle-fill me-2"></i>Components
								</a> 
							</li>
							<li> 
                <a class="dropdown-item" href="docs/snippets.html">
                  <i class="text-purple fa-fw bi bi-stickies-fill me-2"></i>Snippets
                </a>
              </li>
						</ul>
					</li>
				</ul>
				<!-- Nav Main menu END -->

				<!-- Nav Search START -->
				<div class="nav my-3 my-xl-0 px-4 flex-nowrap align-items-center">
					<div class="nav-item w-100">
						<form class="position-relative">
							<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
							<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
						</form>
					</div>
				</div>
				<!-- Nav Search END -->
			</div>
			<!-- Main navbar END -->

			<!-- Profile START -->
			<div class="dropdown ms-1 ms-lg-0">
				<a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
					<img class="avatar-img rounded-circle" src="assets/images/avatar/01.jpg" alt="avatar">
				</a>
				<ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
					<!-- Profile info -->
					<li class="px-3 mb-3">
						<div class="d-flex align-items-center">
							<!-- Avatar -->
							<div class="avatar me-3">
								<img class="avatar-img rounded-circle shadow" src="assets/images/avatar/01.jpg" alt="avatar">
							</div>
							<div>
								<a class="h6" href="#">Lori Ferguson</a>
								<p class="small m-0">example@gmail.com</p>
							</div>
						</div>
					</li>
          <li> <hr class="dropdown-divider"></li>
					<!-- Links -->
					<li><a class="dropdown-item" href="#"><i class="bi bi-person fa-fw me-2"></i>Edit Profile</a></li>
					<li><a class="dropdown-item" href="#"><i class="bi bi-gear fa-fw me-2"></i>Account Settings</a></li>
					<li><a class="dropdown-item" href="#"><i class="bi bi-info-circle fa-fw me-2"></i>Help</a></li>
					<li><a class="dropdown-item bg-danger-soft-hover" href="#"><i class="bi bi-power fa-fw me-2"></i>Sign Out</a></li>
					<li> <hr class="dropdown-divider"></li>
					<!-- Dark mode options START -->
					<li>
						<div class="bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2">
							<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="light">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sun fa-fw mode-switch" viewBox="0 0 16 16">
									<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
									<use href="#"></use>
								</svg> Light
							</button>
							<button type="button" class="btn btn-sm mb-0" data-bs-theme-value="dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars fa-fw mode-switch" viewBox="0 0 16 16">
									<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
									<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
									<use href="#"></use>
								</svg> Dark
							</button>
							<button type="button" class="btn btn-sm mb-0 active" data-bs-theme-value="auto">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
									<use href="#"></use>
								</svg> Auto
							</button>
						</div>
					</li> 
					<!-- Dark mode options END-->
				</ul>
			</div>
			<!-- Profile START -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>
	
<!-- =======================
Page Banner START -->
<section class="pt-0">
	<div class="container-fluid px-0">
		<div class="card bg-blue h-100px h-md-200px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
		</div>
	</div>
	<div class="container mt-n4">
		<div class="row">
			<div class="col-12">
				<div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
					<div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
						<!-- Avatar -->
						<div class="col-auto">
							<div class="avatar avatar-xxl position-relative mt-n3">
								<img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/09.jpg" alt="">
								<span class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3">Pro</span>
							</div>
						</div>
						<!-- Profile info -->
						<div class="col d-sm-flex justify-content-between align-items-center">
							<div>
								<h1 class="my-1 fs-4">Lori Stevens</h1>
								<ul class="list-inline mb-0">
									<li class="list-inline-item me-3 mb-1 mb-sm-0">
										<span class="h6">255</span>
										<span class="text-body fw-light">points</span>
									</li>
									<li class="list-inline-item me-3 mb-1 mb-sm-0">
										<span class="h6">7</span>
										<span class="text-body fw-light">Completed courses</span>
									</li>
									<li class="list-inline-item me-3 mb-1 mb-sm-0">
										<span class="h6">52</span>
										<span class="text-body fw-light">Completed lessons</span>
									</li>
								</ul>
							</div>
							<!-- Button -->
							<div class="mt-2 mt-sm-0">
								<a href="student-course-list.html" class="btn btn-outline-primary mb-0">View my courses</a>
							</div>
						</div>
					</div>
				</div>

				<!-- Advanced filter responsive toggler START -->
				<!-- Divider -->
				<hr class="d-xl-none">
				<div class="col-12 col-xl-3 d-flex justify-content-between align-items-center">
					<a class="h6 mb-0 fw-bold d-xl-none" href="#">Menu</a>
					<button class="btn btn-primary d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar">
						<i class="fas fa-sliders-h"></i>
					</button>
				</div>
				<!-- Advanced filter responsive toggler END -->
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">
		<div class="row">

			<!-- Left sidebar START -->
			<div class="col-xl-3">
				<!-- Responsive offcanvas body START -->
				<div class="offcanvas-xl offcanvas-end" tabindex="-1" id="offcanvasSidebar">
					<!-- Offcanvas header -->
					<div class="offcanvas-header bg-light">
						<h5 class="offcanvas-title" id="offcanvasNavbarLabel">My profile</h5>
						<button  type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasSidebar" aria-label="Close"></button>
					</div>
					<!-- Offcanvas body -->
					<div class="offcanvas-body p-3 p-xl-0">
						<div class="bg-dark border rounded-3 p-3 w-100">
							<!-- Dashboard menu -->
							<div class="list-group list-group-dark list-group-borderless collapse-list">
								<a class="list-group-item" href="student-dashboard.html"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
								<a class="list-group-item" href="student-subscription.html"><i class="bi bi-card-checklist fa-fw me-2"></i>My Subscriptions</a>
								<a class="list-group-item" href="student-course-list.html"><i class="bi bi-basket fa-fw me-2"></i>My Courses</a>
								<a class="list-group-item active" href="student-course-resume.html"><i class="far fa-fw fa-file-alt me-2"></i>Course Resume</a>
								<a class="list-group-item" href="student-quiz.html"><i class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a>
								<a class="list-group-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment Info</a>
								<a class="list-group-item" href="student-bookmark.html"><i class="bi bi-cart-check fa-fw me-2"></i>Wishlist</a>
								<a class="list-group-item" href="instructor-edit-profile.html"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a>
								<a class="list-group-item" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>Settings</a>
								<a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a>
								<a class="list-group-item text-danger bg-danger-soft-hover" href="#"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
								<!-- Collapse menu -->
								<a class="list-group-item" data-bs-toggle="collapse" href="#collapseauthentication" role="button" aria-expanded="false" aria-controls="collapseauthentication">
									<i class="bi bi-lock fa-fw me-2"></i>Dropdown level
								</a>
								<!-- Submenu -->
								<ul class="nav collapse flex-column" id="collapseauthentication" data-bs-parent="#navbar-sidebar">
									<li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a></li>
									<li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Responsive offcanvas body END -->
			</div>
			<!-- Left sidebar END -->

			<!-- Main content START -->
			<div class="col-xl-9">

				<!-- Course item START -->
				<div class="card border">
					<div class="card-header border-bottom">
						<!-- Card START -->
						<div class="card">
							<div class="row g-0">
								<div class="col-md-3">
									<img src="assets/images/courses/4by3/01.jpg" class="rounded-2" alt="Card image">
								</div>
								<div class="col-md-9">
									<div class="card-body">
										<!-- Title -->
										<h3 class="card-title"><a href="#">The Complete Digital Marketing Course - 12 Courses in 1</a></h3>
			
										<!-- Info -->
										<ul class="list-inline mb-2">
											<li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="far fa-clock text-danger me-2"></i>6h 56m</li>
											<li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="fas fa-table text-orange me-2"></i>82 lectures</li>
											<li class="list-inline-item h6 fw-light"><i class="fas fa-signal text-success me-2"></i>Beginner</li>
										</ul>

										<!-- button -->
										<a href="#" class="btn btn-primary-soft btn-sm mb-0">Resume course</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Card END -->
					</div>

					<div class="card-body">

						<!-- Title -->
						<h5>Course Curriculum</h5>

						<!-- Accordion START -->
						<div class="accordion accordion-icon accordion-bg-light" id="accordionExample2">
							<!-- Item -->
							<div class="accordion-item mb-3">
								<h6 class="accordion-header font-base" id="heading-1">
									<a class="accordion-button fw-bold rounded collapsed d-block pe-4" href="#collapse-1" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										<span class="mb-0">Introduction of Digital Marketing</span> 
										<span class="small d-block mt-1">(3 Lectures)</span> 
									</a>
								</h6>
								<div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="heading-1" data-bs-parent="#accordionExample2">
									<div class="accordion-body mt-3">
										<div class="vstack gap-3">

											<!-- Progress bar -->
											<div class="overflow-hidden">
												<div class="d-flex justify-content-between">
													<p class="mb-1 h6">1/2 Completed</p>
													<h6 class="mb-1 text-end">80%</h6>
												</div>
												<div class="progress progress-sm bg-primary bg-opacity-10">
													<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
											</div>

											<!-- Course lecture -->
											<div>
												<div class="d-flex justify-content-between align-items-center mb-2">
													<div class="position-relative d-flex align-items-center">
														<a href="#" class="btn btn-success btn-round btn-sm mb-0 stretched-link position-static">
															<i class="fas fa-play me-0"></i>
														</a>
														<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-200px">Introduction</span>
													</div>
													<p class="mb-0 text-truncate">2m 10s</p>
												</div>

												<!-- Add note button -->
												<a class="btn btn-xs btn-warning mb-0" data-bs-toggle="collapse" href="#addnote-1" role="button" aria-expanded="false" aria-controls="addnote-1">
													<i class="bi fa-fw bi-pencil-square me-2"></i>Note
												</a>
												<a href="#" class="btn btn-xs btn-dark mb-0">Play again</a>

												<!-- Notes START -->
												<div class="collapse" id="addnote-1">
													<div class="card card-body p-0 mt-2">

														<!-- Note item -->
														<div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
															<!-- Content -->
															<div class="d-flex align-items-center">
																<span class="badge bg-dark me-2">5:20</span>
																<h6 class="d-inline-block text-truncate w-100px w-sm-200px mb-0 fw-light">Describe SEO Engine</h6>
															</div>
															<!-- Button -->
															<div class="d-flex">
																<a href="#" class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
																<a href="#" class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
															</div>
														</div>

														<!-- Note item -->
														<div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
															<!-- Content -->
															<div class="d-flex align-items-center">
																<span class="badge bg-dark me-2">10:20</span>
																<h6 class="d-inline-block text-truncate w-100px w-sm-200px mb-0 fw-light">Know about all marketing</h6>
															</div>
															<!-- Button -->
															<div class="d-flex">
																<a href="#" class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
																<a href="#" class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
															</div>
														</div>

													</div>
												</div>
												<!-- Notes END -->

												<hr class="mb-0">
											</div>	

											<!-- Course lecture -->
											<div>
												<div class="d-flex justify-content-between align-items-center mb-2">
													<div class="position-relative d-flex align-items-center">
														<a href="#" class="btn btn-success btn-round btn-sm mb-0 stretched-link position-static">
															<i class="fas fa-play me-0"></i>
														</a>
														<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px"> What is Digital Marketing What is Digital Marketing</span>
													</div>
													<p class="mb-0 text-truncate">15m 10s</p>
												</div>

													<!-- Add note button -->
													<a class="btn btn-xs btn-warning mb-0" data-bs-toggle="collapse" href="#addnote-2" role="button" aria-expanded="false" aria-controls="addnote-2">
														<i class="bi fa-fw bi-pencil-square me-2"></i>Note
													</a>
													<a href="#" class="btn btn-xs btn-dark mb-0">Play again</a>

													<!-- Notes START -->
													<div class="collapse" id="addnote-2">
														<div class="card card-body p-0 mt-2">

															<!-- Note item -->
															<div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
																<!-- Content -->
																<div class="d-flex align-items-center">
																	<span class="badge bg-dark me-2">5:20</span>
																	<h6 class="d-inline-block text-truncate w-100px w-sm-200px mb-0 fw-light">Describe SEO Engine</h6>
																</div>
																<!-- Button -->
																<div class="d-flex">
																	<a href="#" class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
																	<a href="#" class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
																</div>
															</div>

															<!-- Note item -->
															<div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
																<!-- Content -->
																<div class="d-flex align-items-center">
																	<span class="badge bg-dark me-2">10:20</span>
																	<h6 class="d-inline-block text-truncate w-100px w-sm-200px mb-0 fw-light">Know about all marketing</h6>
																</div>
																<!-- Button -->
																<div class="d-flex">
																	<a href="#" class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
																	<a href="#" class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
																</div>
															</div>

														</div>
													</div>
													<!-- Notes END -->

													<hr class="mb-0">
											</div>

											<!-- Course lecture -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="position-relative d-flex align-items-center">
													<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
														<i class="fas fa-play me-0"></i>
													</a>
													<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Type of Digital Marketing</span>
												</div>
												<p class="mb-0 text-truncate">18m 10s</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Item -->
							<div class="accordion-item mb-3">
								<h6 class="accordion-header font-base" id="heading-2">
									<a class="accordion-button fw-bold collapsed rounded d-block pe-4" href="#collapse-2" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										<span class="mb-0">Customer Life cycle</span> 
										<span class="small d-block mt-1">(3 Lectures)</span> 
									</a>
								</h6>
								<div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2" data-bs-parent="#accordionExample2">
									<!-- Accordion body START -->
									<div class="accordion-body mt-3">
										<div class="vstack gap-3">
											<!-- Progress bar -->
											<div class="overflow-hidden">
												<div class="d-flex justify-content-between">
													<p class="mb-1 h6">0/3 Completed</p>
													<h6 class="mb-1 text-end">0%</h6>
												</div>
												<div class="progress progress-sm bg-primary bg-opacity-10">
													<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
											</div>
											<!-- Course lecture -->
											<div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="position-relative d-flex align-items-center">
														<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
															<i class="fas fa-play me-0"></i>
														</a>
														<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-sm-400px">Introduction</span>
													</div>
													<p class="mb-0 text-truncate">2m 10s</p>
												</div>
												<hr class="mb-0">
											</div>

											<!-- Course lecture -->
											<div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="position-relative d-flex align-items-center">
														<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
															<i class="fas fa-play me-0"></i>
														</a>
														<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px"> What is Digital Marketing What is Digital Marketing</span>
													</div>
													<p class="mb-0 text-truncate">15m 10s</p>
												</div>
												<hr class="mb-0">
											</div>

											<!-- Course lecture -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="position-relative d-flex align-items-center">
													<a href="#" class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static" data-bs-toggle="modal" data-bs-target="#coursePremium">
														<i class="bi bi-lock-fill"></i>
													</a>
													<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Type of Digital Marketing</span>
												</div>
												<p class="mb-0 text-truncate">18m 10s</p>
											</div>
										</div>
									</div>
									<!-- Accordion body END -->
								</div>
							</div>

						</div>
						<!-- Accordion END -->
					</div>
				</div>
				<!-- Course item END -->

				<!-- Course item START -->
				<div class="card border mt-4">
					<div class="card-header border-bottom">
						<!-- Card START -->
						<div class="card">
							<div class="row g-0">
								<div class="col-md-3">
									<img src="assets/images/courses/4by3/08.jpg" class="rounded-2" alt="Card image">
								</div>
								<div class="col-md-9">
									<div class="card-body">
										<!-- Title -->
										<h3 class="card-title"><a href="#">Sketch from A to Z: for app designer</a></h3>
			
										<!-- Info -->
										<ul class="list-inline mb-2">
											<li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="far fa-clock text-danger me-2"></i>8h 56m</li>
											<li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="fas fa-table text-orange me-2"></i>65 lectures</li>
											<li class="list-inline-item h6 fw-light"><i class="fas fa-signal text-success me-2"></i>All level</li>
										</ul>
										<!-- Button -->
										<a href="#" class="btn btn-primary-soft btn-sm mb-0">Resume course</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Card END -->
					</div>

					<div class="card-body">

						<!-- Title -->
						<h5>Course Curriculum</h5>

						<!-- Accordion START -->
						<div class="accordion accordion-icon accordion-bg-light" id="accordionExample4">
							<!-- Item -->
							<div class="accordion-item mb-3">
								<h6 class="accordion-header font-base" id="heading-1-1">
									<a class="accordion-button fw-bold rounded collapsed d-block pe-4" href="#collapse-1-1" data-bs-toggle="collapse" data-bs-target="#collapse-1-1" aria-expanded="false" aria-controls="collapse-1-1">
										<span class="mb-0">Introduction of Sketch</span> 
										<span class="small d-block mt-1">(3 Lectures)</span> 
									</a>
								</h6>
								<div id="collapse-1-1" class="accordion-collapse collapse" aria-labelledby="heading-1-1" data-bs-parent="#accordionExample4">
									<div class="accordion-body mt-3">
										<div class="vstack gap-3">

											<!-- Progress bar -->
											<div class="overflow-hidden">
												<div class="d-flex justify-content-between">
													<p class="mb-1 h6">1/3 Completed</p>
													<h6 class="mb-1 text-end">35%</h6>
												</div>
												<div class="progress progress-sm bg-primary bg-opacity-10">
													<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
											</div>

											<!-- Course lecture -->
											<div>
												<div class="d-flex justify-content-between align-items-center mb-2">
													<div class="position-relative d-flex align-items-center">
														<a href="#" class="btn btn-success btn-round btn-sm mb-0 stretched-link position-static">
															<i class="fas fa-play me-0"></i>
														</a>
														<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Introduction</span>
													</div>
													<p class="mb-0 text-truncate">2m 10s</p>
												</div>

												<!-- Add note button -->
												<a class="btn btn-xs btn-warning mb-0" data-bs-toggle="collapse" href="#addnote-3" role="button" aria-expanded="false" aria-controls="addnote-3">
													<i class="bi fa-fw bi-pencil-square me-2"></i>Note
												</a>
												<a href="#" class="btn btn-xs btn-dark mb-0">Play again</a>

												<!-- Notes START -->
												<div class="collapse" id="addnote-3">
													<div class="card card-body p-0 mt-2">

														<!-- Note item -->
														<div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
															<!-- Content -->
															<div class="d-flex align-items-center">
																<span class="badge bg-dark me-2">5:20</span>
																<h6 class="d-inline-block text-truncate w-100px w-sm-400px mb-0 fw-light">Describe SEO Engine</h6>
															</div>
															<!-- Button -->
															<div class="d-flex">
																<a href="#" class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
																<a href="#" class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
															</div>
														</div>

														<!-- Note item -->
														<div class="d-flex justify-content-between bg-light rounded-2 p-2 mb-2">
															<!-- Content -->
															<div class="d-flex align-items-center">
																<span class="badge bg-dark me-2">10:20</span>
																<h6 class="d-inline-block text-truncate w-100px w-sm-400px mb-0 fw-light">Know about all marketing</h6>
															</div>
															<!-- Button -->
															<div class="d-flex">
																<a href="#" class="btn btn-sm btn-light btn-round me-2 mb-0"><i class="bi fa-fw bi-play-fill"></i></a>
																<a href="#" class="btn btn-sm btn-light btn-round mb-0"><i class="bi fa-fw bi-trash-fill"></i></a>
															</div>
														</div>

													</div>
												</div>
												<!-- Notes END -->

												<hr class="mb-0">
											</div>	

											<!-- Course lecture -->
											<div>
												<div class="d-flex justify-content-between align-items-center mb-2">
													<div class="position-relative d-flex align-items-center">
														<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
															<i class="fas fa-play me-0"></i>
														</a>
														<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px"> What is Digital Marketing What is Digital Marketing</span>
													</div>
													<p class="mb-0 text-truncate">15m 10s</p>
												</div>
													<hr class="mb-0">
											</div>

											<!-- Course lecture -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="position-relative d-flex align-items-center">
													<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
														<i class="fas fa-play me-0"></i>
													</a>
													<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Type of Digital Marketing</span>
												</div>
												<p class="mb-0 text-truncate">18m 10s</p>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- Item -->
							<div class="accordion-item mb-3">
								<h6 class="accordion-header font-base" id="heading-1-4">
									<a class="accordion-button fw-bold collapsed rounded d-block pe-4" href="#collapse-1-4" data-bs-toggle="collapse" data-bs-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
										<span class="mb-0">YouTube Marketing</span> 
										<span class="small d-block mt-1">(5 Lectures)</span>
									</a>
								</h6>
								<div id="collapse-1-4" class="accordion-collapse collapse" aria-labelledby="heading-1-4" data-bs-parent="#accordionExample4">
									<!-- Accordion body START -->
									<div class="accordion-body mt-3">
										<div class="vstack gap-3">
											<!-- Progress bar -->
											<div class="overflow-hidden">
												<div class="d-flex justify-content-between">
													<p class="mb-1 h6">0/5 Completed</p>
													<h6 class="mb-1 text-end">0%</h6>
												</div>
												<div class="progress progress-sm bg-primary bg-opacity-10">
													<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
											</div>

											<!-- Course lecture -->
											<div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="position-relative d-flex align-items-center">
														<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
															<i class="fas fa-play me-0"></i>
														</a>
														<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Video Flow</span>
													</div>
													<p class="mb-0 text-truncate">25m 5s</p>
												</div>
											<hr class="mb-0">
											</div>

											<!-- Course lecture -->
											<div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="position-relative d-flex align-items-center">
														<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
															<i class="fas fa-play me-0"></i>
														</a>
														<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Webmaster Tool</span>
													</div>
													<p class="mb-0 text-truncate">15m 20s</p>
												</div>
												<hr class="mb-0">
											</div>

											<!-- Course lecture -->
											<div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="position-relative d-flex align-items-center">
														<a href="#" class="btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static">
															<i class="fas fa-play me-0"></i>
														</a>
														<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Featured Contents on Channel</span>
													</div>
													<p class="mb-0 text-truncate">32m 20s</p>
												</div>
												<hr class="mb-0">
											</div>

											<!-- Course lecture -->
											<div>
												<div class="d-flex justify-content-between align-items-center">
													<div class="position-relative d-flex align-items-center">
														<a href="#" class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static" data-bs-toggle="modal" data-bs-target="#coursePremium">
															<i class="bi bi-lock-fill"></i>
														</a>
														<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Managing Comments</span>
													</div>
													<p class="mb-0 text-truncate">20m 20s</p>
												</div>
												<hr class="mb-0">
											</div>

											<!-- Course lecture -->
											<div class="d-flex justify-content-between align-items-center">
												<div class="position-relative d-flex align-items-center">
													<a href="#" class="btn btn-light btn-round btn-sm mb-0 stretched-link position-static" data-bs-toggle="modal" data-bs-target="#coursePremium">
														<i class="bi bi-lock-fill"></i>
													</a>
													<span class="d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-150px w-sm-400px">Channel Analytics</span>
												</div>
												<p class="mb-0 text-truncate">18m 20s</p>
											</div>
										</div>
									</div>
									<!-- Accordion body END -->
								</div>	
							</div>

						</div>
						<!-- Accordion END -->
					</div>
				</div>
				<!-- Course item END -->
			</div>
			<!-- Main content END -->
		</div> <!-- Row END -->
	</div>	
</section>
<!-- =======================
Page content END -->

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

<!-- Modal START -->
<div class="modal fade" id="coursePremium" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header border-0 bg-transparent">
				<!-- Close button -->
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<!-- Modal body -->
			<div class="modal-body px-5 pb-5 position-relative overflow-hidden">

				<!-- Element -->
				<figure class="position-absolute bottom-0 end-0 mb-n4 me-n4 d-none d-sm-block">
					<img src="assets/images/element/01.svg" alt="element">
				</figure>
				<figure class="position-absolute top-0 end-0 z-index-n1 opacity-2">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="818.6px" height="235.1px" viewBox="0 0 818.6 235.1">
						<path class="fill-info" d="M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z"></path>
					</svg>
				</figure>
				<!-- Title -->
				<h2>Get Premium Course in <span class="text-success">$800</span></h2>
				<p>Prosperous understood Middletons in conviction an uncommonly do. Supposing so be resolving breakfast am or perfectly.</p>
				<!-- Content -->
				<div class="row mb-3 item-collapse">
					<div class="col-sm-6">
						<ul class="list-group list-group-borderless">
							<li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>High quality Curriculum</li>
							<li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>Tuition Assistance</li>
							<li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>Diploma course</li>
						</ul>
					</div>
					<div class="col-sm-6">
						<ul class="list-group list-group-borderless">
							<li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>Intermediate courses</li>
							<li class="list-group-item text-body"> <i class="bi bi-patch-check-fill text-success"></i>Over 200 online courses</li>
						</ul>
					</div>
				</div>
				<!-- Button -->
				<a href="#" class="btn btn-lg btn-orange-soft">Purchase premium</a>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer d-block bg-info">
				<div class="d-sm-flex justify-content-sm-between align-items-center text-center text-sm-start">
					<!-- Social media button -->
				<ul class="list-inline mb-0 social-media-btn mb-2 mb-sm-0">
					<li class="list-inline-item"> <a class="btn btn-sm mb-0 me-1 bg-white text-facebook" href="#"><i class="fab fa-fw fa-facebook-f"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm mb-0 me-1 bg-white text-instagram" href="#"><i class="fab fa-fw fa-instagram"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm mb-0 me-1 bg-white text-twitter" href="#"><i class="fab fa-fw fa-twitter"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-sm mb-0 bg-white text-linkedin" href="#"><i class="fab fa-fw fa-linkedin-in"></i></a> </li>
				</ul>
				<!-- Contact info -->
				<div>
					<p class="mb-1 small"><a href="#" class="text-white"><i class="far fa-envelope fa-fw me-2"></i>example@gmail.com</a></p>
					<p class="mb-0 small"><a href="#" class="text-white"><i class="fas fa-headset fa-fw me-2"></i>123-456-789</a></p>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>  
<!-- Modal END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

</html>