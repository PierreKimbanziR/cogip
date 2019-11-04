<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";
?>


<div class="container">
    <div class="row mt-4 p-3">
        <div class="col shadow p-3 mb-5 bg-white rounded">
            <h2>Create new user</h2>
            <p>Please fill this form to create a new account.</p>
            <form action="/cogip/admin/users/<?=$postPath?>" method="post">
                <div class="form-group <?php echo (!empty($level_err)) ? 'has-error' : ''; ?>">
                    <label>User level</label>
                    <select name="level">
                        <option value="2">Employee</option>
                        <option value="3">SuperAdmin</option>
                    </select>
                    <span class="help-block"><?php echo $level_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($fonction_err)) ? 'has-error' : ''; ?>">
                    <label>Job Title :</label>
                    <input type="text" name="fonction" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $fonction_err; ?></span>
                </div>
                <div class="form-group row">
                    <div class="col-12 col-md-6 <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                        <label>Firstname :</label>
                        <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                        <span class="help-block"><?php echo $firstname_err; ?></span>
                    </div>
                    <div class="col-12 col-md-6 <?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
                        <label>Lastname :</label>
                        <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                        <span class="help-block"><?php echo $lastname_err; ?></span>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12 col-md-6 <?php echo (!empty($firstname_err)) ? 'has-error' : ''; ?>">
                        <label>Username :</label>
                        <input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>">
                        <span class="help-block"><?php echo $firstname_err; ?></span>
                    </div>
                    <div class="col-12 col-md-6 <?php echo (!empty($lastname_err)) ? 'has-error' : ''; ?>">
                        <label>Email :</label>
                        <input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>">
                        <span class="help-block"><?php echo $lastname_err; ?></span>
                    </div>
                </div>
                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                    <span class="help-block"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control"
                        value="<?php echo $confirm_password; ?>">
                    <span class="help-block"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Submit">
                </div>
            </form>
        </div>
    </div>
</div>





<?php
include "components/scripts.php";
include "components/footer.php";