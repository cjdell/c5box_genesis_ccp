<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
    <div id="footer">
        <div class="container">
            
            <div class="row">
                    <div class="col-sm-12">
                        <?php
                            $a = new GlobalArea('Footer Full');
                            $a->display();
                        ?> 
                    </div>
                </div>
            <div class="row">
                <div class="col-md-4">
                    <?php
                        $a = new GlobalArea('Footer Lvl1 Col8');
                        $a->display();
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                        $a = new GlobalArea('Footer Lvl1 Col9');
                        $a->display();
                    ?>
                </div>
                <div class="col-md-4">
                    <?php
                        $a = new GlobalArea('Footer Lvl1 Col10');
                        $a->display();
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <?php
                        $a = new GlobalArea('Footer Lvl1 Col11');
                        $a->display();
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                        $a = new GlobalArea('Footer Lvl1 Col12');
                        $a->display();
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                        $a = new GlobalArea('Footer Lvl1 Col13');
                        $a->display();
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                        $a = new GlobalArea('Footer Lvl1 Col14');
                        $a->display();
                    ?>
                </div>
            </div>
           
        </div>
    </div>
    <div id="footmenu">
        <div class="container">
            <div class="row">
                    <div class="col-sm-12">
                        <?php
                            $a = new GlobalArea('Footer Lvl2 Full');
                            $a->display();
                        ?> 
                    </div>
                </div>
            <div class="row">
                <div class="col-md-3">
                    <?php
                        $a = new GlobalArea('Footer Lvl2 Col2');
                        $a->display();
                    ?>
                </div>
                <div class="col-md-9">
                    <?php
                        $a = new GlobalArea('Footer Lvl2 Col3');
                        $a->display();
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-9">
                    <?php
                        $a = new GlobalArea('Footer Lvl2 Col4');
                        $a->display();
                    ?>
                </div>
                <div class="col-md-3">
                    <?php
                        $a = new GlobalArea('Footer Lvl2 Col5');
                        $a->display();
                    ?>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <?php
                        $a = new GlobalArea('Footer Lvl2 Col6');
                        $a->display();
                    ?>
                </div>
                <div class="col-md-6">
                    <?php
                        $a = new GlobalArea('Footer Lvl2 Col7');
                        $a->display();
                    ?>
                </div>
            </div>

            
        </div>
    </div>
    </div>
    </div>

<?php $this->inc('elements/footer_bottom.php'); ?>