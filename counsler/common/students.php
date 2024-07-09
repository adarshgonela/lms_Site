<div class="card border bg-transparent rounded-3">
					<!-- Card header START -->
					<div class="card-header bg-transparent border-bottom">
						<h3 class="mb-0">My Students</h3>
					</div>
					<!-- Card header END -->

					<!-- Card body START -->
					<div class="card-body">

						<!-- Search and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-4">
							<!-- Search -->
							<div class="col-md-8">
							<form class="rounded position-relative">
									<input class="form-control pe-5 bg-transparent" name="search" type="search" placeholder="Search" aria-label="Search" value="<?php
                            if(isset($_REQUEST['search'])){echo $_REQUEST['search']; }?>">
									<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
							</form>
					        </div>
							<!-- Select option -->
							<div class="col-md-3">
								<!-- Short by filter -->
								<form>
									<select class="form-select js-choice border-0 z-index-9 bg-transparent" aria-label=".form-select-sm">
										<option value="">Sort by</option>
										<option><?php echo $students ?></option>
									</select>
								</form>
							</div>
						</div>
						<!-- Search and select END -->

						<!-- Student list table START -->
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

										if(isset($_REQUEST['search'])){
											$search = $_REQUEST['search'];
											$students = $usersRepo->fetchby("`counsler`='$email' AND `name` LIKE '%$search%'");
										}
										else{
											$students = $usersRepo->fetchby("`counsler`='$email' && `role`='Student'");
										}
										
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
<<<<<<< HEAD
													<h6 class="mb-0"><a href="counsler/applications.php?student=<?php echo $studentEmail ?>" class="stretched-link"><?php echo $studentName ?></a></h6>
=======
													<h6 class="mb-0"><a href="counsler\student.php?email=<?php echo $studentEmail ?>" class="stretched-link"><?php echo $studentName ?></a></h6>
													
>>>>>>> 6b9443c826dfb26d31527ce85d61da1487457e8c
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
                                    <?php } ?>
								</tbody>
								<!-- Table body END -->
							</table>
						</div>
						<!-- Student list table END -->

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