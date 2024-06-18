<?php
$id = $_REQUEST['id'];
        $application = $applicationsRepo->fetch($id);
        if(!$application){
            header("Location: ../applications.php");
            exit();
        }
?>
			<!-- Personal information START -->
			<div class="col-xxl-6">
				<div class="card bg-transparent border rounded-3 h-100">

					<!-- Card header -->
					<div class="card-header bg-light border-bottom">
						<h5 class="card-header-title mb-0">Application details</h5>
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
										<span>Student :</span>
										<span class="h6 mb-0"><?php echo $application['sname']; ?></span>
									</li>

									<li class="list-group-item">
										<span>Counsler :</span>
										<span class="h6 mb-0"><?php echo $application['cname']; ?></span>
									</li>
									
									<li class="list-group-item">
										<span>University :</span>
										<span class="h6 mb-0"><?php echo $application['uname']; ?></span>
									</li>
									
									<!--<li class="list-group-item">-->
									<!--	<span>Address :</span>-->
									<!--	<span class="h6 mb-0"><?php echo $address ?></span>-->
									<!--</li>-->
									
									<!--<li class="list-group-item">-->
									<!--	<span>CGPA :</span>-->
									<!--	<span class="h6 mb-0"><?php echo $cgpa ?></span>-->
									<!--</li>-->
									<li class="list-group-item">
										<span>Major :</span>
										<span class="h6 mb-0"><?php echo $application['major']; ?></span>
									</li>

									<li class="list-group-item">
										<span>Degree :</span>
										<span class="h6 mb-0"><?php echo $application['degree']; ?></span>
									</li>
								</ul>
								
							</div>

							<!-- Information item -->
							<div class="col-md-6">
								<ul class="list-group list-group-borderless">
									<li class="list-group-item">
										<span>Semister :</span>
										<span class="h6 mb-0"><?php echo $application['semister']; ?></span>
									</li>

									<li class="list-group-item">
										<span>Fees :</span>
										<span class="h6 mb-0"><?php echo $application['fees']; ?></span>
									</li>
									
									<li class="list-group-item">
										<span>Counsler Commision :</span>
										<span class="h6 mb-0"><?php echo $application['ccm']; ?></span>
									</li>
									
									<li class="list-group-item">
										<span>Admin Commision :</span>
										<span class="h6 mb-0"><?php echo $application['acm']; ?></span>
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
			<div class="col-xxl-3">
				<div class="row g-4">

					<!-- Active student START -->
					<div class="col-md-6 col-xxl-12">
						<div class="card bg-transparent border overflow-hidden">
							<!-- Card header -->
							<div class="card-header bg-light border-bottom">
								<h6 class="card-header-title mb-0">Status</h6>
							</div>
							<!-- Card body -->
							<div class="card-body p-0">
								<div class="d-sm-flex justify-content-between p-4">
									<h5 class="text-blue mb-0"><?php echo $application['status'];; ?></h5>
									<!--<p class="mb-0"><span class="text-success me-1">0.20%<i class="bi bi-arrow-up"></i></span>vs last Week</p>-->
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
								<h6 class="card-header-title mb-0">Applied Date</h6>
							</div>
							<!-- Card body -->
							<div class="card-body p-0">
								<div class="d-sm-flex justify-content-between p-4">
									<h5 class="text-blue mb-0"><?php echo $application['appliedon'];; ?></h5>
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
								<h6 class="card-header-title mb-0">Approved Date</h6>
							</div>
							<!-- Card body -->
							<div class="card-body p-0">
								<div class="d-sm-flex justify-content-between p-4">
									<h5 class="text-blue mb-0"><?php echo $application['approvedon']; ?></h5>
									<!--<p class="mb-0"><span class="text-success me-1">0.35%<i class="bi bi-arrow-up"></i></span>vs last Week</p>-->
								</div>
							
							</div>
						</div>
					</div>
					<!-- Enrolled END -->

				</div>
			</div>
			<!-- Student status chart END -->
			


		</div> <!-- Row END -->
		<div class="row  d-flex justify-content-end">
		
		<!-- Edit information START -->
			<div class="col-xxl-9 mt-4">
				<div class="card bg-transparent border rounded-3 h-100">

					<!-- Card header -->
					<div class="card-header bg-light border-bottom">
						<h5 class="card-header-title mb-0">Edit Application details</h5>
					</div>

					<!-- Card body START -->
					<div class="card-body">
						<!-- Profile picture -->
						

						<!-- Information START -->
						<form action="admin/redirect/applications/update.php">
						<div class="row">
						    <input type="hidden" name="id" value="<?php echo $application['id']; ?>">
						    <?php
    						    $fields = [
                                    ['label'=>'Approved On','type'=>'date','name'=>'approvedon'],
                                    // ['label'=>'Status','type'=>'text','name'=>'status'],
                    
                                ];
                                $data = $application;
                                include "common/input.php";
                                
                            ?>
                            <div class="col-md-6 mb-4">
                                <label class="form-label">Status</label>
                                <select class="form-control" id="status" name="status">
									<?php
										
										foreach($appStatusList as $value=>$st){
											$isSelected = ($data['status'] == $st) ? 'selected' : '';
										
                                    ?>
                                    <option value="<?php echo $st ?>" <?php echo $isSelected; ?>> <?php echo $st; ?> </option>
									<?php } ?>
                                </select>
                            </div>
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