<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <title></title>
    <link href="common.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
</head>
<body>
    <form id="form1" action="insert.php" method="post">
        <div class="mainDiv">

            <h1 class="registerHeader" >Register</h1>

            <input type="text" ID="TextBox3"  placeholder="Phone Number" class="tbInput" name="phno"></input>

            <input type="password" ID="TextBox4"  placeholder="Password" class="tbInput" name="pass"></input>

            <input type="password" ID="TextBox5"  placeholder="Confirm Password" class="tbInput" name="pass1"></input>

            <div class="buttonContainer">
                <button type="submit" class="submitButton">Register</button>
                <button type="button" class="submitButton" onclick="window.location.href='login.php'">Login</button>
            </div>
    </form>
</body>
</html>
