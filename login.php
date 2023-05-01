<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="/css/register.css">
</head>

<body>
    <div class="form-container">

        <form role="form" id="templatemo-preferences-form" name="login" action="" method="post">
            <h1>Login </h1>
            <div class="form-group">
                <label>Name</label>
                <input type="text" id="name" placeholder="Enter Name" name="name" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" id="pwd" placeholder="Enter your password" name="password" required>
            </div>
            <button type="submit" name="submit" value="Login">Login</button>

            <h3><a href="register.php" class="already">Didn't sign up?...Sign up</a></h3>
        </form>
    </div>
    <?php
    // put your code here
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $password = $_POST['password'];

        $con = mysqli_connect("localhost", "root", "", "library1");

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $query = "SELECT * FROM user WHERE name='$name' and password='$password'";
        $result = mysqli_query($con, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                session_start();
                $_SESSION['username'] = $name;
                header("Location: home.php");
            } else {
                echo ("Invalid credenatials");
            }
        } else {
            echo ("Invalid credenatials");
        }
    }
    ?>
</body>
</html>
