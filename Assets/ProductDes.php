<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PRODUCT DESCRIPTION</title>
</head>
<body>

	<?php
		include('db.php');
		$row='';
		$sql = "SELECT * FROM product where Pro_id=11";
		// $result = mysqli_query($conn, $sql);20
		// echo("ABC ".$result);
		if ($result = mysqli_query($conn,$sql)) {
		  $row = mysqli_fetch_assoc($result);
		  #echo($row['Pro_id']);
		  // Free result set
		  mysqli_free_result($result);
		}else{
			//query fails
			echo("Yo");
		}
?>
 
<header>
	<div class="container">
		<img src = "assets/logo.png" class = "logo">
			<ul class="nav">
			  <li><a href="/">Home</a></li>

			  <li><a href="/work/">The Blog</a></li>
			  <li><a href="/contact/">CLearance</a></li>
			  <li><a href="/contact/">your bag</a></li>
				<div class="search-container">
					<input type="text" placeholder="Search products..">
				</div>
			</ul>
</header> 

<div class="small-container single-product">
		<div class="row container">
		<!-- Image -->
		<div class="image-container">
			 
			<img src ="<?php 
				echo $row['Pro_image'];
			
				?>" class="image">
		</div>
		<!-- Description-->
		<div class="product-desc col-2">
			<div class="container">
			<h1>  
				 <?php 
				echo $row['Pro_name'];
			
				?>
			</h1>
			<h3>
				Rs.
				 <?php 
				echo $row['Pro_cost'];
			
				?>
				
				<!-- Cost -->
			</h3>
			<p>Inclusive of all tax</p>
			<input type="number" class='quantity' value="1">
			<button class="cart-button"> Add to cart </button>
			<h3 class="product-details-head"> Product Details: <span class="asterisk"></span> </h3>
			<p class="product-details">
				<?php 
				echo $row['Pro_desc'];
				#desc
				?>
				
			</p>
		</div>
	</div>
</div>
	<div class="container-fluid">
		<div class="container">
		<h3 class="long-desc-head">Preview</h3>
		<p class="long-desc">
			
			<?php 
			#details
				echo $row['Pro_details'];
			?>
		</p>

</div> 
</body>
</html> 
