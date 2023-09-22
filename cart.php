<?php
include "dbname.php";

// $user_id = $_SESSION['id'];

// if(!isset($user_id)){
//    header('location:login.php');
// }

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="js/jquery-3.7.1.js" type="text/javascript"></script>
<?php include 'header.php'; 
$conn = new mysqli('localhost', 'root', '', 'electro');
$sql = "select * from cart where r_id=" . $_SESSION['id'];
$result = $conn->query($sql);
if($result->num_rows>0)
{
$res=$result->fetch_assoc();




?>



<section class="products">
    <div class="container mt-5">
        <h1>Shopping Cart</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $mobile = [];
                $mobile = json_decode($res['mobile']);
                $quantity=[];
                $quantity=json_decode($res['qty']);
                $cnt=0;

                foreach ($mobile as $m) {

                    $sql = "select * from phone where p_id=".$m;
                    
                    $row = $conn->query($sql)->fetch_assoc();
                ?>
                    <tr>
                        <td><img src="<?php echo $row['img']; ?>" alt="Product 2" width="100"></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['des']; ?></td>
                        <td>₹<?php echo $row['price']; ?></td>
                        <td>
                            
                                <input type="number" value="<?php echo $quantity[$cnt];?>" min="1" name='qty' onchange="update(this.value,<?php echo $row['p_id'];?>)" class="form-control" style="width:80px;">
                            
                        </td>
                        <td>
                           <a href="<?php echo $_SERVER['PHP_SELF'];?>?did=<?php echo $row['p_id'];?>" name='delete' class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php $cnt++; }}
                else
                { ?>

      <section class="products">
            <div class="container mt-5">
        <h1>Shopping Cart</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
                </table>
                </section>
<?php
}?>
            </tbody>
        </table>
    </div>
</section>

<?php include 'footer.php'; 

if (isset($_GET['did']))
 {
    $productIdToDelete = $_GET['did'];

   
    $sql = "select * from cart where r_id=" . $_SESSION['id'];
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    $mobile = json_decode($row['mobile']);
    $qty = json_decode($row['qty']);

    
    $key = array_search($productIdToDelete, $mobile);


    if ($key !== false) {
        
        unset($mobile[$key]);
        unset($qty[$key]);

        
        $mobile = array_values($mobile);
        $qty = array_values($qty);


        $updatedMobile = json_encode($mobile);
        $updatedQty = json_encode($qty);

       
        $query = "UPDATE cart SET mobile='$updatedMobile', qty='$updatedQty' WHERE r_id=" . $_SESSION['id'];
        $conn->query($query);

        echo "<script>window.location.href='cart.php'</script>";
        // exit();
    } 
 }
?>
<script type="text/javascript">
   function update(qty,id){
      console.log(qty+' '+id);
   $(document).ready(function(){
      
      $.ajax({
         url:'cart_qty_update.php',
         type:'GET',
         data:{
            'qty':qty,
            'p_id':id
         },
         success:function(data){
            console.log('success'); 
         }


      });
   });
}
</script>
<!-- Handle quantity update and item removal in PHP -->

