<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php'); ?>

<div class="<?php  echo $c->getPageWrapperClass()?>">
    <div class="master-container <?php if($collectiontype != "home"){echo "innerpage";} ?>">
		<?php
			$a = new Area('Main');
			$a->enableGridContainer();
			$a->display($c);
		?>
		</div>
</div>

<?php  $this->inc('elements/footer_bottom.php'); ?>
