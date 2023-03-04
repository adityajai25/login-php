<style>
    @media only screen and max-width:118px{
        #box{
            width: 100%;
            height: 100%;
        }
    }
    html{
        height: 100%;
    }
    body{
        background-color: #F2EDD7 !important;
    }
    #box{
        margin-top : 10%;
        border : 1px solid #755139;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 0px 0px 17px;
        gap: 15px;
        width: 510px;
        height: 400px;
        backdrop-filter: blur(2px);
    }
    #box h1{
        width: 400px;
        height: 40px;
        font-family: 'Verdana';
        font-style: normal;
        font-weight: 250;
        font-size: 40px;
        line-height: 50px;
        text-align: center;
        color: #755139;
        flex: none;
        flex-grow: 0;
    }
    input{
        margin-left:15% !important;
        width: 350px;
        height: 45px;
        background: #755139;
        color : #F2EDD7;
        margin-bottom : 3% !important;
        box-shadow: 0px 4px;
        border-radius: 15px;
    }
    ::placeholder{
        width: 300px;
        height: 45px;
        font-family:'Verdana';
        justify-content : center;
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        padding:5%;
        color: #FFFFFF;
        order: 2;
        flex-grow: 0;
    }
    .login{
        width: 200px;
        height: 45px;
        margin-top:5% !important;
        margin-left:28% !important;
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
    .submit{
        width: 200px;
        height: 45px;
        margin-top: 5% !important;
        margin-left:28% !important;
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
        margin-left:4% !important;
        margin-top:4% !important;
        align-items: center;
        font-family: 'Verdana';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        color: #000000;
        line-height: 20px;
    }
</style>
<html>
    <head>
        <title> Forgot Password </title>
        <meta charset='utf-8'>
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class = "container" id="box">
            <h1> Forgot Password </h1>
            <label class = "new"> Please enter your email address. </label>
            <form action="reset.php" method="POST">
                <input type="text" id="email" name="email" placeholder="Enter your email address" required>
                <button class = "submit" type="submit" name="submit">Send Request</button><br>
                <label class = "new">Back to login</label><br>
                <button class = "login" type="button" onclick="window.location.href='login.php'">Login</button>
            </form>
        </div>
    </body>
</html>