<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<div id="innerwrapper">
            <div class="container">
            <div class="row">
            <div class="col-md-12">
                <?php
                    $a = new GlobalArea('Breadcrumb Trail');
                    $a->display();
                    ?>   
            </div>
        </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $a = new Area('Optional Full');
                            $a->enableGridContainer();
                            $a->display($c);
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                            $a = new Area('Main');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                            $a = new Area('Two Column Right');
                            $a->display($c);
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $a = new Area('Optional Full Bottom');
                            $a->enableGridContainer();
                            $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
        </div>

<?php $this->inc('elements/footer.php'); ?>       
