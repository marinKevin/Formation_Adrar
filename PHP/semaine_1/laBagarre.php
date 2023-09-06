<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "127.0.0.1";
        $servername = "docker-lamp-mysql";
        $username = "root";
        $password = "p@ssw0rd";
        $dbname = "laBagarre";
        $conn = null;
        try{
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<p>Connected successfully</p>";
        }   catch(PDOException $e){
            echo "Connection failed: ".$e->getMessage() . "\r\n";
        }
    ?>
</body>
</html>