<?php
$title='Context Free';
$collection = 'context_free';
?>

<?php ci('nexuses_TVB_small'); ?>

<div class="alibi">
    <a href="http://www.contextfreeart.org/">Context Free</a>
     is a mini language for describing recursive shapes.
    Every Context Free design is expressed as a collection of
    three primitives (circle, square, and triangle) as well as transformations
    to be applied recursively to these shapes. Each method represents several levels
    and the shape can pop between methods via a pseudo-random number generator which
    chooses which of the multiple definitions of a method to use.
    The language feels organic, being ideal for trees and ferns and other such natural patterns.
</div>

<?php ci('ferns2'); ?>

<?php ci('fan_SXK'); ?>
<div class="alibi">
    The source for the above image:
    <br>
    <pre style="float: left;">startshape FAN

rule <span class="functionName">FAN</span> {
    12 * {<span class="operator">r</span> 30}  {TSPRIT{}}
}

rule <span class="functionName">TSPRIT</span> {
    SPRIT{<span class="operator">y</span> 3}
    SPRIT{<span class="operator">y</span> -3 <span class="operator">s</span> .3}
}

rule <span class="functionName">SPRIT</span> {
    <span class="primitiveCall">TRIANGLE</span>{}
    <span class="recursiveCall">SPRIT</span>{<span class="operator">y</span> .9 <span class="operator">r</span> -5 <span class="operator">s</span> .94}
}

rule <span class="functionName">SPRIT</span> .25 {
    <span class="primitiveCall">TRIANGLE</span>{}
    <span class="recursiveCall">SPRIT</span>{<span class="operator">y</span> .9 <span class="operator">s</span> .94}
}

rule <span class="functionName">SPRIT</span> .25 {
    <span class="primitiveCall">TRIANGLE</span>{}
    <span class="recursiveCall">SPRIT</span>{<span class="operator">y</span> .9 <span class="operator">r</span> -5 <span class="operator">s</span> .94}
    <span class="recursiveCall">SPRIT</span>{<span class="operator">y</span> .9 <span class="operator">r</span> -5 f 90 <span class="operator">s</span> .75}
}
    </pre>
    <pre style="float: right;">rule <span class="functionName">SPRIT</span> .05 {
    <span class="primitiveCall">TRIANGLE</span>{}
    SPROOT{}
}

rule <span class="functionName">SPROOT</span> {
    SPREET{x sin(0) <span class="operator">y</span> cos(0)}
    SPREET{x sin(90) <span class="operator">y</span> cos(90) <span class="operator">r</span> 90}
    SPREET{x sin(180) <span class="operator">y</span> cos(180) <span class="operator">r</span> 180}
    SPREET{x sin(270) <span class="operator">y</span> cos(270) <span class="operator">r</span> 270}
}

rule <span class="functionName">SPREET</span> {
    <span class="primitiveCall">TRIANGLE</span>{b 0 sat .5 h 100}
    <span class="recursiveCall">SPREET</span>{<span class="operator">y</span> 1size .8 a -.2}
}

rule <span class="functionName">SPREET</span> .1 {
    SPROOT{}
}
    </pre><pre style="float: right;"><span class="recursiveCall">* Directly recursive calls in red.</span></pre>
</div> 



<?php ci('boilplanet_FU'); ?>
<?php ci2('nexwhirl_WWO', 'brain_cloud_VFV'); ?>

<?php ci('nexuses_morang_WTH'); ?>
<?php ci2('boilplanet_UNT2', 'boilplanet_tile_DNF'); ?>

<?php ci('boilplanet_YAM'); ?>
<div class="alibi">
    I discovered Context Free in 2010 and still find it an almost meditative form of expression.
    The language is simple and fun to write.
    And for once in the art world, rendering is really fast! Which means exploring
    through iteration is a breeze.
</div>

<?php ci('nexuses_morang_WTI'); ?>
<?php ci2('boilplanet_YAM_warp', 'nexuses_WUE'); ?>

<?php ci('roots_PRE'); ?>
<?php ci2('omforest_QCP', 'spliral_tile_edo'); ?>

<?php ci('spliral_BPK'); ?>


<?php
$collection = '';
?>
