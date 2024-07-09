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
	<link rel="stylesheet" type="text/css" href="assets/vendor/choices/css/choices.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>

<body>
    <?php include 'common/navbar.php';
    $counslerEmail = $_REQUEST['counsler'];
    
    $counsler = $usersRepo->fetch($counslerEmail);
    $counslerName = $counsler['name'];
    $counslerMobile = $counsler['mobile'];
    $counslerEmail = $counsler['email'];
    $counslerDate = $counsler['date'];
    
    $students = $usersRepo->fetchBy("`counsler`='$counslerEmail'");
    $applications = $applicationsRepo->fetchBy("`cid`='$counslerEmail'");
    
    $totalstudents = count($students);
    $totalApps = count($applications);
    ?>

	<!-- Top bar END -->

	<!-- Page main content START -->
	<div class="page-content-wrapper border">

		<!-- Title -->
		<div class="row">
			<div class="col-12 mb-3">
				<h1 class="h3 mb-2 mb-sm-0">Counsler details</h1>
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
							<img class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/07.jpg" alt="">
						</div>

						<!-- Information START -->
						<div class="row">

							<!-- Information item -->
							<div class="col-md-6">
								<ul class="list-group list-group-borderless">

									<li class="list-group-item">
										<span>Full Name:</span>
										<span class="h6 mb-0"><?php echo $counslerName ?></span>
									</li>

									<li class="list-group-item">
										<span>Mobile Number:</span>
										<span class="h6 mb-0"><?php echo $counslerMobile ?></span>
									</li>
								</ul>
							</div>

							<!-- Information item -->
							<div class="col-md-6">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item">
										<span>Email ID:</span>
										<span class="h6 mb-0"><?php echo $counslerEmail ?></span>
									</li>

									<li class="list-group-item">
										<span>Joining Date:</span>
										<span class="h6 mb-0"><?php echo $counslerDate ?></span>
									</li>
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
								<h5 class="card-header-title mb-0">Total Students</h5>
							</div>
							<!-- Card body -->
							<div class="card-body p-0">
								<div class="d-sm-flex justify-content-between p-4">
									<h4 class="text-blue mb-0"><?php echo $totalstudents ?></h4>
									
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
									<h4 class="text-blue mb-0"><?php echo $totalApps ?></h4>
									
								</div>
								
							</div>
						</div>
					</div>
					<!-- Enrolled END -->

				</div>
			</div>
			<!-- Student status chart END -->
			
			
			
			<!-- Student review START -->
			<div class="col-12">
				<div class="card bg-transparent border">

					<!-- Card header START -->
					<div class="card-header border-bottom bg-light">
						<h5 class="mb-0">Students</h5>
					</div>
					<!-- Card header END -->
		
					<!-- Card body START -->
					<div class="card-body pb-0">
						<!-- Table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">Student name</th>
										<th scope="col" class="border-0">Progress</th>
										<th scope="col" class="border-0">Mobile</th>
										<th scope="col" class="border-0">Enrolled date</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>
		
								<!-- Table body START -->
								<tbody>
									<!-- Table item -->
                                    <?php

										
										foreach($students as $student){
											$studentEmail = $student['email'];
											$studentName = $student['name'];
											$mobile = $student['mobile'];
											$EnrolledDate = $student['date'];
									?>
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center position-relative">
												<!-- Image -->
												<div class="avatar avatar-md mb-2 mb-md-0">
													<img src="assets/images/avatar/01.jpg" class="rounded" alt="">
												</div>
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6 class="mb-0"><a href="admin/student.php?student=<?php echo $studentEmail ?>" class="stretched-link"><?php echo $studentName ?></a></h6>
													<!-- Address -->
													<!--span class="text-body small"><i class="fas fa-fw fa-map-marker-alt me-1 mt-1"></i>Mumbai</span --> 
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td class="text-center text-sm-start">
											<div class=" overflow-hidden">
												<h6 class="mb-0">85%</h6>
												<div class="progress progress-sm bg-primary bg-opacity-10">
													<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
													</div>
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td><?php echo $mobile ?></td>

										<!-- Table data -->
										<td><?php echo $EnrolledDate ?></td>

										<!-- Table data -->
										<td>
											<a  href="counsler/student.php?email=<?php echo $studentEmail ?>" target="_blank"  class="btn btn-info-soft btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="View Student"><i class="fas fa-eye"></i></a>
											<a href="counsler/newapplication.php?email=<?php echo $studentEmail ?>" target="_blank" class="btn btn-success-soft btn-round me-1 mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Apply"><i class="far fa-paper-plane"></i></a>
										</td>
									</tr>
                                    <?php }
                                            if(count($students)==0){
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
							<!--<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>-->
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
			<!-- Student review END -->
			
			
		
			<!-- Instructor course list START -->
			<div class="col-12">
				<div class="card bg-transparent border h-100">

					<!-- Card header -->
					<div class="card-header bg-light border-bottom">
						<h5 class="mb-0">Applications</h5>
					</div>
					
					<div class="table-responsive border-0">
					    
					    <!-- Card body START -->
					<div class="card-body">
						<form>
						<input type="hidden" name="counsler" value="<?php
                            if(isset($_REQUEST['counsler'])){echo $_REQUEST['counsler']; }?>">
						<!-- Search and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-4">
							<!-- Content -->
							<h5 class="text-sm-start mb-0 pt-0">Search</h4>
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
										$students = $usersRepo->fetchby("");
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
                                        <option value="">Select College</option>
                                        <?php
                                            $selectedCollege = isset($_REQUEST['college']) ? $_REQUEST['college'] : '';
                                            $colleges = $collegesRepo->fetchBy("");
                                            foreach ($colleges as $college) {
                                                $collegeId = $college['id'];
                                                $collegeName = $college['name'];
                                                $isSelected = ($collegeId == $selectedCollege) ? 'selected' : '';
                                        ?>
                                        <option value="<?php echo $collegeId; ?>" <?php echo $isSelected; ?>><?php echo $collegeName; ?></option>
                                        <?php } ?>
                                    </select>

							</div>
							<div class="col-md-6">
								<!-- Short by filter -->
								
									<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="status">
                                    <option value="">Select Status</option>
									<?php
<<<<<<< HEAD
										$selected = isset($_REQUEST['status']) ? $_REQUEST['status'] : '';
										foreach($appStatusList as $appstatus){
											$isSelected = ($selected == $appstatus) ? 'selected' : '';
                                    ?>
                                    <option value="<?php echo $appstatus ?>" <?php echo $isSelected; ?>> <?php echo "$appstatus"; ?> </option>
									<?php } ?>
									</select>
							</div>
							<!--<hr style="height:0px;border-top: 8px solid #000;" class"mt-0 mb-0 pt-0 pb-0">-->
							<h5 class="text-sm-start  mb-0 mt-4 pt-0">Sort</h4>
							<div class="col-md-6">
								<!-- Short by filter -->
								
									<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="scollege">
                                    <option value=""> Sort By</option>
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
								<!-- Short by filter -->
								
									<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm" name="sstatus">
                                    <option value=""> Sort By</option>
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

=======
										}
                                            if(count($applications)==0){
									            echo "<tr><td colspan='5' class='text-center'>No data found</td></tr>";
									        }
									?>
									
								</tbody>
								<!-- Table body END -->
							</table>
