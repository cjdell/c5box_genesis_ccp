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
                    <div class="col-md-4">
                        <?php
                            $a = new Area('Main');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php
                            $a = new Area('Three Column Mid');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php
                            $a = new Area('Three Column Right');
                            $a->display($c);
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <?php
                            $a = new Area('Three Column 1');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                            $a = new Area('Three Column 2');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-3">
                        <?php
                            $a = new Area('Three Column 3');
                            $a->display($c);
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <?php
                            $a = new Area('Three Column 4');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-8">
                        <?php
                            $a = new Area('Three Column 5');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-2">
                        <?php
                            $a = new Area('Three Column 6');
                            $a->display($c);
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <?php
                            $a = new Area('Three Column 7');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-5">
                        <?php
                            $a = new Area('Three Column 8');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-4">
                        <?php
                            $a = new Area('Three Column 9');
                            $a->display($c);
                        ?>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <?php
                            $a = new Area('Three Column 10');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-5">
                        <?php
                            $a = new Area('Three Column 11');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-3">
                        <?php
                            $a = new Area('Three Column 12');
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
