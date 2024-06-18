	<?php
	if($current_file=='dashboard'){
	    echo '</div><div class="col-xl-12 mt-4">';
	}
	else{
	    echo '<div class="col-xl-9">';
	}
			?>
				<!-- Student review START -->
				<div class="card border bg-transparent rounded-3">
					<!-- Header START -->
					<div class="card-header bg-transparent border-bottom">
						<div class="row justify-content-between align-middle">
							<!-- Title -->
							<div class="col-sm-6">
								<h3 class="card-header-title mb-2 mb-sm-0">Universities</h3>
							</div>
							
							<!-- Short by filter -->
							<div class="col-sm-4">
								<form>
									<select class="form-select js-choice z-index-9 bg-white" aria-label=".form-select-sm">
										<option value="">Sort by</option>
										<option>★★★★★ (5/5)</option>
										<option>★★★★☆ (4/5)</option>
										<option>★★★☆☆ (3/5)</option>
										<option>★★☆☆☆ (2/5)</option>
										<option>★☆☆☆☆ (1/5)</option>
									</select>
								</form>
							</div>
						</div>
					</div>
					<!-- Header END -->

					<!-- Reviews START -->
					<div class="card-body mt-2 mt-sm-4">
					    
					<form class="rounded position-relative mb-4">
									<input class="form-control pe-5 bg-transparent" name="search" type="search" placeholder="Search" aria-label="Search" value="<?php
                            if(isset($_REQUEST['search'])){echo $_REQUEST['search']; }?>">
									<button class="bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset" type="submit">
								<i class="fas fa-search fs-6 "></i>
							</button>
					</form>
					<?php

						$colleges = $collegesRepo->fetchBy();
						foreach($colleges as $college){
							$collegeName = $college['name'];
							$location = $college['location'];
							$description = $college['description'];

					?>

						<!-- Review item START -->
						<div class="d-sm-flex">
							<!-- Avatar image -->
							<img class="avatar avatar-lg rounded-circle float-start me-3" src="assets/images/avatar/01.jpg" alt="avatar">
							<div>
								<div class="mb-3 d-sm-flex justify-content-sm-between align-items-center">
									<!-- Title -->
									<div>
										<h5 class="m-0"><?php echo $collegeName ?></h5>
										<span class="me-3 small"><?php echo $location ?> </span>
									</div>
									<!-- Review star -->
									<ul class="list-inline mb-0">
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
										<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
									</ul>	
								</div>
								<!-- Content -->
								<h6><span class="text-body fw-light">Eligibility:</span> GRE AND IELTS</h6>
								<p><?php echo $description ?></p>
								<!-- Button -->
								<div class="text-end">
									<!-- <a href="#" class="btn btn-sm btn-primary-soft mb-1 mb-sm-0">Direct message</a>
									<a class="btn btn-sm btn-light mb-0" data-bs-toggle="collapse" href="#collapseComment" role="button" aria-expanded="false" aria-controls="collapseComment">
										Reply
									</a> -->
									<!-- collapse textarea -->
									<div class="collapse show" id="collapseComment">
									<form action="">
										<div class="d-flex mt-3">
											<textarea class="form-control mb-0" placeholder="Add a comment..." rows="2" spellcheck="false"></textarea>
											<button class="btn btn-sm btn-primary-soft ms-2 px-4 mb-0 flex-shrink-0"><i class="fas fa-paper-plane fs-5"></i><span class="mx-2">Apply</span></button>
										</div>
									</form>
									</div>
								</div>
							</div>
						</div>
						<!-- Divider -->
						<hr>
						<!-- Review item END -->
						<?php } ?>
					</div>
					<!-- Reviews END -->

					<div class="card-footer border-top">
						<!-- Pagination START -->
						<div class="d-sm-flex justify-content-sm-between align-items-sm-center">
							<!-- Content -->
							<p class="mb-0 text-center text-sm-start">Showing 1 to 8 of 20 entries</p>
							<!-- Pagination -->
							<nav class="d-flex justify-content-center mb-0" aria-label="navigation">
								<ul class="pagination pagination-sm pagination-primary-soft my-0 py-0">
									<li class="page-item my-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-left"></i></a></li>
									<li class="page-item my-0"><a class="page-link" href="#">1</a></li>
									<li class="page-item my-0 active"><a class="page-link" href="#">2</a></li>
									<li class="page-item my-0"><a class="page-link" href="#">3</a></li>
									<li class="page-item my-0"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
								</ul>
							</nav>
						</div>
						<!-- Pagination END -->
					</div>
				</div>
				<!-- Student review END -->
			</div>
			<!-- Main content END -->