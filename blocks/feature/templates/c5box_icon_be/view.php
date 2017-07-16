<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php if ($linkURL) { ?>
    <a href="<?php echo $linkURL?>">
<?php } ?>
<div class="ca-menu">
<div class="ca-list">
<?php if ($title) { ?>
        <span class="ca-icon"><i class="fa fa-<?php echo $icon?>"></i> </span>
        <div class="ca-content">
        <h2 class="ca-main"><?php echo $title?></h2>
    <?php } ?>    
		  <?php if ($paragraph) { ?>
        <p class="ca-sub"><?php echo $paragraph?></p>
    <?php } ?>
    </div>
</div>
</div>
<?php if ($linkURL) { ?>
    </a>
<?php } ?>
