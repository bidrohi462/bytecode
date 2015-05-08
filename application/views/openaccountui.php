<script type="text/javascript">
	$(function() {

		// Setup form validation on the #register-form element
		$("#register-form").validate({

			// Specify the validation rules
			rules: {
				name: "required",
				phone: "required",
				address: "required",
				balance: {
					required : true,
					number : true,
					min : 500
				}
			},

			// Specify the validation error messages
			messages: {
				name: "Please enter user name",
				phone: "Please enter phone no",
				address: "Please enter address",
				balance: {
					required : "Add balance minimum 500 BDT",
					number : "Please insert a valid number",
					min : "Minimum account balance should be 500 BDT"
				}
			},

			submitHandler: function(form) {
				form.submit();
			}
		});

	});
</script>
<h1> Add New User </h1>
<?php $errors=validation_errors(); if(isset($errors) && !empty($errors)): ?><div class="errors"><?php echo $errors; ?></div><?php endif; ?>
<form action="<?php echo site_url('openaccount/create'); ?>" method="post" role="form" id="register-form">
	<div class="form-group">
		<label for=""> Name </label>
		<input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>">
	</div>
	<div class="form-group">
		<label for=""> Phone </label>
		<input type="text" class="form-control" name="phone" value="<?php echo set_value('phone'); ?>">
	</div>
	<div class="form-group">
		<label for=""> Address </label>
		<input type="text" class="form-control" name="address" value="<?php echo set_value('address'); ?>">
	</div>
	<div class="form-group">
		<label for=""> Account Balance </label>
		<input type="text" class="form-control" name="balance" value="<?php echo set_value('balance'); ?>">
	</div>
	<input type="submit" class="btn btn-info" name="add_user" value="Add an user">
</form>