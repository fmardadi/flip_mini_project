<?php
require_once("Databases/Flip.php");

class Disbursement {

	private $db = NULL;

	function __construct() {
		$this->db = Flip::connectDB();
	}

	function insert($data) {
		# Create a connection
		$username = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";
		$url = "https://nextar.flip.id/disburse";
		$ch = curl_init($url);

		# Setting our options
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_USERPWD, $username . ":");

		# Get the response
		$response = curl_exec($ch);
		curl_close($ch);

		$result = json_decode($response);
		$this->insertToDB($result);
	}

	function insertToDB($result) {
		if (isset($result->id)) {
			$sql = "INSERT INTO disbursement (id, amount, status, timestamp, bank_code, account_number, beneficiary_name, remark, receipt, time_served, fee) VALUES ('$result->id', '$result->amount', '$result->status', '$result->timestamp', '$result->bank_code', '$result->account_number', '$result->beneficiary_name', '$result->remark', '$result->receipt', '$result->time_served', '$result->fee')";
  			$result = mysqli_query($this->db, $sql);

			if($result == 1) {
				return $result;
			} else {
				$this->insertToDB($result);
			}
		}
	}

	function selectAll() {
		$result = $this->db->query("SELECT * FROM disbursement");
		return $result;
	}

	function view($id) {
		# Create a connection
		$username = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";
		$url = "https://nextar.flip.id/disburse/".$id;
		$ch = curl_init($url);

		# Setting our options
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_USERPWD, $username . ":");

		# Get the response
		$response = curl_exec($ch);
		curl_close($ch);

		$result = json_decode($response);

		if (isset($result->id)) {
			$sql = "UPDATE disbursement SET status = '$result->status', receipt = '$result->receipt', time_served = '$result->time_served' WHERE id = '$result->id'";
  			$result = mysqli_query($this->db, $sql);

			if($result == 1) {
				$disburse = $this->db->query("SELECT * FROM disbursement WHERE id=".$id);
				return $disburse;
			} else {
				$this->view($id);
			}
		}
	}
}

?>