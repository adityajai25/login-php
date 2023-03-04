<style>
    html{
        height: 100%;
    }
    body{
        background-color: #F2EDD7 !important;
    }
    #box{
        margin-top : 5%;
        border : 1px solid #755139;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0px 0px 17px;
        gap: 31px;
        width: 510px;
        height: 690px;
        /* left: 415px;
        top: 157px; */
        backdrop-filter: blur(2px);
    }
    #box h1{
        width: 400px;
        height: 40px;
        font-family: 'Verdana';
        font-style: normal;
        font-weight: 250;
        font-size: 50px;
        line-height: 50px;
        text-align: center;
        color: #755139;
        flex: none;
        flex-grow: 0;
    }
    input{
        margin-left:10% !important;
        width: 400px;
        height: 45px;
        /* left: 101px;
        top: 162px; */
        background: #755139;
        color : #F2EDD7;
        margin-bottom : 3% !important;
        box-shadow: 0px 4px;
        border-radius: 15px;
    }
    ::placeholder{
        width: 400px;
        height: 45px;
        font-family:'Verdana';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        padding:5%;
        color: #FFFFFF;
        order: 2;
        flex-grow: 0;
    }
    .login{
        width: 150px;
        height: 45px;
        /* left: 100px;
        top: 362px; */
        margin-left:10% !important;
        background: #755139;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        font-family: 'Verdana';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 20px;
        text-align: center;
        text-transform: capitalize;
        color: #F2E5D9;   
    }
    .signup{
        width: 150px;
        height: 45px;
        margin-left:10% !important;
        background: #755139;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        font-family: 'Verdana';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 20px;
        text-align: center;
        text-transform: capitalize;
        color: #F2E5D9;
    }
    label{
        margin-left:10% !important;
        font-family: 'Verdana';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 20px;
        color: #000000;
    }
    .btn-group{
        margin-left:10% !important;
    }
</style>
<html>
    <head>
        <title>My Signup Page</title>
        <meta charset='utf-8'>
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class = "container" id="box">
            <h1> Signup </h1>
            <form action="accountinsert.php" method="GET">
                <input type="text" name="FirstName" placeholder="First Name" required/><br/><br/>
                <input type="text" name="LastName" placeholder = "Last Name" required/><br/><br/>
                <input type="password" name="password" placeholder="Set up a new password" required/><br><br>
                <input type="password" name="cpassword" placeholder="Confirm your password" required/><br><br>
                <input type="text" name="email" placeholder="E-Mail" required/><br/><br/>
                <label class="new"> Date of Birth </label>
                <input type ="date" name="DOB" placeholder = "Date of Birth" required/><br/><br/>
                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group" role="group" aria-label="First group">
                        <button class = "signup" type="submit" value="signup">Register</Button>
                    </div>
                    <div class="btn-group me-2" role="group" aria-label="Second group">
                        <button class = "login" type="button" onclick="window.location.href='login.php'">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>