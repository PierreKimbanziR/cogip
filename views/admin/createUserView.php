<?php
// Inclure Header ...
include "components/header.php";
include "components/navbar.php";

global $lastname_err;
global $firstname_err;
global $username_err;
global $email_err;
global $password_err;
global $password_verify_err;
global $jobTitle_err;
global $level_err;

global $lastname;
global $firstname;
global $username;
global $email;
global $password;
global $jobTitle;

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $lastname  = $user['lastname'];
    $firstname = $user['firstname'];
    $username  = $user['username'];
    $email     = $user['email'];
    $jobTitle  = $user['jobTitle'];
    $userLevel = $user['userLevel'];
}

?>


<div class="container">
    <h1 class="text-center"><?=($postPath == 'create') ? 'Create new' : 'Update'?> user</h1>
    <div class="row mt-4 p-3">
        <div class="col p-3 mb-5">
            <?php if ($postPath == "create"): ?>
            <p class="text-center">Please fill this form to create a new account.</p>
            <?php else: ?>
            <p class="text-center">Please modify the entries to update the account.</p>
            <?php endif?>
            <form action="/cogip/admin/users/<?=$postPath?>" method="post">
                <div class="form-group row">
                    <div class="col-12 col-md-6 <?php echo (!empty($jobTitle_err)) ? 'has-error' : ''; ?>">
                        <label>Job Title :</label>
                        <input type="text" name="jobTitle" class="form-control" value="<?php echo $jobTitle; ?>">
                        <span class="help-block"><?php echo $jobTitle_err; ?></span>
                    </div>
                    <div class="col-12 col-md-6">
                        <label>User level : </label>
                        <select class="form-control <?php echo (!empty($level_err)) ? 'has-error' : '' ?>"
                            name="userLevel">
                            <option value="2">Employee</option>
                            <option value="3" <?=($userLevel == '3') ? 'selected' : ''?>>SuperAdmin</option>
                        </select>
                        <span class="help-block"><?php echo $level_err; ?></span>
                    </div>
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
                    <div class="col-12 col-md-6 <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Username :</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <div class="col-12 col-md-6 <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                        <label>Email :</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                        <span class="help-block"><?php echo $email_err; ?></span>
                    </div>
                </div>
                <?php if ($postPath == "create"): ?>
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
                <?php endif?>
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