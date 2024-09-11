<?php

$servername="localhost";
$username="root";
$password="";
$dbname="amazonclone";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
$mobilenumber=$_POST['email'];
$password=$_POST['password']; 
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
// echo "Connected Successfully";
//validation
$sql="select * from registration where mobilenumber='$mobilenumber' and password='$password'";

$result=$conn->query($sql);

if($result->num_rows>0){
    // echo "valid user";
    header("Location: http://localhost/validateform/amazonclone/");
}else{
    echo "not a valid user";
}
$conn->close();
?>