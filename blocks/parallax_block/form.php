<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="form-group">
    <?php 
    if (isset($parallaximage) && $parallaximage > 0) {
        $parallaximage_o = File::getByID($parallaximage);
        if ($parallaximage_o->isError()) {
            unset($parallaximage_o);
        }
    } ?>
    <?php  echo $form->label('parallaximage', t("Parallax Image")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('parallaximage', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make("helper/concrete/asset_library")->file($view->field('ccm-b-file-parallaximage'), "parallaximage", t("Choose File"), $parallaximage_o); ?>
</div>

<div class="form-group">
    <?php  echo $form->label('content', t("Content")); ?>
    <?php  echo isset($btFieldsRequired) && in_array('content', $btFieldsRequired) ? '<small class="required">' . t('Required') . '</small>' : null; ?>
    <?php  echo Core::make('editor')->outputBlockEditModeEditor($view->field('content'), $content); ?>
</div>