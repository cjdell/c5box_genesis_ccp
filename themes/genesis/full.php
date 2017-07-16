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
            </div>
            <?php
                            $a = new Area('Full scale area 1');
                            $a->enableGridContainer();
                            $a->display($c);
                            ?>  

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $a = new Area('Main');
                            $a->enableGridContainer();
                            $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
            <?php
                            $a = new Area('Full scale area 2');
                            $a->enableGridContainer();
                            $a->display($c);
                            ?>  
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $a = new Area('Main 2 Optional');
                            $a->enableGridContainer();
                            $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
        </div>

<?php $this->inc('elements/footer.php'); ?>       
