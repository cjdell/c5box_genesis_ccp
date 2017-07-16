<?php  defined('C5_EXECUTE') or die("Access Denied.");
$dh = Core::make('helper/date'); /* @var $dh \Concrete\Core\Localization\Service\Date */
$page = Page::getCurrentPage();
$date = Core::make('helper/date')->formatDate($page->getCollectionDatePublic(), true);
$user = UserInfo::getByID($page->getCollectionUserID());
?>
<div class="brimtitle">
    <h1 class="page-title"><?php echo $title?></h1>

    <span class="page-date">
    <i class="fa fa-calendar"></i> <?php print $date; ?>
    </span>

    <?php if (is_object($user)): ?>
    	-- Posted by : 
    <span class="page-author">
    <?php print $user->getUserDisplayName(); ?>
    </span>
    <?php endif; ?>

</div>
<div class="clearfix"></div>