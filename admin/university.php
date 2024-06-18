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
    <?php include 'common/navbar.php';
        $id = $_REQUEST['id'];
        $college = $collegesRepo->fetch($id);
        if(!$college){
            header("Location: ../applications.php");
            exit();
        }
    
    ?>

	<!-- Top bar END -->

	<!-- Page main content START -->
	<div class="page-content-wrapper border">

		<!-- Title -->
		<div class="row">
			
		</div>
				
		<div class="row g-4">

			<!-- Personal information START -->
			<div class="col-xxl-7">
				<div class="card bg-transparent border rounded-3 h-100">

					<!-- Card header -->
					<div class="card-header bg-light border-bottom">
						<h5 class="card-header-title mb-0">University details</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body">
						<!-- Profile picture -->
						

						<!-- Information START -->
						<div class="row">

							<!-- Information item -->
							<div class="col-md-6">
								<ul class="list-group list-group-borderless">

									<li class="list-group-item">
										<span>College Name :</span>
										<span class="h6 mb-0"><?php echo $college['name']; ?></span>
									</li>

									<!--<li class="list-group-item">-->
									<!--	<span>Location :</span>-->
									<!--	<span class="h6 mb-0"><?php echo $college['location']; ?></span>-->
									<!--</li>-->
									
									<li class="list-group-item">
										<span>Courses :</span>
										<span class="h6 mb-0"><?php echo $college['courses']; ?></span>
									</li>
									
									<li class="list-group-item">
										<span>Eligibility :</span>
										<span class="h6 mb-0"><?php echo $college['eligibility']; ?></span>
									</li>
									
									<!--<li class="list-group-item">-->
									<!--	<span>Description :</span>-->
									<!--	<span class="h6 mb-0"><?php echo $college['description']; ?></span>-->
									<!--</li>-->
								</ul>
							</div>

							<!-- Information item -->
							<div class="col-md-6">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item">
										<span>Admin Commision :</span>
										<span class="h6 mb-0"><?php echo $college['acm']; ?></span>
									</li>

									<li class="list-group-item">
										<span>Total Seats :</span>
										<span class="h6 mb-0"><?php echo $college['totalSeats']; ?></span>
									</li>
									
									<!--<li class="list-group-item">-->
									<!--	<span>Fees :</span>-->
									<!--	<span class="h6 mb-0"><?php echo $college['fee']; ?></span>-->
									<!--</li>-->
									
									<li class="list-group-item">
										<span>Counsler Commision :</span>
										<span class="h6 mb-0"><?php echo $college['ccm']; ?></span>
									</li>
								</ul>
							</div>
							<div class="col-md-12">
							    <p>
									<span>Description :</span>
									<span class="h6 mb-0"><?php echo $college['description']; ?></span>
								</p>
							    
							</div>
						</div>
						<!-- Information END -->
					</div>
					<!-- Card body END -->
				</div>
			</div>
			<!-- Personal information END -->

			<!-- Student status chart START -->
			<div class="col-xxl-5">
				<div class="row g-4">

					<!-- Active student START -->
					<div class="col-md-6 col-xxl-12">
						<div class="card bg-transparent border overflow-hidden">
							<!-- Card header -->
							<div class="card-header bg-light border-bottom">
								<h6 class="card-header-title mb-0">Location</h6>
							</div>
							<!-- Card body -->
							<div class="card-body p-0">
								<div class="d-sm-flex justify-content-between p-4">
									<h5 class="text-blue mb-0"><?php echo $college['location']; ?></h5>
										</div>
								<!-- Apex chart -->
								
							</div>
						</div>
					</div>
					<!-- Active student END -->

					<!-- Enrolled START -->
					<div class="col-md-6 col-xxl-12">
						<div class="card bg-transparent border overflow-hidden">
							<!-- Card header -->
							<div class="card-header bg-light border-bottom">
								<h6 class="card-header-title mb-0">Number of Students</h6>
							</div>
							<!-- Card body -->
							<div class="card-body p-0">
								<div class="d-sm-flex justify-content-between p-4">
									<h5 class="text-blue mb-0"><?php echo $college['applied'];; ?></h5>
									<!--<p class="mb-0"><span class="text-success me-1">0.35%<i class="bi bi-arrow-up"></i></span>vs last Week</p>-->
								</div>
								<!-- Apex chart -->
								
							</div>
						</div>
					</div>
					<!-- Enrolled END -->
					
						<!-- Enrolled START -->
					<div class="col-md-6 col-xxl-12">
						<div class="card bg-transparent border overflow-hidden">
							<!-- Card header -->
							<div class="card-header bg-light border-bottom">
								<h6 class="card-header-title mb-0">Fees</h6>
							</div>
							<!-- Card body -->
							<div class="card-body p-0">
								<div class="d-sm-flex justify-content-between p-4">
									<h5 class="text-blue mb-0"><?php echo $college['fee']; ?></h5>
									<!--<p class="mb-0"><span class="text-success me-1">0.35%<i class="bi bi-arrow-up"></i></span>vs last Week</p>-->
								</div>
							
							</div>
						</div>
					</div>
					<!-- Enrolled END -->

				</div>
			</div>
			<!-- Student status chart END -->
			
			<!-- Edit information START -->
			<div class="col-xxl-12">
				<div class="card bg-transparent border rounded-3 h-100">

					<!-- Card header -->
					<div class="card-header bg-light border-bottom">
						<h5 class="card-header-title mb-0">Edit University details</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body">
						<!-- Profile picture -->
						

						<!-- Information START -->
						<form action="admin/redirect/colleges/update.php">
						<div class="row">
						    <input type="hidden" name="id" value="<?php echo $college['id']; ?>">
						    <?php
    						    $fields = [
                                    ['label'=>'Name','type'=>'text','name'=>'name'],
                                    ['label'=>'Location','type'=>'text','name'=>'location'],
                                    ['label'=>'Eligibility','type'=>'text','name'=>'eligibility'],
                                    ['label'=>'Fees','type'=>'number','name'=>'fee'],
                                ];
                                $data = $college;
                                include "common/input.php";
                                
                            ?>
                            <div class="col-md-6">
							<button class="col-md-12 btn btn-purple" type="submit">Save Changes</button>
							</div>
							
                            
							
					    </div>
					    </form>
					<!-- Card body END -->
				</div>
			</div>
			<!-- Personal information END -->

			


		</div> <!-- Row END -->
	</div>
	<!-- Page main content END -->

</div>
<!-- Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Popup modal for reviwe START -->
<div class="modal fade" id="viewReview" tabindex="-1" aria-labelledby="viewReviewLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<!-- Modal header -->
			<div class="modal-header bg-dark">
				<h5 class="modal-title text-white" id="viewReviewLabel">Review</h5>
				<button type="button" class="btn btn-sm btn-light mb-0 ms-auto" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-lg"></i></button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<div class="d-md-flex">
					<!-- Avatar -->
					<div class="avatar avatar-md me-4 flex-shrink-0">
						<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
					</div>
					<!-- Text -->
					<div>
						<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
							<h5 class="me-3 mb-0">Lori Stevens</h5>
							<!-- Review star -->
							<ul class="list-inline mb-0">
								<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
							</ul>
						</div>
						<!-- Info -->
						<p class="small mb-2">2 days ago</p>
						<p class="mb-2">Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed. Moderate do subjects to distance. </p>
						<p class="mb-2">As style lived he worse dried. Offered related so visitors we private removed. Moderate do subjects to distance. </p>
					</div>	
				</div>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger-soft my-0" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Popup modal for reviwe END --> 

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/apexcharts/js/apexcharts.min.js"></script>
<script src="assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/admin-instructor-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:09:08 GMT -->
</html>