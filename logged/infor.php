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
    <title>Thông tin cá nhân </title>
</head>
<body>

<?php
    include('header.php');
    $con=mysqli_connect("localhost","root","","quanlykhachsan");
    if(!$con){
        echo"Kết nối thất bại";
        return;
    }

    $sql = "SELECT * From quanlytaikhoan where ID='".$_SESSION['makhachhang']."'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $ten=$row['HoTen'];
            $sdt=$row['SDT'];
            $email=$row['Email'];
            $cmnd=$row['CMND'];
                     
                  }
               }
               
              ?>
   <section id="infor">
        <div class="container">
            <h1 class="text-center">Thông Tin Cá Nhân</h1>
            <p class="text-center">Thông tin được cung cấp bên dưới sẽ được sử dụng để đăng nhập vào tài khoản của khách sạn cho nhu cầu đặt phòng của bạn.</p>
            <form action="" method="POST" >
                <div class="row">
                    <div class="col-5">
                        <label for="">Họ và tên: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="ten" id="ten" value="<?php echo $ten ?>" readonly>
                        <button type="button" onclick="editten()"><i class="fa fa-wrench" style="color: #EBB853; font-size: 25px"></i></button>
                    </div>
                    <div class="col-5">
                        <label for="">Số Điện Thoại: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="sdt" id="sdt" value="<?php echo $sdt ?>" readonly>
                        <button type="button" onclick="editsdt()"><i class="fa fa-wrench" style="color: #EBB853; font-size: 25px"></i></button>
                    </div>
                    <div class="col-5">
                        <label for="">Email: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="email" id="email" value="<?php echo $email ?>" readonly>
                        <button type="button"  onclick="editemail()"><i class="fa fa-wrench" style="color: #EBB853; font-size: 25px"></i></button>
                    </div>
                    <div class="col-5">
                        <label for="">Số CMND: </label>
                    </div>
                    <div class="col-7">
                        <input type="text" name="cmnd" id="cmnd" value="<?php echo $cmnd ?>" readonly >
                        <button type="button"  onclick="editcmnd()"><i class="fa fa-wrench" style="color: #EBB853; font-size: 25px"></i></button>
                    </div>
                    
                </div>
                <div class="confirm d-flex">
                  
                        <button type="button" onclick="display()" id ="btn" name="btn"> Sửa đổi thông tin  </button>
                </div>
                <div class="hienthi" id="hienthi">
                    <label for="mk">Vui lòng nhập mật khẩu: </label>
                    <input type="password" name="mk" id="mk" >
                    <input type="submit" name="submit" value="OK" >
                </div>
                <script>
                    function editsdt() {
                        document.getElementById("sdt").removeAttribute("readonly");
                        }
                    function editten() {
                        document.getElementById("ten").removeAttribute("readonly");
                    }
                    function editemail() {
                        document.getElementById("email").removeAttribute("readonly");
                    }
                    function editcmnd() {
                        document.getElementById("cmnd").removeAttribute("readonly");
                        }
                    function editpass() {
                        document.getElementById("pass").removeAttribute("readonly");
                    }
                  
                    function display() {
                    document.getElementById("hienthi").style.display = "block";
                    }
                </script>
            </form>
        </div>
    </section>

    
    <?php
    if(isset($_POST['submit'])){
        $matkhau = $_POST["mk"];
        $sql1 = "SELECT * FROM quanlytaikhoan WHERE ID = '" . $_SESSION['makhachhang'] . "' AND PassWord = '" . $matkhau . "'";
        $result = mysqli_query($con, $sql1);
        if (mysqli_num_rows($result) == 0) {
            echo '<script>
                alert("Mật khẩu sai! Vui lòng kiểm tra lại");
                window.location="javascript: history.go(-1)";
                </script>';
                }
                
            $hoten=$_POST["ten"];
            $email=$_POST["email"];
            $sdt=$_POST["sdt"];
            $cmnd=$_POST["cmnd"];
           
            $sql="SELECT * FROM quanlytaikhoan WHERE Email = '" .$email. "' OR SDT = '" .$sdt. "' OR ID ='".$_SESSION['makhachhang']."' ";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 1) {
                echo '<script>
                alert("Email hoặc mật khẩu đã tồn tại! Vui lòng kiểm tra lại");
                window.location="javascript: history.go(-1)";
                </script>';
            }
            else{
                $sql = "UPDATE quanlytaikhoan SET HoTen='".$hoten."', SDT='".$sdt."', Email='".$email."', CMND='".$cmnd."' WHERE SDT='".$_SESSION['sdt']."'";
                $result = mysqli_query($con, $sql);
                if($result == true){
                    echo "<script>";
                    echo "alert('Cập nhật thành công !!!');";
                    echo "window.location.href='../dangnhap.php'";
                    echo "</script>";
                }
            }
            
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