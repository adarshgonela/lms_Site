<!DOCTYPE html>
<html lang="en">

<head>
	<?php include_once('common/title.php'); ?>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	<meta name="description" content="">
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
			<?php
				$id=$_REQUEST['id'];
				$course = $coursesRepo->fetch($id);
				
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
			             

				<!-- Course item START -->
				<div class="card border">
					<div class="card-header border-bottom">
						<!-- Card START -->
						<div class="card">
							<div class="row g-0">
								<div class="col-md-3">
									<img src="<?php echo $imgs ?>" class="rounded-2" alt="Card image">
								</div>
								<div class="col-md-9">
									<div class="card-body">
										<!-- Title -->
										<h3 class="card-title"><a href="#"><?php echo $coursename;?></a></h3>
										<p class="mb-2 text-truncate-2"><?php echo $tuitordescription;?></p>
			
										<!-- Info -->
										<ul class="list-inline mb-2">
											<li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="far fa-clock text-danger me-2"></i><?php echo $duration;?></li>
											<li class="list-inline-item h6 fw-light mb-1 mb-sm-0"><i class="fas fa-table text-orange me-2"></i><?php echo $totallecture;?> classes</li>
											<li class="list-inline-item h6 fw-light"><i class="fas fa-signal text-success me-2"></i><?php echo $levels;?></li>
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
					<h5>Course Curriculum</h5>
					              <?php
										$lectures = $lecturesRepo->fetchBy("cid='$id'");
								        foreach($lectures as $lecture){
										$id = $lecture['id'];
										$cid = $lecture['cid'];
										$cname = $lecture['cname'];
										$tid = $lecture['tid'];
										$tname = $lecture['tname'];
										$description = $lecture['description'];
										$url =$lecture['url'];
										$exercise = $lecture['exercise'];
										$notes = $lecture['notes'];	
							?>


						<!-- Title -->
					
						<!-- Accordion START -->
						<div class="accordion accordion-icon accordion-bg-light" id="accordionExample<?php echo $id;?>">
							<!-- Item -->
							<div class="accordion-item mb-3">
								<h6 class="accordion-header font-base" id="heading-1">
									<a class="accordion-button fw-bold rounded collapsed d-block pe-4" href="#collapse-<?php echo $id;?>" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $id;?>" aria-expanded="false" aria-controls="collapse-<?php echo $id;?>">
										<span class="mb-0"><?php echo $description;?></span> 
										<span class="small d-block mt-1">(3 Lectures)</span> 
									</a>
								</h6>
								<div id="collapse-<?php echo $id;?>" class="accordion-collapse collapse" aria-labelledby="heading-1" data-bs-parent="#accordionExample<?php echo $id;?>">
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
											
											
										</div>
									</div>
								</div>
								
							</div>

							

				
				</div>
				<?php
											}
											?>
			




</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<?php include_once('common/footer.php'); ?>
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

<!-- Mirrored from eduport.webestica.com/student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:08:02 GMT -->
</html>


