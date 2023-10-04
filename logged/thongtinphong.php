<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết phòng</title>
    <link rel="stylesheet" href="../css/thongtinphong.css?v=<?php echo time(); ?>" type='text/css'>
    <link rel="icon" href="./public_html/favicon.ico" type="image/png">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/a0ff9460a2.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <!-- menu -->
     
    <?php
    include('header.php');
    ?>
      <?php    
           $con = mysqli_connect("localhost","root","admin","burninghotel");
               if(!$con){
                   die("Kết nối không thành công");
               }
               $sql = "SELECT * From chitietthanhtoan, chitietphong, phong where phong.ID=chitietphong.ID_Phong and chitietphong.TenPhong=chitietthanhtoan.TenPhong AND MaDonHang='".$_SESSION['ma']."'";
               $result = mysqli_query($con, $sql);
               $chitiets = array();
               if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){
                    $tenphong = $row['TenPhong'];
                    $dongia = $row['GiaPhong'];
                    $loaiphong = $row['LoaiPhong'];
                    $tenphong = $row['TenPhong'];
                    $tongtien = $row['SoTienPhaiTra'];
                    $anhphong = $row['IMG'];
                    $ngayden = $row['NgayDen'];
                    $ngaydi = $row['NgayDi'];
                  }
               }
               
              ?>
    <div class="main">
        <div class="body">
            <div class="inforroom">
                <h1>Chi Tiết Phòng</h1>
                <p class="inforroom1">Mã Phòng:<?php echo $_SESSION['ma']?></p>
                <p class="inforroom1">Loại Phòng: <?php echo $loaiphong?></p>
                <div class="inforanh">
                    <img src="<?php echo $anhphong?>" alt="" width="550px" height="250px">
                    <div class="inforchu">  
                        <div class="inforrice">
                            <div class="rice1"><?php echo $dongia?></div>
                            <div class="rice2">/Night</div>
                        </div>
                        <div class="rice3"> <?php echo $tenphong?> </div>
                    </div>
                </div>
           </div>
           <div class="inforchitiet">
                <table>
                    <tr>
                        <td>Ngày đặt: </td>
                        <td><?php echo  $ngayden?></td>
                    </tr>
                    <tr>
                        <td>Ngày trả:</td>
                        <td> <?php echo $ngaydi?></td>
                    </tr>
                    <tr>
                        <td>Tên khách hàng: </td>
                        <td><?php echo $_SESSION['ten']?></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại:</td>
                        <td><?php echo $_SESSION['sdt']?></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><?php echo $_SESSION['email']?></td>
                    </tr>
                    <tr>
                        <td>Tổng tiền:</td>
                        <td><?php echo $tongtien?> VND</td>
                    </tr>
                    <tr>
                        <td>Trạng thái:</td>
                        <td>Đã thanh toán</td>
                    </tr>
                </table>
           </div>
        </div>
    
    </div>
        <!-- footer -->
      <?php
    include('footer.php');
    ?>
</body>
</html>