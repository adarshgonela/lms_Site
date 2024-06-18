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
				<!-- Edit profile START -->
				<div class="card bg-transparent border rounded-3">
					<!-- Card header -->
					<div class="card-header bg-transparent border-bottom">
						<h3 class="card-header-title mb-0">Edit Profile</h3>
					</div>
					<!-- Card body START -->
					<div class="card-body">
						<!-- Form -->
						<form action="user/redirect/profile/update.php" method="post" enctype="multipart/form-data" class="row g-4">

							<!-- Profile picture -->
							<!--<div class="col-12 justify-content-center align-items-center">-->
							<!--	<label class="form-label">Profile picture</label>-->
							<!--	<div class="d-flex align-items-center">-->
							<!--		<label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">-->
										<!-- Avatar place holder -->
							<!--			<span class="avatar avatar-xl">-->
							<!--				<img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/07.jpg" alt="">-->
							<!--			</span>-->
										<!-- Remove btn -->
							<!--			<button type="button" class="uploadremove"><i class="bi bi-x text-white"></i></button>-->
							<!--		</label>-->
									<!-- Upload button -->
							<!--		<label class="btn btn-primary-soft mb-0" for="uploadfile-1">Change</label>-->
							<!--		<input id="uploadfile-1" class="form-control d-none" type="file">-->
							<!--	</div>-->
							<!--</div>-->
							
								<!-- Full name -->
							<div class="col-12">
								<label class="form-label">Profile avatar</label>
								<div class="input-group">
									<input type="file" class="form-control" name="image" placeholder="Full name">
								</div>
							</div>


							<!-- Full name -->
							<div class="col-12">
								<label class="form-label">Full name</label>
								<div class="input-group">
									<input type="text" class="form-control" name="name" value="<?php echo $user['name']; ?>" placeholder="Full name">
								</div>
							</div>

							<!-- Username -->
							<div class="col-md-6">
								<label class="form-label">Username</label>
								<div class="input-group">
									<span class="input-group-text"><?php echo $bz; ?></span>
									<input type="text" class="form-control" value="<?php echo $user['email']; ?>" disabled
                                    >
								</div>
							</div>

							<!-- Email id -->
							<div class="col-md-6">
								<label class="form-label">Email id</label>
								<input class="form-control" type="email" value="<?php echo $user['email']; ?>"  placeholder="Email" disabled>
							</div>

							<!-- Phone number -->
							<div class="col-md-6">
								<label class="form-label">Phone number</label>
								<input type="text" class="form-control" name="mobile" value="<?php echo $user['mobile']; ?>" placeholder="Phone number">
							</div>

							<!-- Location -->
							<div class="col-md-6">
								<label class="form-label">Address</label>
								<input class="form-control" type="text" name="address" value="<?php echo $profile['address']; ?>">
							</div>
							<div class="col-md-6">
								<label class="form-label">Date of Birth</label>
								<input class="form-control" type="date" name="dob" value="<?php echo $profile['dob']; ?>">
							</div>						
                    <!-- Education -->
					 <hr>
					<h5 class="mt-0">Education</h5>

                    <!--  college -->
                    <div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Graduated College <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mobile"  name="college" value="<?php echo $profile['college']; ?>">
							</div>
						</div>
                    </div>
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Graduation Type <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="gtype"  name="gtype" value="<?php echo $profile['gtype']; ?>">
							</div>
						</div>
                    </div>
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Graduation Board <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="gboard"  name="gboard" value="<?php echo $profile['gboard']; ?>">
							</div>
						</div>
                    </div>
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Graduated Year <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="number" class="form-control" id="passingYear"  name="passingYear" value="<?php echo $profile['passingYear']; ?>">
							</div>
						</div>
                    </div>
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">CGPA <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="number" class="form-control" id="cgpa"  name="cgpa" value="<?php echo $profile['cgpa']; ?>">
							</div>
						</div>
                    </div>


					<div class="col-12 text-sm-end">
						<button type="save" class="btn btn-primary mb-0">Save Changes</button>
					</div>
							
						</form>
					</div>
					<!-- Card body END -->
				</div>
				<!-- Edit profile END -->
				
				</html>