<footer>
<div class="row zero-padmarg" id="homepage-footer">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				here is all the stuff.
			</div>
			<div class="col-md3">

			</div>

		</div>
	</div>
</div>
</footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<?php 

if ($sub_dir == 'yes') {
      print "<script src='../js/headroom.min.js'></script>";
}

elseif ($sub_dir == 'no') {
      print "<script src='js/headroom.min.js'></script>";
}

?>
	
<script>
(function() {
    var header = document.querySelector("#header");
    if(window.location.hash) {
      header.classList.add("slide--up");
    }

    new Headroom(header, {
        tolerance: {
          down : 10,
          up : 20
        },
        offset : 205,
        classes: {
          initial: "slide",
          pinned: "slide--reset",
          unpinned: "slide--up"
        }
    }).init();

}());
</script>
