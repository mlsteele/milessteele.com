<?php
$title='A Few Projects';
$collection = 'projects';
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

<?php ci2('animatedcf', 'antscoop'); ?>
<div class="alibi">
  The left image is a screenshot from a javascript program I wrote.
  While using <a href="/context_free">Context Free</a> as an artistic tool
  I found myself constantly changing variables by a tiny amount to get the perfect look and then rerendering.
  The movement that ensued was interesting but too choppy and slow. With this implementation I 
  put the focus on animation, so the location of a mouse of the passage of time would cause
  recursively described trees to grow and wilt.
  <br><br>
  The image on the right is my implementation of <a href="http://en.wikipedia.org/wiki/Langton's_ant">Langton's Ant</a>, a visual sort of Turing Machine.
  I experimented with the idea by placing two ants on the same grid and having them interact.
  Surprisingly, the two ants pictured above grow their colonies into each other, run through each other's for a while
  and then reunite on the perimeter and quickly expand to fill the entire canvas with a clear pattern.
</div>

<?php ci2('javafluid', 'octree'); ?>
<div class="alibi">
  Creating small simulations to go with my physics class studies perked my interest in
  simulations as an idea.
  I experimented with fluid and rigid body simulation, with various integration methods and combinations of them.
  I learned Java to create the fluid simulation on the left. On the right I took part of a game I had 
  previously written in C++ and implemented an octree to allow for many more colliding spheres.
  A side effect of debugging the octree is an interesting fractal-like pattern seen on the right.
</div>

<?php ci('jumble'); ?>
<div class="alibi">
  This tangled mess above is a combination of things I learned from physics class; namely
  (non)elastic collsions and springs.
</div>

<?php ci2('mag1', 'mag2'); ?>
<div class="alibi">
  In physics class last year I tried to generate visualizations of magnetic fields.
  These are a few of my attempts.
  One fun feature of using simulation is that you could move the mouse across the canvas
  and the needle of a virtual compass would swing to give a more visceral feel of the
  magnetic forces.
</div>
<?php ci('mag3'); ?>

<?php ci2('nest', 'physblue'); ?>
<div class="alibi">
  This summer I worked for Nest Labs as an intern working on visualization.
  I got to work with other programmers and designers, create some interactive projects,
  and learn a new language. This language was Javascript which may now be my favorite
  programming language, I used it to try yet another coding style on a physics simulation (on the right).
</div>

<?php ci('flyprofile'); ?>
<div class="alibi">
  Rendering from a 3d x-ray of a fly's head. This is from my internship with Manu Prakash at the MIT Media lab in 2010.
</div>

<?php
$collection = '';
?>
