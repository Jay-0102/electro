<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		
    </head>
	<body>
	<?php
			include "header.php";
   	?>
		
		
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
						<a href="phone_db.php">
							<div class="shop-img">
							<img src="./img/index2one.jpg" alt=""></img>
							</div>
						</a>
							<div class="shop-body">
								<a href="phone_db.php"><h3>New Products<br>Collection</h3></a>
								<a href="phone_db.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
						<a href="phone_db.php">
							<div class="shop-img">
						 	<img src="./img/iphone.jpg" alt="">
							</div>
						</a>
							<div class="shop-body">
							<a href="phone_db.php"><h3>Smartphone<br>Collection</h3></a>
								<a href="phone_db.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
						<a href="phone_db.php">
							<div class="shop-img">
								<img src="./img/index3iphone.jpg" alt="">
							</div>
						</a>
							<div class="shop-body">
							<a href="phone_db.php"><h3>Hot Selling<br>Collection</h3></a>
								<a href="phone_db.php" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<!-- <li class="active"><a href="lap.php">Laptops</a></li> -->
									 <li><a  href="phone_db.php">Smartphones</a></li>
									<!-- <li><a  href="led.php">LED</a></li>  -->
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
			
<?php 
            include "dbname.php";
            //Display all the laptop that are active
            //Sql Query
            $sql = "SELECT p_id,name,model,price,img FROM  phone";
		
			//$sql="SELECT * FROM phone WHERE $id=p_id";

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

                   // echo "  Name: " . $row["name"]. " " . $row["model"]. " " . $row["price"]. "<br>";
                     //Get the Values
                   
                     $id = $row['p_id'];
                     $name = $row['name']; 
                     $model = $row['model']; 
                     $price = $row['price'];
                     $image = $row['img'];                 
                     ?>
                      
                      
                     <!-- product body -->
                     <div class="product">
                     <span><?php //echo $id?></span>
					 						<a href="pd.php">
											<a href="pd.php?id=<?php echo $id;?>">
											<div class="product-img">
											<img src="<?php echo $image;?>" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
				 							</a>
											<div class="product-body">
												<p class="product-category"><a href="pd.php"><?php echo $name ?></a></p>
												<h3 class="product-name"><a href="pd.php"><?php echo $model ?></a></h3>
												<h4 class="product-price">&#8377;<?php echo $price ?> </h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i><a href="addtocart.php?id=<?php echo $id;?>">add to cart</a></button>
											</div>
										</div>

										<!-- /product -->
                     <?php
                 }
             }
               //CAtegories Not Available
                 else {
                    echo "0 results";
                  }
                  
                  mysqli_close($conn);
         
         ?>


									</div>
										<div id="slick-nav-1" class="products-slick-nav"></div>

								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<!--<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Top selling</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>-->
								<!-- product widget -->
								
							</div>

							<div>
								
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

		<?php
			include "footer.php";
		?>
		
	</body>
</html>
