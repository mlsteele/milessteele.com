<?php
$title='Blender 3D';
$collection = 'blender';
?>

<?php ci('orgs_attack'); ?>

<div class="alibi">
	Blender 3D is a free, open-source 3d creation suite that can do just about anything, 
	from modeling & rendering to video processing and compositing.
	Blender is a fantastic creative tool and can be found at <a href="http://blender.org">blender.org</a>.
	I discovered Blender at <a href="http://siggraph.org/s2008/">Siggraph '08</a>.
	This gallery is a selection of my Blender creations since the summer of 2010.
</div>

<?php ci('wallp'); ?>


<?php ci2('origami_l2', 'menger-l2'); ?>

<div class="alibi">
	These popped out of a habit of folding origami cubes in my summer basement-home when away from the media lab.
	They are inspired by Jeannine Mosely's origami menger sponge.
</div>


<?php ci('cubefield'); ?>
<?php ci('splocks'); ?>


<?php ci('4cube'); ?>

<?php ci('gyroscope'); ?>

<?php ci('crawler'); ?>

<?php ci('sierpinski_mesh'); ?>
<div class="alibi">
	A sierpinski tetrahedron produces a pleasantly recursive shadow.
</div>
<?php ci('sierpinski_shadows'); ?>

<?php $collection = ''; ?>


<!--
Well, I tried. But simplicity and existing UI conventions won again.
<script type="text/javascript">
$(document).ready(function() {
	$('body').append('<div id="gup" style="position: fixed; top: 40px; right: 0px;">UP</div>');
	$('body').append('<div id="gdn" style="position: fixed; top: 60px; right: 0px;">DN</div>');
	$('body').append('<div id="cid" style="position: fixed; top: 80px; right: 0px;">?</div>');
	var gup = $('#gup');
	var gdn = $('#gdn');
	var cid = $('#cid');
	var ci = 0;
	
	function getBox(index) {
		return $('#content .fbox:eq('+index+')');
	}
	
	function galScroll() {
		console.log(ci);
		box = getBox(ci);
		$('html, body').animate({
				scrollTop: box.offset().top - box.children('img').height()
		}, 200);
	}
	
	function updateCi(i) {
		ci = i;
		cid.html(ci);
		
		var guipos = getBox(ci).offset().top - getBox(ci).children('img').height() - $(document).scrollTop();
		guipos = $(window).height()/2;
		gup.offset({top: guipos});
		gdn.offset({top: guipos + 20});
		cid.offset({top: guipos + 40});
		
		getBox(ci - 1).length ? gup.show() : gup.hide();
		getBox(ci + 1).length ? gdn.show() : gdn.hide();
	}
	
	updateCi(0);
	
	$('#content .fbox').mouseover(function() {
		updateCi( $.inArray(this, $('#content .fbox')) )
	});
	
	gup.click(function() {
		updateCi(--ci);
		galScroll();
	});
	
	gdn.click(function() {
		updateCi(++ci);
		galScroll();
	});
	
	$(document).scroll(function() {
		updateCi(ci);
		
		
		// Find topmost element
		findloop:
		for (var n = 0; n < $("#content .fbox").length; n++) {
			var bmax = getBox(n).offset().top;
			var bmin = bmax - getBox(n).children('img').height();
			var smin = $(document).scrollTop();
			var smax = smin + $(window).height();
			
			if (
				(bmax < smax) &&
				(bmin > smin)
			) {
				updateCi(n);
				break;
			}
		}
		
	});
});
</script>
-->
