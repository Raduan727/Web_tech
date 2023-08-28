<?php
require_once('db.php');
function auth($username, $password)
{
    $conn = getConnection();
    $sql = "SELECT * FROM `user` WHERE username = '$username' AND password = '$password'";
    $data = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($data);
    if ($count == 1) {
        return true;
    } else {
        return false;
    }
}
function availableRoom()

{              
               $conn = getConnection();
              $sql = "SELECT * FROM `room`";
               $query = mysqli_query($conn, $sql);
                if ($query) {
                        
                        return $query;
                          } 
                     else {
                          echo "Error";
                         }
}



function roomRent($room_status, $price, $image) {
    $conn = getConnection();
$sql = "INSERT INTO `reservedroom`(room_status, price, image) VALUES( '$room_status', '$price', '$image')" ;    
$room_query = mysqli_query($conn, $sql);
    if ($room_query) {
                        
                    return  $room_query;
                } 
     else {
            echo "Error";
         }


}
function reservedRoom(){
     $conn = getConnection();
    $sql = "SELECT * FROM `reservedroom`";
    $reserved_data = mysqli_query($conn, $sql);

    if ($reserved_data) {
        return $reserved_data;
    } else {
        echo "Error";
    }

}
function bookingDelete($id){
         $conn = getConnection();
         
        $sql = "DELETE FROM `reservedroom` where id=$id ";
        $homeDel = mysqli_query($conn, $sql);
        if ($homeDel) {
            // code...
            return true;
        }
        else false;
          

   }


  
?>
