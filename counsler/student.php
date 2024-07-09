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
<?php
//1 get email
if(isset($_REQUEST['email'])){
	$email = $_REQUEST['email'];
	$user = $usersRepo->fetch($email);
	$profile = $profileRepo->fetch($email);
	if(!$user){
		//back to students
		header("Location:counsler/student.php");
		exit();
	}
	$name = $user['name'];

}
else{
	//back to students
	// header("Location:counsler/student.php");
	// exit();
}
//2 get user details
//3 fill data
?>
<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->
<main>

<!-- =======================
Main part START -->
<section>
	<div class="container">
		<div class="row g-5 justify-content-between">
			<!-- Admission form START -->
				<h2 class="mb-0 text-center"><span class="text-orange">Student</span> Details</h2><br>
				<!-- Form START -->
				<form class="row g-3" action="counsler/redirect/profile/update.php">
					<hr>
					<h5 class="mb-0">Personal information</h5>
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Student Email <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="lastName"  name="email" value="<?php echo $email; ?>" readonly>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Student Name <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="firstName" name="name" value="<?php echo $name; ?>">
							</div>
						</div>
					</div>
					
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Mobile <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="number" class="form-control" id="mobile"  name="mobile" value="<?php echo $user['mobile']; ?>">
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">DOB <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="date" class="form-control" id="dob"  name="dob" value="<?php echo $profile['dob']; ?>">
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Address <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="mobile"  name="address" value="<?php echo $profile['address']; ?>">
							</div>
						</div>
					</div><hr>
                    <!-- Education -->
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

					


</body>

<!-- Mirrored from eduport.webestica.com/university-admission-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:07:59 GMT -->
</html>