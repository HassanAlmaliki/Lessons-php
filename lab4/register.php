<?php
require_once "conectdb.php";

$name =  $password = $email =  '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $password = htmlspecialchars(trim($_POST['password']));
    $email = htmlspecialchars(trim($_POST['email']));
    $query = "INSERT INTO USERS 
    (name,password,email)
    values(:name,:password,:email)";
     $add = $conn->prepare($query);   //this used to PDO
    // $add = $mysqli($query);
    $add->execute([
        'name' => $name,
        'password' => $password,
        'email' => $email
        
    ]);
    echo "<script>alert('success')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    <label for="name">Name:</label>
    <input type="text" id="name" name="name">
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <br>

    <input type="submit" value="Sign in">
</form>
    
</body>
</html>