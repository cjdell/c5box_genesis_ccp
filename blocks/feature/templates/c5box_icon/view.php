<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php if ($linkURL) { ?>
    <a href="<?php echo $linkURL?>">
<?php } ?>
<div class="brimicon">

<?php if ($title) { ?>
        <div class="iconc"><i class="fa fa-<?php echo $icon?>"></i> </div>
        <h3><span><?php echo $title?></span></h3>
    <?php } ?>    
		  <?php if ($paragraph) { ?>
        <p><span><?php echo $paragraph?></span></p>
    <?php } ?>
</div>

<?php if ($linkURL) { ?>
    </a>
<?php } ?>