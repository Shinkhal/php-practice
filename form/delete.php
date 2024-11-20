<?php include 'connection.php';
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = '$id'";
$data = mysqli_query($con,$query);
if($data){
    echo "deleted";
}
else{
    echo "not deleted";
}
?>