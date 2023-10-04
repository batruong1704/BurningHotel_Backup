<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>" type='text/css'>
    <link rel="stylesheet" href="../css/roomstyle.css?v=<?php echo time(); ?>" type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../common/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <title>Document</title>
    <link rel="icon" href="../public_html/favicon.ico" type="image/png">
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
                    <h3 style="font-size:36px;font-family: Montserrat-Bold;">Room Style</h3>
                    <div class="trangtri"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- end banner -->

    <!-- main -->
    <div class="main">
        <div class="main_menu">
            <p>Booking now</p>
            <!-- nút checknow bên index1 -->

            <?php

            if (isset($_POST["btn"])) {
                $ngayden = $_POST["ngayden"];
                $ngaydi = $_POST["ngaydi"];
                $nguoi = $_POST["room"];
                $phong = $_POST["category"];
                $_SESSION['ngayden'] = $ngayden;
                $_SESSION['ngaydi'] = $ngaydi;
                $_SESSION['nguoi'] = $nguoi;
            }
            if (isset($_POST["submit"])) {
                $ngaydenas = $_POST["ngaydenrs"];
                $ngaydias = $_POST["ngaydirs"];
                $nguoias = $_POST["checknguoi"];
                $phongas = $_POST["checkphong"];
                $_SESSION['ngayden'] = $ngaydenas; //lưu giá trị 
                $_SESSION['ngaydi'] = $ngaydias;
                $_SESSION['nguoi'] = $nguoias;
            }

            ?>
            <div class="form">
                <form action="" method="POST">
                    <?php
                    if (isset($_POST["btn"])) {
                    ?>
                        <div class="form_item"><input type="datetime-local" name="ngaydenrs" id="ngayrs" placeholder="Check In" value="<?php echo $ngayden ?>">
                        </div>
                        <div class="form_item"><input type="datetime-local" name="ngaydirs" id="ngayrs" placeholder="Check Out" value="<?php echo $ngaydi ?>" >
                        </div>
                    <?php

                    } else {
                    ?>
                        <div class="form_item"><input type="datetime-local" name="ngaydenrs" id="ngayrs" placeholder="Check In" value="<?php echo $ngaydenas ?>">
                        </div>
                        <div class="form_item"><input type="datetime-local" name="ngaydirs" id="ngayrs" placeholder="Check Out" value="<?php echo $ngaydias ?>">
                        </div>

                    <?php
                    }

                    ?>

                    <div class="form_item">
                        <select name="checknguoi" id="room">
                            <?php
                            if (isset($_POST["btn"]) || isset($_POST["submit"])) {
                                if ($nguoi == 1 || $nguoias == 1) {
                                    echo "<option value ='1'selected>1 người</option>";
                                    echo "<option value ='2'>2 người</option>";
                                    echo "<option value ='3'>3 người</option>";
                                    echo "<option value ='4'> 4 người</option>";
                                    echo "<option value ='5'>5 người</option>";
                                    echo "<option value ='6'>6 người</option>";
                                } else if ($nguoi == 2 || $nguoias == 2) {
                                    echo "<option value ='1'>1 người</option>";
                                    echo "<option value ='2'selected>2 người</option>";
                                    echo "<option value ='3'>3 người</option>";
                                    echo "<option value ='4'> 4 người</option>";
                                    echo "<option value ='5'>5 người</option>";
                                    echo "<option value ='6'>6 người</option>";
                                } else if ($nguoi == 3 || $nguoias == 3) {
                                    echo "<option value ='1'>1 người</option>";
                                    echo "<option value ='2'>2 người</option>";
                                    echo "<option value ='3'selected>3 người</option>";
                                    echo "<option value ='4'> 4 người</option>";
                                    echo "<option value ='5'>5 người</option>";
                                    echo "<option value ='6'>6 người</option>";
                                } else if ($nguoi == 4 || $nguoias == 4) {
                                    echo "<option value ='1'>1 người</option>";
                                    echo "<option value ='2'>2 người</option>";
                                    echo "<option value ='3'>3 người</option>";
                                    echo "<option value ='4'selected> 4 người</option>";
                                    echo "<option value ='5'>5 người</option>";
                                    echo "<option value ='6'>6 người</option>";
                                } else if ($nguoi == 5 || $nguoias == 5) {
                                    echo "<option value ='1'>1 người</option>";
                                    echo "<option value ='2'>2 người</option>";
                                    echo "<option value ='3'>3 người</option>";
                                    echo "<option value ='4'> 4 người</option>";
                                    echo "<option value ='5'selected>5 người</option>";
                                    echo "<option value ='6'>6 người</option>";
                                } else if ($nguoi == 6 || $nguoias == 6) {
                                    echo "<option value ='1'>1 người</option>";
                                    echo "<option value ='2'>2 người</option>";
                                    echo "<option value ='3'>3 người</option>";
                                    echo "<option value ='4'> 4 người</option>";
                                    echo "<option value ='5'>5 người</option>";
                                    echo "<option value ='6'selected>6 người</option>";
                                }
                            }

                            ?>
                        </select>
                    </div>
                    <div class="form_item">
                        <select name="checkphong" id="phong">
                            <?php
                            if (isset($_POST["btn"]) || isset($_POST["submit"])) {
                                if ($phong == 1 || $phongas == 1) {
                                    echo "<option value ='1'selected>Deluxe</option>";
                                    echo "<option value ='2'>Executive</option>";
                                    echo "<option value ='3'>Suite</option>";
                                } else if ($phong == 2 || $phongas == 2) {
                                    echo "<option value ='1'>Deluxe</option>";
                                    echo "<option value ='2'selected>Executive</option>";
                                    echo "<option value ='3'>Suite</option>";
                                } else {
                                    echo "<option value ='1'>Deluxe</option>";
                                    echo "<option value ='2'>Executive</option>";
                                    echo "<option value ='3'selected>Suite</option>";
                                }
                            }


                            ?>
                        </select>
                    </div>

                    <input class="check" type="submit" name="submit" value="Check">


            </div>
            </form>
        </div>

        <?php
        if (isset($_POST["btn"])) { //sau khi ấn nút submit        
            $con = mysqli_connect("localhost","root","admin","burninghotel");
            if (!$con) {
                die("Kết nối không thành công");
            }

            $sql = "SELECT * From phong,chitietphong where phong.ID=chitietphong.ID_Phong AND chitietphong.NguoiMax >='" . $nguoi . "' AND  phong.ID='" . $phong . "' and SoLuongPhong > 0";
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
            <div class="mainroom">
                <?php foreach ($phongs as $key => $value) { ?>
                    <div class="mainroom_1">
                        <div class="mainroom12">
                            <img src="<?php echo $value['IMG'] ?>" alt="" width="250px" height="200px">
                        </div>
                        <div class="mainroom11">
                            <p class="mainroom111"> <?php echo $value['TenPhong']; ?> </p>

                            <p class="mainroom112">Sawy trevelers are looking for more than just the<br> next destination on
                                the map
                                . They are looking for a<br> memorable experience.</p>
                            <div class="icon">
                                <span class="icon_giuong"><img src="../img/icon_Room.png" width="35px" height="30px">(2)bed's
                                </span>
                                <span class="icon_nguoi"><img src="../img/icon_3p.png" alt="" width="35px" height="30px">(<?php echo $value['NguoiMax']; ?>)Guest's</span>
                            </div>
                        </div>
                        <div class="mainroom13">
                            <div class="mainroom131"><?php echo $value['GiaPhong'] ?>/Night</div>
                            <div class="mainroom132">
                                <i class="fa fa-star" style="color:yellow"> </i>
                                5/5
                            </div>
                            <div class="mainroom133">
                                <a href="roomdetail.php?TenPhong=<?php echo $value['TenPhong']; ?>">READ MORE</a>
                            </div>
                        </div>
                    </div>
                <?php

                }
                ?>
            </div>
        <?php
        } else {

        ?>

            <?php
            $con = mysqli_connect("localhost","root","admin","burninghotel");
            if (!$con) {
                die("Kết nối không thành công");
            }

            $sql = "SELECT * From phong,chitietphong where phong.ID=chitietphong.ID_Phong AND chitietphong.NguoiMax >='" . $nguoias . "' AND  phong.ID='" . $phongas . "' and SoLuongPhong>0";
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
            <div class="mainroom">
                <?php foreach ($phongs as $key => $value) { ?>
                    <div class="mainroom_1">
                        <div class="mainroom12">
                            <img src="<?php echo $value['IMG'] ?>" alt="" width="250px" height="200px">
                        </div>
                        <div class="mainroom11">
                            <p class="mainroom111"> <?php echo $value['TenPhong']; ?> </p>
                            <p class="mainroom112">Sawy trevelers are looking for more than just the<br> next destination on
                                the map
                                . They are looking for a<br> memorable experience.</p>
                            <div class="icon">
                                <span class="icon_giuong"><img src="../img/icon_Room.png" width="35px" height="30px">(2)bed's
                                </span>
                                <span class="icon_nguoi"><img src="../img/icon_3p.png" alt="" width="35px" height="30px">(<?php echo $value['NguoiMax']; ?>)Guest's</span>
                            </div>
                        </div>
                        <div class="mainroom13">
                            <div class="mainroom131"><?php echo $value['GiaPhong'] ?>/Night</div>
                            <div class="mainroom132">
                                <i class="fa fa-star" style="color:yellow"> </i>
                                5/5
                            </div>
                            <div class="mainroom133">
                                <a href="roomdetail.php?TenPhong=<?php echo $value['TenPhong']; ?>">READ MORE</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        <?php } ?>























        <!-- <div class="mainroom_2">
                <div class="mainroom12">
                    <img src="../img/roomstyle/junior_suite.jpg" alt="" width="250px" height="200px">
                </div>
                <div class="mainroom11">
                    <p class="mainroom111"> Deluxe</p>
                    <p class="mainroom112">Sawy trevelers are looking for more than just the<br> next destination on
                        the map
                        .They are looking for a<br> memorable experience.</p>
                        <div class="icon">
                            <span class="icon_giuong"><img src="../img/icon_Room.png" width="35px" height="30px">(2)bed's
                            </span>
                            <span class="icon_nguoi"><img src="../img/icon_3p.png" alt="" width="35px"
                                    height="30px">(3)Guest's</span>
                        </div>
                </div>
                <div class="mainroom13">
                    <div class="mainroom131">$205/Night</div>
                    <div class="mainroom132">2.9/5</div>
                    <div class="mainroom133">READ MORE</div>
                </div>
            </div>
            <div class="mainroom_3">
                <div class="mainroom12">
                    <img src="../img/roomstyle/double_room.jpg" alt="" width="250px" height="200px">
                </div>
                <div class="mainroom11">
                    <p class="mainroom111">Double Room</p>
                    <p class="mainroom112">Sawy trevelers are looking for more than just the<br> next destination on
                        the map
                        . They are looking for a<br> memorable experience.</p>
                        <div class="icon">
                            <span class="icon_giuong"><img src="../img/icon_Room.png" width="35px" height="30px">(2)bed's
                            </span>
                            <span class="icon_nguoi"><img src="../img/icon_3p.png" alt="" width="35px"
                                    height="30px">(3)Guest's</span>
                        </div>
                </div>
                <div class="mainroom13">
                    <div class="mainroom131">$205/Night</div>
                    <div class="mainroom132">2.9/5</div>
                    <div class="mainroom133">READ MORE</div>
                </div>
            </div>
            <div class="mainroom_4">
                <div class="mainroom12">
                    <img src="../img/roomstyle/small_suite.jpg" alt="" width="250px" height="200px">
                </div>
                <div class="mainroom11">
                    <p class="mainroom111">Small Suite</p>
                    <p class="mainroom112">Sawy trevelers are looking for more than just the<br> next destination on
                        the map
                        . They are looking for a<br> memorable experience.</p>
                        <div class="icon">
                            <span class="icon_giuong"><img src="../img/icon_Room.png" width="35px" height="30px">(2)bed's
                            </span>
                            <span class="icon_nguoi"><img src="../img/icon_3p.png" alt="" width="35px"
                                    height="30px">(3)Guest's</span>
                        </div>
                </div>
                <div class="mainroom13">
                    <div class="mainroom131">$205/Night</div>
                    <div class="mainroom132">2.9/5</div>
                    <div class="mainroom133">READ MORE</div>
                </div>
            </div>
            <div class="mainroom_5">
                <div class="mainroom12">
                    <img src="../img/roomstyle/Luxury_room.jpg" alt="" width="250px" height="200px">
                </div>
                <div class="mainroom11">
                    <p class="mainroom111">Luxury Room</p>
                    <p class="mainroom112">Sawy trevelers are looking for more than just the<br> next destination on
                        the map
                        . They are looking for a<br> memorable experience.</p>
                        <div class="icon">
                            <span class="icon_giuong"><img src="../img/icon_Room.png" width="35px" height="30px">(2)bed's
                            </span>
                            <span class="icon_nguoi"><img src="../img/icon_3p.png" alt="" width="35px"
                                    height="30px">(3)Guest's</span>
                        </div>
                </div>
                <div class="mainroom13">
                    <div class="mainroom131">$205/Night</div>
                    <div class="mainroom132">2.9/5</div>
                    <div class="mainroom133">READ MORE</div>
                </div>
            </div> -->
    </div>
    </div>
    <!--end main -->

    <!-- footer -->
    <?php
    include('footer.php');
    ?>

    <script src="../common/bootstrap-5.2.2-dist/js/popper.min.js"></script>
    <script src="../common/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <script>
        // flatpickr("#ngay", {
        //     enableTime: true,
        //     dateFormat: "d.m.Y"
        // });
    </script>
</body>

</html>