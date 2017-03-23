<?php
namespace cmsgears\widgets\cleditor\assets;

// Yii Imports
use yii\web\AssetBundle;
use yii\web\View;

/**
 * The cleditor widget bundle for cmsgears. It needs jQuery.
 */
class ClEditorAssets extends AssetBundle {

	// Public variables --------------------------------------------

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
		'yii\web\JqueryAsset'
    ];

	// Constructor and Initialisation ------------------------------

	public function __construct() {

		parent::__construct();
	}
}
