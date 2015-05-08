<h1> Basic User Information </h1>
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

<a class="btn btn-info" href="<?php echo site_url('editaccount/index/'.$account->Account_no); ?>"> Update Account Info </a>
<a id="btn-delete" class="btn btn-info" href="<?php echo site_url('editaccount/delete/'.$account->Account_no); ?>"> Delete Account </a>
<script type="text/javascript">
(function($){
	$('#btn-delete').click(function(e) {
		var value=confirm("Are you sure to delete?");
		if(value==false) e.preventDefault();
	});
})(jQuery);
</script>

<h3> Add or Deduce Account Balance </h3>
<?php $errors=validation_errors(); if(isset($errors) && !empty($errors)): ?><div class="errors"><?php echo $errors; ?></div><?php endif; ?>
<form action="<?php echo site_url('accountdetails/adjustbalance') ?>" method="post" id="balance-form">
	<input type="hidden" name="account_no" value="<?php echo $account->Account_no; ?>">
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
<table class="table table-striped">
	<thead>
		<tr>
			<th> PAN </th>
			<th> Card Expiry Date </th>
			<th> Card Verification Code </th>
			<th> Amount </th>
			<th> <span class="glyphicon glyphicon-wrench"></span> </th>
			<th> <span class="glyphicon glyphicon-trash"></span> </th>
		</tr>
	</thead>
	<tbody>
		<tr> 
			<td> <?  ?> </td>
			<td> <?  ?> </td>
			<td> <?  ?> </td>
			<td> <?  ?> </td>
			<td> <a class="btn btn-info" href=""> Update</a> </td>
			<td> <a class="btn btn-info" href=""> Delete</a> </td>
		</tr>
	</tbody>
</table>
