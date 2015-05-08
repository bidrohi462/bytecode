<h1> Basic User Information </h1>
<?php var_dump($account); ?>
<hr>
<table class="table table-striped">
	<tbody>
		<tr>
			<td> Account no </td>
			<td> <?php echo $account->Account_no; ?></td>
		</tr>
		<tr>
			<td> Name </td>
			<td> <?php echo $account->Name; ?></td>
		</tr>
		<tr>
			<td> Phone </td>
			<td> <?php echo $account->Phone_no; ?></td>
		</tr>
		<tr>
			<td> Address </td>
			<td> <?php echo $account->Address; ?></td>
		</tr>
		<tr>
			<td> Account Balance </td>
			<td> <?php echo $account->Balance; ?></td>
		</tr>
	</tbody>
</table>

<a class="btn btn-info" href=""> Update Account Info </a>
<a class="btn btn-info" href=""> Delete Account </a>

<h3> Add or Deduce Account Balance </h3>
<form action="" method="post" id="balance-form">
	<div class="form-group">
		<label> Select addition or deduction of Account Balance </label>
		<select name="choice" class="form-control">
			<option value="add"> Add Balance </option>
			<option value="ded"> Deduct Balance </option>
		</select>
	</div>
	<div class="form-group">
		<label> Enter Amount to be added </label>
		<input type="text" name="amount" class="form-control" >
	</div>
	<input class="btn btn-info" type="submit" name="change_balance" value="Submit Request" >
</form>

<h2> User Card Management </h2>
<a class="btn btn-info" href=""> Issue A Card </a><br><br>
<a class="btn btn-info" href=""> Delete Card </a>
<a class="btn btn-info" href=""> Update card information </a>