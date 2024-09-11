<body>
    <h1>
        Database is ready
    </h1>


<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="studentform";

//create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
$FirstName=$_POST['fname'];
$phone=$_POST['Phnumber'];
$Password=$_POST['password'];
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO studentdata(FirstName,phone,Password)VALUES('$FirstName','$phone','$Password')";

if($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
    echo "<a href=view.php>View</a>";
}
else{
    echo "Error:" . $sql . "<br>" . $conn->error;
}
?>
</body>