<?php
require_once("Models/Disbursement.php");

class Controller {
	public $disbursement;

	function __construct() {  
        $this->disbursement = new Disbursement();
    }

    function home() {  
    	$result = $this->selectAll();
        require_once("Views/home.php");
    }

    function insert() {
    	$data = array(
    		"bank_code" => $_POST["bank_code"], 
  			"account_number" => $_POST["account_number"],
  			"amount" => $_POST["amount"],
  			"remark" => $_POST["remark"]
    	);

    	$this->disbursement->insert($data);
    	$this->home();
    }

    function selectAll() {
    	return $this->disbursement->selectAll();
    }

    function view() {
    	$disburse = $this->disbursement->view($_GET['id']);
    	$disburse = mysqli_fetch_assoc($disburse);
    	require_once("Views/details.php");
    }

}

?>