<?php 
    include 'connection.php';
    if(!isset($_GET['submit'])){
        $FirstName = $_GET['FirstName'];
        $LastName = $_GET['LastName'];
        $password = $_GET['password'];
        $cpassword = $_GET['cpassword'];
        $email = $_GET['email'];
        $DOB = $_GET['DOB'];
        if($password != $cpassword){       
            echo '<script>alert("Passwords do not match")</script>';
        }
        else{
            $sql1 = "ALTER TABLE login_details  AUTO_INCREMENT = 1";
            $sql = "INSERT INTO login_details (FirstName, LastName, Password, Email, DOB) VALUES ('$FirstName', '$LastName', '$password', '$email', '$DOB')";
            $result1 = mysqli_query($conn, $sql1);
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "Account Created Successfully";
                header("Location: login.php");
            }
            else{
                header("Location: signup.php");
            }
        }
    }
?>