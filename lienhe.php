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
    <link rel="stylesheet" href="./public/css/lienhe.css">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- start header -->
    <?php include_once './inc/header.php' ?>
    <!-- end header -->
    <!-- start content -->
    <div class="content">
        <div class="main-content mt-0">
            <div class="container">
                <div class="top-content">
                    <div>
                        <p> <a href="index.php">Trang chủ</a>
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            Liên hệ
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
                        <h4>LIÊN HỆ</h4>
                        <p>Họ *</p>
                        <input type="text" placeholder="Họ" /><br>
                        <p>Email *</p>
                        <input type="email" placeholder="Email" /><br>
                        <p>Nội dung *</p>
                        <textarea class="noidung01" placeholder="Nội dung"> </textarea> <br>
                        <button>GỬI MẪU LIÊN HỆ</button>
                    </div>
                    <div class="dangnhap2 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.4980873032496!2d107.58395981388783!3d16.4502980334844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a1457de005d7%3A0x6608565df1f87298!2zMTc2IFRy4bqnbiBQaMO6LCBQaMaw4bubYyBWxKluaCwgVGjDoG5oIHBo4buRIEh14bq_LCBUaOG7q2EgVGhpw6puIEh14bq_IDUzMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1652415776208!5m2!1svi!2s" width="550" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
    <script src="./public/js/lendautrang.js"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>