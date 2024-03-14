<?php
 include 'component/connection.php';
 session_start();
 if (isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
 }else{
    $user_id = '';
 }

 if (isset($_POST['logout'])){
    session_destroy();
    header("location: login.php");
 }
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
	<title>My Caffe - shop page</title>
</head>
<body>
	<?php include 'component/header.php';?>
    <div class="main">
        <div class="banner">
            <h1>shop</h1>
        </div>
        <div class="title2">
            <a href="home.php">home</a><span>/our shop</span>
        </div>
        <section class="products">
            <div class="box-container">
            <?php
            $select_products = $conn->prepare("SELECT * FROM 'products'");
            $select_products->execute();
            if ($select_products->rowCount() > 0){
                while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){

                
            
            ?>
            <form action="" method="post" class="box">
            <img src="img/<?=$fetch_products['img']; ?>" class="img">
            <div class="button">
                <button type="submit" name="add_to_cart"><i class="bx bx-cart"></i></button>
                <button type="submit" name="add_to_whitlist"><i class="bx bx-heart"></i></button>
                <a href="view_page.php?pid=<?php echo $fetch_products['id']; ?>" class="bx bxs-show"></a>
            </div>
            <h3 class="name"><?=$fetch_products['name'];?></h3>
            <input type="hidden" name="products_id" value="<?=$fetch_products['id']; ?>">
            <div class="flex">
                <p class="price">price $<?=$fetch_products['price'];?></p>
                <input type="number" name="qty" required min="1" value="1" max="99" maxlenght="2" class="qty">
                </div>
                <a href="checkout.php?get_id=<?=$fetch_products['id']; ?>" class="btn">Buy now</a>
                </form>
            <?php 
                }
            }else{
                echo '<p class="empty">no products added yet!</p>';
            }
            ?>
            </div>
        </section>
	<?php include 'component/footer.php';?>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
	<script src="script.js"> </script>
	<?php include'component/alert.php'; ?>

</body>
</html>