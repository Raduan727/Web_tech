<?php
require_once('../Models/alldb.php');

if(isset($_POST['Book']))
{
    $room_status = $_POST['room_status'];
    $price = $_POST['price'];
    $image = $_POST['image'];


    $roomResult = roomRent($room_status, $price, $image);
    if ($roomResult) {
        header('Location: ../Views/room.php');
    } else {
        echo "Error the room booking .";
    }
}

if (isset($_GET['delete'])) {
   
    $id=$_GET['delete'];
    $delResult = bookingDelete($id);
    if ($delResult) {
        header('Location: ../Views/room.php');

    } else {
        echo "Error deleting the room.";
    }
}




?>
