<?php 
 include './assets/partials/_head.php';
 include './assets/styles/index.php';
 include './assets/user-partials/_registerModal.php';
?>
  <title>Home</title>
  
                     <?php if (isset($_GET['error'])) { ?>
                              <div class="container">
                              <div x-transition.leave.duration.800ms x-data="{show : true}" x-show="show" x-init="setTimeout(()=> show = false, 3000)" class="alert alert-danger alert-dismissible fade show position-absolute top-1 end-0 mx-3 mt-5" role="alert">
                              <i class="bi bi-info-circle"><span>&nbsp;<?php echo $_GET['error']; ?> </span> </i>  
                               </div>
                              </div>
                          <?php } ?>

                          <?php if (isset($_GET['success'])) { ?>
                              <div class="container">
                                  <div x-transition.leave.duration.800ms x-data="{show : true}" x-show="show" x-init="setTimeout(()=> show = false, 3000)"class="alert alert-success alert-dismissible fade show position-absolute top-1 end-0 mx-3 mt-5" role="alert"> 
                                  <i class="bi bi-info-circle"><span>&nbsp;<?php echo $_GET['success']; ?> </span> </i>  
                                  </div>
                              </div>
                    <?php } ?>
<section id="home">
    <div class="parallax">
          <nav class="navbar navbar-expand-sm bg-light fixed-top">
            <br><br>
                  <div class="container-fluid">
                    <div class="container fixed-top h5">
                        <div class="row my-1">
                              <div class="col" align="start">
                              <img src="./assets/image/logo.png" alt="Logo" style="width:50px;" class="rounded-pill mt-1"> 
                              </div>
                              <div class="col-auto col-sm-0 col-md-5 mt-2 h3" align="center">
                              <a href="#" class="navlink mx-1 text-decoration-none">
                                <!-- <i class="bi bi-person-vcard "></i>  -->
                                  Home
                                </a>
                              <a href="#about" class="navlink mx-1 text-decoration-none">
                                <!-- <i class="bi bi-person-vcard "></i>  -->
                                  About
                                </a>
                                <a href="products.php" class="navlink mx-1 text-decoration-none">
                                <!-- <i class="bi bi-person-vcard "></i>  -->
                                  Products
                                </a>
                              </div>
                              <div class="col mt-2 h3" align="end">
                              <a href="#" class="navlink mx-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModal"> 
                                  <i class="bi bi-box-arrow-in-right "></i>
                                  Login
                              </a>
                              </div>
                        </div>
                      </div>
                  </div>
              </nav>
            <br>
          <div class="container mt-5">
            <br>
              <div class="row">
                  <div class="col-4">
                      <!-- Sample Dashboard in index page or landing page -->
                  </div>
                  <div class="col-8 bg-light mt-5 px-4 py-4" style="--bs-bg-opacity: .6;" align="center">
                     <h4>Sample Admin Dashboard</h4>
                     <label>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequuntur quia nisi quod aut 
                      itaque iste corrupti, laborum, voluptatum recusandae cumque atque officia sunt numquam odit temporibus est, veritatis totam eveniet
                       officiis magnam dolore? Sed facilis facere, aliquid molestiae nisi saepe optio quidem! Quos aliquam repudiandae quidem! Quo rerum dolore nemo!
                      </label>
                  </div>
              </div>
          </div>
      </div>
</section>

<section id="about">
    <div class="container-fluid bg-light my-5 py-5" align="center">
             <div class="container text-center">
                  <div>
                      <h1>About Us</h1>
                      <h4>Wanna know were it all started?</h4>
                      <label>
                          Lorem ipsum dolor sit amet consecteturadipisicing elit. Perferendis soluta voluptas eaque, numquam veritatis aperiam expedita deleniti, nesciunt cum alias velit. Cupiditate commodi
                          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus cum nisi ea optio unde aliquam quia reprehenderit atque eum tenetur! 
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed placeat debitis corporis voluptates modi quibusdam quidem voluptatibus illum, maiores sequi.
                      </label>
                  </div>
             </div>
    </div>
</section>
<?php include './assets/partials/_footer.php'; ?>
<?php include './assets/partials/_loginModal.php'; ?>
<?php include './assets/scripts/admin.php' ?>
<?php include './assets/partials/_foot.php'; ?>
