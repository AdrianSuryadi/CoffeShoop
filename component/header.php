<header class="header">
  <div class="flex">
    <a href="home.php" class="logo"><img src="image/logo.jpg"></a>
    <nav class="navbar">
      <a href="home.php">home</a>
      <a href="view_products.php">products</a>
      <a href="orders.php">orders</a>
      <a href="about.php">about</a>
      <a href="contact.php">contact us</a>
    </nav>
    <div class="icons">
      <a href="logout.php"><i class='bx bx-chevron-left'></i></a>
      <a href="wishlist.php" class="cart-btn"><i class='bx bxs-heart' ></i><sup>0</sup></a>
      <a href="cart.php" class="cart-btn"><i class='bx bx-cart-download' ></i><sup>0</sup></i>
      <i class='bx bx-list-plus'  id="menu-btn" style="font-size: 2rem;"></i>
    </div>
    <div class="user-box active">
      <p>username : <span><?php //echo $_SESSION['user_name'];?></span></p>
      <p>Email : <span><?php //echo $_SESSION['user_email'];?></span></p>
      <div class="user-btn">
      <a href="login.php" class="btn">login</a>
      <a href="register.php" class="btn">Register</a>
      </div>
      <form method="post">
        <button type="submit" name="logout" class="logout-btn">Log out</button>
      </form>
      </div>
      
    </div>
</header>