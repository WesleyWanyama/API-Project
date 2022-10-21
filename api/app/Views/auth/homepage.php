<?php $title = 'Home';?>
<?php include ('header.php'); ?>
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
      <h1>Improve your look</h1>
      <h2>Get affordable clothes and shoes to style you up</h2>
      <a href="<?= site_url('Products/index'); ?>" class="btn-get-started btn-danger scrollto">Shop Now</a>
    </div>
  </section>
  <!-- BENEFITS SECTION -->
    <section id="about" class="about">
      <div class="container">
        <div class="section-title">
          <h2>Why you should shop with us</h2>
        </div>
        <div class="row content">
          <div class="col-lg-6">
            <p> With wesdrip it's all about satisfying our customers needs and improving customer experience</p>
            <ul>
              <li><i class="ri-check-double-line"></i> High quality shoes</li>
              <li><i class="ri-check-double-line"></i> Retro designs are available</li>
              <li><i class="ri-check-double-line"></i> Get a free bag for every product you buy</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>Do you want to be a full time member of wesdrip and get upto 50% off all products? Register with us if you don't have an account</p>
            <a href="register.html" class="btn-learn-more">Register Now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- SERVICES SECTION -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <h3>We do offer awesome <span>Services</span></h3>
          <p>Take a look at what to expect when you shop with us.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-truck"></i></div>
              <h4 class="title"><a href="">Free and fast delivery</a></h4>
              <p class="description">Get your products within 24 hours at no cost</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-undo"></i></div>
              <h4 class="title"><a href="">Free returns</a></h4>
              <p class="description">Not what you expected? Don't like what you got? With wesdrip you have the ablity to return your product for free and get fully refunded. This is only a week after you buy the product.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-bullseye"></i></div>
              <h4 class="title"><a href="">Quality Customer Service</a></h4>
              <p class="description">We have employees who are always at your service to assist in any enquiries that you may have. Their role is mainly to improve the experience of customers.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-percentage"></i></div>
              <h4 class="title"><a href="">Premium offers</a></h4>
              <p class="description">We offer upto 50% off all products for premium members. Register as a member of wesdrip to get such offers.</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- TRUST INDICATORS -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>BIG NAMES WE'VE WORKED WITH</h2>
          <p>We have partnered and still are in partnership with big companies and some celebrities just to mention a few.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src=/assets/css/lebrons.jpg class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Lebron James</h4>
                <span>Professional Basketball PLayer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="/assets/css/nike.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Nike</h4>
                <span>Footwear Manufacturing Company</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="/assets/css/kd.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Kevin Durant</h4>
                <span>Professional Basketball PLayer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="/assets/css/drake.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Drake</h4>
                <span>Musical Artist</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- CONTACT INFO -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <h3>Contact <span>Us</span></h3>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
               <i class="fas fa-map-marker-alt"></i>                
               <h4>Location:</h4>
                <p>Soledo Springs, South C, Nairobi</p>
              </div>

              <div class="email">
                <i class="fas fa-envelope-open-text"></i>
                <h4>Email:</h4>
                <p>wesdrip@info.com</p>
              </div>

              <div class="phone">
                <i class="fas fa-phone"></i>
                <h4>Call:</h4>
                <p>+254746732016</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
              <div class="text-center"><button type="button" class="btn btn-dark">Send Message</button>
</div>
            </form>

          </div>

        </div>

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
  background: url("/assets/css/homepic.jpg") top center;
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

.section-bg {
  background-color: white;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 13px;
  letter-spacing: 1px;
  font-weight: 700;
  padding: 8px 20px;
  line-height: 1;
  margin: 0;
  background: #fdeff2;
  color: #e43c5c;
  display: inline-block;
  text-transform: uppercase;
  border-radius: 50px;
}
.section-title p {
  margin: 15px auto 0 auto;
  font-weight: 600;
}

@media (min-width: 1024px) {
  .section-title p {
    width: 50%;
  }
}
.about .content ul {
  list-style: none;
  padding: 0;
}
.about .content ul li {
  padding-left: 28px;
  position: relative;
}
.about .content ul li + li {
  margin-top: 10px;
}
.about .content ul i {
  position: absolute;
  left: 0;
  top: 2px;
  font-size: 20px;
  color: #e43c5c;
  line-height: 1;
}

.about .content p:last-child {
  margin-bottom: 0;
}

.about .content .btn-learn-more {
  font-family: "Nunito", sans-serif;
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 12px 32px;
  border-radius: 50px;
  transition: 0.3s;
  line-height: 1;
  color: #e43c5c;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  margin-top: 6px;
  border: 2px solid #e43c5c;
}

.about .content .btn-learn-more:hover {
  background: #e43c5c;
  color: #fff;
  text-decoration: none;
}
.ri-check-double-line:before { content: "\eb79"; }
.services {
  padding-bottom: 30px;
}

.services .icon-box {
  padding: 60px 30px;
  position: relative;
  overflow: hidden;
  background: #fff;
  box-shadow: 2px 0 35px 0 rgba(68, 88, 144, 0.12);
  transition: all 0.3s ease-in-out;
  border-radius: 8px;
  z-index: 1;
  text-align: center;
}

.services .icon-box::before {
  content: '';
  position: absolute;
  background: #fdeff2;
  right: 0;
  left: 0;
  bottom: 0;
  top: 100%;
  transition: all 0.4s;
  z-index: -1;
}

.services .icon-box:hover::before {
  background: #e43c5c;
  top: 0;
  border-radius: 0px;
}

.services .icon {
  margin-bottom: 15px;
}

.services .icon i {
  font-size: 48px;
  line-height: 1;
  color: #e43c5c;
  transition: all 0.3s ease-in-out;
}

.services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .title a {
  color: #111;
  text-decoration: none;
}

.services .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
}

.services .icon-box:hover .title a, .services .icon-box:hover .description {
  color: #fff;
}

.services .icon-box:hover .icon i {
  color: #fff;
}
.team {
  background: #fff;
  padding: 60px 0;
}

.team .member {
  margin-bottom: 20px;
  overflow: hidden;
  text-align: center;
  border-radius: 5px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
}
.team .member .member-info {
  padding: 25px 15px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #493c3e;
}

.team .member .member-info span {
  display: block;
  font-size: 13px;
  font-weight: 400;
  color: #aaaaaa;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #777777;
}
.contact .info {
  width: 100%;
  background: #fff;
}

.contact .info i {
  font-size: 20px;
  color: #e43c5c;
  float: left;
  width: 44px;
  height: 44px;
  background: #fdeff2;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 50px;
  transition: all 0.3s ease-in-out;
}

.contact .info h4 {
  padding: 0 0 0 60px;
  font-size: 22px;
  font-weight: 600;
  margin-bottom: 5px;
  color: #493c3e;
}

.contact .info p {
  padding: 0 0 0 60px;
  margin-bottom: 0;
  font-size: 14px;
  color: #816a6e;
}

.contact .info .email, .contact .info .phone {
  margin-top: 40px;
}

.contact .info .email:hover i, .contact .info .address:hover i, .contact .info .phone:hover i {
  background: #e43c5c;
  color: #fff;
}

.contact .php-email-form {
  width: 100%;
  background: #fff;
}
.bi-geo-alt::before { content: "\f3e8"; }
.bi-envelope::before { content: "\f32f"; }
.bi-phone::before { content: "\f4e7"; }

</style>
</html>
