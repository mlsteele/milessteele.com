<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta name="description" content="The image portfolio of Miles Steele.">

<link rel="stylesheet" href="/css/basis.css" type="text/css">

<link rel="shortcut icon" href="/images/micon/micon.ico">

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
	
	# title page
	echo "<title>";
	if ($pageid == "") {
		echo "Miles Steele";
	}
	else {
		echo "Miles Steele | $title";
	}
	echo "</title>";
?>

<!-- lightbox
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css">
-->

<!-- fancybox -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
<script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
<script type="text/javascript" src="/fancybox/jquery.easing-1.3.pack.js"></script>
<script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen">
<script type="text/javascript">
	$(document).ready(function(){
		$("a.fbox").fancybox({
			'transitionIn'		:	'fade',
			'transitionOut'		:	'fade',
			'speedIn'			:	200,
			'speedOut'			:	200,
			'overlayShow'		:	true,
			'overlayOpacity'	:	.3,
			'overlayColor'		:	'#E3D8C0',
			'hideOnOverlayClick':	true,
			'autoScale'			:	true,
			'centerOnScroll'	:	true,
			'titleShow'			:	false,
			'changeSpeed'		:	200,
		});
	});
</script>
<!-- /fancybox -->

<?php
	# image placer functions
	function image_placer($imgname, $width) {
		global $collection;
		echo "<a href=\"images/$collection/fbox/$imgname.jpg\" class=\"fbox\" rel=\"$collection\"><img class=\"imageholder\" src=\"images/$collection/$width/$imgname.jpg\" width=\"$width\" alt=\"collection item\"></a>";
	}
	
	function image_placer_catlist($imgname, $set, $width) {
		echo "<a href=\"$set\"><img class=\"imageholder\" style=\"margin: 0px;\" src=\"images/$set/300/$imgname.jpg\" width=\"$width\" alt=\"collection item\"></a>";
	}
?>

</head>


<body>
<!--<div id="shadow_left"><div id="shadow_right">--><div id="container"><div id="shadow_in_left"><div id="shadow_in_right">

	<div id="head">
		<a href="/" id="head_left">
			<span style="font-size: 16pt; margin-left: 5px">Miles<b>Steele</b></span><br>
			<span style="font-size: 12pt; margin-left: 10px">
				<b>image</b>portfolio
			</span>
		</a>
		<a href="about_me" id="head_right">
			<span style="font-size: 12pt;">about<b>me</b></span>
			<img style="float: right;" src="images/person_icon2.png" alt="" height="25px">
		</a>
	</div>

	<div id="navcol">
		<ul id="navlist">
		<li><a href="blender">Blender</a></li>
		<li><a href="animation">Animation</a></li>
		<li><a href="context_free">Context Free</a></li>
		<li><a href="voluminisms">Voluminisms</a></li>
		<li><a href="avatars">Avatars</a></li>
		</ul>
	</div>
	
	<div id="content">
		<?php
			echo "$content_buffer";
		?>
	</div>
	
	<div id="footer">
		<p><a href="javascript:scroll(0,0)">Top</a> | &#169; 2010 <a href="about_me">Miles Steele</a></p>
	</div>
	
</div></div></div><!--</div></div>-->
</body>
</html>