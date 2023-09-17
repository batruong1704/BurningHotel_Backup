<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suite Room</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link css bootstrap -->
    <link rel="stylesheet" href="../common/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <!-- link slick -->
    <link rel="stylesheet" type="text/css" href="../common/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="../common/slick/slick-theme.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/roomdetail.css">
</head>

<body>
      <!-- header -->
      <?php
    include('header.php');
    ?>
    <!-- Banner -->
    <section id="banner">
        <div class="container-fluid p-0 text-center">
            <div class="img">
                <img src="../img/pay/banner.jpg" alt="" class="img-fluid">
                <div class="box">
                    <div class="trangtri"></div>
                    <p class="m-0" style="font-size: 14px;font-family: Montserrat-Regular">Home - <span
                            style="color: #C89E4B;">Room</span></p>
                    <h3 style="font-size:36px;font-family: Montserrat-Bold;">Suite Room</h3>
                    <div class="trangtri"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Banner -->

    <!-- checknow -->
    <?php
         include('thanhcheck.php');
    ?>
    <!-- end checknow -->

    <!-- information -->
    <section id="information">
        <div class="container text-center">
            <p class="p-5" style="width: 67%; margin: 0 auto;font-family:Montserrat-Regular">Phòng Suite có diện tích phòng giao động trong khoảng từ  56m-72m. Nằm tại các tầng cao nhất từ 22-25. Loại phòng này được biết đến là hạng phòng cao cấp nhất trong khách sạn do nó được thừa hưởng những ưu đãi về nội thất, thiết kế, tầm nhìn và được phục vụ những dịch vụ tốt nhất. Vì có diện tích lớn nhất nên thiết kế phòng không chỉ có phòng khách, 2 - 3 phòng ngủ mà còn có phòng họp, phòng giải trí, thư viện…</p>
        </div>
        <section id="slider">
            <div class="container">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="slide-item carousel-item active">
                            <img src="../img/roomdetail/suite/roomstyle_suite1.png" class="d-block w-100 rounded-3"
                                style="height: 450px;" alt="">
                            <div class="carousel-btn d-md-block">
                            </div>
                        </div>
                        <div class="slide-item carousel-item">
                            <img src="../img/roomdetail/suite/roomstyle_suite2.png" class="d-block w-100 rounded-3"
                                style="height: 450px;" alt="">
                            <div class="carousel-btn d-md-block">
                            </div>
                        </div>
                        <div class="slide-item carousel-item">
                            <img src="../img/roomdetail/suite/roomstyle_suite3.png" class="d-block w-100 rounded-3"
                                style="height: 450px;" alt="">
                            <div class="carousel-btn d-md-block">
                            </div>
                        </div>
                        <div class="slide-item carousel-item">
                            <img src="../img/roomdetail/suite/roomstyle_suite4.png" class="d-block w-100 rounded-3"
                                style="height: 450px;" alt="">
                            <div class="carousel-btn d-md-block">
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
    </section>
    <!-- end informationr -->

    <!-- overview -->
    <section id="overview">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h3>Tổng Quan</h3>
                </div>
                <div class="col-4">
                    <p class="m-0">Tầm nhìn</p>
                    <span>Nghĩa tranh Văn Điển </span>
                    <p class="mb-0 mt-4">Loại giường</p>
                    <span>Giường đơn/Giường đôi </span>
                </div>
                <div class="col-4">
                    <p class="m-0">Diện tích phòng</p>
                    <span>56m<sup>2</sup>-72m<sup>2</sup></span>
                    <p class="mb-0 mt-4">Sức chứa</p>
                    <span>1-6 khách</span>
                </div>
            </div>
        </div>
        <hr class="mb-0 mt-5">
    </section>
    <!-- end overview -->

    <!-- special-features -->
    <section id="special-features">
        <div class="container">
            <div class="row ">
                <div class="col-4">
                    <h3>Tính năng đặc biệt</h3>
                </div>
                <div class="col-8">
                    <span>- Sử dụng miễn phí phòng tập, bể bơi trong nhà và phòng xông hơi</span> <br>
                    <span>- Internet có dây / không dây tốc độ cao miễn phí trong tất cả các phòng</span> <br>
                    <span>- Dịch vụ dọn phòng buổi tối</span> <br>
                    <span>- Bồn tắm và phòng tắm đứng</span>
                    <span>- Thêm phòng vệ sinh riêng biệt</span>
                </div>
            </div>
        </div>
        <hr class="mb-0 mt-5">
    </section>
    <!-- end special-features -->

    <!-- common -->
    <section id="common">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h3>Tiện ích chung</h3>
                </div>
                <div class="col-4">
                    <p class="m-0">Tiện nghi</p>
                    <span>TV màn hình LED 43” / Đèn pin / Túi mua sắm / Dép đi trong phòng / Mini Bar / Bộ kim chỉ / Cân / Que xỏ giày / Đánh giày / Điện thoại / Két an toàn / Bàn làm việc / Tiện ích cho người khuyết tật</span>
                </div>
                <div class="col-4">
                    <p class="m-0">Các tiện nghi khác</p>
                    <span>Truyền hình cáp / Truyền hình vệ tinh / Hai chai nước khoáng miễn phí hàng ngày / Trà cà phê miễn phí / Dịch vụ thư thoại</span>
                </div>
            </div>
        </div>
        <hr class="mb-0 mt-5">
    </section>
    <!-- end common -->

    <!-- detail -->
    <section id="detail">
        <div class="container">
            <div class="row ">
                <div class="col-4">
                    <h3>Chi tiết</h3>
                </div>
                <div class="col-8">
                    <span>- Yêu cầu thêm bữa sáng với giá 303,000 VNĐ/người</span> <br>
                    <span>- Yêu cầu thêm giường cho 1 người: 720,000 VNĐ một đêm không bao gồm ăn sáng, 960,000 VNĐ một đêm bao gồm ăn sáng</span> <br>
                    <span>- Giá phòng ở trên là giá cho một phòng một đêm và có thể thay đổi theo ngày đặt phòng.</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end detail -->

    <!-- room -->
    <section id="room">
        <div class="container pb-5">
            <div class="row">
                <div class="col-3">
                    <div class="img h-100">
                        <img src="../img/trangchu1/accommodations_1.jpg" alt="" class="img-fluid h-100">
                        <div class="content">
                            <p class="m-0"><span style="color:#BB9959;">$134</span>/Đêm</p>
                            <h5>Small Suite</h5>
                            <div class="trangtri"></div>
                            <a href="#" style="font-size: 14px; font-family: Montserrat-Medium;"><i
                                    class="fa fa-chevron-circle-right"></i> BOOKING NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="img">
                        <img src="../img/trangchu1/room_2.jpg" alt="" class="img-fluid">
                        <div class="content">
                            <p class="m-0"><span style="color:#BB9959;">$199</span>/Đêm</p>
                            <h5>Deluxe Room</h5>
                            <div class="trangtri1"></div>
                            <a href="#" style="font-size: 14px; font-family: Montserrat-Medium;"><i
                                    class="fa fa-chevron-circle-right"></i> BOOKING NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="img">
                        <img src="../img/trangchu1/room_3.jpg" alt="" class="img-fluid h-100">
                        <div class="content">
                            <p class="m-0"><span style="color:#BB9959;">$134</span>/Đêm</p>
                            <h5>Small Suite</h5>
                            <div class="trangtri"></div>
                            <a href="#" style="font-size: 14px; font-family: Montserrat-Medium;"><i
                                    class="fa fa-chevron-circle-right"></i> BOOKING NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end room -->

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