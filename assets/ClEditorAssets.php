<?php
/**
 * This file is part of CMSGears Framework. Please view License file distributed
 * with the source code for license details.
 *
 * @link https://www.cmsgears.org/
 * @copyright Copyright (c) 2015 VulpineCode Technologies Pvt. Ltd.
 */

namespace cmsgears\widgets\cleditor\assets;

// Yii Imports
use yii\web\AssetBundle;
use yii\web\View;

/**
 * The cleditor widget bundle for cmsgears. It needs jQuery.
 */
class ClEditorAssets extends AssetBundle {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	// Path Configuration
    public $sourcePath = '@cmsgears/widget-cleditor/resources';

	// Load CSS
	public $css = [
		'styles/jquery.cleditor.css',
    ];

	// Load Javascript
    public $js = [
		'scripts/jquery.cleditor.min.js'
    ];

	// Define the Position to load Assets
    public $jsOptions = [
        'position' => View::POS_END
    ];

	// Define dependent Asset Loaders
    public $depends = [
		'cmsgears\assets\jquery\Jquery'
    ];

	// Protected --------------

	// Private ----------------

	// Traits ------------------------------------------------------

	// Constructor and Initialisation ------------------------------

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// ClEditorAssets ------------------------

}
