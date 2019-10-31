<?php
// Initialize the session
session_start();
$page_title = "Login";

// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: ../home");
    exit;
}

// Include config file
require_once "../config/db.php";

// Define variables and initialize with empty values
$username     = $password     = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $stmt = $conn->prepare("SELECT id, username, password, firstname, level FROM users WHERE username = '$username' LIMIT 1");
        $stmt->execute();
        $row = $stmt->fetch();

        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";

        if (password_verify($password, $row['password'])) {
            // Password is correct, so start a new session
            session_start();

            // Store data in session variables
            $_SESSION["loggedin"]  = true;
            $_SESSION["id"]        = $row['id'];
            $_SESSION["username"]  = $row['username'];
            $_SESSION["firstname"] = $row['firstname'];
            $_SESSION["level"]     = $row['level'];

            // Redirect user to welcome page
            header("location: ../home");
        } else {
            // Display an error message if password is not valid
            $password_err = "The password you entered was not valid.";
        }
    }

    // Close connection
    $conn = null;
}
?>

<?php include '../components/header.php'?>


<body>
    <div class="container">
        <div class="row mt-4 p-3">
            <div class="col shadow-lg p-3 mb-5 bg-white rounded">
                <h2>Login</h2>
                <p>Please fill in your credentials to login.</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
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
                    <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
                </form>
            </div>
        </div>
    </div>


    <?php include '../components/footer.php'?>