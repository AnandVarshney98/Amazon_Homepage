<body>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="amazonclone";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);


//check connection
$name=$_POST['customerName'];
$mobilenumber=$_POST['phone'];
$password=$_POST['password'];
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO registration(name,mobilenumber,password)VALUES('$name','$mobilenumber','$password')";

if($conn->query($sql) === TRUE)
{  
    echo "Your Amazon clone account has been created successfully. <br>";
    echo "Please <a href=amazonsignin.html> Sign In </a>";
}
else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}
?>
</body>