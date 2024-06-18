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
						<h3 class="mb-0">My Applications</h3>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">
						<form>
						<!-- Search and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-4">
							<!-- Content -->
							<div class="col-md-6">
								
									<input class="form-control pe-5 bg-transparent" type="search" name="search" placeholder="Search By Student Or College" aria-label="Search"  value="<?php
                            if(isset($_REQUEST['search'])){echo $_REQUEST['search']; }?>">
							</div>

							<!-- Select option -->
							<div class="col-md-6">
								<!-- Short by filter -->
								
									<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="student">
                                    <option value=""> Select Student</option>
									<?php
									    $selected = isset($_REQUEST['student']) ? $_REQUEST['student'] : '';
										$students = $usersRepo->fetchby("`counsler` ='$email'");
										foreach($students as $student){
											$studentEmail = $student['email'];
											$studentName = $student['name'];
											$isSelected = ($selected == $studentEmail) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $studentEmail ?>"  <?php echo $isSelected; ?>> <?php echo "$studentName"; ?> </option>
									<?php } ?>
									</select>
							</div>

							<div class="col-md-6">
								<!-- Short by filter -->
								
									<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="college">
                                    <option value=""> Select College</option>
									<?php
										$colleges = $collegesRepo->fetchBy("");
										foreach($colleges as $college){
											$collegeId = $college['id'];
											$collegeName = $college['name'];
                                    ?>
                                    <option value="<?php echo $collegeId ?>"> <?php echo "$collegeName"; ?> </option>
									<?php } ?>
									</select>
							</div>
							<div class="col-md-6">
							<button class="col-md-12 btn btn-purple" type="submit">search</button>
							</div>

						</div>
						</form>
						
						<!-- Search and select END -->

						<!-- Course list table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">Student</th>
										<th scope="col" class="border-0">University</th>
										<th scope="col" class="border-0">Application Id</th>
										<th scope="col" class="border-0">Fees</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody>
									<!-- Table item -->
									<?php
									    $filter = [];	
                                        $filter['cid'] = $email;
            							if(isset($_REQUEST['student']) && $_REQUEST['student']!=""){
            								$student = $_REQUEST['student'];
            								$filter['sid'] = $student;
            								
            							}
            							if(isset($_REQUEST['college']) && $_REQUEST['college']!=""){
            								$college = $_REQUEST['college'];
            								$filter['uid'] = $college;
            								
            							}
            							if(isset($_REQUEST['counsler']) && $_REQUEST['counsler']!=""){
            								$counsler = $_REQUEST['counsler'];
            								$filter['cid'] = $counsler;
            								
            							}
            							if(isset($_REQUEST['search']) && $_REQUEST['search']!=""){
            							    $filter = "`cid`='$email' AND (`email` LIKE '%$search%' or `college` LIKE '%$search%')";
            							}
            							
            							$applications = $applicationsRepo->fetchBy($filter);
										
											foreach($applications as $application){
												$college = $application['uname'];
												$id = "A0".$application['id'];
												$fees = $application['fees'];

									?>
									<tr>
										<td><?php echo $application['sname']; ?></td>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center">
												<!-- Image -->
												
												
													<!-- Title -->
													<h6><a href="#"><?php echo $college; ?></a></h6>
													<!-- Info -->
													
												
											</div>
										</td>

										<!-- Table data -->
										<td><?php echo $id; ?></td>

										<!-- Table data -->
										<td><?php echo $fees ?></td>

										<!-- Table data -->
										<td>
											<a href="counsler/application.php?id=<?php echo $application['id']; ?>" target="_blank"  class="btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0"><i class="bi bi-eye-fill circle me-1"></i></a>
										</td>
									</tr>

									<?php
										}

									?>

									
								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Course list table END -->

						<!-- Pagination START -->
						<div class="d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3">
							<!-- Content -->
							<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
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
					<!-- Card body START -->
				</div>
			<!-- Main content END -->
			</div><!-- Row END -->
		</div>
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

<!-- Vendors -->
<script src="assets/vendor/choices/js/choices.min.js"></script>
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/student-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:08:02 GMT -->
</html>