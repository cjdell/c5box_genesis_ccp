<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<div class="accordion_faq">
  <div class="panel-group"  id="accordionid" aria-multiselectable="true">
  <?php 
  if (count($rows) > 0): 
    foreach ($rows as $row):
    $qNum;
    if ($lNum == 0) {
      $qNum = 1;
    }
  ?>
    <div class="panel panel-default"><div class="panel-heading" id="heading-<?php echo $bID . $lNum ?>">
        <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordionid" href="#<?php echo $bID . $lNum ?>" aria-expanded="false" aria-controls="<?php echo $bID . $lNum ?>">
            <?php echo $qNum . ". " . $row['linkTitle']; ?>
          </a>
        </h4>
      </div>
      <div id="<?php echo $bID . $lNum ?>" class="panel-collapse collapse" aria-labelledby="heading-<?php echo $bID . $lNum ?>">
        <div class="panel-body"><h3 id="<?php echo $bID . $fNum ?>"><?php echo $row['title']; ?></h3><p><?php echo $row['description']; ?></p>
        </div>
      </div>
    </div>
  <?php
    $qNum++;
    $lNum++;
    $fNum++;
    endforeach;
 
  else:?>
    <div class="ccm-faq-block-links">
      <p><?php echo t('No Faq Entries Entered.'); ?></p>
    </div>
  <?php endif;?>
  </div>
</div>