<?php
include('inc/myconnect.php');
include('inc/function.php');

if (isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT, array('min_range' => 1))) {
    $id = $_GET['id'];
    $query = "DELETE FROM tb_product WHERE id_product={$id}";
    $result = mysqli_query($dbc, $query);
    kt_query($query, $result);
    header("Location: basic_table.php");
} else {
    header("Location: basic_table.php");
    exit();
}
?>