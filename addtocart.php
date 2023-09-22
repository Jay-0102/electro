<?php

$conn = new mysqli('localhost', 'root', '', 'electro');
session_start();

$P_id = $_GET['id'];
$mobile = [];
$qty = [];
$sql = "select * from cart where r_id=" . $_SESSION['id'];
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $mobile = json_decode($row['mobile'], true);
    $qty = json_decode($row['qty'], true);

    $key=array_search($P_id,$mobile);

    if ($key !== false) {
       
        $qty[$key]++;
    } else {
        
        $mobile[] = $P_id;
        $qty[] = 1;
    }

   
    $updatemobile = json_encode($mobile);
    $updateqty = json_encode($qty);

   
    $sql = "update cart set mobile='" . $updatemobile . "', qty='" . $updateqty . "' where r_id=" . $_SESSION['id'];
    $conn->query($sql);

    
} else {
    $mobile[] = $P_id;
    $qty[] = 1;

   
    $mobileJSON = json_encode($mobile);
    $qtyJSON = json_encode($qty);

    $sql = "insert into cart (r_id, mobile, qty) values (" . $_SESSION['id'] . ", '" . $mobileJSON . "', '" . $qtyJSON . "')";
    $conn->query($sql);
}

echo "<script>window.location.href='cart.php';</script>";
?>