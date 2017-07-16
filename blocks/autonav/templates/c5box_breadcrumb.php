<?php defined('C5_EXECUTE') or die("Access Denied.");
$navItems = $controller->getNavItems(true);
?>
<p class="c5box_crumbs">
<?php
for ($i = 0; $i < count($navItems); $i++) {
	$ni = $navItems[$i];
	if ($i > 0) {
		echo ' <span class="ccm-autonav-breadcrumb-sep"><i class="fa fa-angle-right"></i>
</span> ';
	}
	
	if ($ni->isCurrent) {
		echo $ni->name;
	} else {
		echo '<a href="' . $ni->url . '" target="' . $ni->target . '">' . $ni->name . '</a>';
	}
}
?>
</p>