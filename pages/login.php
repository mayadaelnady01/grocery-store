<?php 


$name=$_POST['name'];
$password=$_POST['password'];
$con= new mysqli('localhost','root','','test');
$stmt=$con->prepare("select * from form where password= ?");
$stmt->bind_param("i",$password);
$stmt->execute();
$stmt_result= $stmt->get_result();
if($stmt_result->num_rows>0){
    $data=$stmt_result->fetch_assoc();
   if($data['password']=== $password){
        echo"login Successfully";
     }
     else{
        echo"invalid name or password";
     }
}


?>