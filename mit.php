<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 

<link rel="shortcut icon" href="/images/micon/micon.ico">
<link rel="stylesheet" href="/style/common.css" type="text/css">

<script type="text/javascript" src="/js/vendor/jquery-1.6.1.min.js"></script>

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

<title>Miles Steele | MIT</title>

<?php
  # image placer functions
  function image_placer($imgname, $dir, $width) {
    global $collection;
    $ext = 'jpg';
    
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
  
  function mit_placer($imgname) {
    echo "<div class='galimg'>";
    image_placer($imgname, 660, 600);
    echo "</div>";
  }
?>

</head>

<body>

mit_placer("foo");

</body>
</html>
