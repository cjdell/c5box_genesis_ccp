<?php
defined('C5_EXECUTE') or die("Access Denied.");
?>

<div id="ccm-block-social-links<?php echo $bID?>" class="sociallink1 ccm-block-social-links">
    <ul class="list-inline">
    <?php foreach($links as $link) {
        $service = $link->getServiceObject();
        ?>
        <li><a target="_blank" href="<?php echo $link->getURL()?>"><?php echo $service->getServiceIconHTML()?> &nbsp; <?php echo $service->getHandle()?></a></li>
    <?php } ?>
    </ul>
</div>
