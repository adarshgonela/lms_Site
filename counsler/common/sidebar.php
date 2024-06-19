	
<!-- =======================
Page Banner START -->
<?php
	
	$students = (int)$usersRepo->aggregate("count","counsler","`counsler`='$email'");
	$totalAppications = (int)$applicationsRepo->aggregate("count","id","`cid`='$email'");
	$approvedApplications = (int)$applicationsRepo->aggregate("count","id","`cid`='$email' AND `status`='approved'");
	$totalColleges = (int)$collegesRepo->aggregate("count","id");


?>
<section class="pt-0">
	<div class="container-fluid px-0">
		<div class="card bg-blue h-100px h-md-40px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
		</div>
	</div>
	<div class="container mt-n4">
		<div class="row">
			<div class="col-12">
				<div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
					<div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
						<!-- Avatar -->
						<div class="col-auto">
							<a class="avatar avatar-xxl position-relative mt-n3" href="counsler/profile.php">
								<img class="avatar-img rounded-circle border border-white border-3 shadow" loading="lazy" src="
								<?php
								if($profile['image'] && $profile['image']!=""){
								    echo "data:image/jpeg;base64,".base64_encode($profile['image']);
								}
								else{
								    echo "assets/images/avatar/default.png";
								}
								?>
								" alt="">
								<span class="badge text-bg-success rounded-pill position-absolute top-50 start-100 translate-middle mt-4 mt-md-5 ms-n3 px-md-3"><i class="bi bi-pencil-square"></i></span>
							</a>
						</div>
						<!-- Profile info -->
						<div class="col d-sm-flex justify-content-between align-items-center">
							<div>
								<h1 class="my-1 fs-4"><?php echo $user['name']; ?></h1>
								<ul class="list-inline mb-0">
									<!-- <li class="list-inline-item me-3 mb-1 mb-sm-0">
										<span class="h6">255</span>
										<span class="text-body fw-light">points</span>
									</li> -->
									<li class="list-inline-item me-3 mb-1 mb-sm-0">
										<span class="h6"><?php echo $students; ?></span>
										<span class="text-body fw-light"> Students</span>
									</li>
									<li class="list-inline-item me-3 mb-1 mb-sm-0">
										<span class="h6"><?php echo $totalAppications; ?></span>
										<span class="text-body fw-light">Total Applications</span>
									</li>
									<li class="list-inline-item me-3 mb-1 mb-sm-0">
										<span class="h6"><?php echo $approvedApplications; ?></span>
										<span class="text-body fw-light">Approved Applications</span>
									</li>
								</ul>
							</div>
							<!-- Button -->
							<div class="mt-2 mt-sm-0">
								<a href="counsler/newstudent.php" target="_blank" class="btn btn-purple mb-0"> New Student</a>
								<!-- <a href="counsler/newapplication.php" target="_blank" class="btn btn-purple mb-0 mx-4"> New Application</a> -->
								
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
								<a class="list-group-item <?php echo $current_file=='dashboard'? 'active' :'' ;?>" href="counsler/dashboard.php"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
								<a class="list-group-item <?php echo $current_file=='students'? 'active' :'' ;?>" href="counsler/students.php"><i class="bi bi-people fa-fw me-2"></i>Students</a>
								<!-- <a class="list-group-item <?php echo $current_file=='applications'? 'active' :'' ;?>" href="counsler/applications.php"><i class="bi bi-files fa-fw me-2"></i>Applications</a>
								<a class="list-group-item" href="counsler/courses.php"><i class="bi bi-cart-check fa-fw me-2"></i>Courses</a>-->
								<!-- <a class="list-group-item <?php echo $current_file=='colleges'? 'active' :'' ;?>" href="counsler/colleges.php"><i class="fas fa-university fa-fw me-2"></i>Universities</a> --> 
								<a class="list-group-item <?php echo $current_file=='payments'? 'active' :'' ;?>" href="counsler/payments.php"><i class="bi bi-wallet2 fa-fw me-2"></i>Payments</a>
								<a class="list-group-item <?php echo $current_file=='documents'? 'active' :'' ;?>" href="counsler/documents.php"><i class="bi bi-file-earmark-text-fill me-2"></i>Documents</a>
								<!-- <a class="list-group-item" href="student-quiz.html"><i class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a> -->
								<!-- <a class="list-group-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment Info</a> -->
								<!-- <a class="list-group-item" href="user/profile.php"><i class="bi bi-pencil-square fa-fw me-2"></i>Edit Profile</a> -->
								<!-- <a class="list-group-item" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>Settings</a> -->
								<!-- <a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a> -->
								<a class="list-group-item <?php echo $current_file=='profile'? 'active' :'' ;?>" href="counsler/profile.php"><i class="bi bi-pencil-square fa-fw me-2"></i>Profile</a>
								<a class="list-group-item text-danger bg-danger-soft-hover" href="counsler/redirect/auth/logout.php"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
								<!-- Collapse menu -->
								<!-- <a class="list-group-item" data-bs-toggle="collapse" href="#collapseauthentication" role="button" aria-expanded="false" aria-controls="collapseauthentication">
									<i class="bi bi-lock fa-fw me-2"></i>Dropdown level
								</a> -->
								<!-- Submenu -->
								<!-- <ul class="nav collapse flex-column" id="collapseauthentication" data-bs-parent="#navbar-sidebar">
									<li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a></li>
									<li class="nav-item"> <a class="nav-link" href="#">Dropdown item</a></li>
								</ul> -->
							</div>
						</div>
					</div>
				</div>
				<!-- Responsive offcanvas body END -->
			</div>
