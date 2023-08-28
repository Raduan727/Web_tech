<?php

require_once('../Models/alldb.php');

$availableRoom = availableRoom();
$roomResult = reservedRoom();


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Receptionist</title>
   <style>
    *{
    margin: 0px;
    padding: 0px;
}
body{
   margin: 0px;
    padding: 0px;
    background: black;
    color: white;
    
}
h1{  
    margin-top: 20px;
    text-align: center;
}

.sub_container{
    display: grid;
    grid-template-columns:repeat(3, 1fr) ;
    grid-template-rows: repeat(3, 1fr);
    color: white;
    float: left;
    text-align: center;
    background: #262926;
    height: 550px;
    width: 700px;
   margin: 10px; 
   margin-top: 45px;

}
.sub_container img{
    height: 100px;
    width: 100px;
}
.room_items{
    margin-top: 20px;
}
.room_items input{
    background: transparent;
    color: white;
    border: none;
    text-align: center;
}

.room_items .btn{
    height: 30px;
    width: 140px;
    background: red;
    color: white;
    border: none;
}
.update{
    background: green;
    color: white;
    border: none;
    height: 25px;
    width: 80px;
}
.delete{
    background: red;
    color: white;
    border: none;
    height: 25px;
    width: 80px;
}

.reserved_room{
    margin: 10px; 
   margin-top: 45px;
   float: right;
   background: #262926;
   width: 500px;
   height: 550px;
   color: white;
}
 
.reserved_room th{
    margin-top: 50px;
   background: green;
   color: white;
}
.reserved_room h3{
    margin-top: 20px;
    text-align: center;
}

.footer h1{
    color: white;
}

    
      .reserved_room tr{
         color: white;
      }
      .reserved_room img{
        margin-left: 15px;
        margin-top: 10px;
        height: 50px;
        width: 60px;
   }
.footer{
                    background: #262926;
                    height: 300px;
                    width: 100%;
                    color: white;
                    text-align: center;
                     margin-top: 50%;
       }
             
            .footer_details{
                 background: transparent;
                 color: white;
                 text-align: center;
                 height: 80px;
                 margin: 10px;
            }
            
            .footer_contact{
                 background: #transparent;
                 color: white;
                 border-radius: 14px;
                 text-align: center;
            }
          
            .footer_contact input{
                margin: 5px;
                height: 20px;
                width: 200px;
            }
             .footer_contact button{
                height: 22px;
                width: 70px;
             }
              .footer_contact textarea{
                height: 35px;
                width: 200px;
             }
   </style>
</head>
<body>
   <form action="../Controllers/roomCheck.php" method="post">

      <div class="Container">
        
             <h1>RECEPTIONIST DASHBOARD</h1>
       
         
         <hr>
         <div class="sub_container">


                
            <?php  
            while ($room_data = mysqli_fetch_assoc($availableRoom)) {
                ?>
                <div class="room_items">
               <img src="../image/<?php echo $room_data['image']; ?>" alt="">
          <input type="text" name="room_status" value="<?php echo $room_data['room_status']?>">
            <input type="text" name="price" value="<?php echo $room_data['price'] ?>">
               <input type="text" name="image" value="<?php echo $room_data['image'] ?>" hidden>
             <input type="text" name="id" value="<?php echo $room_data['id'] ?>" hidden>         
               <input type="submit" value="Book" name="Book" class="btn">

               </div>
           
            <?php
               };?>
                    
         </div>
       </form> 


            <form action="../Controllers/roomCheck.php" method="get">

        <div class="reserved_room">
         <h3>BOOKED ROOM</h3>
           <table>
              <tr>
                 <th>Image</th>
                 <th>Room Status</th>
                 <th>Price</th>
                 <th colspan="2">Action</th>

              </tr>

              <?php  
                  $total = 0;
                  while ($reservedData = mysqli_fetch_assoc($roomResult)) {
                  
                 $total += $reservedData['price'];
                     ?>
                      <tr>
                        
               <td><img src="../image/<?php echo $reservedData['image']; ?>" alt=""></td>
                        <td><?php echo $reservedData['room_status']; ?></td>
                        <td><?php echo $reservedData['price']; ?></td>
                          <td>
                     <button class="update" name="edit" value="<?php echo $reservedData['id'] ?>">Pending...</button>
                    </td>
                    <td>
                    <button class="delete" name="delete" value="<?php echo $reservedData['id'] ?>">Cancel</button>
                    </td>
                  

                      </tr>

              <?php
               };?>


           </table>
          <?php echo "Total:" .$total ?> 
        </div>
       </form>

     


      <div class="footer">
            <h2>ABOUT US</h2>
            <hr>
           <div class="aboutUs">
                 <div class="footer_details">
                    <h3>RECIPTIONIST</h3>
                    <h4>Raduanul Islam</h4>
                    <span>I am a receptionist of MyHome.</span>
                    <span>Contact:raduanislam2023@gmail.com</span>
                </div>
               

               <div class=".footer_contact">
                <form action="">
                    <h4>CONTACT US</h4>
                   <input type="text" placeholder=" Email"><br>
                   <input  type="text" placeholder=" Password"><br>
                   <textarea name="" > </textarea><br>
                   <button>Submit</button>
                 </form>
          
             </div> 
           </div>
       </div>


</div>
</body>
</html>
