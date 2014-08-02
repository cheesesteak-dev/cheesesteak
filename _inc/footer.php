<footer>
<div class="container-fluid">
  <div class="row" id="homepage-footer">
    <div class="col-md-6 col-md-offset-1">
        <ul>
          <li><a href="http://twitter.com/headlampDesign"><img src="<?php if ($sub_dir=="yes") { print "../"; } ?>img/footer-icon-twitter.png"/></a></li>
          <li><a href="https://github.com/headlamp-dev"><img src="<?php if ($sub_dir=="yes") { print "../"; } ?>img/footer-icon-github.png"/></a></li>
      </ul>
    </div>
		<div class="col-md-4 text-right">
			<h3>Let's talk about what Headlamp can do for you. </h3>
      <p>email: <a href="mailto:hello@headlamp.us">hello@headlamp.us</a></p>
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
