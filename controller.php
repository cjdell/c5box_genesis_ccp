<?php
namespace Concrete\Package\C5boxGenesis;
use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;
use Asset;
use AssetList;
use PageTheme;
use BlockType;
use SinglePage;
use PageTemplate;
use CollectionAttributeKey;
use Concrete\Core\Attribute\Type as AttributeType;
use Config;

/*
    GENESIS THEME BY C5BOX.COM
    COPYRIGHT 2015 C5BOX
*/
class Controller extends Package{

    protected $pkgHandle = 'c5box_genesis';
    protected $appVersionRequired = '5.7.4.2';
    protected $pkgVersion = '1.1.3';
    protected $pkgAllowsFullContentSwap = true;

    public function getPackageName() {
        return t("Genesis Theme");
    }

    public function getPackageDescription() {
        return t('Installs the Genesis theme');
    }

    public function install() {
        $pkg = parent::install();
        $this->addTheme($pkg);
        $this->addpagetemplates($pkg);
        $this->addPageAttr($pkg);
        $this->addblock($pkg);
        $this->addSinglePages($pkg);
    }
    public function upgrade() {
        $pkg = Package::getByHandle('c5box_genesis');
        $this->addpagetemplates($pkg);
        $this->addPageAttr($pkg);
        $this->addblock($pkg);
        $this->addSinglePages($pkg);
    }
    public function uninstall() {
        parent::uninstall();
    }
    public function addblock($pkg){
        if(!is_object(BlockType::getByHandle('parallax_block')))
        {
            BlockType::installBlockTypeFromPackage('parallax_block', $pkg);
        }
    }
    public function addTheme($pkg){
        PageTheme::add('genesis', $pkg);
    }
    public function addpagetemplates($pkg){
        if( ! PageTemplate::getByHandle('blank') ){
            PageTemplate::add('blank', t('Blank'), 'full.png', $pkg);
        }
        if( ! PageTemplate::getByHandle('four-columns') ){
            PageTemplate::add('four-columns', t('Four Columns'), 'full.png', $pkg);
        }
        if( ! PageTemplate::getByHandle('home') ){
            PageTemplate::add('home', t('Home'), 'full.png', $pkg);
        }
        if( ! PageTemplate::getByHandle('left_sidebar') ){
            PageTemplate::add('left_sidebar', t('Left Sidebar'), 'full.png', $pkg);
        }
        if( ! PageTemplate::getByHandle('right_sidebar') ){
            PageTemplate::add('right_sidebar', t('Right Sidebar'), 'full.png', $pkg);
        }
        if( ! PageTemplate::getByHandle('three-columns') ){
            PageTemplate::add('three-columns', t('Three Columns'), 'full.png', $pkg);
        }
        if( ! PageTemplate::getByHandle('two-columns') ){
            PageTemplate::add('two-columns', t('Two Columns'), 'full.png', $pkg);
        }
    }
    public function addSinglePages($pkg){}
    public function addPageAttr($pkg){
        $pagelist = CollectionAttributeKey::getByHandle('thumbnail');
        if (!$pagelist instanceof CollectionAttributeKey) {
           $pagelist = CollectionAttributeKey::add("image_file", array(
              'akHandle' => 'thumbnail',
              'akName' => t('Page Thumbnail')), $pkg);
        }
        $banner = CollectionAttributeKey::getByHandle('banner');
        if (!$banner instanceof CollectionAttributeKey) {
           $banner = CollectionAttributeKey::add("image_file", array(
              'akHandle' => 'banner',
              'akName' => t('Banner')), $pkg);
        }
        $hidebanner = CollectionAttributeKey::getByHandle('hide_banner');
        if (!$hidebanner instanceof CollectionAttributeKey) {
           $hidebanner = CollectionAttributeKey::add("boolean", array(
              'akHandle' => 'hide_banner',
              'akName' => t('Hide Banner')), $pkg);
        }
        $pagebackground = CollectionAttributeKey::getByHandle('page_bg');
        if (!$pagebackground instanceof CollectionAttributeKey) {
           $pagebackground = CollectionAttributeKey::add("image_file", array(
              'akHandle' => 'page_bg',
              'akName' => t('Page Background')), $pkg);
        }
        $iosfallback = CollectionAttributeKey::getByHandle('ios_fallback');
        if (!$iosfallback instanceof CollectionAttributeKey) {
           $iosfallback = CollectionAttributeKey::add("image_file", array(
              'akHandle' => 'ios_fallback',
              'akName' => t('Fallback video image')), $pkg);
        }
        $jobtitle = CollectionAttributeKey::getByHandle('job_title');
        if (!$jobtitle instanceof CollectionAttributeKey) {
           $jobtitle = CollectionAttributeKey::add("text", array(
              'akHandle' => 'job_title',
              'akName' => t('Job Title')), $pkg);
        }
        $forceandroid = CollectionAttributeKey::getByHandle('force_android');
        if (!$forceandroid instanceof CollectionAttributeKey) {
           $forceandroid = CollectionAttributeKey::add("boolean", array(
              'akHandle' => 'force_android',
              'akName' => t('Force Android Video BG')), $pkg);
        }
    }
    public function on_start() {
        $al = AssetList::getInstance();
        $al->register( 'javascript', 'bootsrapjs', 'themes/genesis/js/bootstrap.min.js', array('version' => '3.3.5', 'position' => Asset::ASSET_POSITION_FOOTER, 'minify' => true, 'combine' => true), $this );
        // $al->register( 'javascript', 'parallax', 'themes/genesis/js/parallax.js', array('version' => '1.4.2', 'position' => Asset::ASSET_POSITION_FOOTER, 'minify' => true, 'combine' => true), $this );
        // $al->register( 'javascript', 'scrollmonitor', 'themes/genesis/js/scrollMonitor.js', array('version' => '1.0', 'position' => Asset::ASSET_POSITION_FOOTER, 'minify' => true, 'combine' => true), $this );
        $al->register( 'javascript', 'stickyjs', 'themes/genesis/js/sticky.js', array('version' => '1.2.2', 'position' => Asset::ASSET_POSITION_FOOTER, 'minify' => true, 'combine' => true), $this );
        // $al->register( 'javascript', 'customscripts', 'themes/genesis/js/script.js', array('version' => '1.0', 'position' => Asset::ASSET_POSITION_FOOTER, 'minify' => true, 'combine' => true), $this );
        $al->register( 'css', 'bootstrapcss', 'themes/genesis/css/bootstrap.css', array('version' => '3.2.0', 'position' => Asset::ASSET_POSITION_HEADER, 'minify' => true, 'combine' => true), $this );

    }
}
