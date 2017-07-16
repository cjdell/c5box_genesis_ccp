<?php

defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Attribute\Select\OptionList;

?>

<?php if ($options instanceof OptionList && $options->count() > 0): ?>

<div class="c5box_style1">

    <?php if ($title): ?>
        <div class="ccm-block-tags-header">
            <h5><?php echo $title?></h5>
        </div>
    <?php endif; ?>
    <ul class="c5box_tags1">
    <?php foreach($options as $option) { ?>

        <?php if ($target) { ?>
            <li><a class="c5box_tag1" href="<?php echo $controller->getTagLink($option) ?>">
                <?php echo $option->getSelectAttributeOptionValue()?>
            </a></li>
        <?php } else { ?>
            <li><span class="c5box_tag1"><?php echo $option->getSelectAttributeOptionValue()?></span></li>
        <?php } ?>
    <?php } ?>
    </ul>

</div>

<?php endif; ?>