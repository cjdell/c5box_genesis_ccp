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
                <div class="col-md-2">
                        <?php 
                            $a = new Area('Lside Column 1');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-10">
                        <?php
                            $a = new Area('Lside Column 2');
                            $a->display($c);
                        ?>
                    </div>
                    
                </div>

                <div class="row">
                <div class="col-md-3">
                        <?php 
                            $a = new Area('Lside Column 3');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-9">
                        <?php
                            $a = new Area('Lside Column 4');
                            $a->display($c);
                        ?>
                    </div>
                    
                </div>

                <div class="row">
                <div class="col-md-4">
                        <?php 
                            $a = new Area('Sidebar');
                            $a->display($c);
                        ?>
                    </div>
                    <div class="col-md-8">
                        <?php
                            $a = new Area('Main');
                            $a->display($c);
                        ?>
                    </div>
                    
                </div>
                <div class="row">
                <div class="col-md-5">
                        <?php 
                            $a = new Area('Lside Column 5');
                            $a->display($c);
                        ?></div>
                    <div class="col-md-7">
                        <?php
                            $a = new Area('Lside Column 6');
                            $a->display($c);
                        ?>
                    </div>
                    
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $a = new Area('Optional Full2 ');
                            $a->enableGridContainer();
                            $a->display($c);
                        ?>
                    </div>
                </div>
            </div>
        </div>

<?php $this->inc('elements/footer.php'); ?>       
