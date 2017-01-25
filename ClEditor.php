<?php
namespace cmsgears\widgets\cleditor;

// Yii Imports
use yii\web\View;

// CMG Imports
use cmsgears\widgets\cleditor\assets\ClEditorAssets;

class ClEditor extends \cmsgears\core\common\base\Widget {

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

		if( $this->loadAssets ) {

			ClEditorAssets::register( $this->getView() );
		}

		return $this->renderWidget();
    }

	public function renderWidget( $config = [] ) {

		// Add JS
		$editorJs	= "jQuery( '$this->selector' ).cleditor( { docType: '<!DOCTYPE html>' } );";

		// Call JS at end
		$this->getView()->registerJs( $editorJs, View::POS_READY );
	}
}

?>