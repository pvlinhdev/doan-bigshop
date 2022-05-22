<!doctype html>
<html lang="en">

<head>
    <title>Trang chủ</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- hiệu ứng button -->
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <!-- Scrip -->
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/dangnhap.css">
    <link rel="stylesheet" href="./public/css/gioithieu.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- start header -->
    <?php include_once './inc/header.php' ?>
    <!-- end header -->
    <!-- start content -->
    <div class="content">
        <div class="main-content">
            <div class="container">
                <div class="top-content">
                    <div>
                        <p> <a href="index.php">Trang chủ</a>
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            Đăng nhập tài khoản
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
            <!-- main dangnhap -->
            <!--Bắt Đầu Phần Nội Dung-->
            <div class="container">
                <div class="row noidung">
                    <div class="dangnhap col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <h4>ĐĂNG NHẬP TÀI KHOẢN</h4>
                        <p>Họ Tên </p>
                        <form id="form" method="GET">
                            <input id="name" type="text" placeholder="Name" /><br>
                            <p>Mật khẩu</p>
                            <input id="password" type="password" placeholder="Password" /> <br>
                            <div id="error"></div>
                            <button id="submit">ĐĂNG NHẬP</button>
                            <a href="#">Quên mật khẩu?</a>
                        </form>
                        <div class="them">
                            <h5>Đăng nhập bằng cách khác</h5>
                            <a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="dangky col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <h4>BẠN CHƯA CÓ TÀI KHOẢN</h4>
                        <p>Đăng ký tài khoản ngay để có thể mua hàng nhanh chóng và dễ dàng hơn ! Ngoài ra còn có rất
                            nhiều chính sách và ưu đãi cho các thành viên</p>
                        <a href="dangky.html"><button>TẠO TÀI KHOẢN</button> </a><br>
                    </div>
                </div>
            </div>
            <!--Kết Thúc Phần Nội Dung-->
        </div>
    </div>
    </div>
    <!-- end content -->
    <!-- start footer -->
    <?php include_once './inc/footer.php' ?>
    <!-- end footer -->
    <button id="myBtn" title="Lên đầu trang"><img src="https://cdn.pixabay.com/photo/2013/07/12/19/20/arrow-154593_960_720.png" title='lên đầu trang' width='14px' /></button>
    <!-- script -->
    <script src="js/lendautrang.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="./public/js/lendautrang.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>