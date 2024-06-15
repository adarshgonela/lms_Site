<!DOCTYPE html>
<html lang="en">

<head>
	<title>Eduport - LMS, Education and Course Theme</title>

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
	$name = $user['name'];
}
else{
	$email = "";
	$name = "";
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
			<div class="col-md-8 mx-auto">
				<!-- Title -->
				<?php
				if(isset($_REQUEST['msg'])){
				?>
				<div class="alert alert-warning" width="100%">
				<h3 class="text-primary mb-0"><?php echo $_REQUEST['msg'] ?></h3>
				</div>
				<?php
				}?>
				<hr>
				<h2 class="mb-3">Apply for College</h2>
				<p>You can apply online by filling up below form or <a href="#">Download a pdf</a> and submit. Any question related admission process, please contact our admission office at <a href="#">+123 456 789</a> or <a href="#">example@email.com</a>.</p>
				<p class="mb-1">Before you proceed with the form please read below topics:</p>
				<ul class="ps-3">
					<li>Application fee is $49</li>
					<li>Fees are non-refundable</li>
					<li>Field required with <span class="text-danger">*</span> are required to complete the admission form</li>
				</ul>
				<!-- Form START -->
				<form class="row g-3" action="counsler/redirect/applications/add.php">
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
								<input type="text" class="form-control" id="firstName" name="name" value="<?php echo $name; ?>" disabled>
							</div>
						</div>
					</div><hr>
                    <!-- Education -->
					<h5 class="mt-0">College</h5>

                    <!-- select college -->
                    <div class="col-12">
                        <div class="row g-xl-0 align-items-center">
                            <div class="col-lg-4">
                                <h6 class="mb-lg-0">Select College <span class="text-danger">*</span></h6>
                            </div>
                            <div class="col-lg-8">
                                <select class="form-control" id="collegeName" name="collegeId">
									<?php
										$colleges = $collegesRepo->fetchby("");
										foreach($colleges as $college){
											$collegeId = $college['id'];
											$collegeName = $college['name'];
											$collegeFees = $college['fee'];
										
                                    ?>
                                    <option value="<?php echo $collegeId ?>"> <?php echo "$collegeName  ( $currency$collegeFees )"; ?> </option>
									<?php } ?>
                                </select>
                            </div>
							</div>
    
					





                    </div>


					<div class="col-12 text-sm-end">
						<button type="submit" class="btn btn-primary mb-0">Submit</button>
					</div>

                </form>

					


</body>

<!-- Mirrored from eduport.webestica.com/university-admission-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 May 2024 09:07:59 GMT -->
</html>