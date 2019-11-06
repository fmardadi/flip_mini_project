<?php
require_once("Controllers/Controller.php");

$controller = new Controller();
if(!isset($_GET['action'])) {
	$controller->home();
} else {
	switch($_GET['action']) {
		case 'insert' :
			$controller->insert();
			break;

		case 'view' :
			$controller->view();
			break;

		default : 
			$controller->home();
			break;
	}
}

?>