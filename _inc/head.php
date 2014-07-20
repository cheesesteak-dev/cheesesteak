<!DOCTYPE HTML>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php 

if ($sub_dir == 'yes') {
	    print "<!-- Bootstrap -->\n";
	    print "<link href='../css/bootstrap.min.css' rel='stylesheet'>\n";
	    print "<link href='../css/style.css' rel='stylesheet'>\n";
	    print "<link href='../fonts/fonts.css' rel='stylesheet'>\n";
	    print "<!-- Headroom -->\n";
	    print "<link href='../css/headroom.css' rel='stylesheet'>\n";
}

elseif ($sub_dir == 'no') {
	    print "<!-- Bootstrap -->\n";
	    print "<link href='css/bootstrap.min.css' rel='stylesheet'>\n";
	    print "<link href='css/style.css' rel='stylesheet'>\n";
	    print "<link href='fonts/fonts.css' rel='stylesheet'>\n";
	    print "<!-- Headroom -->\n";
	    print "<link href='css/headroom.css' rel='stylesheet'>\n";
}
	// if ($sub_dir="yes" && defined) {
	// 	print "<link href='../css/bootstrap.css' rel='stylesheet'>";
	// }
	// else {
	//     print "<!-- Bootstrap -->";
	//     print "<link href='css/bootstrap.css' rel='stylesheet'>";
	//     print "<link href='css/style.css' rel='stylesheet'>";
	//     print "<link href='fonts/fonts.css' rel='stylesheet'>";
	// }


?>





	<!-- <link rel="stylesheet" href="css/style.min.css" type="text/css" media="screen"> -->
	<!--[if IE]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>