<script type="text/javascript">
	$(function() {

		// Setup form validation on the #register-form element
		$("#update-user-form").validate({

			// Specify the validation rules
			rules: {
				name: "required",
				phone: "required",
				address: "required"
			},

			// Specify the validation error messages
			messages: {
				name: "Please enter user name",
				phone: "Please enter phone no",
				address: "Please enter address"
			},

			submitHandler: function(form) {
				form.submit();
			}
		});

	});
</script>
<h1> Update User </h1>
<?php $errors=validation_errors(); if(isset($errors) && !empty($errors)): ?><div class="errors"><?php echo $errors; ?></div><?php endif; ?>
<form action="<?php echo site_url('editaccount/editinfo') ?>" method="post" role="form" id="update-user-form">
	<input type="hidden" name="account_no" value="<?php echo $account->Account_no; ?>">
	<div class="form-group">
		<label for=""> Name </label>
		<input type="text" class="form-control" name="name" value="<?php echo $account->Name; ?>">
	</div>
	<div class="form-group">
		<label for=""> Phone </label>
		<input type="text" class="form-control" name="phone" value="<?php echo $account->Phone_no; ?>">
	</div>
	<div class="form-group">
		<label for=""> Address </label>
		<input type="text" class="form-control" name="address" value="<?php echo $account->Address; ?>">
	</div>
	<input type="submit" class="btn btn-info" name="update_user" value="Update account">
</form>