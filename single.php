    <?php  require_once './libs/functions.php'; ?>
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
        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./public/css/dangnhap.css">
        <link rel="stylesheet" href="./public/css/gioithieu.css">
        <link rel="stylesheet" href="./public/css/chitietsp.css">
        <link rel="stylesheet" href="./public/css/img-hang.css">
        <link rel="stylesheet" href="./public/css/style.css">
    </head>
    <body">
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
                                Chi tiết sản phẩm
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <!--Bắt Đầu Phần Nội Dung-->
                <?php
                if (!isset($_GET['id'])) die();
                $id = $_GET['id'];
                $product = getProduct($id);
                ?>
                <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col-xl-5">
                                <div class="images">
                                    <img src="<?php echo $product['image']; ?>" alt="">
                                </div>
                            </div>
                            <div class="noidung1 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <h5><?php echo $product['name']; ?></h5>
                                <p>Thương hiệu: <b>Converse</b> | Loại: <b>Giày da</b></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4><?php echo $product['price']; ?>,000đ </h4>
                                    </div>
                                    <div class="col-md-4 mt-1">
                                        <small><del>1.400.000đ</del></small>
                                    </div>
                                </div>

                                <div class="mota">
                                    <h6>Mô tả: </h6>
                                    <p>- Mắt xỏ dây âm với dây cột nylon</p>
                                    <p>- Lót trong bằng da thoáng khí tự nhiên</p>
                                    <p>- Đệm lót giày bằng da bọc thoải mái và hỗ trợ chân</p>
                                    <hr>
                                </div>
                                <div class="soluong">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p>Số lượng: </p>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="buttons_added">
                                                <input aria-label="quantity" class="input-qty" max="10" min="1" name="soluong" type="number" value="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button><a href="order.php?id=<?php echo $product['id']; ?>">Thêm vào giỏ hàng</a></button>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                <div class="card shiphang">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><i class="fa fa-truck" aria-hidden="true"></i>
                                            <p>Miễn phí vận chuyển với đơn hàng lớn hơn 1.000.000 đ</p>
                                        </li>
                                        <li class="list-group-item"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <p>Giao hàng ngay sau khi đặt hàng (áp dụng với Hà Nội & HCM)</p>
                                        </li>
                                        <li class="list-group-item"><i class="fa fa-arrows-h" aria-hidden="true"></i>
                                            <p>Đổi trả trong 3 ngày, thủ tục đơn giản</p>
                                        </li>
                                        <li class="list-group-item"><i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                            <p>Nhà cung cấp xuất hóa đơn cho sản phẩm này</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="main-chinh logo col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="sp-moi chitiet">
                                <div class="hr1 mb-2"> </div>
                                <div class="container">
                                    <div class="row">
                                        <h6>Chi tiết sản phẩm </h6>
                                        <hr>
                                        <p>
                                            Giày thể thao nam đẹp da màu nâu cao cấp, thanh lịch từ thương hiệu Converse®
                                            <br>
                                            Chất liệu giày bằng da bò mềm với chi tiết mũi giày cap-toe<br>
                                            Mắt xỏ dây âm với dây cột nylon<br>
                                            Lót trong bằng da thoáng khí tự nhiên<br>
                                            Đệm lót giày bằng da bọc thoải mái và hỗ trợ chân<br>
                                            Đế ngoài băng cao su hấp thụ sốc tốt và bám tốt trên mọi bề mặt
                                        </p><br>
                                        </p>
                                        <div class="canter">
                                            <img src="<?php echo $product['image']; ?>" alt="">
                                        </div>
                                        <p>
                                            Được thành lập vào năm 1978, thương hiệu Nine West xuất phát từ địa chỉ ở thành
                                            phố New York. Trong 30 năm, Nine West đã phát triển và trở thành người đứng đầu
                                            trong lĩnh vực thời trang nổi tiếng thế giới. Ngày nay, giầy - túi xách - trang
                                            sức Nine West được yêu mến bởi phụ nữ trên toàn thế giới và được xem như một
                                            chuyên gia tư vấn đáng tin cậy trong mọi lĩnh vực thời trang, bao gồm cả thời
                                            trang trẻ em.
                                        </p>
                                        <div class="canter">
                                            <img src="<?php echo $product['image']; ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sp-moi">
                                <hr class="hr1">
                                <div class="container">
                                    <div class="row">
                                        <h6>SẢN PHẨM LIÊN QUAN</h6>
                                        <hr>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                                            <div class="responsive">
                                                <div class="card gallery">
                                                    <a target="_blank" href="#">
                                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/091/132/products/9-min-0f7e3257-9fa9-4aab-8955-0f7701b42ead.jpg?v=1468202641487">
                                                    </a>
                                                    <div class="desc"> <a href="#" class="mb-1">Giày da converse cao cấp</a>
                                                        <b class="topright"> -14% </b>
                                                        <p><b class="giasp">1.200.000đ
                                                            </b><small><del>1.400.000đ</del></small>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                                            <div class="responsive">
                                                <div class="card gallery">
                                                    <a target="_blank" href="#">
                                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/091/132/products/9-min-0f7e3257-9fa9-4aab-8955-0f7701b42ead.jpg?v=1468202641487">
                                                    </a>
                                                    <div class="desc"> <a href="#" class="mb-1">Giày da converse cao cấp</a>
                                                        <b class="topright"> -14% </b>
                                                        <p><b class="giasp">1.200.000đ
                                                            </b><small><del>1.400.000đ</del></small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                                            <div class="responsive">
                                                <div class="card gallery">
                                                    <a target="_blank" href="#">
                                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/091/132/products/9-min-0f7e3257-9fa9-4aab-8955-0f7701b42ead.jpg?v=1468202641487">
                                                    </a>
                                                    <div class="desc"> <a href="#" class="mb-1">Giày da converse cao cấp</a>
                                                        <b class="topright"> -14% </b>
                                                        <p><b class="giasp">1.200.000đ
                                                            </b><small><del>1.400.000đ</del></small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                                            <div class="responsive">
                                                <div class="card gallery">
                                                    <a target="_blank" href="#">
                                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/091/132/products/9-min-0f7e3257-9fa9-4aab-8955-0f7701b42ead.jpg?v=1468202641487">
                                                    </a>
                                                    <div class="desc"> <a href="#" class="mb-1">Giày da converse cao cấp</a>
                                                        <b class="topright"> -14% </b>
                                                        <p><b class="giasp">1.200.000đ
                                                            </b><small><del>1.400.000đ</del></small>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                                            <div class="responsive">
                                                <div class="card gallery">
                                                    <a target="_blank" href="#">
                                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/091/132/products/9-min-0f7e3257-9fa9-4aab-8955-0f7701b42ead.jpg?v=1468202641487">
                                                    </a>
                                                    <div class="desc"> <a href="#" class="mb-1">Giày da converse cao cấp</a>
                                                        <b class="topright"> -14% </b>
                                                        <p><b class="giasp">1.200.000đ
                                                            </b><small><del>1.400.000đ</del></small>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                                            <div class="responsive">
                                                <div class="card gallery">
                                                    <a target="_blank" href="#">
                                                        <img src="https://bizweb.dktcdn.net/thumb/large/100/091/132/products/9-min-0f7e3257-9fa9-4aab-8955-0f7701b42ead.jpg?v=1468202641487">
                                                    </a>
                                                    <div class="desc"> <a href="#" class="mb-1">Giày da converse cao cấp</a>
                                                        <b class="topright"> -14% </b>
                                                        <p><b class="giasp">1.200.000đ
                                                            </b><small><del>1.400.000đ</del></small>
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

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
                <script src="./public/js/chitietsp.js"></script>
                <!-- Bootstrap JavaScript Libraries -->

                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

                </body>

    </html>