<?php
$title='Animation';
$collection = 'animation';
?>

<?php
function video_placer($vid) {
    global $collection;
    echo "<iframe class=\"vidcan\" src=\"http://player.vimeo.com/video/$vid";
    echo "?byline=0&amp;";
    echo "portrait=0&amp;";
    echo "color=ffffff\" width=\"500\" height=\"400\" frameborder=\"0\">";
    echo "</iframe>";
}
?>

<?php video_placer(22821113); ?> <!-- Animation Reel 2009 -->
<?php video_placer(2889085); ?> <!-- Cell Animation -->
<?php video_placer(5805250); ?> <!-- Hover Sketch -->
<?php video_placer(3536637); ?> <!-- Bouncy Ball -->
<?php video_placer(2948759); ?> <!-- Juggling Rotoscope -->

<!-- 
<?php video_placer(2685879); ?> Multiple Arrays
<?php video_placer(3536639); ?> Tipover
 -->

<script type="text/javascript">
$(document).ready(function() {
	var duration =    1e3 * 1;
	var timebetween = 1e3 * .3;
	$.fn.reverse = [].reverse;
	$('.vidcan').reverse().hide().each(function(i, e){
 		setTimeout(function(){
			$(e).show(duration);
 		}, i * timebetween)
	});
});
</script>