>>>>>>> 6b9443c826dfb26d31527ce85d61da1487457e8c
						</div>
						</form>
						
						<!-- Search and select END -->
					    
					    <?php
					        $filter = [];	
                            
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
							if(isset($_REQUEST['status']) && $_REQUEST['status']!=""){
								$key = $_REQUEST['status'];
								$filter['status'] = $key;
								
							}
							if(isset($_REQUEST['search']) && $_REQUEST['search']!=""){
							    $filter = "(`email` LIKE '%$search%' or `college` LIKE '%$search%')";
							}
							
							
							$data = $applicationsRepo->fetchBy($filter);
							foreach($data as $i=>$d){
                              $data[$i]['action'] = '<a href="admin/application.php?id='.$d['id'].'" target="_blank" class="btn btn-primary-soft btn-round me-1 mb-1 mb-md-0" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="View" aria-label="View">
											<i class="bi bi-eye-fill"></i>
										</a>';
							  $data[$i]['status'] = '<div class="badge bg-success bg-opacity-10 text-success">'.$d['status'].'</div>';
                            }
							$columns = ["Application Id" => "id","Student" => "sname","Counsler" => "cname" ,"University" => "uname","Fees" => "fees", "Applied On"=>"appliedon", "Status" => "status" , "Action" => "action"];
								
					    
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
							<!--<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>-->
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