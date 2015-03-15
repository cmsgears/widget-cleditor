<?php
namespace cmsgears\cleditor;

use \Yii;
use yii\base\Application;
use yii\web\View;
use yii\base\Widget;
use yii\base\InvalidConfigException;

class ClEditor extends Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	public $selector;

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

    public function init() {

        parent::init();
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

    public function run() {

		// Register resources
		ClEditorAsset::register( $this->getView() );

		// Add JS
		$editorJs	= "jQuery( '$this->selector' ).cleditor( { docType: '<!DOCTYPE html>' } );";

		$this->getView()->registerJs( $editorJs, View::POS_READY );
    }
}

?>