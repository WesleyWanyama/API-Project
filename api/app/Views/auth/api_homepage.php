<?php $title = 'API User';?>
<?php include ('api_header.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6b18a8acf7.js" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>
	<!-- ABOVE THE FOLD -->
    <section id="hero">
    <div class="hero-container">
      <h1>Welcome to the API Home Page</h1>
      <a href="#" class="btn-get-started btn-danger scrollto">Logout</a>
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
  background: url("/assets/css/apihomepage.jpg") top center;
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
</html>b