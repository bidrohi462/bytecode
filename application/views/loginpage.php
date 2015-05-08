<style type="text/css">
    .middle_form{
        width : 50%;
        position : relative;
        height : 300px;
        margin : 0 auto;
        margin-top : 100px;
    }
</style>
<div class="middle_form">
    <h3> Log In </h3>
    <form action="<?php echo site_url('login/dologin'); ?>" method="post">
        <div class="form-group">
            <label for="username"> User Name </label>
            <input type="text" name="username" class="form-control" placeholder="User Name" >
        </div>
        <div class="form-group">
            <label for="Password"> Password </label>
            <input type="password" name="password" class="form-control" placeholder="Password" >
        </div>
        <input class="btn btn-info" type="submit" value="Log In">
    </form>
</div>