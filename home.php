<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION["username"]) {
    ?>
        Welcome <?php echo $_SESSION["username"];
            }
            $con = mysqli_connect("localhost", "root", "", "library1");
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }

            $sql = "select * from books where available = 'yes'";
            $result = mysqli_query($con, $sql);
            echo "<table style='width:50%' border='1'>
                        <caption><h1>List of Available Books in library</h1> </caption>
                        <tr>
                        <th>book_id</th>
                        <th>title</th>
                        <th>author</th>                        
                        </tr>";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><center>" . $row["book_id"] . "</center></td>";
                    echo "<td><center>" . $row["title"] . "</center></td>";
                    echo "<td><center>" . $row["author"] . "</center></td>";
                    echo "</tr>";
                }
            } else {
                echo "error";
            }

            //searching
            if (isset($_POST['search'])) {
                $name = $_POST['searching'];

                $con = mysqli_connect("localhost", "root", "", "library1");

                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }

                $sql = "select * from books where title LIKE '%$name%' and available = 'yes'  ";
                $result = mysqli_query($con, $sql);


                echo "<table style='width:50%' border='1'>
                        <caption> <h1>List of searched books</h1></caption>
                        <tr>
                        <th>book_id</th>
                        <th>title</th>
                        <th>author</th>                        
                        </tr>";
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td><center>" . $row["book_id"] . "</center></td>";
                        echo "<td><center>" . $row["title"] . "</center></td>";
                        echo "<td><center>" . $row["author"] . "</center></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<h1>Book not found</h1>";
                }
            }

            if (isset($_POST['Reserve'])) {
                $bookid = $_POST['bookid'];
                $name1 = $_SESSION["username"];

                $con = mysqli_connect("localhost", "root", "", "library1");

                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
                $sql = "UPDATE books SET available='no' Where book_id = '$bookid'  ";
                $query1 = "INSERT INTO `reservation` (`Book_ID`, `User_name`) VALUES ('$bookid', '$name1')";
                $result1 = mysqli_query($con, $query1);
                $result = mysqli_query($con, $sql);
                if ($result == 1) {
                    echo ("<h1>Reservation Succesful</h1>");
                } else {
                    echo ("<h1>Reservation failed/ book not found</h1>");
                }
            }
                ?>
    <div class="form-container">
        <form role="form" id="templatemo-preferences-form" name="Search" action="" method="post">
            <h1>Search Book</h1>
            <div class="form-group">
                <input type="text" id="search" placeholder="Enter the title" name="searching" required>
                <button type="submit" name="search" value="Search">Search</button>
            </div>
        </form>
    </div>
    <div class="form-container">
        <form role="form" name="reservation" action="" method="post">
            <h1>Reserve Book</h1>
            <div class="form-group">
                <label for="reserve">Book Id</label>
                <input type="text" id="reserve" placeholder="Enter Book id" name="bookid" required>
            </div>
            <button type="submit" name="Reserve" value="Reserve">Reserve</button>
        </form>
    </div>

</body>

</html>