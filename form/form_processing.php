<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $firstname = $_POST["First_Name"];
        $lastname = $_POST["Last_Name"];
        $email = $_POST["Email"];
        $Phone = $_POST["Phone"];
        $username = $_POST["username"];
        $password = $_POST["Password"];

        echo "Firstname : {$firstname} <br> Lastname : {$lastname} <br> Email : {$email} <br> Phone : {$Phone} <br> Username : {$username} <br> Password : {$password}"
        
    ?>


</body>
</html>