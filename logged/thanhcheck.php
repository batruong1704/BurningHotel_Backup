<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section id="checknow">
    <div class="container check text-white p-4">
      <form action="roomstyle.php" method="POST">
      <div class="row">
          <div class="col">
            
            <div>
              Check-in
            </div>
            <div>
              <input type="datetime-local" name="ngayden" id="ngayden" value="" required>
                
            </div>
          </div>
          <div class="col">
            <div>
              Check-out
            </div>
            <div>
              <input type="datetime-local" name="ngaydi" id="ngaydi" value="" required>
            </div>
          </div>
          <div class="col">
            <div>
              Số Lượng
            </div>
            <div>
              <select name="room" id="room">
              <?php
                for ($i = 1; $i <= 6; $i++) {
                    echo "<option value='$i'>$i người</option>";
                }
            ?>
              </select>
            </div>
          </div>
          <div class="col">
            <div>
              Loại Phòng
            </div>
            <div>
              <select name="category" id="category" >
              <?php
                      $con=mysqli_connect("localhost","root","","quanlykhachsan");
                      if(!$con){
                          echo'kết nối không thành công';
                      }
                      $sql="SELECT DISTINCT LoaiPhong FROM phong";
                      $result=mysqli_query($con,$sql);
                      if(mysqli_num_rows($result)>0){
                          while ($row=mysqli_fetch_assoc($result)){
                            echo"<option value ='".$row['LoaiPhong']."'>".$row["LoaiPhong"]."</option>";
                          }
                      }
                ?> 
              </select>
            </div>
          </div>
          <div class="col d-flex justify-content-center pe-0" style="align-items: center;">
             <input class="buttonCheck" type="submit" name="btn" value="Check Now">
          </div> 
      </div>
    </form>
   
    </div>
  </section>
</body>
</html>