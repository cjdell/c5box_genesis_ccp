<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<div class="brimshare">
	<h4 style="margin-bottom:10px;">Share:</h4>
    <ul class="list-inline" style="margin-top:0px;">
    <?php foreach($selected as $service) { ?>
        <li><a onclick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false;" href="<?php echo $service->getServiceLink()?>"><?php echo $service->getServiceIconHTML()?></a></li>
    <?php } ?>
    </ul>
</div>

