<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "perfumeDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    


    if($_POST[pass]==$_POST[pass1])
    {
        $sql = "INSERT INTO user VALUES('$_POST[phno]','$_POST[pass]')";

        if ($conn->query($sql) === TRUE) {
            header("Location: home.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    else{
        echo "Password Mismatch";
    }

    $conn->close();



    ?>

</body>

</html>