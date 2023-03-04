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
        // header("Location: incorrect.php");
        mysqli_error($result);
    }
}
?>