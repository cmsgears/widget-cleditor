<?php
namespace cmsgears\cleditor;

// Yii Imports
use yii\web\AssetBundle;
use yii\web\View;

class ClEditorAssetBundle extends AssetBundle {

	// Public variables --------------------------------------------

	// Path Configuration

    public $sourcePath = '@cmsgears/widget-cleditor/resources';

	// Load CSS

	public $css     = [
		'jquery.cleditor.css',
    ];

	// Load Javascript

    public $js      = [
		'jquery.cleditor.min.js'
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

?>