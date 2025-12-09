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
                    <ul class="sub"><li><a href="form_component.php">Quản lý đơn hàng</a></li></ul>
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
    <?PHP 
 
include('inc/function.php');
include('inc/myconnect.php');
?>
<div class="row">
    <div class="col-12">
        <h2 style=" color: red">Danh sách đơn đặt hàng đã duyệt
        </h2>
        <table class="table table-striped"> 
            <thead> 
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Họ và tên</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ngày đặt hàng</th>
                    <th class="text-center">Xem chi tiết</th>
                 <!--    <th>Chỉnh sửa</th>
                    <th>Duyệt</th> -->
                </tr>
            </thead>
            <tbody>
                <?php 
                $query = "SELECT 
    o.code_order,
    ANY_VALUE(o.name_customer) AS name_customer,
    ANY_VALUE(o.phone_customer) AS phone_customer,
    ANY_VALUE(o.address_customer) AS address_customer,
    MAX(o.order_day) AS order_day,
    ANY_VALUE(o.id_product) AS id_product,
    ANY_VALUE(d.name_district) AS name_district,
    ANY_VALUE(c.name_city) AS name_city
FROM tb_order o
JOIN tb_district d ON o.id_district = d.id_district
JOIN tb_city c ON d.id_city = c.id_city
WHERE o.status_order = '1'
GROUP BY o.code_order
ORDER BY order_day DESC
";
                $result = mysqli_query($dbc,$query);
                kt_query($query, $result);
                while ($order = mysqli_fetch_array($result, MYSQLI_NUM)) {
                   $check = check_order($order[0]);
                   ?>                    
                   <tr style="<?php echo  ($check) ? 'color: #bd0103' : "b";  ?>">
                    <td><?php echo $order[0]; ?></td>
                    <td><?php echo $order[1]; ?></td>
                    <td><?php echo $order[2]; ?></td>
                    <td><?php echo $order[3]. ", " . $order[6]. ", " . $order[7]; ?></td>
                    <td><?php $date=date_create($order[4]);
                    echo date_format($date,"H:i - d/m/Y"); ?></td>
                    <td class="text-center"><a href="order_detail.php?code_order=<?php echo $order[0]; ?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    <!-- <td><a href="edit_order.php?code_order=<?php echo $order[0]; ?>"><i class="fa fa-fw fa-pencil" style="font-size: 20px; color:#1b926c;"></i></a></td> -->
                    <?php if($check){
                        ?>
                        <!-- <td style="color: #bd0103;text-align: center;"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i></td> -->
                        <?php 
                    } else {

                        ?>
                        <!-- <td class="text-center"><a onClick="return confirm('Bạn muốn chuyển đơn hàng này qua bên hóa đơn?');" href="functions/review_order.php?id_order=<?php echo $order[0]; ?>"><i class="glyphicon glyphicon-ok"></i></a></td> -->
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>
    </table>
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
