<?php
session_start();
$conn=new mysqli('localhost','root','','electro');
$mobile = [];
$qty = [];
$sql = "select * from cart where r_id=" . $_SESSION['id'];
$res = $conn->query($sql);


    $row = $res->fetch_assoc();
    $mobile = json_decode($row['mobile'], true);
    $qty = json_decode($row['qty'], true);

     $key=array_search($_GET['p_id'],$mobile);
    //  echo "before".$qty[$key]."<br>";
     if($_GET['qty']>$qty[$key])
                $qty[$key]+=1;

    if($qty[$key]>$_GET['qty'])
                $qty[$key]-=1;

    // echo "after".$qty[$key];
    

   
    $updatemobile = json_encode($mobile);
    $updateqty = json_encode($qty);

   
    $sql = "update cart set mobile='" . $updatemobile . "', qty='" . $updateqty . "' where r_id=" . $_SESSION['id'];
    $conn->query($sql);
    echo "success";

?>