<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay-B2</title>
    <link rel="stylesheet" href="../css/pay1.css?v=<?php echo time(); ?>" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link css bootstrap -->
    <link rel="stylesheet" href="../common/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <!-- link slick -->
    <link rel="stylesheet" type="text/css" href="../common/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../common/slick/slick-theme.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../public_html/favicon.ico" type="image/png">
</head>

<body>
     <!-- header -->
     <?php
    include('header.php');
    ?>
    
    <!-- Banner -->
    <form action="" method="POST">
    <section id="banner">
        <div class="container-fluid p-0 text-center">
            <div class="img">
                <img src="../img/pay/banner.jpg" alt="" class="img-fluid">
                <div class="box">
                    <div class="trangtri"></div>
                    <p class="m-0" style="font-size: 14px;font-family: Montserrat-Regular">Home - <span
                            style="color: #EBB853;">Room List</span></p>
                    <h3 style="font-size:36px;font-family: Montserrat-Bold;">Thanh Toán</h3>
                    <div class="trangtri"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="step">
        <div class="a">
            <nav aria-label="...">
                <ul class="pagination d-flex justify-content-between mb-0">
                    <li class="page-item"><a class="page-link rounded-circle" href="#">1</a></li>
                    <li class="page-item" aria-current="page">
                        <span class="page-link rounded-circle">2</span>
                    </li>
                    <li class="page-item"><a class="page-link rounded-circle" href="#">3</a></li>
                </ul>
            </nav>
        </div>
        <div class="b">
            <nav aria-label="...">
                <ul class="pagination d-flex justify-content-between mb-0">
                    <li class="page-item" aria-current="page">
                        <span class="page-link  border-0">Thông tin khách hàng</span>
                    </li>
                    <li class="page-item"><a class="page-link  border-0" href="#">Chi tiết thanh toán</a></li>
                    <li class="page-item"><a class="page-link  border-0" href="#">Thành công</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- endBanner -->
    <?php
       $tenroom=$_GET['TenPhong'];
   
    $con = mysqli_connect("localhost","root","admin","burninghotel");
    if(!$con){
        die("Kết nối không thành công");
    }
    $sql = "SELECT * From chitietphong where  TenPhong='$tenroom'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            $LoaiGiuong=$row["LoaiGiuong"];
            $SucChua=$row["NguoiMax"];
            $NguoiMax=$row["NguoiMax"];
            $GiaPhong=$row["GiaPhong"];
            $SoLuongPhong=$row["SoLuongPhong"];
        }
    }
    ?>

    <section id="center" style="background-color: #181A1B; color: white;">
        <div class="container pt-4" style="align-items: center;">
            <h3 class="mb-3 " style="font-family: Montserrat-Bold; margin-top: 15px">Chi Tiết Thanh Toán</h3>
            <img src="../img/pay/roomstyle_deluxe1.png" alt="" class=" rounded-3">
            <h3 class="pt-2" style="font-family: Montserrat-Bold;"><?php echo $tenroom?></h3>
        </div>
        <div class=" container d-flex mb-2">
            <div class="img">
                <img src="../img/icon_3p.png" alt="" class="img-fluid">
            </div>
            
            <p class="ps-1 m-0">(<?php echo $NguoiMax?>) Guest's</p>
        </div>
        <div class=" container ps-3">
            <p class="mb-0 ms-4"> <i class="fa fa-circle"></i> Sức chứa tối đa: <?php echo $NguoiMax?> người</p>
            <p class="mb-0 ms-4"> <i class="fa fa-circle"></i> Loại giường: <?php echo $LoaiGiuong?> </p>
            <p class="mb-0 ms-4"> <i class="fa fa-circle"></i> Cho phép ở thêm 1 người lớn và 1 trẻ nhỏ, trên 3 người bạn có thể sẽ chịu thêm phí</p>
        </div>
        <hr style="width: 80%; margin: 0 50px; border: 0; border-top: 5px solid;">
    </section>

    <section id="loaiphong" style="background-color:#181A1B; color: white;">

        <div class="container ">
            <h3 class="mb-3 pt-2" style="font-family: Montserrat-Bold;">Chi Tiết Giá</h3>
            <div class="row">
                <div class="col-6 d-flex">
                    <div>
                        <p class="m-0 ms-5" style="font-family:Montserrat-Regular; font-size: 20px">1 phòng x
                        <?php
                            $songay1 = abs(strtotime($_SESSION['ngaydi']) - strtotime($_SESSION['ngayden']));           // abs để lấy giá trị tuyệt đối
                            echo $songay = floor($songay1/(60*60*24));                                                  // floor chia lấy ngày
                        ?>
                        
                        ngày
                     </p>
                    </div>
                </div>
                <div class="col-6 ">
                    <div>
                        <p style=" padding-left: 200px; font-family:Montserrat-Regular; color:white; font-size: 20px;  text-align: right; margin-right: 190px;">
                        <?php
                            $tienphong=0;
                            $tienphong=$GiaPhong*$songay;
                            echo $tienphong;
                        ?>
                        VNĐ
                     </p>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-6 d-flex">
                    <div>
                        <p class="m-0 ms-5" style="font-family:Montserrat-Regular; font-size: 20px">Tiền Dịch Vụ</p>
                    </div>
                </div>
                <div class="col-6 ">
                    <div>
                <?php
                if(ISSET($_POST['submit'])){
                    if(ISSET($_POST['dv'])){
                    foreach($_POST['dv'] as $value){
                        $tiendichvu=array_sum($_POST['dv']);
                        $_SESSION['tiendichvu']=$tiendichvu;
                    }
                }
                    else{
                        $_SESSION['tiendichvu']=0;
                    }
                }
                ?>
                    <p style=" padding-left: 200px; font-family:Montserrat-Regular;color:white; font-size: 20px; text-align: right; margin-right: 190px;">
                    <?php echo $_SESSION['tiendichvu']?> VNĐ</p>
        
                </div>

                </div>
            </div>

            <div class="row mt-2" style="font-size:20px;">
                <div class="col-6 d-flex" >
                    <div>
                        <h5 class="ms-5" style="font-family:Montserrat-Regular;">Tổng thanh toán</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <h5 style="color:white; padding-left: 200px; font-family:Montserrat-Regular; text-align: right; margin-right: 190px;">
                        <?php
                        $tongtien=$tienphong+$_SESSION['tiendichvu'];
                        echo $tongtien;
                        ?>
                        VNĐ
                    </h5>
                    </div>
                </div>
            </div>
            
            <div class="row mt-2">
                <div class="col-6 d-flex" >
                    <div>
                        <h5 class="ms-5" style="font-family:Montserrat-Regular; font-size:20px;">Ưu đãi giảm giá</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <h5 style="color:white; padding-left: 200px; font-family:Montserrat-Regular; text-align: right; margin-right: 190px;">
                        - 
                        <?php
                        if($tongtien>250000 && $tongtien<700000){
                            $uudai=($tongtien/100)*3;
                            echo $uudai;
                        }
                        if($tongtien>700000){
                            $uudai=($tongtien/100)*5;
                            echo $uudai;
                        }
                        else{
                            echo $uudai=0;
                        }
                        ?>
                        VNĐ
                    </h5>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 d-flex">
                    <div>
                        <h5 class="ms-5" style="font-family:Montserrat-Regular;">Số tiền phải trả</h5>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <h5 style="color:#EBB853; padding-left: 200px; font-family:Montserrat-Regular; font-size: 24px; text-align: right; margin-right: 190px;">
                        <?php
                          echo $phaitra=$tongtien-$uudai;
                        ?>
                        VNĐ
                    </h5>
                    </div>
                </div>
            </div>

        </div>
        <hr style="width: 80%; margin: 0 50px; border: 0; border-top: 5px solid;">
    </section>

    <section id="pttt" style="background-color:#181A1B; color: white;">
        <div class="container">
            <div>
                <h3 class="mb-2 pt-2" style="font-family: Montserrat-Bold;">Phương Thức Thanh Toán</h3>
                <p class="m-0 ms-4" style="font-family:Montserrat-Regular; padding-right: 150px;">
                    Hướng dẫn thanh toán sẽ được gửi tới quý khách khi nhấn nút thanh toán phòng sẽ được gửi tới bạn, vui
                    lòng thanh toán trước 10h45p 14/09/2022. Quá thời hạn trên chúng tôi có thể không gửi được phòng này cho bạn nữa.
                </p>
                <h3 class=" pt-2" style="font-family: Montserrat-Bold;">Chọn ngân hàng</h3>
                <div class="nganhang d-flex pb-3">
                    <div class="row">
                        <div class="col-3  mt-3 ">
                            <div class="img">
                                <img src="../img/pay/bidv.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3  mt-3 ">
                            <div class="img">
                                <img src="../img/pay/techcombank.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3  mt-3 ">
                            <div class="img">
                                <img src="../img/pay/vietcombank.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-3  mt-3 ">
                            <div class="img">
                                <img src="../img/pay/vietinbank.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr style="width: 80%; margin: 0 50px; border: 0; border-top: 5px solid;">
    </section>
    <section id="chon" style="background-color:#181A1B; color: white;">
        <div class="row d-flex ps-5 pt-3 pb-3">
            <div class="col-6">
                <label for="qr" style="font-family:Montserrat-Regular;">Thanh toán bằng QR-Pay</label>
            </div>
            <div class="col-6 ">
                <input type="radio" id ="qr" name="thanhtoan" value="Thanh toán bằng QR-Pay">
            </div>
        </div>

        <hr style="width: 80%; margin: 0 50px; border: 0; border-top: 5px solid;">
        <div class="row d-flex ps-5 pt-3 pb-3">
            <div class="col-6">
                <label for="atm" style="font-family:Montserrat-Regular;">Thẻ ATM/Tài khoản ngân hàng</label>
            </div>
            <div class="col-6 ">
                <input type="radio" id="atm" name="thanhtoan" value="Thẻ ATM/Tài khoản ngân hàng" >
            </div>
        </div>
        <hr style="width: 80%; margin: 0 50px; border: 0; border-top: 5px solid;">
        <div class="row d-flex ps-5 pt-3 pb-3">
            <div class="col-6">
                <label for="visa" style="font-family:Montserrat-Regular;">Thẻ Visa, Master Card</label>
            </div>
            <div class="col-6 ">
                <input type="radio" id="visa" name="thanhtoan" value="Thẻ Visa, Master Card">
            </div>
        </div>
    </section>

    <section id="button">
        <div class="pb-3"><button type="submit" name="btn" style="font-family:Montserrat-Regular; border: none; border-radius: 3px;">Thanh Toán</button></div>
    </section>
  </form>
            <?php
      
            if(ISSET($_POST['btn'])){
                $ten=$_SESSION['ten'];
                $sdt=$_SESSION['sdt'];
                $email=$_SESSION['email'];
                $nguoi=$_SESSION['nguoi'];
                $ngayden=$_SESSION['ngayden'];
                $ngaydi=$_SESSION['ngaydi'];
                $ngaytt=date("Y/m/d h:i a", time());

                $con=mysqli_connect("localhost","root","admin","burninghotel");
                if(!$con){
                    echo'Kết nối không thành công';
                }
                if(empty($_POST['thanhtoan'])){
                    echo "<script>";
                    echo "alert('Vui lòng chọn phương thức thanh toán')";
                    echo "</script>";
                }
                else{
                    $pttt=$_POST['thanhtoan'];
                    $sql="INSERT INTO chitietthanhtoan VALUES ('','".$ten."','".$sdt."','".$email."','".$tenroom."','".$nguoi."','".$phaitra."','".$pttt."','".$ngayden."','".$ngaydi."','".$ngaytt."')";
                if(mysqli_query($con,$sql)){
                    echo "<script>";
                    echo "alert('Đặt phòng thành công!')";
                    echo "</script>";
                    $phong=$SoLuongPhong-1;
                    $sql1 = "UPDATE chitietphong SET SoLuongPhong='".$phong."' WHERE TenPhong='".$tenroom."'";
                }
                
                if(mysqli_query($con,$sql1)){
                    echo '<script>
                    alert("Chúc bạn có một kỳ nghỉ vui vẻ!"); 
                    </script>';
                }
                $sql = "SELECT MaDonHang From chitietthanhtoan where HoTen='".$_SESSION['ten']."' and NgayDen='".$_SESSION['ngayden']."' and NgayDi='".$_SESSION['ngaydi']."'" ;
                $result = mysqli_query($con, $sql);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        $madonhang = $row["MaDonHang"];
                    }
                ?>
                <script>
                    var m= <?php echo json_encode($madonhang);?>;
                    alert('Mã phòng của bạn là: ' + m);
                    window.location="index1.php";
                    </script>
                <?php
                    }
            }
        }
            ?>

     <!-- footer -->
     <?php
    include('footer.php');
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