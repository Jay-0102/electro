<?php include "header.php"; ?>
<?php

$data= $_GET['search'];
include 'dbname.php';
$sql="select * from phone where name like '%".$data."%' or des like '%".$data."%'";
$res=mysqli_query($conn,$sql);

?>


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
                   while($row = mysqli_fetch_assoc($res))
                   {
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
                                        <?php
}
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






<?php include "footer.php"; ?>