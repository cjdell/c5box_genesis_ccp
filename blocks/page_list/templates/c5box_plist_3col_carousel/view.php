<?php
defined('C5_EXECUTE') or die("Access Denied.");
$th = Loader::helper('text');
$c = Page::getCurrentPage();
$dh = Core::make('helper/date'); /* @var $dh \Concrete\Core\Localization\Service\Date */
$i = 0;

if ($c->isEditMode()) {
    ?>
    <div class="ccm-edit-mode-disabled-item" style="<?php echo isset($width) ? "width: $width;" : '' ?><?php echo isset($height) ? "height: $height;" : '' ?>">
        <i style="font-size:40px; margin-bottom:20px; display:block;" class="fa fa-picture-o" aria-hidden="true"></i>
        <div style="padding: 40px 0px 40px 0px"><?php echo t('Carousel disabled on edit mode.')?>
            <div style="margin-top: 15px; font-size:9px;">
                <i class="fa fa-circle" aria-hidden="true"></i>
                <?php if (count($rows) > 0) { ?>
                    <?php foreach (array_slice($rows, 1) as $row) { ?>
                        <i class="fa fa-circle-thin" aria-hidden="true"></i>
                        <?php }
                    }
                ?>
            </div>
        </div>
    </div>
<?php
} else {
    ?>

<div class="pagelistwrapper">
	<?php if ($rssUrl): ?>
        <a class="pull-right" href="<?php echo $rssUrl ?>" target="_blank" class="ccm-block-page-list-rss-feed"><i class="fa fa-rss"></i></a>
    <?php endif; ?>
    <?php if ($pageListTitle): ?>
        <div class="ccm-block-page-list-header">
            <h2><?php echo $pageListTitle?></h2>
        </div>
    <?php endif; ?>

    

    <div class="pagelistwrapper">
     <div class="pagelistcont">
  <div class="row"> 


  <div class="carousel slide" id="threecolumn-carousel">
          <div class="carousel-inner">
               

    <?php foreach ($pages as $page):
    $i++;
		
        $buttonClasses = 'ccm-block-page-list-read-more';
        $entryClasses = 'ccm-block-page-list-page-entry';
		$title = $th->entities($page->getCollectionName());
		$url = $nh->getLinkToCollection($page);
		$target = ($page->getCollectionPointerExternalLink() != '' && $page->openCollectionPointerExternalLinkInNewWindow()) ? '_blank' : $page->getAttribute('nav_target');
		$target = empty($target) ? '_self' : $target;
		$description = $page->getCollectionDescription();
		$description = $controller->truncateSummaries ? $th->wordSafeShortText($description, $controller->truncateChars) : $description;
		$description = $th->entities($description);

            $thumbnail = $page->getAttribute('thumbnail');

        $includeEntryText = false;
        if ($includeName || $includeDescription || $useButtonForLink) {
            $includeEntryText = true;
        }
        if (is_object($thumbnail) && $includeEntryText) {
            $entryClasses = 'ccm-block-page-list-page-entry-horizontal';
        }

        $date = $dh->formatDateTime($page->getCollectionDatePublic(), true);


		 ?>
        <div class="item <?php if($i == 1){echo "active";} ?>">
				<div class="col-sm-4 col-md-4">
                    
				<?php if (is_object($thumbnail)): ?>
  				<h3>
				          <a class="img-bgcover" href="<?php echo $url; ?>" style="height:250px; background: url(<?php
                $tag = $thumbnail->getRelativePath();
                echo $tag;
                ?>) no-repeat center center;-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;">
				          &nbsp;
				      </a>
				      </h3>
	      <?php endif; ?>
	      <?php if ($includeEntryText): ?>
          <?php if ($includeName): ?>
                    <?php if ($useButtonForLink) { ?>
                        <h3><?php echo $title; ?></h3>
                    <?php } else { ?>
                        <h3><a href="<?php echo $url ?>" target="<?php echo $target ?>"><?php echo $title ?></a></h3>
                    <?php } ?>

                <?php endif; ?>

                <?php if ($includeDate): ?>
                    <p class="brimdate"><i class="fa fa-calendar"></i> <?php echo $date?></p>
                <?php endif; ?>

                <?php if ($includeDescription): ?>
                    <p>
                        <?php echo $description ?>
                    </p>
                <?php endif; ?>

                <?php if ($useButtonForLink): ?>
                <p>
                    <a class="btn btn-default <?php echo $buttonClasses?>" href="<?php echo $url?>"><?php echo $buttonLinkText?></a>
                </p>
                <?php endif; ?>

      </div>
      </div>
      <?php endif; ?>
      
      





	<?php endforeach; ?>

    </div>
    <a class="left carousel-control" href="#threecolumn-carousel" data-slide="prev"><i class="fa-chevron-circle-left"></i></a>
    <a class="right carousel-control" href="#threecolumn-carousel" data-slide="next"><i class="fa-chevron-circle-right "></i></a>
    </div></div></div></div>

    <?php if (count($pages) == 0): ?>
        <div class="ccm-block-page-list-no-pages"><?php echo $noResultsMessage?></div>
    <?php endif;?>

</div>


<?php if ($showPagination): ?>
    <?php echo $pagination;?>
<?php endif; ?>

<?php } ?>

