<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/allroom.css?v=<?php echo time(); ?>" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a0ff9460a2.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="../common/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <link rel="icon" href="../public_html/favicon.ico" type="image/png">
    
    <title>Document</title>
</head>

<body>

    <!-- header -->
    <?php
    include('header.php');
    ?>

    <!-- banner -->
    <section id="banner">
        <div class="container-fluid p-0 text-center">
            <div class="img h-100">
                <img src="../img/pay/banner.jpg" alt="" class="w-100">
                <div class="box">
                    <div class="trangtri"></div>
                    <p class="m-0" style="font-size: 14px;font-family: Montserrat-Regular">Home - <span style="color: #C89E4B;">Service</span></p>
                    <h3 style="font-size:36px;font-family: Montserrat-Bold;">All Room</h3>
                    <div class="trangtri"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->

    <div class="main">
        <div class="main_menu">
            <p>Booking now</p>
            <?php
            if (isset($_POST['submit'])) {
                $ngayden = $_POST['ngayden'];
                $ngaydi = $_POST['ngaydi'];
                $nguoi = $_POST['room'];
                $phong = $_POST['category'];
                $_SESSION['ngayden']=$ngayden;
                $_SESSION['ngaydi']=$ngaydi;
            }
            ?>
        
            <div class="form">
                <form action="" method="POST">
                    <?php
                    if (isset($_POST['submit'])) { ?>
                        <div class="form_item"><input type="datetime-local" name="ngayden" id="ngay" placeholder="Check In" value="<?php echo $ngayden ?>"></div>
                        <div class="form_item"><input type="datetime-local" name="ngaydi" id="ngay" placeholder="Check Out" value="<?php echo $ngaydi ?>"></div>
                    <?php
                    } else {
                    ?>
                        <div class="form_item"><input type="datetime-local" name="ngayden" id="ngayden" value="" ></div>
                        <div class="form_item"><input type="datetime-local" name="ngaydi" id="ngayden"  value="" ></div>
                    <?php
                    }
                    ?>
                    <div class="form_item">
                        <select name="room" id="room">
                            <?php
                            if (isset($_POST['submit'])) {
                                if ($nguoi == 1) {
                                    echo "<option value ='1'selected> 1 người</option>";
                                    echo "<option value ='2'> 2 người</option>";
                                    echo "<option value ='3'> 3 người</option>";
                                    echo "<option value ='4'> 4 người</option>";
                                    echo "<option value ='5'> 5 người</option>";
                                    echo "<option value ='6'> 6 người</option>";
                                } 
                                else if ($nguoi == 2) {
                                    echo "<option value ='1'> 1 người</option>";
                                    echo "<option value ='2'selected> 2 người</option>";
                                    echo "<option value ='3'> 3 người</option>";
                                    echo "<option value ='4'> 4 người</option>";
                                    echo "<option value ='5'> 5 người</option>";
                                    echo "<option value ='6'> 6 người</option>";
                                } 
                                else if ($nguoi == 3) {
                                    echo "<option value ='1'> 1 người</option>";
                                    echo "<option value ='2'> 2 người</option>";
                                    echo "<option value ='3'selected> 3 người</option>";
                                    echo "<option value ='4'> 4 người</option>";
                                    echo "<option value ='5'> 5 người</option>";
                                    echo "<option value ='6'> 6 người</option>";
                                } 
                                else if ($nguoi == 4) {
                                    echo "<option value ='1'>1 người</option>";
                                    echo "<option value ='2'>2 người</option>";
                                    echo "<option value ='3'>3 người</option>";
                                    echo "<option value ='4'selected> 4 người</option>";
                                    echo "<option value ='5'>5 người</option>";
                                    echo "<option value ='6'>6 người</option>";
                                } 
                                else if ($nguoi == 5) {
                                    echo "<option value ='1'> 1 người</option>";
                                    echo "<option value ='2'> 2 người</option>";
                                    echo "<option value ='3'> 3 người</option>";
                                    echo "<option value ='4'> 4 người</option>";
                                    echo "<option value ='5'selected>5 người</option>";
                                    echo "<option value ='6'> 6 người</option>";
                                } 
                                else {
                                    echo "<option value ='1'> 1 người</option>";
                                    echo "<option value ='2'> 2 người</option>";
                                    echo "<option value ='3'> 3 người</option>";
                                    echo "<option value ='4'> 4 người</option>";
                                    echo "<option value ='5'> 5 người</option>";
                                    echo "<option value ='6'selected>6 người</option>";
                                }
                            } 
                            else {
                                echo "<option value ='1'> 1 người</option>";
                                echo "<option value ='2'> 2 người</option>";
                                echo "<option value ='3'> 3 người</option>";
                                echo "<option value ='4'> 4 người</option>";
                                echo "<option value ='5'> 5 người</option>";
                                echo "<option value ='6'> 6 người</option>";
                            }
                            ?>

                        </select>
                    </div>
                    <div class="form_item">
                        <select name="category" id="category">
                            <?php
                            if (isset($_POST['submit'])) {
                                if ($phong == 1) {
                                    echo "<option value ='1'selected>Deluxe</option>";
                                    echo "<option value ='2'>Executive</option>";
                                    echo "<option value ='3'>Suite</option>";
                                } 
                                else if ($phong == 2) {
                                    echo "<option value ='1'>Deluxe</option>";
                                    echo "<option value ='2'selected>Executive</option>";
                                    echo "<option value ='3'>Suite</option>";
                                } 
                                else {
                                    echo "<option value ='1'>Deluxe</option>";
                                    echo "<option value ='2'>Executive</option>";
                                    echo "<option value ='3'selected>Suite</option>";
                                }
                            } 
                            else {
                                echo "<option value ='1'>Deluxe</option>";
                                echo "<option value ='2'>Executive</option>";
                                echo "<option value ='3'>Suite</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="btn">
                        <input class="check" type="submit" name="submit" value="Check">
                        <img src=".../ICON/icon_muiten.png" alt="">
                    </div>
            </div>
            </form>
        </div>
        <?php
        if (isset($_POST['submit'])) {
            $con = mysqli_connect("localhost","root","admin","burninghotel");
            if (!$con) {
                die("Kết nối không thành công");
            }
            $sql = "SELECT * From phong,chitietphong where phong.ID=chitietphong.ID_Phong AND  chitietphong.NguoiMax >='" . $nguoi . "' AND chitietphong.ID_Phong=" . $phong;
            $result = mysqli_query($con, $sql);
            $phongs = array();
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $phongs[] = array(
                        'TenPhong' => $row['TenPhong'], 'NguoiMax' => $row['NguoiMax'], "IMG" => $row['IMG'],
                        'GiaPhong' => $row['GiaPhong']
                    );
                    echo "</br>";
                }
            }
        ?>
            <div class="main_room">
                <div class="row">
                    <?php foreach ($phongs as $key => $value) { ?>

                        <div class="col-4 mb-5">
                            <div class="card border rounded-0 border-light" style="width: 18rem; background-color:rgb(24, 26, 27); color:white;">
                                <img src="<?php echo $value['IMG'] ?>" class="card-img-top" alt="...">
                                <p style="position: absolute; bottom:42%;left:10px; background-color:#C89E4B;  text-alight:center; padding:5px "><?php echo $value['GiaPhong'] ?>/Night</p>
                                <div class="card-body main-nd">

                                    <h5 class="card-title"><?php echo $value['TenPhong'] ?></h5>
                                    <p class="card-text">facilisis tempor erat facilisis. Proin imperdiet rutrum cursus</p>
                                    <div class="icon">
                                        <span class="icon_giuong"><img src="../img/icon_Room.png" width="30px" height="20px">(2)bed's </span>
                                        <span class="icon_nguoi"><img src="../img/icon_3p.png" alt="" width="30px" height="20px">(<?php echo $value['NguoiMax'] ?>)Guest's</span>
                                    </div>
                                       <button style="submit" name="btn" class="btn"><a href="roomdetail.php?TenPhong=<?php echo $value['TenPhong']; ?>" class="btn mt-2" style="background-color:#C89E4B">Chi Tiết</a></button>
                                </div>
                            </div>
                        </div>


                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php
        } else {

            $con = mysqli_connect("localhost","root","admin","burninghotel");
            if (!$con) {
                die("Kết nối không thành công");
            }
            $sql = "SELECT * From phong,chitietphong where phong.ID=chitietphong.ID_Phong ";
            $result = mysqli_query($con, $sql);
            $phongs = array();
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $phongs[] = array(
                        'TenPhong' => $row['TenPhong'], 'NguoiMax' => $row['NguoiMax'], "IMG" => $row['IMG'],
                        'GiaPhong' => $row['GiaPhong']
                    );
                    echo "</br>";
                }
            }

        ?>
            <div class="main_room">
                <div class="row">
                    <?php foreach ($phongs as $key => $value) { ?>

                        <div class="col-4 mb-5">
                            <div class="card border rounded-0 border-light" style="width: 18rem; background-color:rgb(24, 26, 27); color:white;">
                                <img src="<?php echo $value['IMG'] ?>" class="card-img-top" alt="...">
                                <p style="position: absolute; bottom:42%;left:10px; background-color:#C89E4B;  text-alight:center; padding:5px "><?php echo $value['GiaPhong'] ?>/Night</p>
                                <div class="card-body main-nd">

                                    <h5 class="card-title"><?php echo $value['TenPhong'] ?></h5>
                                    <p class="card-text">facilisis tempor erat facilisis. Proin imperdiet rutrum cursus</p>
                                    <div class="icon">
                                        <span class="icon_giuong"><img src="../img/icon_Room.png" width="30px" height="20px">(2)bed's </span>
                                        <span class="icon_nguoi"><img src="../img/icon_3p.png" alt="" width="30px" height="20px">(<?php echo $value['NguoiMax'] ?>)Guest's</span>
                                    </div>
                                       <button style="submit" name="btn" class="btn"><a href="roomdetail.php?TenPhong=<?php echo $value['TenPhong']; ?>" class="btn mt-2" style="background-color:#C89E4B">Chi Tiết</a></button>
                                   
                                </div>
                            </div>
                        </div>


                    <?php
                    }
                    ?>
                </div>
            </div>
        <?php
        }
        ?>


    </div>


    <!-- footer -->
    <?php
    include('footer.php');
    ?>

    <script src="../common/bootstrap-5.2.2-dist/js/popper.min.js"></script>
    <script src="../common/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <!-- <script>
            flatpickr("#ngay", {
              enableTime: false,
              dateFormat: "d.m.Y"
            }); -->
    </script>
</body>

</html>