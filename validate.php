<?php include 'connection.php'; 
//To check whether the form has been submitted
if(!isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM login_details WHERE Email = '$email' AND Password = '$password'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        header("Location: index.php");
    }
    else{
        header("Location: incorrect.php");
    }
}

if(!isset($_GET['submit'])){
    $FirstName = $_GET['FirstName'];
    $LastName = $_GET['LastName'];
    $password = $_GET['password'];
    $cpassword = $_GET['cpassword'];
    $email = $_GET['email'];
    $DOB = $_GET['DOB'];
    $sql_email = "SELECT * FROM login_details WHERE Email = '$email'";
    $result_email = mysqli_query($conn, $sql_email);
    if(mysqli_num_rows($result_email) > 0){
        $sql = "INSERT INTO login_details (FirstName, LastName, Password, Email, DOB) VALUES ('$FirstName', '$LastName', '$password', '$email', '$DOB')";
        $result = mysqli_query($conn, $sql);
        if($result){
            echo "Account Created Successfully";
            header("Location: login.php");
        }
        else{
            header("Location: signup.php");
        }
    }
    else{
        echo "Email already exists";
        header("Location: signup.php");
    }
}
?>