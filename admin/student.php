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
     $Email = $_REQUEST['email'];
    
    $student = $usersRepo->fetch($Email);
    $Name = $student['name'];
    // $studentMobile = $student['mobile'];
    // $studentEmail = $student['email'];
    // $studentDate = $student['date'];
    
    // $studentProfile = $profileRepo->fetch($studentEmail);
    // $dob = $studentProfile ['dob'];
    // $passingYear = $studentProfile ['passingYear'];
    // $college = $studentProfile ['college'];
    // $address = $studentProfile ['address'];
    // $cgpa = $studentProfile ['cgpa'];
    
    
<<<<<<< HEAD
    $applications = $applicationsRepo->fetchBy("`sid`='$studentEmail'");
    $approved = (int)$applicationsRepo->aggregate("count","id", "`status`='approved' and `sid`='$studentEmail'");
=======
    // $applications = $applicationsRepo->fetchBy("`email`='$studentEmail'");
    // $approved = (int)$applicationsRepo->aggregate("count","id", "`status`='approved' and `email`='$studentEmail'");
>>>>>>> 6b9443c826dfb26d31527ce85d61da1487457e8c
    
    $totalstudents = 0;
   // $totalApps = count($applications);
    ?>

	<!-- Top bar END -->

	<!-- Page main content START -->
	<div class="page-content-wrapper border">

		<!-- Title -->
		<div class="row">
			<div class="col-12 mb-3">
				<h1 class="h3 mb-2 mb-sm-0">Student details</h1>
			</div>
		</div>
				
		<div class="row g-4">

			<!-- Personal information START -->
			<div class="col-xxl-7">
				<div class="card bg-transparent border rounded-3 h-100">

					<!-- Card header -->
					<div class="card-header bg-light border-bottom">
						<h5 class="card-header-title mb-0">Personal Information</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body">
						<!-- Profile picture -->
						<div class="avatar avatar-xl mb-3">
							<img class="avatar-img rounded-circle border border-white border-3 shadow" src="https://content.api.news/v3/images/bin/8a3b2dac8172f23b7306cca7ed34c3a3" alt="">
						</div>

						<!-- Information START -->
						<div class="row">

							<!-- Information item -->
							<div class="col-md-6">
								<ul class="list-group list-group-borderless">

									<li class="list-group-item">
										<span>Full Name:</span>
										<span class="h6 mb-0"><?php echo $Name ?></span>
									</li>
									
									

									<li class="list-group-item">
										<span>Mobile Number:</span>
										<!-- <span class="h6 mb-0"><?php echo $studentMobile ?></span> -->
									</li>
									
									<li class="list-group-item">
										<span>College :</span>
										<!-- <span class="h6 mb-0"><?php echo $college ?></span> -->
									</li>
									
									<li class="list-group-item">
										<!-- <span>Address :</span>
										<span class="h6 mb-0"><?php echo $address ?></span> -->
									</li>
									
									<!-- <li class="list-group-item">
										<span>CGPA :</span> -->
										<!-- <span class="h6 mb-0"><?php echo $cgpa ?></span> -->
									<!-- </li> -->
								</ul>
							</div>

							<!-- Information item -->
							<div class="col-md-6">
								<ul class="list-group list-group-borderless">
								    <li class="list-group-item">
										<span>Counsler:</span>
										<span class="h6 mb-0"><?php echo $student['counsler']; ?></span>
									</li>
									
									<li class="list-group-item">
										<span>Email ID:</span>
										<span class="h6 mb-0"><?php echo $Email ?></span>
									</li>

									<li class="list-group-item">
										<span>Joining Date:</span>
										<!-- <span class="h6 mb-0"><?php echo $studentDate ?></span> -->
									</li>
									
									<!-- <li class="list-group-item">
										<span>Date of Birth:</span>
										<span class="h6 mb-0"><?php echo $dob ?></span>
									</li>
									
									<li class="list-group-item">
										<span>Passing Year:</span>
										<span class="h6 mb-0"><?php echo $passingYear ?></span>
									</li> -->
								</ul>
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
								<h5 class="card-header-title mb-0">Approved Applications</h5>
							</div>
							<!-- Card body -->
							<div class="card-body p-0">
								<div class="d-sm-flex justify-content-between p-4">
<<<<<<< HEAD
									<h4 class="text-blue mb-0"><?php echo $approved; ?></h4>
=======
									<!-- <h4 class="text-blue mb-0"><?php echo $approved; ?></h4> -->
									<p class="mb-0"><span class="text-success me-1">0.20%<i class="bi bi-arrow-up"></i></span>vs last Week</p>
>>>>>>> 6b9443c826dfb26d31527ce85d61da1487457e8c
								</div>
							</div>
						</div>
					</div>
					<!-- Active student END -->

					<!-- Enrolled START -->
					<div class="col-md-6 col-xxl-12">
						<div class="card bg-transparent border overflow-hidden">
							<!-- Card header -->
							<div class="card-header bg-light border-bottom">
								<h5 class="card-header-title mb-0">Total Applications</h5>
							</div>
							<!-- Card body -->
							<div class="card-body p-0">
								<div class="d-sm-flex justify-content-between p-4">
<<<<<<< HEAD
									<h4 class="text-blue mb-0"><?php echo $totalApps; ?></h4>
=======
									<!-- <h4 class="text-blue mb-0"><?php echo $totalApps; ?></h4> -->
									<p class="mb-0"><span class="text-success me-1">0.35%<i class="bi bi-arrow-up"></i></span>vs last Week</p>
>>>>>>> 6b9443c826dfb26d31527ce85d61da1487457e8c
								</div>
							</div>
						</div>
					</div>
					<!-- Enrolled END -->

				</div>
			</div>
			<!-- Student status chart END -->
			<!-- Instructor course list START -->
			<div class="col-12">
				<div class="card bg-transparent border h-100">

					<!-- Card header -->
					<div class="card-header bg-light border-bottom">
						<h5 class="mb-0">Applications</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body pb-0">
						<!-- Table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">

								<!-- Table head -->
							<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">Student</th>
										<th scope="col" class="border-0">College</th>
										<th scope="col" class="border-0">Application Id</th>
										<th scope="col" class="border-0">Fees</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<!-- Table body START -->
								<tbody>
									<!-- Table item -->
									<?php

											
											foreach($applications as $application){
												$college = $application['uname'];
												$id = "#".$application['id'];
												$fees = $application['fees'];



									?>
									<tr>
										<td><h6><?php echo $application['sname']; ?></h6></td>
										<!-- Table data -->
										<td>
											
													<!-- Title -->
													<h6><a href="#"><?php echo $college; ?></a></h6>
													<!-- Info -->
												
												
										</td>

										<!-- Table data -->
										<td><a href="admin/application.php?id=<?php echo $application['id']; ?>"><?php echo $id; ?></a></td>

										<!-- Table data -->
										<td><?php echo $fees ?></td>

										<!-- Table data -->
										<td>
											<a href="#" class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-play-circle me-1"></i>Continue</a>
										</td>
									</tr>

									<?php
										}
										if(count($applications)==0){
								            echo "<tr><td colspan='5' class='text-center'>No data found</td></tr>";
							            }

									?>

									
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
			</div>
			<!-- Instructor course list END -->


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