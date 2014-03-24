<?php  defined('C5_EXECUTE') or die("Access Denied.");
$navItems = $controller->getNavItems();
?>

<?php 
// FAR FROM PERFECT!
foreach ($navItems as $ni) {
	$liclasses = array();
	$aclasses = array();
	$aextra = array();
	$carrot = array();

	if ($ni->isCurrent||$ni->inPath) {
		//class for the page currently being viewed
		$liclasses[] = 'active';
	}

	if ($ni->hasSubmenu && $ni->level == 1) {
		//class for items that have dropdown sub-menus
		$liclasses[] = 'dropdown';
		$aclasses [] = 'dropdown-toggle';
		$aextra [] = 'data-toggle="dropdown"';
		$carrot [] = '<b class="caret"></b>';
		$ni->url = '#';
	}
	if ($ni->hasSubmenu && $ni->level > 1) {
		//class for items that have dropdown sub-menus
		$liclasses[] = 'dropdown-submenu';
		$aclasses [] = '';
		$aextra [] = 'tabindex="-1"';
		$ni->url = '#';
	}
	/*
	if ($ni->hasSubmenu && $ni->level > 1) {
		//class for items that have dropdown sub-menus
		$classes[] = '" tabindex="-1';
	}*/
	//Put all classes together into one space-separated string
	$ni->liclasses = implode(" ", $liclasses);
	$ni->aclasses = implode(" ", $aclasses);
	$ni->aextra = implode(" ", $aextra);
	$ni->carrot = implode(" ", $carrot);


}
?>
<ul class="nav navbar-nav">
<?php
foreach ($navItems as $ni) { ?>
		<li class="<?php echo $ni->liclasses?>">
			<a class="<?php echo $ni->aclasses?>" href="<?php echo $ni->url?>" <?php echo $ni->aextra?>><?php echo $ni->name.$ni->carrot?></a>
<?php if ($ni->hasSubmenu) {?>
				<ul class="dropdown-menu">
<?php } else { 
	echo '</li>'."\n";
	echo str_repeat('</ul>'."\n".'</li>'."\n", $ni->subDepth); 
} ?>

<?php } ?>
</ul>