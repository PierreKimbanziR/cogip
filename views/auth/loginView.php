<style>
body {background:rgb(204, 211, 223) !important;;
}
</style>
<?php include 'components/header.php';

global $username_err;
global $password_err;
global $username;
global $password;

?>

    <div class="containter">
        <div class="row d-flex justify-content-center mt-3">
            <img src="/cogip/static/img/cogip-logo2.png" height="150px" alt="">
        </div>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-12 col-md-5 shadow-lg p-3 mb-5 bg-white rounded">
                <h2>Login</h2>
                <p>Please fill in your credentials to login.</p>
                <form action="/cogip/auth/login" method="POST">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        <span class="help-block"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'components/footer.php'?>