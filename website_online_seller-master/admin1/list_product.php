<?php 
include('includes/header.php'); 
include('inc/myconnect.php'); 
?>

<div class="container" style="margin-top: 20px;">
    
      
       <h2 style="color: red; display: flex; justify-content: space-between; align-items: center;">
    Tất cả Sản Phẩm
    <a href="add_product.php" style="color:#1b926c; font-size: 20px; margin-right: 40px;">
        Thêm <i class="fa fa-fw fa-plus-square-o" style="font-size: 25px; color:#1b926c;"></i>
    </a>
</h2>

    

    <!-- Form tìm kiếm -->
    <form method="get" style="margin-bottom: 15px;">
        <input type="text" name="text_search" placeholder="Nhập tên sản phẩm..." class="form-control" style="width: 300px; display: inline-block;">
        <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
    </form>

    <!-- Bảng sản phẩm -->
    <table class="table table-bordered table-hover" style="background: #fff; color: #000; text-align: center;">
        <thead style="background: #f2f2f2;">
            <tr>
                <th>Mã sp</th>
                <th>Tên sp</th>
                <th>Size</th>
                <th>Số lượng</th>
                <th>Hình ảnh</th>

                <th>Giá bán</th>
                <th>Sửa</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $limit = 10;
        $page = isset($_GET['p']) ? $_GET['p'] : 1;
        $start = ($page - 1) * $limit;

        // Query tìm kiếm hoặc lấy tất cả
        if(isset($_GET['btn-search']) && !empty($_GET['text_search'])){
            $text_search = mysqli_real_escape_string($dbc, $_GET['text_search']);
            $sql = "SELECT * FROM tb_product WHERE name_product LIKE '%$text_search%' LIMIT $start, $limit";
        } else {
            $sql = "SELECT * FROM tb_product LIMIT $start, $limit";
        }

        $result = mysqli_query($dbc, $sql);
        while($product = mysqli_fetch_assoc($result)){
            $sizes = unserialize($product['size_product']);
            $total_size = array_sum($sizes);
            ?>
            <tr>
                <td><?php echo $product['code_product']; ?></td>
                <td><?php echo $product['name_product']; ?></td>
                <td><?php echo implode(", ", array_keys($sizes)); ?></td>
                <td><?php echo $total_size; ?></td>
                
                <td>
                    <?php 
                    $img_arr = explode(" ", $product['image']);
                    if(!empty($img_arr[0])){
                        echo '<img src="../'.$img_arr[0].'" style="width:50px; height:50px; object-fit:cover; border-radius:5px;">';
                    } else {
                        echo 'Chưa có hình';
                    }
                    ?>
                </td>
                <td><?php echo number_format($product['saleprice_product']); ?> VND</td>
                <td><a href="edit_product.php?id=<?php echo $product['id_product']; ?>"><i class="fa fa-pencil" style="color:#1b926c;"></i></a></td>
                <td><a href="delete_product.php?id=<?php echo $product['id_product']; ?>" onclick="return confirm('Bạn chắc chắn muốn xóa?');"><i class="fa fa-trash" style="color:red;"></i></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <nav>
        <ul class="pagination">
        <?php
        // Tổng số bản ghi
        if(isset($text_search)){
            $sql_count = "SELECT COUNT(*) FROM tb_product WHERE name_product LIKE '%$text_search%'";
        } else {
            $sql_count = "SELECT COUNT(*) FROM tb_product";
        }
        $res_count = mysqli_query($dbc, $sql_count);
        list($total_records) = mysqli_fetch_array($res_count, MYSQLI_NUM);
        $total_page = ceil($total_records / $limit);

        for($i=1; $i<=$total_page; $i++){
            $active = ($i==$page) ? "active" : "";
            $link = "list_product.php?p=$i";
            if(isset($text_search)) $link .= "&text_search=$text_search&btn-search=Tìm kiếm";
            echo '<li class="page-item '.$active.'"><a class="page-link" href="'.$link.'">'.$i.'</a></li>';
        }
        ?>
        </ul>
    </nav>
</div>

<?php include('includes/footer.php'); ?>
