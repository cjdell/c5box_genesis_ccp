
<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<div id="introbox">
    <?php
        $a = new Area('Intro');
        $a->enableGridContainer();
        $a->display($c);
    ?>
</div>
<div id="homesection1">
    <?php
        $a = new Area('Home Section 1');
        $a->enableGridContainer();
        $a->display($c);
    ?>
    <?php
        $a = new Area('Wide section1');
        $a->display($c);
    ?>
</div>
<div id="parallaxarea1" class="parallaxarea">
    <?php
        $a = new Area('Parallax Area');
        $a->enableGridContainer();
        $a->display($c);
    ?>
</div>
<div id="home-pagetype">
<!-- <div class="arrowt"></div> -->
    <?php
        $a = new Area('Main');
        $a->enableGridContainer();
        $a->display($c);
    ?>
    <?php
        $a = new Area('Wide section');
        $a->display($c);
    ?>
</div>
<!-- <div id="marqueebox">
    <?php
        $a = new Area('Marquee Area');
        $a->enableGridContainer();
        $a->display($c);
    ?>
</div> -->
<div id="parallaxarea2" class="parallaxarea">
    <?php
        $a = new Area('Parallax Area 2');
        $a->enableGridContainer();
        $a->display($c);
    ?>
</div>
<!-- <div id="homesection2">
    <?php
        $a = new Area('Home Section 2');
        $a->enableGridContainer();
        $a->display($c);
    ?>
        <?php
        $a = new Area('Wide section2');
        $a->display($c);
    ?>
</div> -->
<?php $this->inc('elements/footer.php'); ?>
