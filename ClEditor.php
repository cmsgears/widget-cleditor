<?php
namespace cmsgears\widgets\cleditor;

use yii\web\View;
use yii\base\Widget;

class ClEditor extends Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	/**
	 * The css selector to be passed to the editor js library.
	 */
	public $selector;

	// Constructor and Initialisation ------------------------------

	// yii\base\Object

    public function init() {

        parent::init();
		
		// Do init tasks
    }

	// Instance Methods --------------------------------------------

	// yii\base\Widget

    public function run() {

		// Register resources
		ClEditorAssetBundle::register( $this->getView() );

		// Add JS
		$editorJs	= "jQuery( '$this->selector' ).cleditor( { docType: '<!DOCTYPE html>' } );";

		// Call JS at end
		$this->getView()->registerJs( $editorJs, View::POS_READY );
    }
}

?>