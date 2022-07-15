<?php
    require_once "admin/autoloader.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="language" content="English">
  	<meta name="description" content="It is a website about education">
  	<meta name="keywords" content="blog,cms blog">
  	<link rel="stylesheet" href="admin/font-awesome-4.5.0/css/font-awesome.css">	
  	<link rel="stylesheet" href="admin/css/bootstrap.min.css">
  	<link rel="stylesheet" href="admin/css/style1.css">
	  
  	<title>News</title>
</head>
<body>
	<!-- START HERE -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<div class="container">
		<a href="index.php" class="navbar-brand">News</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#mainNav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="navbar-collapse collapse" id="mainNav">
			<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<?php
				if(!isset($_SESSION['useri'])){
					echo "<li class='nav-item'>";
						echo "<a href='index.php' class='nav-link active'>Home</a>";
					echo "<li>";
					echo "<li class='nav-item'>";
						echo "<a href='admin/index.php' class='nav-link'>Dashboard</a>";
					echo "<li>";
					echo "<li class='nav-item'>";
						echo "<a href='add_contact.php' class='nav-link'>Contact</a>";
					echo "<li>";
					
				}
				?>
			</li>
			<li class="nav-item">
				<a href="login.php" class="nav-link">Login&Register</a>
			</li>
			<li class="nav-item">
				
			</li>
			</ul>

		</div>
		</div>
	</nav>
	<!-- SLIDER WITH CAPTIONS -->
	<!-- SLIDER WITH CAPTIONS -->
	<div id="GFG" class="carousel slide  mb-4   text-center" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#GFG" data-slide-to="0" class="active"></li>
            <li data-target="#GFG" data-slide-to="1"></li>

            
        </ul>
        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://media4.s-nbcnews.com/j/newscms/2019_01/2705191/nbc-social-default_b6fa4fef0d31ca7e8bc7ff6d117ca9f4.nbcnews-fp-1024-512.png" alt="GFG"  width="1400" height="450">
            </div>
            <div class="carousel-item">
                <img src="https://hae-ino.org/wp-content/uploads/2015/07/news-3.jpg" alt="GFG" width="1400" height="450">
            </div>
            
            
        </div>
        <a class="carousel-control-prev" href="#GFG" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#GFG" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>