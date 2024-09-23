<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) == TRUE){
    echo "Uzytkownik zostal usuniety";
} else{
    echo "Blad: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>