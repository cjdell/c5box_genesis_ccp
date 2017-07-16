<?php defined('C5_EXECUTE') or die("Access Denied.");
$linkCount = 1;
$faqEntryCount = 1; ?>
<div class="row">
        <div class="col-md-4 stickyside">
            <div class="theiaStickySidebar">
                <ul class="nav nav-style1" style="margin-top:0px">
                    <?php if (count($rows) > 0) { ?>
                        <?php foreach ($rows as $row) { ?>
                            <li><a href="#<?php echo $bID . $linkCount ?>"><?php echo $row['linkTitle'] ?></a></li>
                            <?php $linkCount++;
                    } ?>
                </ul>
            </div>
        </div>
        <div class="col-md-8 stickymain">
            <div class="ccm-faq-block-entries">
                <?php foreach ($rows as $row) { ?>
                    <div class="faq-entry-content">

                        <h3 id="<?php echo $bID . $faqEntryCount ?>"><?php echo $row['title'] ?></h3>

                        <p><?php echo $row['description'] ?></p>
                    </div>
                    <?php $faqEntryCount++;
                } ?>
            </div>
        <?php } else { ?>
            <div class="ccm-faq-block-links">
                <p><?php echo t('No Faq Entries Entered.'); ?></p>
            </div>
        <?php } ?>
        </div>

</div>

