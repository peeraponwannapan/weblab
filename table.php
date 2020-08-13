<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <style type="text/css">
        table{
            margin:0 auto;
            margin-top:50px;
            width: 960px;
            table-layout:fixed;
            overflow:hidden;
            
        }

        table tr td{
            padding:10px;
            border-bottom:1px solid #333;
            
            word-wrap: break-word;
            
        }
        table tr th{
            
            background-color:#333;
            color:white;
            padding:10px;
            
            
        }
    </style>

    <title>Document</title>
</head>
<body>

<header>
        <nav class="menubar">
            <div class="container">
            <ul class="menubar1">
                <li><a href="index.html">HOME</a></li>
                <li><a href="table.php">TABLE</a></li>
            </ul>
        </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <?php
                $servername = "localhost";
                $username = "register";
                $password = "c642895123";
                $dbname = "register";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT email, full_name, address FROM register_users";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                    echo "<table><tr><th>Email</th><th>Full name</th><th>Address</th></tr>";
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["email"]."</td><td>".$row["full_name"]." </td><td>".$row["address"]."</td></tr>";
                    }
                    echo "</table>";
                    } else {
                     echo "0 results";
                    }
                    $conn->close();
                    ?>
                    </div>
</section>
</body>
</html>