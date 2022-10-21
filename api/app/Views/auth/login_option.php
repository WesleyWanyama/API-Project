<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b18a8acf7.js" crossorigin="anonymous"></script>
	<title>Login</title>
</head>
<body>
	<nav class="navbar fixed-top navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Wesdrip</a>
    <a href="<?= site_url('Auth/register'); ?>" class="btn-get-started btn-danger scrollto" style="margin-left: 900px;">User Registration</a>
    <a href="<?= site_url('Auth/registerAPI'); ?>" class="btn-get-started btn-danger scrollto" style="margin-right: 50px;">API Registration</a>
  </div>
</nav>
<section id="hero">
    <div class="hero-container">
      <h1>Welcome to wesdrip</h1>
      <h2>Select your login option</h2>
      <a href="<?= site_url('auth/login'); ?>" class="btn-get-started btn-danger scrollto">User Login</a>
      <a href="<?= site_url('auth/adminLogin'); ?>" class="btn-get-started btn-danger scrollto"style="margin-top: 12px;">Admin Login</a>
      
    </div>
  </section>


</body>
<style type="text/css">
	body {
  font-family: "Open Sans", sans-serif;
  color: #444444;
}
#hero {
  width: 100%;
  height: 100vh;
  background: url("https://images.unsplash.com/photo-1517502166878-35c93a0072f0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8Y2xvdGhlc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60") top center;
  background-size: cover;
  position: relative;
}
#hero:before {
  content: "";
  background: rgba(0, 0, 0, 0.6);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}
#hero .hero-container {
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  text-align: center;
  padding: 0 15px;
}
#hero h1 {
  margin: 0 0 10px 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  text-transform: uppercase;
  color: #fff;
}
#hero h2 {
  color: #eee;
  margin-bottom: 40px;
  font-size: 24px;
}
.btn-get-started {
  font-family: "Poppins", sans-serif;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 13px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 30px 9px 30px;
  border-radius: 50px;
  transition: 0.5s;
  border: 2px solid #fff;
  color: #fff;
}

#hero .btn-get-started {
  font-family: "Poppins", sans-serif;
  text-transform: uppercase;
  font-weight: 400;
  font-size: 13px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 30px 9px 30px;
  border-radius: 50px;
  transition: 0.5s;
  border: 2px solid #fff;
  color: #fff;
}
.btn-get-started:hover {
  background: #e43c5c;
  border: 2px solid #e43c5c;
}

#hero .btn-get-started:hover {
  background: #e43c5c;
  border: 2px solid #e43c5c;
}
@media (min-width: 1024px) {
  #hero {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #hero h3 {
    font-size: 22px;
  }
  #hero h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #hero h2 {
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 30px;
  }
}

@media (max-height: 500px) {
  #hero {
    height: 150vh;
  }
}
section {
  padding: 60px 0;
  overflow: hidden;
}
</style>
</html>