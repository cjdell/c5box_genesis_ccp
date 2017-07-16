<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<?php 
$c = Page::getCurrentPage();
if ($c->isEditMode()) { ?>
    <div class="ccm-edit-mode-disabled-item" style="<?php echo isset($width) ? "width: $width;" : '' ?><?php echo isset($height) ? "height: $height;" : '' ?> padding-top: 20px;">
        <i style="font-size:40px; margin-bottom:20px; display:block;" class="fa fa-picture-o" aria-hidden="true"></i>
        <div style="padding: 20px 0px 20px 0px"><?php echo t('Parallax disabled in edit mode.')?>
        </div>
    </div>
<?php
} else {
?>
     <div class="c5box-parallax-block" data-parallax="scroll" data-speed="0.4" data-bleed="10" data-z-index="2" data-image-src="<?php if ($parallaximage){ ?><?php  echo $parallaximage->getURL(); ?><?php  } ?>">
           <div class="container">
           	<div class="row">
           		<div class="col-md-12">
           			<?php  if (isset($content) && trim($content) != "") { ?>
    <?php  echo $content; ?><?php  } ?>
           		</div>
           	</div>
           </div>
        </div>

<?php } ?>