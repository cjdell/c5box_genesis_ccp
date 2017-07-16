<?php
defined('C5_EXECUTE') or die("Access Denied.");
$th = Loader::helper('text');
$c = Page::getCurrentPage();
$dh = Core::make('helper/date'); /* @var $dh \Concrete\Core\Localization\Service\Date */
$i = 0;
?>


<?php if ( $c->isEditMode() && $controller->isBlockEmpty()) { ?>
    <div class="ccm-edit-mode-disabled-item"><?php echo t('Empty Page List Block.')?></div>
<?php } else { ?>

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

				<div class="col-sm-6">
				<?php if (is_object($thumbnail)): ?>
  				<h3>
				          <a class="img-bgcover" href="<?php echo $url; ?>" style="background: url(<?php
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
      <?php endif; ?>
      
      
  <?php 
          	if (($i % 2 == 0) && ($i > 0)) {
						   echo "<div class='clearfix'></div>";
						}
          ?>




	<?php endforeach; ?>
    </div></div></div>

    <?php if (count($pages) == 0): ?>
        <div class="ccm-block-page-list-no-pages"><?php echo $noResultsMessage?></div>
    <?php endif;?>

</div>


<?php if ($showPagination): ?>
    <?php echo $pagination;?>
<?php endif; ?>

<?php } ?>

