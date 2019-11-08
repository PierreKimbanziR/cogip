<?php
require "components/header.php";
require "components/navbar.php";
global $new_password_err;
global $reset_password_err;
global $new_password;

?>

<div class="container">
    <div class="row mt-4 p-3">
        <div class="col shadow p-3 mb-5 bg-white rounded">
            <h2>Reset Password</h2>
            <p>Please fill out this form to reset your password.</p>
            <form action="/cogip/auth/reset-password" method="post">
                <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                    <label>New Password</label>
                    <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                    <span class="help-block"><?php echo $new_password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a class="btn btn-link" href="/cogip/auth/account">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require "components/scripts.php";
require "components/footer.php";