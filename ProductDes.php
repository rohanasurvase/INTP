<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Don't do this ..ICon ka bolta hu wait okay  -->
<!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
<title>Nvbar</title>
</head>
<body>
	<?php
		include('db.php');
		$row='';
		$sql = "SELECT * FROM product";
		// $result = mysqli_query($conn, $sql);
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
	<div class="row">
		<!-- Image -->
		<div class="col-2">
			<img src ="./assets/Book.png" class="Book">
		</div>
		<!-- Description-->
		<div class="col-2">
			<h1>  
					<!-- Name -->
			</h1>
			<h3>
				$10
				<!-- Cost -->
			</h3>
			<p>Inclusive of all tax</p>
			<input type="number" value="1">
			<a href="" class="button"> Add to cart </a>
			<h3> Product Details <span class="asterisk"></span> </h3>
			<p> 

				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


				<!-- <?php 
				echo $row['Pro_desc'];
				#desc
				?>-->
				
			</p>
		</div>
	</div>
</div>
	<div class="container-fluid">
		<h3>Preview</h3>
		<p>
			It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
			<!-- <?php 
			#details
				echo $row['Pro_desc'];
			?>-->
		</p>

</div> 
</body>
</html> 
