<?php include_once './libs/functions.php'; ?>
<?php if (isset($_GET['delcart']) && ($_GET['delcart'] == 1)) unset($_SESSION['cart']) ?>
<?php
function xoa()
{
    if (isset($_GET['delid']) && ($_GET['delid'] >= 0)) {
        array_splice($_SESSION['cart'], $_GET['delid'], 1);
    }
}
?>

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

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style> </style>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/gioithieu.css">
    <link rel="stylesheet" href="./public/css/giohang.css">
</head>

<body>
    <!-- start header -->
    <?php include_once './inc/header.php' ?>
    <!-- end header -->
    <!-- start content -->
    <div class="content">
        <div class="container">
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
            <div class="wrapper">
                <table class="table table-bordered cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Ảnh sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Giá sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Thành tiền</th>
                            <th class="action"><i class="fa fa-trash-o"></i>
                            </th>
                        </tr>
                    </thead>
                    <?php $products = getOrdersBySession(); ?>
                    <tbody>
                        <?php foreach ($products as $product) { ?>
                            <tr>
                                <td>
                                    <img style="width: 100px; height: 100px;" src="<?php echo $product['image']; ?>" alt="">
                                </td>
                                <td><?php echo $product['name']; ?></td>
                                <td><?php echo $product['price']; ?></td>
                                <td><?php echo $product['quantity']; ?></td>
                                <td><?php echo calc_product_price($product); ?></td>
                                <td><a href="cart.php?delid=?">Xoá</a></td>
                            </tr>
                        <?php    } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td colspan="3"><strong>Tổng giá</strong>
                            </td>
                            <td colspan="2"><strong>đ</strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="cart_navigation ">
                <a class="btn" href="cart.php?delcart=1"><button>Xoá toàn bộ giỏ hàng</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
    <!-- start footer -->
    <?php include_once './inc/footer.php' ?>
    <!-- end footer -->
    <button id="myBtn" title="Lên đầu trang"><img src="https://cdn.pixabay.com/photo/2013/07/12/19/20/arrow-154593_960_720.png" title='lên đầu trang' width='14px' /></button>

    <script src="./public/js/lendautrang.js"></script>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>