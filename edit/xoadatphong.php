<?php
session_start();
$stt=$_GET["id"];
$soluongphongxoa=$_SESSION["soluongphong".$stt];
for($i=$_GET["id"];$i<$_SESSION["soluongphong"];$i++){
    $j=$i+1;
    $_SESSION["id".$i]=$_SESSION["id".$j];
    $_SESSION["tenphong".$i]=$_SESSION["tenphong".$j];
    $_SESSION["hinhanh".$i]=$_SESSION["hinhanh".$j];
    $_SESSION["dongia".$i]=$_SESSION["dongia".$j];
    $_SESSION["mota".$i]=$_SESSION["mota".$j];
}
$k=$_SESSION["soluongphong"];
    unset($_SESSION["id".$k]);
    unset($_SESSION["tenphong".$k]);
    unset($_SESSION["hinhanh".$k]);
    unset($_SESSION["dongia".$k]);
    unset($_SESSION["mota".$k]);
$_SESSION["soluongphong"]--;
$_SESSION["soluongphong"]=$_SESSION["soluongphong"]-$soluongphongxoa;
header("Location:../Trangchu/datphong_theodoi.php");
?>