<html>
<head>
	<title>Disbursement</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body class="body">
	<a href="./" style="margin: 1% 45% 0% 48%"><img src="https://flip.id/aset_gambar/logo.png" alt="Flip" width="50px" height="50px"></a>

	<h3 style="text-align: center;color: orange; margin-top: 1%">Disbursement Form</h3>
	<form method="post" action="/flip_mini_project/?action=insert" style="margin: 1% 30% 0% 30%">
    <div class="form-group">
      <label for="bank_code">Bank Code:</label>
      <input type="text" class="form-control" id="bank_code" placeholder="Enter Bank Code" name="bank_code" required>
    </div>
    <div class="form-group">
      <label for="account_number">Account Number:</label>
      <input type="text" class="form-control" id="account_number" placeholder="Enter Account Number" name="account_number" required>
    </div>
    <div class="form-group">
      <label for="amount">Amount:</label>
      <input type="text" class="form-control" id="amount" placeholder="Enter Amount" name="amount" required>
    </div>
    <div class="form-group">
      <label for="remark">Remark:</label>
      <input type="text" class="form-control" id="remark" placeholder="Enter Remark" name="remark" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  <h3 style="text-align: center;margin-top: 2%;color: orange">List of Disbursements</h3>
  <table style="width: 80%; margin: 1% 10% 5 10%; text-align: center;">
      <thead>
        <tr>
          <th>ID</th>
          <th>Status</th>
          <th>Timestamp</th>
          <th>Amount</th>
          <th>Bank Code</th>
          <th>Account Number</th>
          <th>Beneficiary Name</th>
          <th>Remark</th>
          <th>Time Served</th>
		  <th>Fee</th>
        </tr>
      </thead>
      <tbody>
        <?php

        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td><a href='/flip_mini_project/?action=view&id=".$row['id']."'>".$row['id']."</a></td>";
          echo "<td>".$row['status']."</td>";
          echo "<td>".$row['timestamp']."</td>";
          echo "<td>".$row['amount']."</td>";
          echo "<td>".$row['bank_code']."</td>";
          echo "<td>".$row['account_number']."</td>";
          echo "<td>".$row['beneficiary_name']."</td>";
          echo "<td>".$row['remark']."</td>";
          echo "<td>".$row['time_served']."</td>";
          echo "<td>".$row['fee']."</td>";
          echo "</tr>";
        }

        ?>
      </tbody>
    </table>
</body>
</html>