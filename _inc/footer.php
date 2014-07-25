<footer>
<div class="container-fluid">
  <div class="row" id="homepage-footer">
		<div class="col-md-5 col-md-offset-1">
			<h3>Let's talk about what Headlamp can do for you. </h3>
      <p>email: <a href="mailto:hello@headlamp.us">hello@headlamp.us</a><br />
      twitter: <a href="https://twitter.com/headlampDesign">@headlampDesign</a></p>
		</div>
    <div class="col-md-3"></div>
    <div class="col-md-3"></div>
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

  $(document).ready(function() {
    $('[data-toggle=tooltip]').tooltip();
}); 

$("#button").click(function() {
    $('html, body').animate({
        scrollTop: $("#myDiv").offset().top
    }, 1000);
});
</script>
