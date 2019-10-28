<?php
// Include config file
require_once "../config/db.php";
$page_title = "Register";
// Define variables and initialize with empty values
$username     = $password     = $confirm_password     = "";
$username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        $username = $_POST["username"];

        $stmt = $conn->prepare("SELECT id, username FROM users WHERE username = '$username'");
        $stmt->execute();
        $exist_user = $stmt->fetch();
        if ($exist_user) {
            $username_err = "This username is already taken.";
        } else {
            $username = trim($_POST["username"]);
        }

    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter an email address";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email_err = "email is invalid";
    } else {
        $email = trim($_POST["email"]);
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 4) {
        $password_err = "Password must have atleast 4 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        try { // Prepare an insert statement
            $sql = "INSERT INTO users (username, password, email)
            VALUES ('$username', '$hashed_password', '$email')";
            // use exec() because no results are returned
            $conn->exec($sql);
            header('Location: ./login');
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        // Close statement
        $conn = null;
    }
}
?>

<?php include '../components/header.php'?>


<body>
    <div class="container">
        <div class="row mt-4 p-3">
            <div class="col shadow p-3 mb-5 bg-white rounded">
                <h2>Sign Up</h2>
                <p>Please fill this form to create an account.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $username; ?>">
                        <span class="help-block"><?php echo $email_err; ?></span>
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
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <input type="reset" class="btn btn-default" value="Reset">
                    </div>
                    <p>Already have an account? <a href="login.php">Login here</a>.</p>
                </form>
            </div>
        </div>
    </div>

    <?php include '../components/footer.php'?>