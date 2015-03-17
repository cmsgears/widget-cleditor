<?php
namespace cmsgears\cleditor;

// Yii Imports
use yii\web\AssetBundle;
use yii\web\View;

class ClEditorAsset extends AssetBundle {

	// Constructor and Initialisation ------------------------------

	public function __construct()  {

		parent::__construct();

		// Path Configuration

	    $this->sourcePath = '@cmsgears/widget-cleditor/resources';

		// Load CSS
 
	    $this->css     = [
			"jquery.cleditor.css",
	    ];

		// Load Javascript

	    $this->js      = [
			"jquery.cleditor.min.js"
	    ];

		// Define the Position to load Assets
	    $this->jsOptions = [
	        "position" => View::POS_END
	    ];

		// Define dependent Asset Loaders
	    $this->depends = [
			//'yii\web\JqueryAsset'
	    ];
	}
}

?>