<?php include "header.php";
$user_id = $_SESSION['id'];




?>
<?php 
            include "dbname.php";
			if(isset($_POST['add_to_cart'])){

				$product_name = $_POST['name'];
				$product_price = $_POST['price'];
				$product_image = $_POST['image'];
				$product_quantity = $_POST['qty'];
			 
				$check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND r_id = '$user_id'") or die('query failed');
			 
				if(mysqli_num_rows($check_cart_numbers) > 0){
				   ?>
				   <div class="alert alert-success">
				 <strong>already aded to cart!</strong> 
			   </div>
				   <?php
				}else{
				   mysqli_query($conn, "INSERT INTO `cart`(r_id, name, price, qty, img) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
				   ?>
				   <div class="alert alert-success">
				 <strong>successfully added tocart</strong> 
				 <?php echo '<script>window.location="cart.php"</script>'; ?>
			   </div>
				   <?php
				}
			 
			 }
				   
			 
            //Display all the laptop that are active
            //Sql Query
            $sql = "SELECT * FROM  phone where p_id=".$_GET['id'];
		  

            //Execute the Query
            $res = mysqli_query($conn, $sql);

            //Count Rows
            $count = mysqli_num_rows($res);
             //CHeck whether categories available or not
             if($count>0)
             {
                 //CAtegories Available
                while($row=mysqli_fetch_assoc($res))
				{
				

                   
                    // $id = $row['p_id'];
                     $name = $row['name']; 
                     $model = $row['model']; 
                     $price = $row['price'];
                     $image = $row['img'];
					 $image1 = $row['img1'];
					 $image2 = $row['img2'];
					 $image3 = $row['img3'];
					 $des = $row['des'];
					 
			
				   
				?> 
<!-- SECTION -->
<!-- <form action="" method="POST"> -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								<input type="hidden" name="image"><img src="<?php echo $image;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo $image1;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo $image2;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo $image3;?>" alt="">
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src="<?php echo $image;?>" alt="">
							</div>

							 <div class="product-preview">
								<img src="<?php echo $image1;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo $image2;?>" alt="">
							</div>

							<div class="product-preview">
								<img src="<?php echo $image3;?>" alt="">
							</div> 
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<input type="hidden" name="name"> <h2 class="product-name"><?php echo $model; ?></h2><br>
							<div>
								<div class="product-rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i>
								</div>
								<a class="review-link" href="#">10 Review(s) | Add your review</a>
							</div><br>
							<div>
								<input type="hidden" name="price"><h3 class="product-price">&#8377;<?php echo $price; ?></h3>
								<span class="product-available">In Stock</span>
							</div><br>
							<p><?php echo $des;?></p><br>

							<div class="add-to-cart">
								<!-- <div class="qty-label">
									<input type="hidden" name="qty">Qty
									<div class="input-number">
										<input type="number">
										<span class="qty-up">+</span>
										<span class="qty-down">-</span>
									</div>
								</div> -->
								<a href="addtocart.php?id=<?php echo $_GET['id']; ?>"><button class="add-to-cart-btn" name="add_to_cart"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
							</div>

						</div>
					</div>
					<!-- /Product details -->	
				</div>				
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				
			</div>
			<!-- /container -->
		</div>
		<!-- /Section -->
<!-- </form> -->
		
<?php include "footer.php";?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<?php
}

}
else {
	echo "0 results";
  }
  
  mysqli_close($conn);
  ?>

	</body>
</html>