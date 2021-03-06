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
          <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link"href="<?php echo base_url("login") ?>">Login</a></li>
          <li class="nav-item"><a class="nav-link" href="<?= base_url('signup') ?>">SIgn up</a></li>
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
          <h2 class="heading mb-3 display-4 font-light probootstrap-animate">Hasil Pencarian</h2>
          <p class="lead mb-5 probootstrap-animate">
          </p>
          
                <div class="t_hasil">
                 <table class="table table-striped table-condensed">
                  <thead>
                    <tr class="text-center" vertical-align="text-center">
                      <th>Nama pesawat</th>
                      <th>Berangkat</th>
                      <th>Datang</th>
                      <th>Sisa Kursi</th>
                      <th>Harga</th>
                     
                    </tr>
                  </thead>   
                  <tbody>
                   <?php $alg = $sisa->lol; ?>
                   <?php foreach ($rute as $data) { 
                    $kursi = ($data->seat_qty - $alg) - $this->input->get('penumpang');
                    if ($kursi < 0) {

                    } 
                      else if($kursi >= 0) {
                        ?>
                        <tr vertical-align="middle">
                          <td><?php echo $data->description; ?></td> 
                          <td><?php echo $data->depart_at; ?></td> 
                          <td><?php echo $data->arrival; ?></td> 
                          <td><?php echo $data->seat_qty; ?></td> 
                          <td><?php echo $data->price; ?></td> 
                          <td class="text-center"><button type="submit" class="btn btn-primary btn-sm">Pilih</button></td>
                        </tr>
                        <?php } } ?>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
   </section>
    <!-- END section -->
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
</body>
</html>