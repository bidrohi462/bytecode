<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link rel="stylesheet" href="style.css">
        <?php include 'assets.php' ?>
    </head>
    <body>
        <div class="site_container">
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'bytecode');
            if (isset($_POST['add_user'])) {
                $name = $_POST['name'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $balance = $_POST['balance'];

                $insert = "INSERT INTO user VALUES (NULL,'$name','$phone','$address',$balance)";
                $res = mysqli_query($con, $insert);
                if ($res) {
                    echo '<div class="alert alert-success">
                                  <strong>Success!</strong> Card is added.
                              </div>';
                }else
                    echo '<div class="alert alert-danger">
                                    <strong>Failure!</strong> Card cannot be added.
                                </div>';
            }
            ?>
            <script type="text/javascript">
                $(function() {

                    // Setup form validation on the #register-form element
                    $("#issue-card-form").validate({

                        // Specify the validation rules
                        rules: {
                            expiry_date: "required",
                            veri_code: "required",
                            credit_limit: {
                                required : true,
                                number : true,
                                min : 1000
                            }
                        },

                        // Specify the validation error messages
                        messages: {
                            expiry_date: "Please enter expiry date",
                            veri_code: "Please enter verification code"
                        },

                        submitHandler: function(form) {
                            form.submit();
                        }
                    });

                });

                jQuery(document).ready(function() {
                    jQuery('#MyDate').datepicker({
                        dateFormat : 'dd-mm-yy'
                    });
                });
            </script>
            <h1> Update Card </h1>
            <form action="" method="post" role="form" id="issue-card-form">
                <div class="form-group">
                    <input type="hidden" class="form-control" name="pan" value="<?  ?>" >
                </div>
                <div class="form-group">
                    <label for=""> Choose Type (Debit/Credit) </label>
                    <select type="text" class="form-control" name="type1">
                        <option value="debit" <? if(true) echo 'selected'  ?> > Debit Card </option>
                        <option value="credit" <? if(true) echo 'selected'  ?>> Credit Card </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for=""> Choose Vendor (Master/Visa) </label>
                    <select type="text" class="form-control" name="type2">
                        <option value="master" <? if(true) echo 'selected'  ?>> Master Card </option>
                        <option value="visa" <? if(true) echo 'selected'  ?>> Visa Card </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for=""> Expiry Date </label>
                    <input type="text" class="form-control" name="expiry_date" id="MyDate"  value="<?  ?>" >
                </div>
                <div class="form-group">
                    <label for=""> Verification Code </label>
                    <input type="text" class="form-control" name="veri_code"  value="<?  ?>" >
                </div>
                <div class="form-group">
                    <!-- If this is debit card this option should be disabled -->
                    <label for=""> Credit Limit </label>
                    <input type="text" class="form-control" name="credit_limit"  value="<?  ?>" >
                </div>
                <input type="submit" class="btn btn-info" name="update_card" value="Update Card">
            </form>
        </div>
    </body>
</html>
