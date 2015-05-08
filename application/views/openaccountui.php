<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>    </head>
    <body>
        <div class="site_container">
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
            <form action="" method="post" role="form" id="register-form">
                <div class="form-group">
                    <label for=""> Name </label>
                    <input type="text" class="form-control" name="name" value="<?php set_value('name'); ?>">
                </div>
                <div class="form-group">
                    <label for=""> Phone </label>
                    <input type="text" class="form-control" name="phone" value="<?php set_value('phone'); ?>">
                </div>
                <div class="form-group">
                    <label for=""> Address </label>
                    <input type="text" class="form-control" name="address" value="<?php set_value('address'); ?>">
                </div>
                <div class="form-group">
                    <label for=""> Account Balance </label>
                    <input type="text" class="form-control" name="balance" value="<?php set_value('balance'); ?>">
                </div>
                <input type="submit" class="btn btn-info" name="add_user" value="Add an user">
            </form>
        </div>
    </body>
</html>
