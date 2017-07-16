<?php 
namespace Concrete\Package\C5boxGenesis\Theme\Genesis;
use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme {

  public function registerAssets() {
        $this->requireAsset('css', 'font-awesome');
        $this->requireAsset('css', 'bootstrapcss');
        $this->providesAsset('javascript', 'bootstrap/*');
        $this->requireAsset('javascript', 'jquery');
        $this->requireAsset('javascript', 'jquery/ui');
        $this->requireAsset('javascript', 'bootsrapjs');
        $this->requireAsset('javascript', 'parallax');
        $this->requireAsset('javascript', 'picturefill');
        $this->requireAsset('javascript', 'scrollmonitor');
        $this->requireAsset('javascript', 'stickyjs');
        $this->requireAsset('javascript', 'customscripts');
  }

    protected $pThemeGridFrameworkHandle = 'bootstrap3';

    public function getThemeBlockClasses(){
        
      // this adds custom classes as a dropdown option on blocks.
    return array(
            'content' => array('blue-background'),
            'page_list' => array('scrolleffect'),
            'feature' => array('scrolleffect','scrolleffect-delay'),
            'content' => array('box-style')
        );
    }

    public function getThemeAreaClasses()
    {
        return array(
            'whitebox' => 'whitebox'
        );
    }

    public function getThemeDefaultBlockTemplates(){
        return array(
            'feature' => 'c5box_icon'
        );
    }

    public function getThemeFrameworkImageMap()
    {
        return array(
            'large' => '900px',
            'medium' => '768px',
            'small' => '0'
        );
    }
    
    public function getThemeEditorClasses()
    {
        //classes available in WYSIWYG         
        return array(
            array('title' => t('Word Flip'), 'menuClass' => 'flipit', 'spanClass' => 'flipit'),
array('title' => t('<div style="height:1px;background:#ddd"></div>'), 'menuClass' => ' ', ' ' => ' '),
        array('title' => t('<i class="fa fa-angle-right"></i> List Arrow'), 'menuClass' => 'list-arrow', 'spanClass' => 'list-arrow'),
        array('title' => t('<i class="fa fa-circle-o"></i> List Round'), 'menuClass' => 'list-round', 'spanClass' => 'list-round'),
        array('title' => t('<i class="fa fa-check"></i> List Check'), 'menuClass' => 'list-check', 'spanClass' => 'list-check'),
        array('title' => t('<i class="fa fa-times"></i> List Cross'), 'menuClass' => 'list-cross', 'spanClass' => 'list-cross'),
        array('title' => t('<i class="fa fa-cog"></i> List Cog'), 'menuClass' => 'list-cog', 'spanClass' => 'list-cog'), 
        array('title' => t('<i class="fa fa-check-square"></i> List Checksquare'), 'menuClass' => 'list-checksquare', 'spanClass' => 'list-checksquare'),
        array('title' => t('<i class="fa fa-check-square-o"></i> List Checksquare-o'), 'menuClass' => 'list-checksquare-o', 'spanClass' => 'list-checksquare-o'),
        array('title' => t('<i class="fa fa-circle"></i> List Circle'), 'menuClass' => 'list-circle', 'spanClass' => 'list-circle'),
        array('title' => t('<i class="fa fa-plus-square"></i> List Plussquare'), 'menuClass' => 'list-plussquare', 'spanClass' => 'list-plussquare'),
        array('title' => t('<i class="fa fa-square-o"></i> List Square-O'), 'menuClass' => 'list-squareo', 'spanClass' => 'list-squareo'),
array('title' => t('<div style="height:1px;background:#ddd"></div>'), 'menuClass' => ' ', ' ' => ' '),
        array('title' => t('<span class="btn btn-default">Default</span>'), 'menuClass' => '', 'spanClass' => 'btn btn-default'),
        array('title' => t('<span class="btn btn-primary">Primary</span>'), 'menuClass' => '', 'spanClass' => 'btn btn-primary'),
        array('title' => t('<span class="btn btn-success">Success</span>'), 'menuClass' => '', 'spanClass' => 'btn btn-success'),
        array('title' => t('<span class="btn btn-info">Info</span>'), 'menuClass' => '', 'spanClass' => 'btn btn-info'),
        array('title' => t('<span class="btn btn-warning">Warning</span>'), 'menuClass' => '', 'spanClass' => 'btn btn-warning'),
        array('title' => t('<span class="btn btn-danger">Danger</span>'), 'menuClass' => '', 'spanClass' => 'btn btn-danger'),
array('title' => t('<div style="height:1px;background:#ddd"></div>'), 'menuClass' => ' ', ' ' => ' '),
        array('title' => t('<span class="alert alert-success">Success</span>'), 'menuClass' => '', 'spanClass' => 'alert alert-success'),
        array('title' => t('<span class="alert alert-info">Info</span>'), 'menuClass' => '', 'spanClass' => 'alert alert-info'),
        array('title' => t('<span class="alert alert-warning">Warning</span>'), 'menuClass' => '', 'spanClass' => 'alert alert-warning'),
        array('title' => t('<span class="alert alert-danger">Danger</span>'), 'menuClass' => '', 'spanClass' => 'alert alert-danger')

        );
     
    }

}