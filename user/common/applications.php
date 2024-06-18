
					<!-- Card body START -->
					<div class="card-body">

						<!-- Search and select START -->
						<div class="row g-3 align-items-center justify-content-between mb-4">
							<!-- Content -->
							<div class="col-md-8">
								<form class="rounded position-relative">
									<input class="form-control pe-5 bg-transparent" type="search" placeholder="Search" aria-label="Search">
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
										<option>Free</option>
										<option>Newest</option>
										<option>Most popular</option>
										<option>Most Viewed</option>
									</select>
								</form>
							</div>
						</div>
						<!-- Search and select END -->

						<!-- Course list table START -->
						<div class="table-responsive border-0">
							<table class="table table-dark-gray align-middle p-4 mb-0 table-hover">
								<!-- Table head -->
								<thead>
									<tr>
										<th scope="col" class="border-0 rounded-start">College</th>
										<th scope="col" class="border-0">Application Id</th>
										<th scope="col" class="border-0">Fees</th>
										<th scope="col" class="border-0">Status</th>
										<th scope="col" class="border-0 rounded-end">Action</th>
									</tr>
								</thead>

								<!-- Table body START -->
								<tbody>
									<!-- Table item -->
									<?php

											$applications = $applicationsRepo->fetchBy("`sid` = '$email'");
											foreach($applications as $application){
												$college = $application['uname'];
												$id = "#".$application['id'];
												$fees = $currency.$application['fees'];
												$status =$application['status'];

									?>
									<tr>
										<!-- Table data -->
										<td>
											<div class="d-flex align-items-center">
												<!-- Image -->
											
												<div class="mb-0 ms-2">
													<!-- Title -->
													<h6><a href="#"><?php echo $college; ?></a></h6>
													<!-- Info -->
													<!--<div class="overflow-hidden">-->
													<!--	<h6 class="mb-0 text-end">85%</h6>-->
													<!--	<div class="progress progress-sm bg-primary bg-opacity-10">-->
													<!--		<div class="progress-bar bg-primary aos" role="progressbar" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">-->
													<!--		</div>-->
													<!--	</div>-->
													<!--</div>-->
												</div>
											</div>
										</td>

										<!-- Table data -->
										<td><h6><?php echo $id; ?></h6></td>

										<!-- Table data -->
										<td><h6><?php echo $fees; ?></h6></td>

										<!-- Table data -->
										<td>
											<div class="btn btn-sm btn-primary-soft mb-md-0"><?php echo $status ?></div>
										</td>
											
										<td>
										   <a href="user/application.php?id=<?php echo $application['id']; ?>" target="_blank"  class="btn btn-sm btn-primary-soft mb-md-0"><i class="bi bi-eye-fill circle me-1"></i>view</a>
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