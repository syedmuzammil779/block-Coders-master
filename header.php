<!DOCTYPE html>
<html lang="en"  data-wf-page="60e442ed8da3f11af585f25c">
<head>
	<title>asd</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script>document.getElementsByTagName("html")[0].className += " js";</script>
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
<header>
	<div class="headerinner">
		<div class="container">
			<div class="logoContainer">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg">
			</div>
			<div class="menuContainer">
				<div class="hamburger">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="mainMenu">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Our Services</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</header>