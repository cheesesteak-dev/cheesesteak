<?php 
include '_inc/vars.php';
$sub_dir = "no";
$active = "yes";
$page = "about";
include '_inc/head.php';
?>


<body>


<header id="header" class="header header--fixed hide-from-print" role="banner">
	<div class="container-fluid">
		<div class="col-md-12 zero-padmarg">
			<?php include "_inc/main-nav.php"; ?>
		</div>

	</div>
</header>

<!-- <div class="container-fluid leader-bg leader-bg-homepage bg-cover case-border-bottom">
			<h2 class="leaderboard text-center">We'll Help You Find Your Path to Success</h2>
	<div class="row">
		<div class="col-md-12 text-center">
		</div>
		<div id="button">
		&or;
		</div>
	</div>
</div> -->    

<div class="container-fluid leaderboard-master leader-bg-about bg-cover" >
	<div class="row zero-padmarg fifty-padding-bottom">
		<div class="col-md-8 col-md-offset-2 text-center">
			<p class="primary-tb">Headlamp brings together individuals with specialties in search engine optimization, experience, interface, and web design.</p>
		</div>
	</div>
</div>

<div class="container-fluid border-bottom-8">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h3 class="section-title-text">Our Specialties</h4>
		</div>
	</div>
	<div class="row fifty-padding-bottom">
		<div class="col-md-4 text-center">
			<p class="heading">Search Engine Optimization</p>
			<ul class="specialty">
				<li>Keyword Research</li>
				<li>Landing Page Optimization</li>
				<li>Content Marketing</li>
				<li>Information Architecture</li>
			</ul>
		</div>
		<div class="col-md-4 text-center">
	 		<p class="heading">UX/UI Design</p>
			<ul class="specialty">
				<li>User Research</li>
				<li>Prototyping</li>
				<li>A/B Testing</li>
				<li>Visual/UI Design</li>
			</ul>
		</div>
		<div class="col-md-4 text-center">
			<p class="heading">Product Management</p>
			<ul class="specialty">
				<li>Competitive Analysis</li>
				<li>Market Positioning</li>
				<li>Research</li>
				<li>Data Analysis</li>
			</ul>
		</div>
	</div>
</div>

<div class="container-fluid fifty-padding-top">
	 <div class="row zero-padmarg">
		<div class="col-md-6 text-center fifty-padding-bottom bg-blog">
			<p class="heading">Blog</p>
			<p>Thoughts on design, latest trends, and general information</p>
			<a href="http://blog.headlamp.us" class="button">Read the Blog &gt;&gt;</a>
		</div>
		<div class="col-md-6 text-center fifty-padding-bottom">
			<p class="heading">Tools to Get the Job Done</p>
			<p>AdobeCC &bull; Github &bull; Google Analytics &bull; Jira &bull; Sublime text</p>
		</div>
	</div> 
</div>


<div class="container-fluid text-center bg-f2 thirty-paddingTB">
	<div class="row zero-padmarg">
		<div class="col-md-12">
			<p class="heading">Companies We've Worked With</p>
			<ul class="logos">
				<li><img src="img/logo-imh.png" /></li>
				<li><img src="img/logo-milo.png" /></li>
				<li><img src="img/logo-hub.png" /></li>
				<li><img src="img/logo-skyconcepts.png" /></li>
				<li><img src="img/logo-wijaba.jpg" /></li>
			</ul>
		</div>
	</div>	

</div>

<?php include '_inc/footer.php' ?>

</body>
</html>