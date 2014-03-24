<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
class BootstrapPmPackage extends Package {

	protected $pkgHandle = 'bootstrap_pm';
	protected $appVersionRequired = '5.6.0';
	protected $pkgVersion = '0.0.1';
	
	public function getPackageDescription() {
		return t("Bootstrap 3 Theme for Concrete5 with Grunt plugins, FontAwesome and Carousel block.");
	}
	
	public function getPackageName() {
		return t("Bootstrap 3 Concrete5 Theme");
	}
	
	public function install() {
		$pkg = parent::install();
		  	
		PageTheme::add('bootstrap_pm', $pkg);
		BlockType::installBlockTypeFromPackage('bootstrap_carousel', $pkg);
	}
}