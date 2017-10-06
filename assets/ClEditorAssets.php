<?php
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
	public $css     = [
		'styles/jquery.cleditor.css',
    ];

	// Load Javascript
    public $js      = [
		'scripts/jquery.cleditor.min.js'
    ];

	// Define the Position to load Assets
    public $jsOptions = [
        'position' => View::POS_END
    ];

	// Define dependent Asset Loaders
    public $depends = [
		'cmsgears\core\common\assets\Jquery'
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
