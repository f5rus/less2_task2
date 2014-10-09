<?php
	require_once('Controller.php');
	require_once('Model.php');
	require_once('View.php');

	$modelDirect = new ModelDirect();
	$viewDirect = new ViewDirect('Template.php');
	$controller = new Controller($modelDirect, $viewDirect);	
	$controller->showListing();
?>
