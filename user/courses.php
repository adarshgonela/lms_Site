<!DOCTYPE html>
<html lang="en">

<head>
		<?php include_once('common/title.php'); ?>

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

				<div class="card bg-transparent border rounded-3">
					<!-- Card header START -->
					<div class="card-header bg-transparent border-bottom">
						<h3 class="mb-0">Courses</h3>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body p-3 p-md-4">
						<a href="">
						<div class="row g-4">
							<!-- Card item START -->
							<?php
										$courses = $coursesRepo->fetchBy();
								        foreach($courses as $course){
										$coursename = $course['name'];
										$tuitordescription = $course['description'];
										$tuitorid = $course['tid'];
										$tuitorname = $course['tname'];
										$duration = $course['duration'];
										$price = $course['price'];
										$totallecture =$course['totallectures'];
										// $completedlecture =$course['completedlectures'];
										$levels = $course['level'];
										$imgs=$course['img'];
									
							?>
							<div class="col-sm-6 col-lg-4">
								
								<div class="card shadow h-100">
								<a href="../user/course-resume.php?id=<?php echo $course['id']; ?>">
									<!-- Image -->
									<img src="<?php echo $imgs ?>" style="height: 200px;" class="card-img-top" alt="course image">
									<div class="card-body pb-0">
										<!-- Badge and favorite -->
										<div class="d-flex justify-content-between mb-2">
											<a href="#" class="badge bg-success bg-opacity-10 text-success"><?php echo $levels ?></a>
											<a href="#" class="text-danger"><i class="fas fa-heart"></i></a>
										</div>
										<!-- Title -->
                                    
										<h5 class="card-title fw-normal"><?php echo $coursename;?><a href="#"></a></h5>
										<p class="mb-2 text-truncate-2"><?php echo $tuitordescription;?></p>
										<!-- Rating star -->
										<ul class="list-inline mb-0">
											<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
											<li class="list-inline-item me-0 small"><i class="fas fa-star-half-alt text-warning"></i></li>
											<li class="list-inline-item ms-2 h6 fw-light mb-0">4.5/5.0</li>
										</ul>
									</div>
									<!-- Card footer -->
									<div class="card-footer pt-0 pb-3">
										<hr>
										<div class="d-flex justify-content-between">
											<span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i> <?php echo $duration;?> </span>
											<span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i> <?php echo $totallecture;?>classes</span>
										</div>
									</div>
									</a>
								</div>
								
							</div>
							<?php
							    }
							?>
							<!-- Card item END -->
							
								
							
						
					<!-- </div> -->
					<!-- Card body EMD -->
				</div>  
			</div>
			<!-- Main content END -->
		</div> <!-- Row END --> 
	</div>	
</section>
<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
	<?php include_once('common/footer.php'); ?>

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/student-bookmark.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:08:03 GMT -->
</html>