<?php

defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Attribute\Select\OptionList;

?>

<?php if ($options instanceof OptionList && $options->count() > 0): ?>

<div class="">

    <?php if ($title): ?>
        <div class="ccm-block-tags-header">
            <h5><?php echo $title?></h5>
        </div>
    <?php endif; ?>

    <?php foreach($options as $option) { ?>

        <?php if ($target) { ?>
            <div class="c5box_ticket">
                <span class="circle">
                   
                </span>
                 <a href="<?php echo $controller->getTagLink($option) ?>">
                        <?php echo $option->getSelectAttributeOptionValue()?>
                    </a>
            </div>
        <?php } else { ?>
            <span class="ccm-block-tags-tag label"><?php echo $option->getSelectAttributeOptionValue()?></span>
        <?php } ?>
    <?php } ?>


</div>

<?php endif; ?>