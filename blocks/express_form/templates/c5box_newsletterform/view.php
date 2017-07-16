<?php defined('C5_EXECUTE') or die("Access Denied.");

    $renderer = Core::make('Concrete\Core\Express\Form\StandardFormRenderer', ['form' => $expressForm]);

?>
<div class="ccm-block-express-form newsletterstyle form<?php echo $bID?>">
    <div class="ccm-form">
        <a name="form<?php echo $bID?>"></a>

        <?php if (isset($success)) { ?>
            <div class="alert alert-success" style="text-align:center">
                <?php echo $success?>
            </div>
        <?php } ?>

        <?php if (isset($error) && is_object($error)) { ?>
            <div class="alert alert-danger" style="text-align:center">
                <?php echo $error->output()?>
            </div>
        <?php } ?>


        <form enctype="multipart/form-data" class="form-stacked" method="post" action="<?php echo $view->action('submit')?>#form<?php echo $bID?>">
        <?php
        if (is_object($renderer)) {
            $renderer->setRequiredHtmlElement('<span class="text-muted small">' . t('') . '</span>');
            print $renderer->render();
        }
        ?>
        <script type="text/javascript">
            $(function(){
                $(".form<?php echo $bID?> .ccm-input-email").attr("placeholder", $(".form<?php echo $bID?> .control-label").text());
            })
        </script>
        <div class="form-actions">
            <button type="submit" name="Submit" class="btn btn-default"><?php echo t($submitLabel)?></button>
        </div>

        </form>

    </div>
</div>