<?php
    session_start(); 
    if(isset($_GET['id']))
{
	$_GET['id'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <!-- Page Header Start -->
     <div class="page-header mb-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Cart</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Cart</a>
                    </div>
                </div>
            </div>
    </div>
    <!-- Page Header End -->

    <div class="container">
    <div class="row ">
    </div>
</div>
      <h2>Customer Details</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm table-dark text-light ">
            <thead>
              <tr>
                <th class="bg-dark">Id</th>
                <th class="bg-dark">Name</th>
                <th class="bg-dark">Email</th>
                <th class="bg-dark">Password</th>
                <th class="bg-dark">Mobile</th>
                <th class="bg-dark">Address</th>
                <th class="bg-dark"> Update</th>
                <th class="bg-dark">Delete</th>
              </tr>
            </thead>
            <tbody>
          <?php
                $con=mysqli_connect('localhost','root','','electro');
                $sel="select * from registration";
                $q1=mysqli_query($con,$sel);
                while($row=mysqli_fetch_assoc($q1))
                {

          ?>
              <tr>
              <td><?php echo $item['id'];  ?></td>
                <td><?php echo $row['r_id']; ?></td>
                <td><?php echo $row['qty']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php  echo $item['price']*$item['qty']; ?></td>
                <!-- <td><img width="100" height="100" src="<?php //echo $item['img'] ?>"></td> -->
                     <!-- <td><a href="removecartitem.php?remove=<?php //echo $item['id']; ?>">DELETE</td> -->
                <!-- <td><a href="cust_edit.php"="</?php echo $row['id']; ?>">Edit</a></td> -->
                
              </tr>
              <?php } ?>
              
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>


  <!-- <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-DBjhmceckmzwrnMMrjI7BvG2FmRuxQVaTfFYHgfnrdfqMhxKt445b7j3KBQLolRl"
    crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js"
    integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
    integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI"
    crossorigin="anonymous"></script>
  <script src="dashboard.js"></script> -->

    <table border="1">
            <?php if(isset($_SESSION['cart'])) : ?>
                <?php foreach($_SESSION['cart'] as $k => $item) : ?>
            <tr>
                     <!-- <td></td>
                     <td><?php //echo $item['name']; ?></td> -->
                     <td><?php echo $item['qty']; ?></td>
                     <td><?php echo $item['price']; ?></td>
                     <td><?php echo $item['price']*$item['qty']; ?></td>
                      
                     <!-- <td><img width="100" height="100" src="<?php echo $item['img'] ?>"></td>
                     <td><a href="removecartitem.php?remove=<?php echo $item['id']; ?>">DELETE</td> -->
            </tr>
            <?php endforeach ?>
            <?php endif ?>
                
</table>
</body>
</html>