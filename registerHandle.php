<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Sri:
    <?php        
        $servername = "localhost";
        $username = "username";
        $password = "";
        print( "Sri:")
        // Create connection
        // $conn = new mysqli($servername, $username, $password);
        // Check connection
        // if ($conn->connect_error) {
        // die("Connection failed: " . $conn->connect_error);
        // }

        // $username= $_GET["name"]
        // $email= $_GET["email"]
        // $password= $_GET["password1"]
        // $usertype= $_GET["usertype"]

        $sql = "INSERT INTO User (username, email, password, usertype)
        VALUES ($username, $email, $password, $usertype)";

        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
	?> 
</body>
</html>
