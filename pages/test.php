<?php
if (empty($_POST["name"])) {
    die("Name is required");
}
if (empty($_POST["password"])) {
    die("password is required");
}
if (empty($_POST["confirm"])) {
    die("confirm password is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 numbers");
}

if ($_POST["password"] !== $_POST["confirm"]) {
    die("Passwords must match");
}
$name=$_POST['name'];
$password=$_POST['password'];
//database connection
$conn= new mysqli('localhost','root','','test');
    $stmt=$conn->prepare("insert into form(name,password) values(?,?)");
    $stmt->bind_param("si",$name,$password);
    $execval = $stmt->execute();
    echo $execval;
    echo"Regesterd Successfully..";
    $stmt->close();
    $conn->close();
?>