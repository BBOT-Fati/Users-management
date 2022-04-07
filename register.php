
<?php
session_start();
?>
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
//print_r($_SESSION["registererror"]);
$username="";
$password="";
$password2="";
$email="";
if(isset($_SESSION["registererror"])){
    $username=$_SESSION["registererror"][0];
    $password=$_SESSION["registererror"][1];
   echo "<h3 style='color: red'>".$_SESSION["registererror"][2]."</h3>";
}
?>
    <form action="./register.php" method="POST">
        <label for="user">username:</label>
        <input type="text" name="username" id="username" required value="<?php echo $username ?>"><br>
        <label for="password">Password</label>
        <input type="password" name="password" required value="<?php echo $password ?>" ><br>
        <label for="password2">Password</label>
        <input type="password" name="password2" required value="<?php echo $password2 ?>" ><br>
        <label for="email">Email</label>
        <input type="email" name="email" required value="<?php echo $email ?>" ><br>
        <a href="./login.php">Login</a>
        <input type="submit" name="submit" value="submit">
        
    </form>
</body>
</html>