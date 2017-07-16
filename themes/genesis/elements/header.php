<?php defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header_top.php'); 
$collectiontype = $c->getPageTemplateObject();  
    if (is_object($collectiontype)) {
        $collectiontype = $collectiontype->getPageTemplateHandle();
    }
?>
<body>

<div class="<?php  echo $c->getPageWrapperClass()?>">
    <div class="master-container <?php if($collectiontype != "home"){echo "innerpage";} ?>">
        <header id="header" class="shrink">
            <div class="tophead">
                <div class="container">
                        <div class="col-sm-3">
                            <?php
                                $a = new GlobalArea('top head left');
                                $a->display();
                            ?>
                        </div>
                        <div class="col-sm-9">
                            <?php
                                $a = new GlobalArea('top head right');
                                $a->display();
                            ?>
                        </div>
                </div>
            </div>
            <div class="container">
                <div class="row flexposition">
                    <div class="col-sm-2" id="logo">
                        <?php
                            $a = new GlobalArea('Header Site Title');
                            $a->display();
                        ?>     
                    </div>
                    <div class="col-sm-8" id="navpos">
                        <div class="navcontrol">
                            <div role="navigation" class="navbar navbar-default navbar-fixed-top">
                                <div class="navbar-header">
                                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse custom-nav-class">
                                    <?php
                                        $a = new GlobalArea('Header Navigation');
                                        $a->display();
                                    ?>
                                </div>

                                <!--/.nav-collapse -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2" id="socialicons">
                        <?php
                            $a = new GlobalArea('Header Icons');
                            $a->display();
                        ?>     
                    </div>
                </div>
            </div>
        </header>
        <?php 
        $hide_banner = $c->getAttribute('hide_banner');
            if($hide_banner){
                if($c->isEditMode()){
                    echo "<div style='height:200px'>&nbsp;</div>";
                }
            }
        
            ?>
        <div id="banner" 
style="background: url('<?php
        $banner = $c->getAttribute('banner');
        $banner ? ($banner = $banner->getVersion()->getRelativePath()) : $banner;
        if($collectiontype != "home" && !$banner){
            echo ($banner ? $banner : $this->getThemePath()."/img/background-header3.jpg");
        }else{
            echo $banner;
        }
?>') no-repeat center center;
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; <?php
        if($hide_banner){
            echo "display:none";
        }
?>">
    <div class="bancontcenter">
            <?php  
                $a = new Area('Banner'); 
                $a->enableGridContainer();
                $a->display($c);    
            ?>
            <div class="scroller"><?php  
                $a = new Area('Scroll Text'); 
                $a->display($c);    
            ?></div>
            </div>
        </div>
        <?php 
            if($hide_banner){
                echo "<style>.master-container #innerwrapper, .master-container #home-pagetype{padding-top:120px;}</style>";

            }
        ?>

