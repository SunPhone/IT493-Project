<?php
	// Initialize session
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: login.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleLogin.css"\>
        <script src="scripts.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@500&display=swap" rel="stylesheet">
	
</head>
<body>

<!--Navigation bar-->
        <nav class="navbar">
            <nav class="navbar__container">
                <a href="index.html" id="navbar__logo">
                    <i class="fas fa-leaf"></i>BPF
                </a>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                       <a href="../tax.html" class="navbar__links">Taxes</a> 
                    </li>
                    <li class="navbar__item">
                        <a href="../writeup.html" class="navbar__links">Write Ups</a> 
                     </li>
                     <li class="navbar__item">
                        <a href="../payroll.html" class="navbar__links">Payroll</a> 
                     </li>
                     <li class="navbar__item">
                        <a href="../project.html" class="navbar__links">Project Control</a> 
                     </li>
                     <li class="navbar__item">
                        <a href="../about.html" class="navbar__links">About Me</a> 
                     </li>
                     <li class="navbar__btn">
                         <a href="login.php" class="button"><i class="far fa-user"></i>Sign In</a>
                     </li>
                     <li class="navbar__btn">
                        <a href="/" class="button"><i class="fas fa-shopping-cart"></i>Cart</a>
                    </li>
                                  
                </ul>
            </nav>
        </nav>

	<main>
		<section class="container wrapper">
			<div class="page-header">
				<h2 class="display-5">Welcome <?php echo $_SESSION['username']; ?></h2>
			</div>
			
			<a href="/" class="btn btn-block btn-outline-success">2020 Tax Return: Download</a>
			
			<br>
			
			<a href="password_reset.php" class="btn btn-block btn-outline-warning">Reset Password</a>
			<a href="logout.php" class="btn btn-block btn-outline-danger">Sign Out</a>
		</section>
	</main>
</body>
</html>
