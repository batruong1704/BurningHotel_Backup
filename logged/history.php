<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/history.css?v=<?php echo time(); ?>" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link css bootstrap -->
    <link rel="stylesheet" href="../common/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <!-- link slick -->
    <link rel="stylesheet" type="text/css" href="../common/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../common/slick/slick-theme.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
    <link rel="icon" href="../public_html/favicon.ico" type="image/png">
</head>
<body>
    <?php
    include('header.php')
    ?>
    <div class="main">
    <?php
               
               $con = mysqli_connect("localhost","root","admin","burninghotel");
               if(!$con){
                   die("Kết nối không thành công");
               }
               $sql = "SELECT * From chitietthanhtoan,chitietphong where chitietphong.TenPhong=chitietthanhtoan.TenPhong AND HoTen='".$_SESSION['ten']."'";
               $result = mysqli_query($con, $sql);
               $chitiets = array();
               if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_array($result)){
                      $chitiets[]=array('TenPhong'=>$row["TenPhong"], 'TongTien'=>$row["SoTienPhaiTra"],
                      'NgayDen'=>$row["NgayDen"],'NgayDi'=>$row["NgayDi"], 'PhuongThucThanhToan'=> $row['PhuongThucThanhToan'],
                      'IMG'=>$row['IMG'], 'NgayTT'=>$row["NgayTT"]);
                      echo"</br>";
                  }
               }
               
              ?>

        <div class="mainroom">
        <?php foreach($chitiets as $key => $value) { ?>
            <div class="ngaydat"> <?php echo  $value['NgayTT'];?></div>
            <div class="mainroom_1">
                <div class="mainroom12">
                    <img src="<?php echo $value['IMG']?>" alt="" width="250px" height="200px">
                </div>

                <div class="mainroom11">
                    <p class="mainroom111"><?php echo $value['TenPhong']?></p>
                    <p class="mainroom111">Tổng Số Tiền : <?php echo $value['TongTien']?> VND</p>
                    <p class="mainroom112">Ngày Đến - Ngày Đi: <?php echo $value['NgayDen']. '/' .$value['NgayDi']?></p>
                    <p>Phương thức thanh toán:  <?php echo $value['PhuongThucThanhToan']?></p>
                </div>
                <div class="mainroom13">
                    <div class="mainroom131">Trạng thái</div>
                    <div class="mainroom132">Đã thanh toán</div>
                    
                </div>
            </div>
            <?php
                }
                ?>
      </div>
    </div>
    
    
    <?php
    include('footer.php')
    ?>
     <!-- jquery -->
     <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!-- bootstrap -->
    <script src="../common/bootstrap-5.2.2-dist/js/popper.min.js"></script>
    <script src="../common/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <!-- slick -->
    <script src="../common/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../js/scrip.js"></script>
</body>
</html>