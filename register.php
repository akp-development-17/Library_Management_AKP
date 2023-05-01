<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Library Management System</title>
    <link rel="stylesheet" href="/css/register.css">
</head>

<body>
    <?php
    $Name = $id = $Contact = $Password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Name = $_POST['name'];
        $Id = $_POST['id'];
        $Contact = $_POST['contact'];
        $Password = $_POST['password'];

        $con = mysqli_connect("localhost", "root", "", "library1");

        $query = "INSERT INTO `user` (id, name, contact, password) VALUES ('$Id', '$Name', '$Contact', '$Password')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo ("Registration Succesfull");
            header("location:login.php");
        } else {
            echo ("Fail");
        }
    }
    ?>
    <div class="form-container">
        <form action="" method="POST">
            <h1>Library Registration </h1>
            <div class="form-group"><label>Name</label><input type="text" name="name" placeholder = "Enter your name" required></div>
            <div class="form-group"><label>Id</label><input type="text" placeholder = "Create your userid" name="id"></div>
            <div class="form-group"><label>Contact</label></br><input type="text" name="contact" placeholder = "Enter your contact number" required></div>
            <div class="form-group"><label>Password</label><input type="text" name="password" placeholder="Create password" required></div>
            <button type="submit" name="submit" value="Register">Register</button>
            <h3><a href="login.php" class="already">Already signed up?...Login</a></h3>
        </form>
    </div>
</body>

</html>