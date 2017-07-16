<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo Localization::activeLanguage()?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php View::element('header_required'); ?>
    <?php  echo $html->css($view->getStylesheet('main.less'))?>
</head>
