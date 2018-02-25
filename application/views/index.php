<!DOCTYPE html>
<html lang="en">
	<head>
      <!-- 
    More Templates Visit ==> ProBootstrap.com
    Free Template by ProBootstrap.com under the License Creative Commons 3.0 ==> (probootstrap.com/license)

    IMPORTANT: You can do whatever you want with this template but you need to keep the footer link back to ProBootstrap.com
    -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Places &mdash; Free HTML5 Bootstrap 4 Theme by ProBootstrap.com</title>
		<meta name="description" content="Free Bootstrap 4 Theme by ProBootstrap.com">
		<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">

		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    
    <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/select2.css">
    

    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body>
  

    <nav class="navbar navbar-expand-lg navbar-dark probootstrap_navbar" id="probootstrap-navbar">
      <div class="container">
        <a class="navbar-brand" href="/">Places</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link"href="<?php echo base_url("login") ?>">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= base_url('signup') ?>">Sign Up</a></li>
            <li class="nav-item"><a class="nav-link" href="travel.html">Travel With Us</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    

    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5"  id="section-home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Explore The World With Ease</h2>
            <p class="lead mb-5 probootstrap-animate">
              

            </p>
            <!--   <a href="onepage.html" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">See OnePage Verion</a>  -->
            </p>
          </div> 
          <div class="col-md probootstrap-animate">
            <form action="<?php echo base_url('Hasilpencarian') ?>" method="get" class="probootstrap-form">
              <div class="form-group">
                <div class="row mb-3">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single">From</label>

                      <label for="id_label_single" style="width: 100%;">
                        <select class="js-example-basic-single js-states form-control" id="id_label_single" style="width: 100%;" name="rute_from">
                          <?php foreach ($rute as $data) { ?>
          <option value="<?php echo $data->rute_from ?>"><?php echo $data->rute_from ?></option>
          <?php } ?>
                        </select>
                      </label>


                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="id_label_single2">To</label>
                      <div class="probootstrap_select-wrap">
                        <label for="id_label_single2" style="width: 100%;">
                        <select class="js-example-basic-single js-states form-control" id="id_label_single2" style="width: 100%;" name="rute_to">
                              <?php foreach ($rute_to as $data) { ?>
          <option value="<?php echo $data->rute_to ?>"><?php echo $data->rute_to ?></option>
          <?php } ?>
                        </select>
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END row -->
                <div class="row mb-3">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="probootstrap-date-departure">Departure</label>
                      <div class="probootstrap-date-wrap">
                        <span class="icon ion-calendar"></span> 
                        <input type="text" name="depart_at" id="probootstrap-date-departure" class="form-control" placeholder="">
                      </div>
                    </div>
                  </div>
                </div> <!-- <div class="row mb-3">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="penumpang">Dewasa</label>
                      <div class="probootstrap-date-wrap">
                          <select class="js-example-basic-single js-states form-control" id="id_label_single4" style="width: 100%;" name="penumpang">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="penumpang">Anak</label>
                      <div class="probootstrap-date-wrap">
                          <select class="js-example-basic-single js-states form-control" id="id_label_single3" style="width: 100%;" name="penumpanganak">
                          <option value="0">0</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select>
                        
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- END row -->
                <div class="row">
                <div class="col-md">
                    <input type="submit" value="Submit" class="btn btn-primary btn-block">
                </div> 
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    
    </section>
    <!-- END section -->
    

    <section class="probootstrap_section" id="section-feature-testimonial">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-12 text-center mb-5 probootstrap-animate">
           
    <section class="probootstrap_section bg-light">
      <div class="container">
        <div class="row text-center mb-5 probootstrap-animate">
          <div class="col-md-12">
            <h2 class="display-4 border-bottom probootstrap-section-heading">More Services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/img_1.jpg)">
              </div>
              <div class="media-body">
                <h5 class="mb-3">01. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/img_2.jpg)">
              </div>
              <div class="media-body">
                <h5 class="mb-3">02. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

          </div>
          <div class="col-md-6">
            
            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/img_4.jpg)">
              </div>
              <div class="media-body">
                <h5 class="mb-3">03. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

            <div class="media probootstrap-media d-flex align-items-stretch mb-4 probootstrap-animate">
              <div class="probootstrap-media-image" style="background-image: url(assets/images/img_5.jpg)">
              </div>
              <div class="media-body">
                <h5 class="mb-3">04. Service Title Here</h5>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    

    <footer class="probootstrap_section probootstrap-border-top">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="https://free-template.co" target="_blank">Home</a></li>
              <li><a href="https://free-template.co" target="_blank">About</a></li>
              <li><a href="https://free-template.co" target="_blank">Services</a></li>
              <li><a href="https://free-template.co" target="_blank">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="https://free-template.co" target="_blank">Home</a></li>
              <li><a href="https://free-template.co" target="_blank">About</a></li>
              <li><a href="https://free-template.co" target="_blank">Services</a></li>
              <li><a href="https://free-template.co" target="_blank">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="https://free-template.co" target="_blank">Home</a></li>
              <li><a href="https://free-template.co" target="_blank">About</a></li>
              <li><a href="https://free-template.co" target="_blank">Services</a></li>
              <li><a href="https://free-template.co" target="_blank">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h3 class="probootstrap_font-18 mb-3">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="https://free-template.co" target="_blank">Home</a></li>
              <li><a href="https://free-template.co" target="_blank">About</a></li>
              <li><a href="https://free-template.co" target="_blank">Services</a></li>
              <li><a href="https://free-template.co" target="_blank">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center">
            <p class="probootstrap_font-14">&copy; 2017. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://probootstrap.com/" target="_blank">ProBootstrap</a><small> (Don't remove credit link on this footer. See <a href="https://probootstrap.com/license/">license</a>)</small></p>
            <p class="probootstrap_font-14">Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></p>
          </div>
        </div>
      </div>
    </footer>

    
    <script src="assets/js/jquery.min.js"></script>
    
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
      $('.datepicker').datepicker({
          format: 'mm-dd-yyyy'
      });
    </script>
	</body>
</html>