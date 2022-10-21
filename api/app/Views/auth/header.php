<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo($title); ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<style>
		#header {
  transition: all 0.5s;
  z-index: 997;
  padding: 20px 0;
}

#header .logo {
  font-size: 30px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 600;
  letter-spacing: 1px;
  text-transform: uppercase;
}

#header .logo a {
  color: #fff;
}

#header .logo img {
  max-height: 40px;
}

#header.header-scrolled, #header.header-inner-pages {
  background: rgba(0, 0, 0, 0.9);
  padding: 12px 0;
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/**
* Desktop Navigation 
*/
.navbar {
  padding: 0;
}

.navbar ul {
  margin: 0;
  padding: 0;
  display: flex;
  list-style: none;
  align-items: center;
}

.navbar li {
  position: relative;
}

.navbar > ul > li {
  white-space: nowrap;
  padding: 10px 0 10px 24px;
}

.navbar a, .navbar a:focus {
  text-decoration: none;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-family: "Poppins", sans-serif;
  color: #fff;
  font-size: 15px;
  padding: 0 4px;
  white-space: nowrap;
  transition: 0.3s;
  letter-spacing: 0.4px;
  position: relative;
}

.navbar a i, .navbar a:focus i {
  font-size: 12px;
  line-height: 0;
  margin-left: 5px;
}

.navbar > ul > li > a:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 2px;
  bottom: -6px;
  left: 0;
  background-color: #e43c5c;
  visibility: hidden;
  transform: scaleX(0);
  transition: all 0.3s ease-in-out 0s;
}

.navbar a:hover:before, .navbar li:hover > a:before, .navbar .active:before {
  visibility: visible;
  transform: scaleX(1);
}

.navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
  color: #fff;
}

.navbar .dropdown ul {
  display: block;
  position: absolute;
  left: 24px;
  top: calc(100% + 30px);
  margin: 0;
  padding: 10px 0;
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: 0.3s;
}

.navbar .dropdown ul li {
  min-width: 200px;
}

.navbar .dropdown ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  color: #493c3e;
}

.navbar .dropdown ul a i {
  font-size: 12px;
}

.navbar .dropdown ul a:hover, .navbar .dropdown ul .active:hover, .navbar .dropdown ul li:hover > a {
  color: #e43c5c;
}

.navbar .dropdown:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.navbar .dropdown .dropdown ul {
  top: 0;
  left: calc(100% - 30px);
  visibility: hidden;
}

.navbar .dropdown .dropdown:hover > ul {
  opacity: 1;
  top: 0;
  left: 50%;
  visibility: visible;
}

@media (max-width: 1366px) {
  .navbar .dropdown .dropdown ul {
    left: -90%;
  }
  .navbar .dropdown .dropdown:hover > ul {
    left: -100%;
  }
}
	</style>
	<header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php site_url('Auth/homePage');?>">Wesdrip</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="<?php site_url('Auth/homePage');?>">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#team">Success Indicator</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('Products/index'); ?>">Products</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('Wallet/main'); ?>">My Wallet</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('Purchases/checkout'); ?>">View Cart</a></li>
          <li><a class="nav-link scrollto" href="<?= site_url('Purchases/user'); ?>">Purchase History</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

</body>
</html>
