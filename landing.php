<?php include 'connection.php';
    if (isset($_SESSION['email'])) {
    $resut = mysqli_query($conn, "SELECT * FROM users WHERE Email = $email" . $_SESSION['email'] . "'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<li class='login current2'><a href='login.php'>". $row['fnidusers'] . $row['lnidusers'] ."</a></li>";
    }
} else
    echo "<li class='login current2'><a href='login.php'>Login / Sign up</a></li>";
?>
<html>
    <head>
        <title>Welcome</title>
    </head>
    <body>
        <h1> Login Successful </h1>
        <p> You have successfully logged in. </p>
        <button type="button" onclick="window.location.href='login.php'">Logout</button>
    </body>
</html>