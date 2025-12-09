<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>

<!-- Custom small styles for Product Management (inline so you can test quickly) -->
<style>
/* Product management small styles */
#productsTable img{ box-shadow: 0 4px 10px rgba(0,0,0,0.08); }
.panel-heading { font-weight:600; background:#fff; border-bottom:1px solid #eee; }
.label { font-size:12px; padding:6px 8px; border-radius:3px; }

/* Optional: style top header/sidebar colors closer to your sample */
.header{ background: linear-gradient(90deg,#f2bfb7,#f0a68f); border-bottom:none; }
#sidebar{ background:#5a3e3b; }

/* Product management layout styles (cards etc) */
.market-updates .mu-card{display:flex;align-items:center;padding:22px;border-radius:4px;color:#fff;box-shadow:0 6px 18px rgba(0,0,0,0.18);margin-bottom:20px;min-height:120px}
.mu-icon{width:92px;height:92px;border-radius:6px;display:flex;align-items:center;justify-content:center;font-size:36px;margin-right:18px;opacity:0.95}
.mu-content h4{margin:0;font-weight:600;font-size:16px;opacity:0.95}
.mu-content h2{margin:6px 0 6px;font-size:34px;font-weight:700;line-height:1}
.mu-content p{margin:0;font-size:12px;opacity:0.9}
.card-visitors{ background: linear-gradient(135deg,#ff4d6d,#ff6f80); }
.card-visitors .mu-icon{ background: rgba(255,255,255,0.08); }
.card-users{ background: linear-gradient(135deg,#7b5a76,#8f6a86); }
.card-users .mu-icon{ background: rgba(255,255,255,0.06); }
.card-sales{ background: linear-gradient(135deg,#1583ff,#2ea0ff); }
.card-sales .mu-icon{ background: rgba(255,255,255,0.08); }
.card-orders{ background: linear-gradient(135deg,#222428,#33363a); }
.card-orders .mu-icon{ background: rgba(255,255,255,0.04); }

#hero-area{ height: 360px; }
@media(max-width:767px){ .market-updates .mu-card{ padding:16px; } .mu-icon{ width:64px;height:64px;font-size:26px;margin-right:12px; } .mu-content h2{ font-size:26px; } #hero-area{ height:260px; } }

/* Table small responsive tweak */
.table > tbody > tr > td { vertical-align: middle; }
</style>

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!-- notifications kept as-is -->
    <ul class="nav top-menu">
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li><p class="">You have 8 pending tasks</p></li>
                <li><a href="#"><div class="task-info clearfix"><div class="desc pull-left"><h5>Target Sell</h5><p>25% , Deadline  12 June’13</p></div><span class="notification-pie-chart pull-right" data-percent="45"><span class="percent"></span></span></div></a></li>
                <li><a href="#"><div class="task-info clearfix"><div class="desc pull-left"><h5>Product Delivery</h5><p>45% , Deadline  12 June’13</p></div><span class="notification-pie-chart pull-right" data-percent="78"><span class="percent"></span></span></div></a></li>
                <li><a href="#"><div class="task-info clearfix"><div class="desc pull-left"><h5>Payment collection</h5><p>87% , Deadline  12 June’13</p></div><span class="notification-pie-chart pull-right" data-percent="60"><span class="percent"></span></span></div></a></li>
                <li class="external"><a href="#">See All Tasks</a></li>
            </ul>
        </li>
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li><p class="red">You have 4 Mails</p></li>
                <li><a href="#"><span class="photo"><img alt="avatar" src="images/3.png"></span><span class="subject"><span class="from">Jonathan Smith</span><span class="time">Just now</span></span><span class="message">Hello, this is an example msg.</span></a></li>
                <li><a href="#"><span class="photo"><img alt="avatar" src="images/1.png"></span><span class="subject"><span class="from">Jane Doe</span><span class="time">2 min ago</span></span><span class="message">Nice admin template</span></a></li>
                <li><a href="#">See all messages</a></li>
            </ul>
        </li>
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li><p>Notifications</p></li>
                <li><div class="alert alert-info clearfix"><span class="alert-icon"><i class="fa fa-bolt"></i></span><div class="noti-info"><a href="#"> Server #1 overloaded.</a></div></div></li>
                <li><div class="alert alert-danger clearfix"><span class="alert-icon"><i class="fa fa-bolt"></i></span><div class="noti-info"><a href="#"> Server #2 overloaded.</a></div></div></li>
                <li><div class="alert alert-success clearfix"><span class="alert-icon"><i class="fa fa-bolt"></i></span><div class="noti-info"><a href="#"> Server #3 overloaded.</a></div></div></li>
            </ul>
        </li>
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li><input type="text" class="form-control search" placeholder=" Search"></li>
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="images/2.png">
                <span class="username">John Doe</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
          <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li><a class="active" href="index.php"><i class="fa fa-dashboard"></i><span>Trang chủ</span></a></li>
        
                <li><a href="fontawesome.php"><i class="fa fa-bullhorn"></i><span>Quản lý khách hàng  </span></a></li>
                <!-- Mục 1: Quản lý Sản phẩm -->
<li class="sub-menu">
    <a href="javascript:;">
        <i class="fa fa-th"></i>
        <span>Quản lý Sản phẩm</span>
    </a>
    <ul class="sub">
        <li><a href="basic_table.php">Danh sách sản phẩm</a></li>
    </ul>
</li>

<!-- Mục 2: Quản lý Danh mục -->
<li class="sub-menu">
    <a href="javascript:;">
        <i class="fa fa-th"></i>
        <span>Quản lý Danh mục</span>
    </a>
    <ul class="sub">
        <li><a href="responsive_table.php">Danh sách danh mục</a></li>
    </ul>
</li>

                <li class="sub-menu"><a href="javascript:;"><i class="fa fa-tasks"></i><span>Quản lý đơn hàng</span></a>
                    <ul class="sub"><li><a href="form_component.php">Quản lý đơn hàng</a></li><li><a href="form_validation.html">Form Validation</a></li></ul>
                </li>
                
                
                <li><a href="login.html"><i class="fa fa-user"></i><span>Login Page</span></a></li>
            </ul>
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->

<!-- ================== MAIN CONTENT: REPLACED WITH PRODUCT MANAGEMENT ================== -->
<!-- START: MAIN CONTENT — QUẢN TRỊ HỆ THỐNG -->


<!-- MAIN CONTENT: QUẢN TRỊ HỆ THỐNG (BẢNG SẢN PHẨM THỐNG KÊ) -->

<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-md-12">
        <h2 style="margin:0 0 18px; font-weight:700;">QUẢN TRỊ HỆ THỐNG</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default" style="box-shadow:0 6px 18px rgba(0,0,0,0.04); padding:20px;">
      <?php
        include('inc/myconnect.php');
        include('inc/function.php');
        include('inc/images_helper.php');
        //error_reporting(0);
        if (isset($_POST['submit'])) {
            $errors = array();
            // Size
            $array_size = array();
            if( $_POST['category'] == 't' ) {
                if ( isset($_POST['size_s']) ) {
                    $array_size[$_POST['size_s']] = $_POST['sl_s'];
                }
                if ( isset($_POST['size_m']) ) {
                    $array_size[$_POST['size_m']] = $_POST['sl_m'];
                }
                if ( isset($_POST['size_l']) ) {
                    $array_size[$_POST['size_l']] = $_POST['sl_l'];
                }
                if ( isset($_POST['size_xl']) ) {
                    $array_size[$_POST['size_xl']] = $_POST['sl_xl'];
                }
                if ( isset($_POST['size_xxl']) ) {
                    $array_size[$_POST['size_xxl']] = $_POST['sl_xxl'];
                }
                if ( isset($_POST['size_xxl']) ) {
                    $array_size[$_POST['size_xxl']] = $_POST['sl_xxl'];
                }

            } else {
                if ( isset($_POST['size_27']) ) {
                    $array_size[$_POST['size_27']] = $_POST['sl_27'];
                }
                if ( isset($_POST['size_28']) ) {
                    $array_size[$_POST['size_28']] = $_POST['sl_28'];
                }
                if ( isset($_POST['size_29']) ) {
                    $array_size[$_POST['size_29']] = $_POST['sl_29'];
                }
                if ( isset($_POST['size_30']) ) {
                    $array_size[$_POST['size_30']] = $_POST['sl_30'];
                }
                if ( isset($_POST['size_31']) ) {
                    $array_size[$_POST['size_31']] = $_POST['sl_31'];
                }
                if ( isset($_POST['size_32']) ) {
                    $array_size[$_POST['size_32']] = $_POST['sl_32'];
                }
                if ( isset($_POST['size_33']) ) {
                    $array_size[$_POST['size_33']] = $_POST['sl_33'];
                }
                if ( isset($_POST['size_34']) ) {
                    $array_size[$_POST['size_34']] = $_POST['sl_34'];
                }
                if ( isset($_POST['size_35']) ) {
                    $array_size[$_POST['size_35']] = $_POST['sl_35'];
                }
                if ( isset($_POST['size_36']) ) {
                    $array_size[$_POST['size_36']] = $_POST['sl_36'];
                }
                if ( isset($_POST['size_37']) ) {
                    $array_size[$_POST['size_37']] = $_POST['sl_37'];
                }
                if ( isset($_POST['size_38']) ) {
                    $array_size[$_POST['size_38']] = $_POST['sl_38'];
                }
                if ( isset($_POST['size_39']) ) {
                    $array_size[$_POST['size_39']] = $_POST['sl_39'];
                }
                if ( isset($_POST['size_40']) ) {
                    $array_size[$_POST['size_40']] = $_POST['sl_40'];
                }
                if ( isset($_POST['size_41']) ) {
                    $array_size[$_POST['size_41']] = $_POST['sl_41'];
                }
                if ( isset($_POST['size_42']) ) {
                    $array_size[$_POST['size_42']] = $_POST['sl_42'];
                }
                if ( isset($_POST['size_43']) ) {
                    $array_size[$_POST['size_43']] = $_POST['sl_43'];
                }
                if ( isset($_POST['size_44']) ) {
                    $array_size[$_POST['size_44']] = $_POST['sl_44'];
                }

            }
            // echo '<pre>';
            // print_r($array_size);
            // echo '</pre>';
            $array_size = Serialize($array_size);
            // Kiem tra gia ban vs gia san pham
            if( isset($_POST['price_product']) && isset($_POST['saleprice_product']) ){
                if ($_POST['price_product'] > $_POST['saleprice_product']) {
                    $errors[] = 'price';
                }
            }
            // loại product
            if (empty($_POST['id_loai'])) {
                $errors[] = 'saleprice_product';
            } else {
                $id_loai = ($_POST['id_loai']);  
                $code =  creat_code_product($id_loai);
            }
            // hiệu product
            if (empty($_POST['label_product'])) {
                $errors[] = 'label_product';
            } else {
                $label = ($_POST['label_product']);
            }
            // tên product
            if (empty($_POST['name_product'])) {
                $errors[] = 'name_product';
            } else {
                $name = ($_POST['name_product']);
            }
            // giá product
            if (empty($_POST['price_product'])) {
                $errors[] = 'price_product';
            } else {
                $price = ($_POST['price_product']);
            }

            // giá bán product
            if (empty($_POST['saleprice_product'])) {
                $errors[] = 'saleprice_product';
            } else {
                $saleprice = ($_POST['saleprice_product']);
            }
            if (empty($_POST['id_loai'])) {
                $errors[] = 'saleprice_product';
            } else {
                $id_loai = ($_POST['id_loai']);
                
                $code =  creat_code_product($id_loai);

            }

            // mô tả  product
            $describe = ($_POST['describe_product']);
            // trạng thái  product
            $status = $_POST['status'];
            $date = date("Y/m/d");
            $view = 0;
            $id_product = 6;
            if (empty($errors)) {
                $query = "SELECT name_product FROM tb_product WHERE code_product='{$name}'";
                $result = mysqli_query($dbc, $query);
                kt_query($query, $result);

                if (mysqli_num_rows($result) == 1) {
                    $message = "<p class='results1'>Sản phẩm này đã tồn tại</p>";
                } else {

                    // Duyệt mảng
                    $link_image = "";
                    $link_image_thump = "";
//                    echo "<pre>";
//                    print_r($_FILES['img']);
//                    echo "</pre>";
                    foreach ($_FILES['img']['name'] as $key => $value) {

                        if (($_FILES['img']['type'][$key] != "image/png") &&
                            ($_FILES['img']['type'][$key] != "image/gif") &&
                            ($_FILES['img']['type'][$key] != "image/jpg") &&
                            ($_FILES['img']['type'][$key] != "image/jpeg")
                        ) {
                            $massge = "<p class='results1'>File không đúng định dạng !!</p>";
                    } elseif (($_FILES['img']['size'][$key] > 1000000)) {
                        $massge = "<p class='results1'>Kích thước phải nhỏ hơn 1MB !!</p>";
                    } else {
                        $img = str_replace(" ","",$_FILES['img']['name'][$key]);
                        $link_img = 'upload/' . $img;
                        move_uploaded_file($_FILES['img']['tmp_name'][$key], "../upload/" . $img);
                            //xử lí resize, crop hinh anh
                        $temp = explode('.', $img);
                        if ($temp[1] == 'jpeg' or $temp[1] == 'JPEG') {
                            $temp[1] = "jpg";
                        }
                        $temp[1] = strtolower($temp[1]);
                            $thump = 'upload/resize/' . $temp[0] . '_thump' . '.' . $temp[1]; // đường dẫn
                            $imageThump = new Image("../".$link_img);
                            if ($imageThump->getWidth() > 460) {
                                $imageThump->resize(460, 613,"resize");
                            }
                            $imageThump->save($temp[0] . '_thump', '../upload1/resize'); //ten voi duong dan luu anh
                            $link_image .= $link_img . " ";
                            $link_image_thump .= $thump . " ";
                        }
                    }//ket thuc foreach
                    $link_image = trim($link_image);
                    $link_image = trim($link_image_thump);
                    $query_data = "INSERT INTO tb_product (code_product,name_product,price_product,saleprice_product,image,status_product,id_category)
VALUES ('$code','$name','$price','$saleprice','$image_str','$status','$category')
";
                // echo $array_size .'<br>';
                // echo  $query_data.'a';
                // //     //echo $query_data;
                $result_data = mysqli_query($dbc, $query_data);
                kt_query($query_data, $result_data);


                if ($result_data > 0) {
                    echo "<p class='results'>Thêm mới thành công</p>";
                    $_POST['code_product'] ="";
                    $_POST['label_product'] ="";
                    $_POST['name_product'] ="";
                    $_POST['link_image'] ="";
                    $_POST['price_product'] ="";
                    $_POST['saleprice_product'] ="";
                    $_POST['describe_product'] ="";
                } else {
                    echo "<p class='results1'>Thêm mới không thành công</p>";
                }
            }
        } else {
            if (in_array('price', $errors)) {
                $message = "<p class='results1'>Giá sản phẩm không được lớn hơn giá bán </p>";
            } else {
               $message = "<p class='results1'> Bạn hãy nhập đầy đủ thông tin </p>";
           }

            // print_r($errors);
       }
   }
   ?>
   <form name="frmadd-product" method="post" enctype="multipart/form-data">
    <?php
    if (isset($message)) {
        echo $message;
    }
    ?>
    <h3 style="color: red">Thêm mới - sản phẩm</h3>

    <!-- Lấy value id_product -->


    <input type="hidden" name="id_product" value="">

    <!--  -->
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input type="text" name="name_product" value="<?php if (isset($_POST['name_product'])) {
            echo $_POST['name_product'];
        } ?>" class="form-control" placeholder='Nhập tên loại sản phẩm'/>
        <?php
        if (isset($errors) && in_array('name_product', $errors)) {
            echo "<p class='results1' >Bạn hãy nhập tên sản phẩm</p>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>Hiệu sản phẩm : </label>
        <select name="label_product" style='padding:5px 10px;border-radius:4px;display: block;'>
            <option value="" style="color: #999">- - - Chưa có hiệu - - -</option>
            <?php
            $query_label = "SELECT* FROM tb_label";
            $result_label = mysqli_query($dbc, $query_label);
            kt_query($query_label, $result_label);
            while ($label = mysqli_fetch_array($result_label, MYSQLI_ASSOC)) {
                ?>
                <option style="text-transform: capitalize;"
                value="<?php echo $label['id_label']; ?>"><?php echo $label['name_label']; ?></option>
                <?php
            }
            ?>
        </select>

    </div>
    <div class="form-group">
        <label>Thuộc loại : </label>
        <?php ctrSelect('id_loai', 'class'); ?>
        <?php
        if (isset($errors) && in_array('id_loai', $errors)) {
            echo "<p class='results1' >Bạn hãy nhập mã sản phẩm</p>";
        }
        ?>
    </div>



    <!-- warning -->
    <div class="form-group">

        <label>Ảnh sản phẩm</label>
        <input type="file" name="img[]" value="" multiple="multiple"/>
    </div>

    <div class="form-group wrap-size">
        <label for="size">Chọn size:</label><br>
<input type="checkbox" id="S" name="size[]" value="S"> S
<input type="checkbox" id="M" name="size[]" value="M"> M
<input type="checkbox" id="L" name="size[]" value="L"> L
<input type="checkbox" id="XL" name="size[]" value="XL"> XL
<input type="checkbox" id="XXL" name="size[]" value="XXL"> XXL
<input type="checkbox" id="XXXL" name="size[]" value="XXXL"> XXXL

    </div>

    <div class="form-group">
        <label>Giá sản phẩm</label>
        <input type="text" name="price_product" value="<?php if (isset($_POST['price_product'])) {
            echo $_POST['price_product'];
        } ?>" class="form-control" placeholder='Nhập giá sản phẩm'/>
        <?php
        if (isset($errors) && in_array('price_product', $errors)) {
            echo "<p class='results1' >Bạn hãy nhập giá sản phẩm</p>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>Giá bán sản phẩm</label>
        <input type="text" name="saleprice_product" value="<?php if (isset($_POST['saleprice_product'])) {
            echo $_POST['saleprice_product'];
        } ?>" class="form-control" placeholder='Nhập giá bán sản phẩm'/>
        <?php
        if (isset($errors) && in_array('saleprice_product', $errors)) {
            echo "<p class='results1' >Bạn hãy nhập giá bán sản phẩm</p>";
        }
        ?>
    </div>

    <div class="form-group">
        <label>Mô tả sản phẩm</label>
        <textarea name="describe_product" value="<?php if (isset($_POST['describe_product'])) {
            echo $_POST['describe_product'];
        } ?>" class="form-control" placeholder='Nhập mô tả sản phẩm'></textarea>
        <?php
        if (isset($errors) && in_array('describe_product', $errors)) {
            echo "<p class='results1' >Bạn hãy nhập mô tả sản phẩm</p>";
        }
        ?>
    </div>

    <div class="form-group">
        <label style="display:block">Trạng thái</label>

        <label class="radio-inline"> <input type="radio" name="status" value="1" checked="checked"/><p class="results"> Còn hàng</p>
        </label>
        <label class="radio-inline"> <input type="radio" name="status" value="0"/><p class="results1"> Hết hàng</p></label>
    </div>
    <input type="submit" name="submit" class="btn btn-primary" value="Thêm mới"/>

</form>
</div>
</div>     
          <?php
          include('inc/myconnect.php');
          include('inc/function.php');

          if (isset($_POST['submit_product'])) {
              $errors = [];
              $code = !empty($_POST['code_product']) ? $_POST['code_product'] : $errors[] = 'code_product';
              $name = !empty($_POST['name_product']) ? $_POST['name_product'] : $errors[] = 'name_product';
              $price = !empty($_POST['price_product']) ? $_POST['price_product'] : $errors[] = 'price_product';
              $saleprice = !empty($_POST['saleprice_product']) ? $_POST['saleprice_product'] : 0;
              $status = isset($_POST['status_product']) ? $_POST['status_product'] : 0;

              if (isset($_FILES['image_product']) && $_FILES['image_product']['name'][0] != '') {
                  $images = [];
                  foreach ($_FILES['image_product']['name'] as $key => $value) {
                      $tmp_name = $_FILES['image_product']['tmp_name'][$key];
                      $img_name = 'uploads/' . basename($value);
                      move_uploaded_file($tmp_name, '../'.$img_name);
                      $images[] = $img_name;
                  }
                  $image_str = implode(' ', $images);
              } else {
                  $image_str = '';
              }

              if (empty($errors)) {
                  $query_insert = "INSERT INTO tb_product (code_product,name_product,price_product,saleprice_product,image,status_product) VALUES ('$code','$name','$price','$saleprice','$image_str','$status')";
                  $result_insert = mysqli_query($dbc,$query_insert);
                  kt_query($query_insert,$result_insert);
                  echo $result_insert ? "<p class='results'>Thêm sản phẩm thành công</p>" : "<p class='results1'>Thêm sản phẩm thất bại</p>";
              } else {
                  echo "<p class='results1'>Vui lòng điền đầy đủ thông tin</p>";
              }
          }
          ?>

          <form method="post" enctype="multipart/form-data" class="product-form" style="max-width:700px;margin:auto;">
              <div class="form-group">
                  <label>Mã sản phẩm</label>
                  <input type="text" name="code_product" class="form-control" placeholder="Nhập mã sản phẩm">
              </div>

              <div class="form-group">
                  <label>Tên sản phẩm</label>
                  <input type="text" name="name_product" class="form-control" placeholder="Nhập tên sản phẩm">
              </div>

              <div class="form-group">
                  <label>Giá</label>
                  <input type="number" name="price_product" class="form-control" placeholder="Nhập giá gốc">
              </div>

              <div class="form-group">
                  <label>Giá bán</label>
                  <input type="number" name="saleprice_product" class="form-control" placeholder="Nhập giá bán (nếu có)">
              </div>

              <div class="form-group">
                  <label>Hình ảnh sản phẩm</label>
                  <input type="file" name="image_product[]" multiple class="form-control">
              </div>

              <div class="form-group">
                  <label>Trạng thái</label><br>
                  <label class="radio-inline">
                      <input type="radio" name="status_product" value="1" checked>
                      <span class="results">Còn hàng</span>
                  </label>
                  <label class="radio-inline">
                      <input type="radio" name="status_product" value="0">
                      <span class="results1">Hết hàng</span>
                  </label>
              </div>

              <button type="submit" name="submit_product" class="btn btn-primary">Thêm sản phẩm</button>
          </form>

          <style>
              .results { color:#16A34A; font-weight:600; }
              .results1 { color:#DC2626; font-weight:600; }
              .product-form .form-group label { font-weight:600; }
              .product-form input.form-control { height:38px; border-radius:4px; margin-bottom:10px; }
              .product-form .btn-primary { background:#0EA5E9; border-color:#0EA5E9; padding:10px 22px; font-weight:600; margin-top:10px; }
              .product-form .btn-primary:hover { background:#0284C7; border-color:#0284C7; }
              .product-form .radio-inline span { font-weight:600; margin-left:4px; }
          </style>

        </div> <!-- end panel-body -->
      </div> <!-- end panel -->
    </div>
  </section>




  <!-- footer -->
  <div class="footer">
    <div class="wthree-copyright">
      <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
  </div>
</section>
<!-- END MAIN CONTENT -->

    



<!-- existing scripts (kept) -->
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>

<!-- morris JavaScript kept (hero-area may be unused here but leaving included) -->
<script>
	$(document).ready(function() {
		// existing small graph interactions (kept)
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });

	   // CHART: preserve original hero-area chart settings if you keep that element
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}

		try {
			graphArea2 = Morris.Area({
				element: 'hero-area',
				padding: 10,
				behaveLikeLine: true,
				gridEnabled: false,
				gridLineColor: '#dddddd',
				axes: true,
				resize: true,
				smooth:true,
				pointSize: 0,
				lineWidth: 0,
				fillOpacity:0.85,
				data: [
					{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
					{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
					{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
					{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
					{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
					{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
					{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
					{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
					{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				],
				lineColors:['#eb6f6f','#926383','#eb6f6f'],
				xkey: 'period',
				redraw: true,
				ykeys: ['iphone', 'ipad', 'itouch'],
				labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
				pointSize: 2,
				hideHover: 'auto',
				resize: true
			});
		} catch(e){
			// ignore if morris not available or element missing
			console && console.log && console.log('morris init skipped', e);
		}
	});
</script>

<!-- calendar -->
<script type="text/javascript" src="js/monthly.js"></script>
<script type="text/javascript">
	$(window).load( function() {
		try {
			$('#mycalendar').monthly({ mode: 'event', });
			$('#mycalendar2').monthly({ mode: 'picker', target: '#mytarget', setWidth: '250px', startHidden: true, showTrigger: '#mytarget', stylePast: true, disablePast: true });
		} catch(err) { console && console.log && console.log('monthly init skipped', err); }

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		// local file - events may not work
		}
	});
</script>

<!-- PRODUCT MANAGEMENT: frontend JS (client-side demo) -->
<script>
  (function(){
    // Basic front-end data actions (demo only)
    function formatCurrency(num){
      return new Intl.NumberFormat('vi-VN').format(num) + '₫';
    }

    // Hook buttons
    document.addEventListener('click', function(e){
      if(e.target.closest('.btn-edit')){
        // populate modal from row
        var tr = e.target.closest('tr');
        var id = tr.getAttribute('data-id') || '';
        var name = tr.children[1].innerText.trim();
        var code = tr.children[2].innerText.trim();
        var cat = tr.children[3].innerText.trim();
        var priceText = tr.children[4].innerText.replace(/[^0-9]/g,'');
        var qty = tr.children[5].innerText.trim();
        var status = tr.children[6].innerText.trim() === 'Đang bán' ? 'active' : 'out';
        var img = tr.querySelector('img') ? tr.querySelector('img').src : '';

        document.getElementById('productModalLabel').innerText = 'Sửa sản phẩm';
        document.getElementById('productId').value = id;
        document.getElementById('productName').value = name;
        document.getElementById('productCode').value = code;
        document.getElementById('productCategory').value = cat;
        document.getElementById('productPrice').value = priceText ? Number(priceText) : '';
        document.getElementById('productQty').value = qty;
        document.getElementById('productStatus').value = status;
        document.getElementById('productImage').value = img;
        $('#productModal').modal('show');
      }

      if(e.target.closest('.btn-delete')){
        if(!confirm('Bạn có chắc muốn xóa sản phẩm này?')) return;
        var tr = e.target.closest('tr');
        tr.parentNode.removeChild(tr);
        updateStats();
      }
    });

    // Add button: prepare modal for new item
    document.getElementById('btnAdd').addEventListener('click', function(){
      document.getElementById('productModalLabel').innerText = 'Thêm sản phẩm';
      document.getElementById('productForm').reset();
      document.getElementById('productId').value = '';
    });

    // Save form (frontend only: add row or update)
    document.getElementById('productForm').addEventListener('submit', function(ev){
      ev.preventDefault();
      var id = document.getElementById('productId').value || 'p' + Date.now();
      var name = document.getElementById('productName').value;
      var code = document.getElementById('productCode').value;
      var cat = document.getElementById('productCategory').value;
      var price = Number(document.getElementById('productPrice').value) || 0;
      var qty = Number(document.getElementById('productQty').value) || 0;
      var status = document.getElementById('productStatus').value;
      var img = document.getElementById('productImage').value || 'images/product-placeholder.png';

      var tbody = document.getElementById('productsBody');
      var existing = tbody.querySelector('tr[data-id="'+id+'"]');
      var statusLabel = status === 'active' ? '<span class="label label-success">Đang bán</span>' : '<span class="label label-warning">Hết hàng</span>';

      if(existing){
        existing.querySelector('img').src = img;
        existing.children[1].innerText = name;
        existing.children[2].innerText = code;
        existing.children[3].innerText = cat;
        existing.children[4].innerText = formatCurrency(price);
        existing.children[5].innerText = qty;
        existing.children[6].innerHTML = statusLabel;
      } else {
        var tr = document.createElement('tr');
        tr.setAttribute('data-id', id);
        tr.innerHTML = ''
          + '<td><img src="'+img+'" alt="thumb" style="width:64px;height:48px;object-fit:cover;border-radius:4px"></td>'
          + '<td>'+name+'</td>'
          + '<td>'+code+'</td>'
          + '<td>'+cat+'</td>'
          + '<td>'+formatCurrency(price)+'</td>'
          + '<td>'+qty+'</td>'
          + '<td>'+statusLabel+'</td>'
          + '<td>'
            + '<button class="btn btn-xs btn-info btn-edit"><i class="fa fa-pencil"></i> Sửa</button> '
            + '<button class="btn btn-xs btn-danger btn-delete"><i class="fa fa-trash"></i> Xóa</button>'
          + '</td>';
        tbody.insertBefore(tr, tbody.firstChild);
      }

      $('#productModal').modal('hide');
      updateStats();
    });

    // Search/filter basic (client side)
    function doFilter(){
      var q = document.getElementById('productSearch').value.trim().toLowerCase();
      var cat = document.getElementById('categoryFilter').value;
      var st = document.getElementById('statusFilter').value;
      var rows = document.querySelectorAll('#productsBody tr');
      rows.forEach(function(r){
        var name = r.children[1].innerText.toLowerCase();
        var code = r.children[2].innerText.toLowerCase();
        var category = r.children[3].innerText;
        var statusText = r.children[6].innerText.trim();
        var status = statusText === 'Đang bán' ? 'active' : 'out';
        var show = true;
        if(q && !(name.indexOf(q) > -1 || code.indexOf(q) > -1)) show = false;
        if(cat && category !== cat) show = false;
        if(st && status !== st) show = false;
        r.style.display = show ? '' : 'none';
      });
    }
    document.getElementById('productSearch').addEventListener('input', doFilter);
    document.getElementById('categoryFilter').addEventListener('change', doFilter);
    document.getElementById('statusFilter').addEventListener('change', doFilter);
    document.getElementById('btnSearch').addEventListener('click', doFilter);

    // Update quick stats
    function updateStats(){
      var rows = document.querySelectorAll('#productsBody tr');
      var total = 0, active = 0, out = 0, qty = 0;
      rows.forEach(function(r){
        if(r.style.display === 'none') return; // optional: count only visible
        total++;
        var statusText = r.children[6].innerText.trim();
        var q = parseInt(r.children[5].innerText) || 0;
        qty += q;
        if(statusText === 'Đang bán') active++; else out++;
      });
      document.getElementById('statTotal').innerText = total;
      document.getElementById('statActive').innerText = active;
      document.getElementById('statOut').innerText = out;
      document.getElementById('statQty').innerText = qty;
    }

    // initial stats
    updateStats();

  })();
</script>

</body>
</html>
