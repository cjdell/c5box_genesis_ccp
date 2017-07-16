<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<div id="innerwrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                        Loader::element('system_errors', array('error' => $error));
                        print $innerContent;
                        ?>
                    </div>
                    
                </div>
            </div>
        </div>

<?php $this->inc('elements/footer.php'); ?>       
