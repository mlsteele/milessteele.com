<?php
$title='Context Free';
$collection = 'context_free';
?>

<?php ci('nexuses_TVB_small'); ?>

<div class="alibi">
    Context Free is a mini language and renderer packaged into one. The 'vision' of the language
    is recursive expression of shapes. 
    <br><br>
    for ahto tekr program the aghsld tis thjus t long.! fjie
    ahto tekr program the aghsld tis thjus t long.! fjie ahto tekr program the aghsld tis thjus t long.! fjie ahto tekr program the aghsld tis thjus t long.! fjie
</div>


<?php ci('fan_SXK'); ?>
<div class="alibi">
    The source for the above image:
    <br><br>
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

<?php ci('nexuses_morang_WTI'); ?>
<?php ci2('boilplanet_YAM_warp', 'nexuses_WUE'); ?>

<?php ci('roots_PRE'); ?>
<?php ci2('omforest_QCP', 'spliral_tile_edo'); ?>

<?php ci('spliral_BPK'); ?>


<?php
$collection = '';
?>
