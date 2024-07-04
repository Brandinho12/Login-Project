<?php

include 'connect.php';

if(isset($_POST['signUp'])){
    $FirstName=$_POST['fName'];
    $LastName=$_POST['LName'];
    $email=$_POST['email'];
    $Password=$_POST['password'];
    $Password=md5($password);//helps to encrypt password

    $checkEmail="SELECT *From users where email='$email'";
    $result=$conn->query($checkEmail);
    if ($result->num_rows>0){
        echo "Email Adress Already Exist!";
    }
}
else{
    $insertQuery="INSERT INTO users(FirstName,LastName,email,Password)
    VALUES('$FirstName','$LastName','$email','$password')";
    if($conn->querry($insertQuerry)==TRUE){
        header("location: index.php: index2.php");
    }
    else{
        echo "Error:".$conn->error;
    }
}
if(iset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
$result=$conn->query($sql);
if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$rows['email'];
    header("Location:hompage.php");
    exit();
}
else{
    echo "Not Found,Incorrect Email or Password";

}
}

?>