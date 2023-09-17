<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../common/bootstrap-5.2.2-dist/css/bootstrap.min.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/infor.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
<?php include('header.php');
?>
<?php
      if(isset($_POST['btn'])){
        $con = mysqli_connect("192.168.179.134","root","admin","baitaplonweb");
                if(!$con){
                   die("Kết nối không thành công");
                }
               $sql = "SELECT * From quanlytaikhoan where SDT='".$_SESSION['sdt']."'";
               $result = mysqli_query($con, $sql);
               if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){
                        $ten=$row['HoTen'];
                        $sdt=$row['SDT'];
                        $email=$row['Email'];
                        $cmnd=$row['CMND'];
                        $pass=$row['PassWord'];
                     
                    }
                }
               
        ?>

        <section id="infor">
        <div class="container">
            <h1 class="text-center">Thông Tin Cá Nhân</h1>
            <p class="text-center">Thông tin được cung cấp bên dưới sẽ được sử dụng để đăng nhập vào tài khoản của khách sạn cho nhu cầu đặt phòng của bạn.</p>
            <form action="" method="POST">
                <div class="row">
                <div class="col-5">
                    <label for="">Họ và tên: </label>
                </div>
                <div class="col-7">
                    <input type="text" name="ten" id="" value="<?php echo $ten;?>" >
                    <i class="fa fa-wrench" style="color: #EBB853; font-size: 25px; margin-left: 10px;"></i>
                </div>
                <div class="col-5">
                    <label for="">Số Điện Thoại: </label>
                </div>
                <div class="col-7">
                    <input type="text" name="sdt" id="" value="<?php echo $sdt;?>" >
                    <i class="fa fa-wrench" style="color: #EBB853; font-size: 25px; margin-left: 10px;"></i>
                </div>
                <div class="col-5">
                    <label for="">Email: </label>
                </div>
                <div class="col-7">
                    <input type="text" name="email" id="" value="<?php echo $email?>">
                    <i class="fa fa-wrench" style="color: #EBB853; font-size: 25px; margin-left: 10px;"></i>
                </div>
                <div class="col-5">
                    <label for="">Số CMND: </label>
                </div>
                <div class="col-7">
                    <input type="text" name="cmnd" id="" value="<?php echo $cmnd?>" >
                    <i class="fa fa-wrench" style="color: #EBB853; font-size: 25px; margin-left: 10px;"></i>
                </div>
                <div class="col-5">
                    <label for="">Mật Khẩu: </label>
                </div>
                <div class="col-7">
                    <input type="text" name="pass" id="" value="<?php echo $pass?>" >
                    <i class="fa fa-wrench" style="color: #EBB853; font-size: 25px; margin-left: 10px;"></i>
                </div>
            </div> 
            <div class="confirm d-flex">
                <button type="submit" name="submit1"> Xác Nhận Thông Tin </button>
            </div>
            </form>
            </div>
   
   </section>

        <?php
        }
         else if(isset($_POST['submit1'])){
            $hoten=$_POST["ten"];
            $email=$_POST["email"];
            $sdt=$_POST["sdt"];
            $cmnd=$_POST["cmnd"];
            $pass=$_POST["pass"];
            $con=mysqli_connect("192.168.179.134","root","BurningHotel.","burninghotel");
            if(!$con){
                echo"Kết nối thất bại";
                return;
            }
            $sql = "UPDATE quanlytaikhoan SET HoTen='".$hoten."', SDT='".$sdt."', Email='".$email."', CMND='".$cmnd."',PassWord='".$pass."' WHERE SDT='".$_SESSION['sdt']."'";
            $result = mysqli_query($con, $sql);
            if($result == true){
                echo "<script>";
                echo "alert('Cập nhật thành công !!!');";
                echo "window.location.href='index1.php'";
                echo "</script>";
            }
        }

      else{
               
               $con = mysqli_connect("192.168.179.134","root","admin","baitaplonweb");
               if(!$con){
                   die("Kết nối không thành công");
               }
               $sql = "SELECT * From quanlytaikhoan where SDT='".$_SESSION['sdt']."'";
               $result = mysqli_query($con, $sql);
               if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){
                      $ten=$row['HoTen'];
                      $sdt=$row['SDT'];
                      $email=$row['Email'];
                      $cmnd=$row['CMND'];
                      $pass=$row['PassWord'];
                     
                    }
                }
               
              ?>
    <section id="infor">
        <div class="container">
            <h1 class="text-center">Thông Tin Cá Nhân</h1>
            <p class="text-center">Thông tin được cung cấp bên dưới sẽ được sử dụng để đăng nhập vào tài khoản của khách sạn cho nhu cầu đặt phòng của bạn.</p>
            <form action="" method="POST">
                <div class="row">
                <div class="col-5">
                    <label for="">Họ và tên: </label>
                </div>
                <div class="col-7">
                    <input type="text" name="ten" id="" value="<?php echo $ten;?>" disabled>
                    <i class="fa fa-wrench" style="color: #EBB853; font-size: 25px; margin-left: 10px;"></i>
                </div>
                <div class="col-5">
                    <label for="">Số Điện Thoại: </label>
                </div>
                <div class="col-7">
                    <input type="text" name="sdt" id="" value="<?php echo $sdt;?>" disabled>
                    <i class="fa fa-wrench" style="color: #EBB853; font-size: 25px; margin-left: 10px;"></i>
                </div>
                <div class="col-5">
                    <label for="">Email: </label>
                </div>
                <div class="col-7">
                    <input type="text" name="email" id="" value="<?php echo $email?>" disabled>
                    <i class="fa fa-wrench" style="color: #EBB853; font-size: 25px; margin-left: 10px;"></i>
                </div>
                <div class="col-5">
                    <label for="">Số CMND: </label>
                </div>
                <div class="col-7">
                    <input type="text" name="cmnd" id="" value="<?php echo $cmnd?>" disabled>
                    <i class="fa fa-wrench" style="color: #EBB853; font-size: 25px; margin-left: 10px;"></i>
                </div>
                <div class="col-5">
                    <label for="">Mật Khẩu: </label>
                </div>
                <div class="col-7">
                    <input type="text" name="pass" id="" value="<?php echo $pass?>" disabled>
                    <i class="fa fa-wrench" style="color: #EBB853; font-size: 25px; margin-left: 10px;"></i>
                </div>
            </div> 
            <div class="confirm d-flex">
                <button type="submit" name="btn"> Sửa đổi thông tin  </button>
            </div>
            </form> 
        </div>
    </section>
    <?php
      }
      
      include('footer.php');
    ?>
    
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!-- bootstrap -->
    <script src="../common/bootstrap-5.2.2-dist/js/popper.min.js"></script>
    <script src="../common/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <!-- slick -->
    <script src="../common/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../js/scrip.js"></script>
</body>
</html>