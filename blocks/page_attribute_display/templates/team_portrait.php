<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
$c = Page::getCurrentPage();
$thumbnail = $c->getAttribute('thumbnail');
echo $controller->getOpenTag();
echo "<div class=\"team-image\" style='height:200px; width:200px; background:url(";
if($thumbnail){echo $thumbnail->getRelativePath();}
echo "); no-repeat center center;-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;'></div>";
echo $controller->getCloseTag();
