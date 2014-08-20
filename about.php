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
 
<div class="container-fluid leaderboard-master leader-bg-about bg-cover" >
	<div class="row zero-padmarg fifty-padding-bottom">
		<div class="col-md-8 col-md-offset-2 text-center">
			<p class="primary-tb">CheeseSteakCreative (CSCreative), brings together individuals with specialties in search engine optimization, experience, interface, and web design.</p>
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

<div class="container-fluid text-center bg-f2 thirty-paddingTB border-bottom-8">
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

<div class="container-fluid fifty-padding-top case-border-bottom">
	 <div class="row zero-padmarg">
		<div class="col-md-6 text-center fifty-padding-bottom bg-blog">
			<p class="heading">Our Cheesy Blog</p>
			<p>Thoughts on design, latest trends, and general information</p>
			<a href="http://blog.headlamp.us" class="button">Read the Blog &gt;&gt;</a>
		</div>
		<div class="col-md-6 text-center fifty-padding-bottom">
			<p class="heading">What Our Names Means to Us</p>
			<p>The name CheeseSteakCreative was inspired one day by a lunch trip to the <a href="http://www.yelp.com/biz/submariner-los-angeles" target="_blank">local cheesesteak shop</a>. It's delicious, filling, and gets the job done.</p>
		</div>
	</div> 
</div>

<div class="container-fluid bg-f4">
	<div class="row">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h3 class="section-title-text">Branding Styleguide</h3>
		</div>
	</div>
	<div class="row fifty-paddingTB text-center">
		<div class="col-md-2 col-md-offset-1">
			<img class="pallette-block center-block mayo-white" />
			<p>Mayo White<br />Hex: #323D34<br />RGB: 423,435,123<br />CMYK: 234,323,235,469</p>
		</div>
		<div class="col-md-2">
			<img class="pallette-block center-block cheesy-orange" />
			<p>Cheesy Orange<br />Hex: #323D34<br />RGB: 423,435,123<br />CMYK: 234,323,235,469</p>
		</div>
		<div class="col-md-2">
			<img class="pallette-block center-block sriracha-red" />
			<p>Sriracha Red<br />Hex: #323D34<br />RGB: 423,435,123<br />CMYK: 234,323,235,469</p>
		</div>
		<div class="col-md-2">
			<img class="pallette-block center-block steak-brown" />
			<p>Steak Brown<br />Hex: #323D34<br />RGB: 423,435,123<br />CMYK: 234,323,235,469</p>
		</div>
		<div class="col-md-2">
			<img class="pallette-block center-block mushroom-grey" />
			<p>Mushroom Grey<br />Hex: #323D34<br />RGB: 423,435,123<br />CMYK: 234,323,235,469</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-7 col-md-offset-1 text-left">
			<h3 class="section-title reset">Section Header: 45px/ 'sinkin300Light'</h3>
			<p class="heading reset">Sub-Heading: 27px/ 'sinkin300Light'</p>
			<ul class="specialty text-left zero-padmarg">
				<li>List Style: 20px/ 'sinkin200'</li>
			</ul>
			<p class="reset">Paragraph Text: 18px/1.8 'sinkin200'</p>
			<p class="guide-link reset">Button Link: 15px/ 'sinkin200'</p>
		</div>
	</div>
</div>

<?php include '_inc/footer.php' ?>

</body>
</html>