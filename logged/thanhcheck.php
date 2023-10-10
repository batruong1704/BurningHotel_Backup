<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="../public_html/favicon.ico" type="image/png">
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
              <input type="datetime-local" name="ngaydi" id="ngaydi" value="<?php echo isset($ngay) ? $ngay : ''; ?>" required>
            </div>
          </div>
          <div class="col">
            <div>
              Số Lượng
            </div>
            <div>
              <select name="room" id="room">
                <option value="1">1 người</option>
                <option value="2">2 người</option>
                <option value="3">3 người</option>
                <option value="4">4 người</option>
                <option value="5">5 người</option>
                <option value="6">6 người</option>
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
                $con=mysqli_connect("localhost","root","","burninghotel");
                if(!$con){
                    echo'kết nối không thành công';
                }
                $sql="SELECT * FROM phong";
                $result=mysqli_query($con,$sql);
                if(mysqli_num_rows($result)>0){
                    while ($row=mysqli_fetch_assoc($result)){
                      echo"<option value ='".$row['ID']."'>".$row["LoaiPhong"]."</option>";
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