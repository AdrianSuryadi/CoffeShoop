<?php
 include 'component/connection.php';
?>
<style type="text/css">
	<?php include'style.css'; 
	?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
	<title>My caffe - about us page</title>
</head>
<body>
	<?php include 'component/header.php';?>
    <div class="main">
        <div class="banner">
            <h1>about us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>/About us</span>
        </div>
        <div class="about-category">
            <div class="box">
                <img src="image/3.webp" alt="">
                <div class="detail">
                    <span>coffe</span>
                    <h1>lemon green</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="image/about.png" alt="">
                <div class="detail">
                    <span>coffe</span>
                    <h1>alpukat</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
                <div class="box">
                <img src="image/2.webp" alt="">
                <div class="detail">
                    <span>coffe</span>
                    <h1>alpukat</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                <img src="image/1.webp" alt="">
                <div class="detail">
                    <span>coffe</span>
                    <h1>alpukat</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <section class="services">
            <div class="title">
                <img src="image/download.png" class="logo">
                <h1>why choose us</h1>
                <p>follow</p>
            </div>
            
	     <div class="box-container">
		  <div class="box">
			<img src="image/icon2.png" >
			<div class="detail">
				<h3>great savings</h3>
				<p>save big every order</p>
			 </div>
		   </div>
		 <div class="box">
			<img src="image/icon1.png" >
			<div class="detail">
				<h3>24*7 support</h3>
				<p>one-on-support</p>
			</div>
		 </div>
		 <div class="box">
			<img src="image/icon0.png">
			<div class="detail">
				<h3>gift voucher</h3>
				<p>voucher on every festivals</p>
			</div>
		 </div>
		 <div class="box">
			<img src="image/icon.png" >
			<div class="detail">
				<h3>worldwide delivery</h3>
				<p>dropship worldwide</p>
			 </div>
		 </div>
        </div>
        
<div class="about">
    <div class="row">
        <div class="img-box">
            <img src="image/3.png" alt="">
        </div>
        <div class="detail">
            <h1>visit our beautiful showroom!!!!!</h1>
            <p></p>
            <a href="view_products.php" class="btn">shop now</a>
        </div>
    </div>

<div class="testimonial-container">
    <div class="title">
        <img src="image/download.png" class="logo">
        <h1>what people say about us</h1>
        <p>mabar</p>
        
        <div class="container">
            <div class="testimonial-item active">
                <img src="image/02.jpg" alt="">
                <h1>miftah</h1>
                <p>bduvvyvvhvhvghvgvgv</p>
            </div>
            <div class="testimonial-item active">
                <img src="image/02.jpg" alt="">
                <h1>raihan</h1>
                <p>bduvvyvvhvhvghvgvgv</p>
            </div>
            <div class="testimonial-item active">
                <img src="image/03.jpg" alt="">
                <h1>rifa</h1>
                <p>bduvvyvvhvhvghvgvgv</p>
            </div>
            <div class="testimonial-item active">
                <img src="image/04.png" alt="">
                <h1>adrian</h1>
                <p>bduvvyvvhvhvghvgvgv</p>
            </div>
            <div class="left-arrow" onclick="nextSlide()"><i class='bx bxs-left-arrow-alt'></i></div>
            <div class="right-arrow" onclick="prevSlide()"><i class='bx bxs-right-arrow-alt'></i></div>
    </div>
</div>
</div>
</div>
</section>
	<?php include 'component/footer.php';?>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="script.js"> </script>
	<?php include'component/alert.php'; ?>

</body>
</html>