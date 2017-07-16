<?php  
namespace Concrete\Package\C5boxGenesis\Block\ParallaxBlock;

defined("C5_EXECUTE") or die("Access Denied.");

use \Concrete\Core\Block\BlockController;
use Core;
use Loader;
use \File;
use Page;
use URL;
use \Concrete\Core\Editor\Snippet;
use Sunra\PhpSimple\HtmlDomParser;
use \Concrete\Core\Editor\LinkAbstractor;

class Controller extends BlockController
{
    public $helpers = array (
  0 => 'form',
);
    public $btFieldsRequired = array (
  0 => 'parallaximage',
);
    protected $btExportFileColumns = array (
  0 => 'parallaximage',
);
    protected $btTable = 'btcfiveboxParallaxBlock';
    protected $btInterfaceWidth = 400;
    protected $btInterfaceHeight = 500;
    protected $btIgnorePageThemeGridFrameworkContainer = true;
    protected $btCacheBlockRecord = false;
    protected $btCacheBlockOutput = false;
    protected $btCacheBlockOutputOnPost = false;
    protected $btCacheBlockOutputForRegisteredUsers = false;
    protected $btCacheBlockOutputLifetime = 0;
    protected $btDefaultSet = 'genesis';
    protected $pkg = false;
    
    public function getBlockTypeDescription()
    {
        return t("Add a full width parallax with content");
    }

    public function getBlockTypeName()
    {
        return t("C5box Parallax Block");
    }

    public function getSearchableContent()
    {
        $content = array();
        $content[] = $this->content;
        return implode(" ", $content);
    }

    public function view()
    {
        $db = \Database::get();
        
        if ($this->parallaximage && ($f = \File::getByID($this->parallaximage)) && is_object($f)) {
            $this->set("parallaximage", $f);
        }
        else {
            $this->set("parallaximage", false);
        }
        $this->set('content', LinkAbstractor::translateFrom($this->content));
    }

    public function add()
    {
        $this->requireAsset('core/file-manager');
        $this->requireAsset('redactor');
        $this->requireAsset('core/file-manager');
        $this->set('btFieldsRequired', $this->btFieldsRequired);
    }

    public function edit()
    {
        $db = \Database::get();
        $this->requireAsset('core/file-manager');
        $this->requireAsset('redactor');
        $this->requireAsset('core/file-manager');
        $this->set('content', LinkAbstractor::translateFromEditMode($this->content));
        $this->set('btFieldsRequired', $this->btFieldsRequired);
    }

    public function save($args)
    {
        $db = \Database::get();
        $args['content'] = LinkAbstractor::translateTo($args['content']);
        parent::save($args);
    }

    public function validate($args)
    {
        $e = Core::make("helper/validation/error");
        if (in_array("parallaximage", $this->btFieldsRequired) && (trim($args["parallaximage"]) == "" || !is_object(\File::getByID($args["parallaximage"])))){
            $e->add(t("The %s field is required.", "Parallax Image"));
        }
        if (in_array("content", $this->btFieldsRequired) && (trim($args["content"]) == "")) {
            $e->add(t("The %s field is required.", "Content"));
        }
        return $e;
    }

    public function composer()
    {
        if (file_exists('application/blocks/parallax_block/auto.js')) {
            $al = \Concrete\Core\Asset\AssetList::getInstance();
            $al->register('javascript', 'auto-js-parallax_block', 'blocks/parallax_block/auto.js', array(), $this->pkg);
            $this->requireAsset('javascript', 'auto-js-parallax_block');
        }
        $this->edit();
    }

    
}