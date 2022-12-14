<?php

if (isset($_GET["username"]) && isset($_GET["password"])) {
    if ($_GET["username"] == "admin" && $_GET["password"] == "adminnn") {
        echo "yeah";
        $host = "localhost";
        $user_db = "root";
        $password_db = "";
        $db_name = "communify";

        $conn = mysqli_connect($host, $user_db, $password_db, $db_name);
        if (!$conn) {
            die("database connection error!");
        }
        $q = "SELECT * FROM login";
        $ret = mysqli_query($conn, $q);

        echo "<table id='t1'>";
        while ($r = mysqli_fetch_assoc($ret)) {
            echo "<tr>";
            echo "<td>" . $r['id'] . "</td>";
            echo "<td>" . $r['password'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .container {
            margin-top: 50px;
        }

        table,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>
    <div class="container">

        <form action="" method="get">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

</html>