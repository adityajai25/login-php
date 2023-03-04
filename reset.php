<?php include 'connection.php'; 
    if(!isset($_POST['submit'])){
        $email= $_POST['email'];
        $sql = "SELECT * FROM login_details WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            header('Location: newpass.php');
        }
        else{
            echo "<html>
                    <body>    
                        <label> User not Found creeate a new account;</label>
                        <button class='signup.php' type='button' onclick='window.location.href='signup.php''>Sign up</button>
                    </body>
                </html>";
        }
    }
?>