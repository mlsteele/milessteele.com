<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta name="description" content="The image portfolio of Miles Steele.">

<link rel="shortcut icon" href="/images/micon/micon.ico">
<link rel="stylesheet" href="/style/basis.css" type="text/css">

<script type="text/javascript" src="/js/jquery-1.6.1.min.js"></script>

<!-- fancybox -->
<!-- Requires jQuery here btw -->
<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
<script type="text/javascript" src="/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen">
<script type="text/javascript">
	$(document).ready(function(){
		$("a.fbox").fancybox({
			'transitionIn'		:	'elastic',
			'transitionOut'		:	'fade',
			'speedIn'			:	200,
			'speedOut'			:	100,
			'overlayShow'		:	true,
			'overlayOpacity'	:	.4,
			'overlayColor'		:	'#000',
			'hideOnOverlayClick':	true,
			'autoScale'			:	true,
			'centerOnScroll'	:	false,
			'titleShow'			:	false,
			'changeSpeed'		:	100,
			'cyclic'			:	true
		});
	});
</script>
<!-- /fancybox -->

<!-- NavBar
<script type="text/javascript">
	$(document).ready(function() {
		var nav = $('#nav');
		var nit = {
			top: nav.offset().top - parseInt(nav.css('margin-top'), 10),
			left: nav.offset().left - parseInt(nav.css('margin-left'), 10),
		}
		
		$(window).scroll(function() {
			var wt = $(window).scrollTop()
			console.log(wt > nit.top);
			if (wt > nit.top) {
				nav.css({
					'position': 'fixed',
					'top': '0px'
				});
			} else {
				nav.css({
					'position': 'static',
					'top': 'auto'
				});
			}
		});
	});
</script>
-->

<?php
	# setup page identification
	$pageid = $_GET['pageid'];
	$title = '';
	
	# buffer page contents
	function callback($buffer) {}
	ob_start("callback");
	if ($pageid == "") {
		$title = '';
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
	function image_placer($imgname, $factor) {
		if ($factor == 1) {
		    $dir = 660;
		    $width = 600;
		} elseif ($factor == .5) {
		    $dir = 300;
		    $width = 300;
		}
		global $collection;
		echo "<a href=\"images/$collection/fbox/$imgname.jpg\" class=\"fbox\" rel=\"$collection\"><img class=\"fimage\" src=\"images/$collection/$dir/$imgname.jpg\" width=\"$width\" alt=\"collection item\"></a>";
	}
	
	function image_placer_catlist($imgname, $set, $width) {
		echo "<a href=\"$set\"><img class=\"fimage\" src=\"images/$set/300/$imgname.jpg\" width=\"$width\" alt=\"collection item\"></a>";
	}
?>

</head>

<body>

<div id="container">
	<div id="colL">
		<a id="symbol" href="/"></a>
		<div id="divisorL"></div>
		<div id="nav">
			<ul id="navlist">
				<a href="blender"><li>Blender 3D</li></a>
				<a href="animation"><li>Animation</li></a>
				<a href="context_free"><li>Context Free</li></a>
				<a href="voluminisms"><li>Voluminisms</li></a>
				<a href="programming"><li>Programming</li></a>
			</ul>
		</div>
	</div>
	<div id="divisorM"></div>
	<div id="colR">
		<div id="pagetitle"><?php echo $title; ?></div>
		<div id="divisorR"></div>
		<div id="content">
			<?php echo "$content_buffer"; ?>
		</div>
	</div>
	<div id="footer">
        <a href="javascript:$('body').animate({scrollTop: '0px'}, 200);">Top</a> | &#169; 2011 <a href="about_me">Miles Steele</a> <!--| <a href="">Something Interesting</a>-->
    </div>
</div>

</body>
</html>
