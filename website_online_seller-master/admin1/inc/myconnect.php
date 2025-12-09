<?php 
//ket noi CSDL
$dbc=mysqli_connect('localhost','root','root123','web_man_fashion');
if (!$dbc)
{
    echo "Kết nối không thành công";
}
else
{
    mysqli_set_charset($dbc,'UTF8');
}
?>