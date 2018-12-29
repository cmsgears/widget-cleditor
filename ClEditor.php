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

	public $docType = '<!DOCTYPE html>';

	// all controls -> bold italic underline strikethrough subscript superscript | font size style | color highlight removeformat | bullets numbering | outdent indent | alignleft center alignright justify | undo redo | rule image link unlink | cut copy paste pastetext | print source
	public $controls = 'bold italic underline strikethrough subscript superscript | font size style | color highlight removeformat | bullets numbering | outdent indent | alignleft center alignright justify | undo redo | rule link unlink | source';

	public $fonts = null;

	// Constructor and Initialisation ------------------------------

	// Instance Methods --------------------------------------------

	// yii\base\Widget

    public function run() {

		if( $this->loadAssets ) {

			ClEditorAssets::register( $this->getView() );
		}

		return $this->renderWidget();
    }

	public function renderWidget( $config = [] ) {

		$editorConfig = $this->config;

		$editorConfig[ 'docType' ]	= isset( $editorConfig[ 'docType' ] ) ? $editorConfig[ 'docType' ] : $this->docType;

		$editorConfig[ 'controls' ] = isset( $editorConfig[ 'controls' ] ) ? $editorConfig[ 'controls' ] : $this->controls;

		$editorConfig[ 'fonts' ]	= isset( $editorConfig[ 'fonts' ] ) ? $editorConfig[ 'fonts' ] : $this->fonts;

		if( empty( $editorConfig[ 'fonts' ] ) ) {

			unset( $editorConfig[ 'fonts' ] );
		}

		$editorConfigJson = json_encode( $editorConfig );

		// Add JS
		$editorJs = "jQuery( '$this->selector' ).cleditor( $editorConfigJson );";

		// Call JS at end
		$this->getView()->registerJs( $editorJs, View::POS_READY );
	}

}
