<?php defined('C5_EXECUTE') or die("Access Denied.");
$navigationTypeText = ($navigationType == 0) ? 'arrows' : 'pages';
$c = Page::getCurrentPage();
if ($c->isEditMode()) {
    ?>
    <div class="ccm-edit-mode-disabled-item" style="<?php echo isset($width) ? "width: $width;" : '' ?><?php echo isset($height) ? "height: $height;" : '' ?>">
        <i style="font-size:40px; margin-bottom:20px; display:block;" class="fa fa-picture-o" aria-hidden="true"></i>
        <div style="padding: 40px 0px 40px 0px"><?php echo t('Logo Marquee disabled on edit mode <br /> Image sizes must be 130 pixels wide and 40 pixels high.')?>
			<div style="margin-top: 15px; font-size:9px;">
				<i class="fa fa-circle" aria-hidden="true"></i>
				<?php if (count($rows) > 0) { ?>
					<?php foreach (array_slice($rows, 1) as $row) { ?>
						<i class="fa fa-circle-thin" aria-hidden="true"></i>
						<?php }
					}
				?>
			</div>
        </div>
    </div>
<?php
} else {
    ?>




<div class='sliderx'>
    <div class="edge"></div>


<?php if (count($rows) > 0) {
    ?>
        <ul class="slideContainer" id="money_start">
            <?php foreach ($rows as $row) {
    ?>
                <li class="slideItem">

                    <a href="<?php if ($row['linkURL']){echo $row['linkURL'];}else{echo '#';} ?>" class="mega-link-overlay">
                        
                        <?php
                $f = File::getByID($row['fID'])
                ?>
                <?php if (is_object($f)) {
    $tag = Core::make('html/image', array($f, false))->getTag();
    if ($row['title']) {
        $tag->alt($row['title']);
    } else {
        $tag->alt("slide");
    }
    echo $tag;
    ?>
                    </a>
                <?php
}
    ?>

                </li>
            <?php
}
    ?>
        </ul>
        <?php
} else {
    ?>
        <div class="ccm-image-slider-placeholder">
            <p><?php echo t('No Slides Entered.');
    ?></p>
        </div>
        <?php
}
    ?>



    </div>



<script type="text/javascript">
window.requestAnimationFrame = (function(){
  return  window.requestAnimationFrame       ||
          window.webkitRequestAnimationFrame ||
          window.mozRequestAnimationFrame    ||
          function( callback ){
            window.setTimeout(callback, 1000 / 60);
          };
})();

var speed = 8000;
(function currencySlide(){
    var currencyPairWidth = $('.slideItem:first-child').outerWidth();
    $(".slideContainer").animate({marginLeft:-currencyPairWidth},speed, 'linear', function(){
                $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
        });
        requestAnimationFrame(currencySlide);
})();
</script>
<?php
} ?>
