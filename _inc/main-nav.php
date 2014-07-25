
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-5 col-md-offset-1">
					<h2 class="logo pull-left"><a href="<?php if ($sub_dir == 'yes') { print '../'; }  ?>index.php">Headlamp</a></h2>
				</div>
				<div class="col-md-5">
					<ul class="nav-header">
						<!-- <li><a href="">What We Do</a></li> -->
						<!-- <li><a href="">Our Work</a></li> -->
						<li><a href="">Who We Are</a></li>
						<li><a href="<?php if ($sub_dir == 'yes') { print '../'; } elseif ($sub_dir == 'no') { print '';} ?>design-sprints.php" class="<?php if ($active == 'yes') { print "$bg"; } ?>">Our Processes</a></li>
					</ul>
				</div>
			</div>
		</div>
