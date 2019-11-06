<!DOCTYPE html>
<html>
<head>
	<title>Disbursement Detail</title>
</head>
<body>
	<table>
	  <tr>
	    <td>id</td>
	    <td> <?php echo $disburse['id'] ?> </td>
	  </tr>
	  <tr>
	    <td>Status</td>
	    <td> <?php echo $disburse['status'] ?> </td>
	  </tr>
	  <tr>
	    <td>Timestamp</td>
	    <td> <?php echo $disburse['timestamp'] ?> </td>
	  </tr>
	  <tr>
	    <td>Amount</td>
	    <td> <?php echo $disburse['amount'] ?> </td>
	  </tr>
	  <tr>
	    <td>Bank Code</td>
	    <td> <?php echo $disburse['bank_code'] ?> </td>
	  </tr>
	  <tr>
	    <td>Account Number</td>
	    <td> <?php echo $disburse['account_number'] ?> </td>
	  </tr>
	  <tr>
	    <td>Benefeciary Name</td>
	    <td> <?php echo $disburse['beneficiary_name'] ?> </td>
	  </tr>
	  <tr>
	    <td>Remark</td>
	    <td> <?php echo $disburse['remark'] ?> </td>
	  </tr>
	  <tr>
	    <td>Receipt</td>
	    <td> <?php echo $disburse['receipt'] ?> </td>
	  </tr>
	  <tr>
	    <td>Time Served</td>
	    <td> <?php echo $disburse['time_served'] ?> </td>
	  </tr>
	  <tr>
	    <td>Fee</td>
	    <td> <?php echo $disburse['fee'] ?> </td>
	  </tr>
	</table>

	<br>
	<a href="/flip_mini_project/">Back</a>
</body>
</html>