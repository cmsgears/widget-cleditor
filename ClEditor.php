<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\widgets\cleditor;

// Yii Imports
use yii\web\View;

// CMG Imports
use cmsgears\core\common\base\Widget;

use cmsgears\widgets\cleditor\assets\ClEditorAssets;

class ClEditor extends Widget {

	// Variables ---------------------------------------------------

	// Public Variables --------------------

	/**
	 * The css selector to be passed to the editor js library.
	 */
	public $selector;

	public $config = [];

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

		$config		= $this->config;
		$controls	= isset( $config[ 'controls' ] ) ? $config[ 'controls' ] : 'all';

		// Fonts
		if( !isset( $config[ 'fonts' ] ) ) {

			$config[ 'fonts' ] = 'Arial,Arial Black,Courier New,Sans Serif';
		}

		// Control aliases
		switch( $controls ) {

			case 'all': {

				$controls	= 'bold italic underline strikethrough subscript superscript | font size style | color highlight removeformat | bullets numbering | outdent indent | alignleft center alignright justify | undo redo | rule image link unlink | cut copy paste pastetext | print source';

				break;
			}
			case 'mini': {

				$controls	= 'bold italic underline strikethrough subscript superscript | font size style | color highlight removeformat | bullets numbering | outdent indent | alignleft center alignright justify | undo redo | rule link unlink | source';

				break;
			}
		}

		$config[ 'controls' ]	= $controls;

		$configJson				= "{ docType: '<!DOCTYPE html>'";

		foreach ( $config as $key => $value ) {

			if( is_string( $value ) ) {

				$configJson .= ", $key: '$value'";
			}
			else {

				$configJson .= ", $key: $value";
			}
		}

		$configJson .= "}";

		// Add JS
		$editorJs	= "jQuery( '$this->selector' ).cleditor( $configJson );";

		// Call JS at end
		$this->getView()->registerJs( $editorJs, View::POS_READY );
	}
}
