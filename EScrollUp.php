<?php

/**
 * Wrapper for Jquery plugin ScrollUp
 *
 * @author turi
 */
class EScrollUp extends CWidget {

    /**
     * 
     * @var string name of the theme to use 
     */
    public $theme = 'tab';

    /**
     *
     * @var array options array to pass jquery plugin 
     */
    public $options = array();

    /**
     * Init widget
     */
    public function init() {
        parent::init();

        $this->registerClientScript();
    }

    protected function registerClientScript() {
        $cs = Yii::app()->getClientScript();
        $scriptUrl = Yii::app()->getAssetManager()->publish(Yii::getPathOfAlias('application.extensions.escrollup.resources'));

        echo 'theme: ' . $this->theme;
        switch ($this->theme) {
            case 'tab':
                $cs->registerCssFile($scriptUrl . '/css/themes/tab.css');
                break;
            case 'link':
                $cs->registerCssFile($scriptUrl . '/css/themes/link.css');
                break;
            case 'image':
                $cs->registerCssFile($scriptUrl . '/css/themes/image.css');
                $this->options = array(
                    'scrollImg' => array(
                        'active' => true
                    )
                );
                break;
            case 'pill':
                $cs->registerCssFile($scriptUrl . '/css/themes/pill.css');
                break;
            default :
                $cs->registerCssFile($scriptUrl . '/css/themes/tab.css');
                break;
        }


        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile($scriptUrl . '/js/jquery.scrollUp.min.js', CClientScript::POS_END);
    }

    public function run() {
        $options = (isset($this->options)) ? $this->options : array();

        $js = "$.scrollUp(" . CJavaScript::encode($options) . ");";

        $cs = Yii::app()->clientScript;
        $cs->registerScript('scrollup', $js, CClientScript::POS_READY);
    }

}

?>
