<?php defined('C5_EXECUTE') or die("Access Denied.");
$navigationTypeText = ($navigationType == 0) ? 'arrows' : 'pages';
$c = Page::getCurrentPage();
if ($c->isEditMode()) {
    ?>
    <div class="ccm-edit-mode-disabled-item" style="<?php echo isset($width) ? "width: $width;" : '' ?><?php echo isset($height) ? "height: $height;" : '' ?>">
        <i style="font-size:40px; margin-bottom:20px; display:block;" class="fa fa-picture-o" aria-hidden="true"></i>
        <div style="padding: 40px 0px 40px 0px"><?php echo t('Image Slider disabled in edit mode.')?>
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
<script>
$(window).load(function(){
    $('.slide-<?php echo $bID ?>').fractionSlider({
        'fullWidth':            true,
        'controls':             true, 
        'pager':                false,
        'responsive':           false,
        'dimensions':           "1170,650",
        'increase':             false,
        'pauseOnHover':         false,
        'slideEndAnimation':    true,
        'startCallback': function(){
            $(".fs_loader").hide();
        },
        <?php if ($timeout) { echo "timeout: $timeout,"; } ?>
    });

});
</script>
<div class="slider-wrapper ccm-block-image-slider-<?php echo $navigationTypeText?>">

                   

        <?php if (count($rows) > 0) {
    ?>
        <div class="responisve-container">
         <div class="fs_loader"><div class="rect1"></div>
  <div class="rect2"></div>
  <div class="rect3"></div>
  <div class="rect4"></div>
  <div class="rect5"></div></div>
        <div class="c5box_animateslider slide-<?php echo $bID ?>">
            <?php foreach ($rows as $row) {
    ?>
                <div class="slide">
                 <div data-in="fade" data-delay="500" data-out="fade" class="slide_image_box" data-position="0,0">
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
                <?php
}
    ?>
    </div>
        <div class="slide_desc_box" data-in="fade" data-delay="1000" data-out="fade" data-position="380,0">
                    <?php if ($row['title']) {
    ?>
                        <h1><?php echo $row['title'] ?></h1>
                    <?php
}
    ?>
                    <?php echo $row['description'] ?>
                        

                        <?php if ($row['linkURL']) {
    ?>
                    <a href="<?php echo $row['linkURL'] ?>" class="btn btn-default">Read More</a>
                <?php
}
    ?>
                    </div>

                
                </div>
            <?php
}
    ?>
        </div>
        </div>
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
<?php
} ?>