
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
//print_r($_SESSION["loginerror"]);
$username="";
$password="";
if(isset($_SESSION["loginerror"])){
    $username=$_SESSION["loginerror"][0];
    $password=$_SESSION["loginerror"][1];
   echo "<h3 style='color: red'>".$_SESSION["loginerror"][2]."</h3>";
}
?>
    <form action="./index.php" method="POST">
        <label for="user">username:</label>
        <input type="text" name="username" id="username" required value="<?php echo $username ?>"><br>
        <label for="password">Password</label>
        <input type="password" name="password" required value="<?php echo $password ?>" ><br>
        <a href="./register.php">Register</a>
        <input type="checkbox" name="remember">Remember me</input>
        <input type="submit" name="submit" value="submit">
        
    </form>
</body>
</html>