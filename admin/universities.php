	<!DOCTYPE html>
	<html lang="en">
	
<!-- Mirrored from eduport.webestica.com/admin-earning.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:09:08 GMT -->
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
		<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	</head>

	<body>
	    
	    <?php include 'common/navbar.php'; ?>
		<!-- Top bar END -->

		<!-- Page main content START -->
		<div class="page-content-wrapper border">

			<!-- Title -->
			<div class="row mb-3">
				<div class="col-12">
					<h1 class="h3 mb-0">Universities</h1>
				</div>
			</div>
			
			<?php
			
            $totalColleges = (int)$collegesRepo->aggregate("count","id","");
			
			
			?>

			<div class="row g-4 mb-4">
				<!-- Earning item -->
				<div class="col-sm-6 col-lg-6">
					<div class="p-4 bg-primary bg-opacity-10 rounded-3">
						<h6>Universities</h6>
						<h2 class="mb-0 fs-1 text-primary"><?php echo $totalColleges; ?></h2>
					</div>
				</div>
				
				<div class="col-sm-6 col-lg-6">
					<div class="p-4 bg-purple bg-opacity-10 rounded-3">
						<h6>This month applied</h6>
						<h2 class="mb-0 fs-1 text-purple"><?php echo $totalColleges; ?></h2>
					</div>
				</div>

			</div> <!-- Row END -->
			
			<!-- All review table START -->
			<div class="card bg-transparent border">

				<!-- Card header START -->
				<div class="card-header bg-light border-bottom">
				    <div class="row">
					<h5 class="mb-0 col-lg-6">Universities List</h5>
					<div class="col-lg-4 dropdown text-end m-0 p-0">
											<a href="admin/newuniversity.php?student=<?php echo $studentEmail ?>" target="_blank" class="dropdown text-end btn btn-sm btn-purple" role="button">
												New University
											</a>
					</div>
					</div>
											
				</div>
				<!-- Card header END -->

				<!-- Card body START -->
				<div class="card-body pb-0">
				    
				    <form>
						<!-- Search and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-4">
							<!-- Content -->
							<h5 class="text-sm-start mb-0 pt-0">Search</h4>
							<div class="col-md-6">
								
									<input class="form-control pe-5 bg-transparent" type="search" name="search" placeholder="Search by College or location" aria-label="Search"  value="<?php
                            if(isset($_REQUEST['search'])){echo $_REQUEST['search']; }?>">
							</div>
							
							
							<?php
							$sfields = ["name"=>"Name","fee"=>"fees"];
							include("common/sort.php");
							?>
							
							<div class="col-md-6">
							<button class="col-md-12 btn btn-purple" type="submit">search</button>
							</div>

					    </div>
					  </form>
					<!-- Table START -->
					<div class="table-responsive border-0">
					    
					    <!-- Card body START -->
					<div class="card-body">
						
						<!-- Search and select END -->
					    
					    <?php
					        $filter = "";
                            if(isset($_REQUEST['search']) && $_REQUEST['search']!=""){
									$search = $_REQUEST['search'];
									$filter = "(`name` LIKE '%$search%' or `location` LIKE '%$search%')";
							}
							$sort = "";
							if(isset($_REQUEST['sort']) && $_REQUEST['sort']!=""){
							    $sort = $_REQUEST['sort'];
							}
							$sortType = "ASC";
							if(isset($_REQUEST['sortType']) && $_REQUEST['sortType']!=""){
							    $sortType = $_REQUEST['sortType'];
							}
							
							
								
							$data = $collegesRepo->fetchBy($filter,$sort,$sortType);
							foreach($data as $i=>$d){
							  $data[$i]['id'] = "#".$data[$i]['id'];
							  $data[$i]['fee'] = $currency.$data[$i]['fee'];
							  $data[$i]['acm'] = $currency.$data[$i]['acm'];
							  $data[$i]['ccm'] = $currency.$data[$i]['ccm'];
                              $data[$i]['action'] = '<a href="admin/university.php?id='.$d['id'].'" _target="blank" class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View" aria-label="View">
											<i class="bi bi-eye-fill"></i>
										</a>';
							  $data[$i]['name'] = '<a href="admin/applications.php?college='.$d['id'].'" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View applications" aria-label="View">
											'.$d['name'].'
										</a>';
							 // $data[$i]['status'] = '<div class="badge bg-success bg-opacity-10 text-success">'.$d['status'].'</div>';
                            }
							$columns = ["College Id" => "id","College" => "name","Location"=>"location","Fees"=>"fee","Admin Commission"=>"acm","Counsler Commission"=>"ccm","Action"=>"action"];
								
					    
					    ?>
					    <br>
						<?php include "common/table.php"; ?>
					</div>
					<!-- Table END -->
				</div>
				<!-- Card body END -->

				<!-- Card footer START -->
				<div class="card-footer bg-transparent">
					<!-- Pagination START -->
					<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
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
				<!-- Card footer END -->
			</div>
			<!-- All review table END -->
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
	<script src="assets/vendor/choices/js/choices.min.js"></script>
	<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>
	<script src="assets/vendor/apexcharts/js/apexcharts.min.js"></script>
	<script src="assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js"></script>
	<script src="assets/vendor/aos/aos.js"></script>

	<!-- Template Functions -->
	<script src="assets/js/functions.js"></script>

	</body>
	
<!-- Mirrored from eduport.webestica.com/admin-earning.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:09:08 GMT -->
</html>