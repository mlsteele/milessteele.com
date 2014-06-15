<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta name="description" content="The image portfolio of Miles Steele.">

<link rel="shortcut icon" href="/images/micon/micon.ico">
<link rel="stylesheet" href="/style/common.css" type="text/css">

<script type="text/javascript" src="/js/vendor/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="/js/common.js"></script>

<!-- fancybox -->
<!-- Requires jQuery -->
<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.1.js"></script>
<script type="text/javascript" src="/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen">
<script type="text/javascript">
	$(document).ready(function(){
		$("a.fbox").fancybox({
			'padding':             0,
			'transitionIn':        'elastic',
			'transitionOut':       'fade',
			'speedIn':             200,
			'speedOut':            100,
			'overlayShow':         true,
			'overlayOpacity':      .4,
			'overlayColor':        '#000',
			'hideOnOverlayClick':  true,
			'closeOnScroll':       true,
			'autoScale':           true,
			'centerOnScroll':      false,
			'titleShow':           false,
			'changeSpeed':         0,
			'changeFade':          100,
			'cyclic':              true
		});
	});
</script>
<!-- /fancybox -->

<?php
	# setup page identification
	$pageid = $_GET['pageid'];
	$title = '';
	
	# buffer page contents
	function callback($buffer) {}
	ob_start("callback");
	if ($pageid == "") {
		include("home.php");
	}
	else {
		include("$pageid.php");
	}
	$content_buffer = ob_get_contents();
	ob_end_clean();
	
	# entitle page
	echo "<title>";
	if ($pageid == "") {
		echo "Miles Steele";
	}
	else {
		echo "Miles Steele | $title";
	}
	echo "</title>";
?>

<?php
	# image placer functions
	function image_placer($imgname, $dir, $width) {
		global $collection;
		
		# Wee, a hack! (image file extensions)
		if ($collection == 'orbitals' || $collection == 'projects') {
			$ext = 'png';
		} else {
			$ext = 'jpg';
		}
		
		echo "<a
			href='images/$collection/fbox/$imgname.$ext'
			class='fbox'
			rel='$collection'
			><img
			src='images/$collection/$dir/$imgname.$ext'
			width='$width'
			alt='collection item'
		></a>";
	}
	
	function ci($imgname) {
		echo "<div class='galimg'>";
		image_placer($imgname, 660, 600);
		echo "</div>";
	}
	
	function ci2($imgname1, $imgname2) {
		echo "<div class='galimg left'>";
		image_placer($imgname1, 300, 280);
		echo "</div>";
		echo "<div class='galimg right'>";
		image_placer($imgname2, 300, 280);
		echo "</div>";
		
	}
?>

</head>

<body>

<div id="container">
	<div id="colL">
		<a id="symbol" href="/"></a>
		<div id="divisorL"></div>
		<div id="nav">
			<div class="navdiv"></div>
			<a href="/blender">Blender 3D</a>
			<div class="navdiv"></div>
			<a href="/animation">Animation</a>
			<div class="navdiv"></div>
			<a href="/context_free">Context Free</a>
			<div class="navdiv"></div>
			<a href="/projects">Programming</a>
			<div class="navdiv"></div>
			<a href="/orbitals">Orbitals</a>
			<div class="navdiv"></div>
			<a href="/traditional">Traditional</a>
			<div class="navdiv"></div>
		</div>
	</div>
	<div id="divisorM"></div>
	<div id="colR">
		<div id="pagetitle"><?php echo $title; ?></div>
		<div id="content">
			<?php echo "$content_buffer"; ?>
		</div>
	</div>
	<div id="footer">
		<span>&#169; 2014 &#8764; </span><a href="/about">Miles Steele</a><span class="uplink"> &#8764; <a href="javascript:void(0)" class="uplink">Top</a></span>
	</div>
</div>
<a id="aboutcurl" href="about"></a>
<div id="uparrow"></div>

</body>
</html>
