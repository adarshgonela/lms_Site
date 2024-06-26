	
<!-- =======================
Page Banner START -->
<?php
	$appliedcourses = (int)$mycoursesRepo->aggregate("count","id","`email` = '$email'");
	//$availablecourses = (int)$collegesRepo->aggregate("count","id","");
	$acceptedcourses = (int)$mycoursesRepo->aggregate("count","course","`email` = '$email' AND `status`= 'approved'");
	$totalcourses = (int)$coursesRepo->aggregate("count","id","");
?>
<section class="pt-0">
	<div class="container-fluid px-0">
		<div class="card bg-blue h-100px h-md-70px rounded-0" style="background:url(assets/images/pattern/04.png) no-repeat center center; background-size:cover;">
		</div>
	</div>
	<div class="container mt-n4">
		<div class="row">
			<div class="col-12">
				<div class="card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
					<div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
						<!-- Avatar -->
						<div class="col-auto">
							<a class="avatar avatar-xxl position-relative mt-n3" href="user/profile.php">
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
										<span class="h6"><?php echo $appliedcourses; ?></span>
										<span class="text-body fw-light"> Courses</span>
									</li>
									<li class="list-inline-item me-3 mb-1 mb-sm-0">
										<span class="h6"><?php echo  $totalcourses; ?></span>
										<span class="text-body fw-light">Available Courses</span>
									</li>
								</ul>
							</div>
							<!-- Button -->
							<!-- <div class="mt-2 mt-sm-0">
								<a href="user/mycourses.php" class="btn btn-outline-primary mb-0">View All Courses</a>
							</div> -->
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
								<a class="list-group-item <?php echo $current_file=='dashboard'? 'active' :'' ;?>" href="user/dashboard.php"><i class="bi bi-ui-checks-grid fa-fw me-2"></i>Dashboard</a>
								
								<a class="list-group-item <?php echo $current_file=='mycourses'? 'active' :'' ;?>" href="user/mycourses.php"><i class="bi bi-files fa-fw me-2"></i>My Courses</a>
								<a class="list-group-item <?php echo $current_file=='courses'? 'active' :'' ;?>" href="user/courses.php"><i class="bi bi-cart-check fa-fw me-2"></i>Courses</a>
								
								<a class="list-group-item <?php echo $current_file=='payments'? 'active' :'' ;?>" href="user/payments.php"><i class="bi bi-wallet2 fa-fw me-2"></i>Payments</a>
								<a class="list-group-item <?php echo $current_file=='documents'? 'active' :'' ;?>" href="user/documents.php"><i class="bi bi-file-earmark-text-fill me-2"></i>Documents</a>
								<!-- <a class="list-group-item" href="student-quiz.html"><i class="bi bi-question-diamond fa-fw me-2"></i>Quiz</a> -->
								<!-- <a class="list-group-item" href="student-payment-info.html"><i class="bi bi-credit-card-2-front fa-fw me-2"></i>Payment Info</a> -->
								<a class="list-group-item <?php echo $current_file=='profile'? 'active' :'' ;?>" href="user/profile.php"><i class="bi bi-pencil-square fa-fw me-2"></i>Profile</a>
								<!-- <a class="list-group-item" href="instructor-setting.html"><i class="bi bi-gear fa-fw me-2"></i>Settings</a> -->
								<!-- <a class="list-group-item" href="instructor-delete-account.html"><i class="bi bi-trash fa-fw me-2"></i>Delete Profile</a> -->
								<a class="list-group-item text-danger bg-danger-soft-hover" href="user/redirect/auth/logout.php"><i class="fas fa-sign-out-alt fa-fw me-2"></i>Sign Out</a>
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
