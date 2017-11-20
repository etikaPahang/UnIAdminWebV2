<?php
$link=mysqli_connect("localhost", "root", "", "login_ui");
if(!$link){
    die("Koneksi error : ".mysqli_connect_errno()." - ".mysqli_connect_error());
}

if(isset($_POST['login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
} else {
    header("Location:log.php");
}

$query="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result=mysqli_query($link, $query);
if(!$result){
    ("Query error : ".mysqli_errno($link)." - ".mysqli_error($link));
}

if($row=mysqli_fetch_assoc($result)){
    if($row['username']==$username && $row['password']==$password){
        $_SESSION['username']=$username;
        header("Location:home.php");
    } else {
        header("Location:log.php");
    } 
} else {
    header("Location:log.php");
}

?>