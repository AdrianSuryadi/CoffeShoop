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
	<title>My caffe - contact page</title>
</head>
<body>
<?php include 'component/header.php';?>
    <div class="main">
        <div class="banner">
            <h1>contact  us</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>/ Contact us</span>
        </div>
        <section class="services">
            <div class="title">
                <img src="image/download.png" class="logo">
                <h1>why choose us</h1>
                <p>vcuqofuvuvefvuvbveuvvbfvjh hdvfhvhgvhgvdhgdvhvhvd</p>
            </div>
	<div class="box-container">
		<div class="box">
			<img src="image/icon2.png" alt="">
			<div class="datail">
				<h3>great savings</h3>
				<p>save big every order</p>
			</div>
		</div>
		<div class="box">
			<img src="image/icon1.png" alt="">
			<div class="datail">
				<h3>24*7 support</h3>
				<p>one-on-support</p>
			</div>
		</div>
		<div class="box">
			<img src="image/icon0.png" alt="">
			<div class="datail">
				<h3>gift voucher</h3>
				<p>voucher on every festivals</p>
			</div>
		</div>
		<div class="box">
			<img src="image/icon.png" alt="">
			<div class="datail">
				<h3>worldwide delivery</h3>
				<p>dropship worldwide</p>
			</div>
		</div>
	</div>
</section>
<div class ="form-container">
    <form method="post">
        <div class="title">
            <img src="image/download.png" class="logo" alt="">
            <h1>leave a message</h1>
        </div>
        <div class="input-field">
            <p>your name </p>
            <input type="text" name="name">
        </div>
        <div class="input-field">
            <p>your email </p>
            <input type="email" name="email">
        </div>
        <div class="input-field">
            <p>your number</p>
            <input type="text" name="number">
        </div>
        <div class="input-field">
            <p>your message</p>
            <textarea name="message"></textarea>
        </div>
        <button type="submit" name="submit-btn" class="btn">send message</button>
    </form>
</div>
<div class="addres">
<div class="title">
            <img src="image/download.png" class="logo" alt="">
            <h1>contact detail</h1>
            <p>kalimat</p>
        </div>
        <div class="box-container">
            <div class="box">
                <i class="bx bxs-map-pin"></i>
                <div>
                    <h4>address</h4>
                    <p>Smk alghifari banyuresmi</p>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-phone-call"></i>
                <div>
                    <h4>phone number</h4>
                    <p>083877777777</p>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-map-pin"></i>
                <div>
                    <h4>email</h4>
                    <p>riskyadty4@gmail.com</p>
                </div>
            </div>
        </div>
        </div>
        <?php include 'component/footer.php';?>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="script.js"> </script>
	<?php include'component/alert.php'; ?>

</body>
</html>