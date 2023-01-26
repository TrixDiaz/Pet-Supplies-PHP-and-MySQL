<?php
 include './assets/partials/_head.php';
 include './assets/styles/index.php';
 include './assets/styles/product-style.php';
?>
<nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                      <a class="navbar-brand mx-5" href="#">  <img src="./assets/image/logo.png" alt="Logo" style="width:50px;" class="rounded-pill"> </a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Product
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="products.php?category=all">All</a></li>
                              <li><a class="dropdown-item" href="grooming.php?category=grooming">Grooming</a></li>
                              <li><a class="dropdown-item" href="accessories.php?category=accessories">Accessories</a></li>
                              <li><a class="dropdown-item" href="essential.php?category=essential">Essentials</a></li>
                              <li><a class="dropdown-item" href="food.php?category=food">Foods</a></li>
                            </ul>
                          </li>
                        </ul>
                        <div class="d-flex">
                            <div class="col mt-2 h5" align="end">
                                  <a href="#" class="navlink mx-3 text-decoration-none" data-bs-toggle="modal" data-bs-target="#myModal"> 
                                      <i class="bi bi-box-arrow-in-right "></i>
                                      Login
                                  </a>
                                  </div>
                            </div>
                      </div>
                    </div>
                </nav>
              
<!-- MAIN (Center website) -->
<div class="main mt-5">


<h2 class="mb-3">All Products</h2>

<!-- Portfolio Gallery Grid -->
<section class="gallery min-vh-100">
<div class="row">
     <!--  ----------------------------------------------------------- Grooming ---------------------------------------------------------------  -->
  <div class="column mt-3 Grooming">
    <div class="content">
      <img src="./assets/image/Shampoo1.jpg" class="gallery-item" alt="Grooming" style="width:100%" height="200px">
      <hr>
      <h5>Shampoo</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>to treat bacterial infections, skin rashes, and dandruff in pets. mild to prevent the loss of natural oils. It still gets the dirt out while protecting his skin and coat.</p>
    </div>
  </div>
  <div class="column mt-3 Grooming">
    <div class="content">
    <img src="./assets/image/tootbursh.jfif" class="gallery-item" alt="Toothbrush" style="width:100%" height="200px">
    <hr>
    <h5>Toothbrush</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
    <p>Pick a peaceful time to brush your pet's teeth, a toothbrush with slanted handles that you can use for your pet with ease.</p>
    </div>
  </div>
  <div class="column mt-3 Grooming">
    <div class="content">
    <img src="./assets/image/Cleaner1.jpg" class="gallery-item" alt="Paw cleaner" style="width:100%" height="200px">
    <hr>
    <h5>Paw cleaner</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Use this paw cleanser to make cleaning easier and faster than battling with cloths and buckets of water.</p>
    </div>
  </div>
  <div class="column mt-3 Grooming">
    <div class="content">
    <img src="./assets/image/Perfume1.jpg" class="gallery-item" alt="Perfume" style="width:100%" height="200px">
    <hr>
    <h5>Perfume</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Regarding our pets, we should use fragrances and scented items with caution. Directly applying strongly fragrant shampoos or sprays to a pet may result in skin responses, nausea, lethargy, or even airway irritation.</p>
    </div>
  </div>
  <!--  ----------------------------------------------------------- Accessories ---------------------------------------------------------------  -->
  <div class="column mt-3 Accessories">
    <div class="content">
      <img src="./assets/image/Cage1.jpg" class="gallery-item" alt="Travel cage" style="width:100%" height="200px">
      <hr>
      <h5>Travel cage</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>a well-built, easily cleanable cage with a carrying handle at the top for pet travel convenience.</p>
    </div>
  </div>
  <div class="column mt-3 Accessories">
    <div class="content">
    <img src="./assets/image/Harness1.jpg" class="gallery-item" alt="Harness" style="width:100%" height="200px">
    <hr>
    <h5>Harness</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>A pet harness is a piece of gear made of webbing straps that loop almost completely around an animal's chest and fasten together using side-release buckles.</p>
    </div>
  </div>
  <div class="column mt-3 Accessories">
    <div class="content">
    <img src="./assets/image/Toys.jpg" class="gallery-item" alt="Toys" style="width:100%" height="200px">
    <hr>
    <h5>Toys</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>A toy can assist your pet to avoid being bored and stop the emergence of certain behavioral behaviors.</p>
    </div>
  </div>
  <div class="column mt-3 Accessories">
    <div class="content">
    <img src="./assets/image/bed1.jpg" class="gallery-item" alt="Bed" style="width:100%" height="200px">
    <hr>
    <h5>Bed</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Products that you can use to make your pets comfortable with the surroundings.</p>
    </div>
  </div>
  <div class="column mt-3 Accessories">
    <div class="content">
    <img src="./assets/image/bed2.jpg" class="gallery-item" alt="Bed" style="width:100%" height="200px">
    <hr>
    <h5>Bed</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Products that you can use to make your pets comfortable with the surroundings.</p>
    </div>
  </div>
  <div class="column mt-3 Accessories">
    <div class="content">
    <img src="./assets/image/bed3.jpg" class="gallery-item" alt="Bed" style="width:100%" height="200px">
    <hr>
    <h5>Bed</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Products that you can use to make your pets comfortable with the surroundings.</p>
    </div>
  </div>
  <div class="column mt-3 Accessories">
    <div class="content">
    <img src="./assets/image/clothes1.jpg" class="gallery-item" alt="Pet clothes" style="width:100%" height="200px">
    <hr>
    <h5>Pet clothes</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Pets can wear clothes made specifically for them. Most of the pet clothing available now is designed for little dogs, class="gallery-item" although certain products are also available for larger dogs and even cats.</p>
    </div>
  </div>
  <div class="column mt-3 Accessories">
    <div class="content">
    <img src="./assets/image/clothes2.jpg" class="gallery-item" alt="Pet clothes" style="width:100%" height="200px">
    <hr>
    <h5>Pet clothes</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Pets can wear clothes made specifically for them. Most of the pet clothing available now is designed for little dogs, class="gallery-item" although certain products are also available for larger dogs and even cats.</p>
    </div>
  </div>
  <div class="column mt-3 Accessories">
    <div class="content">
    <img src="./assets/image/clothes3.jpg" class="gallery-item" alt="Pet clothes" style="width:100%" height="200px">
    <hr>
    <h5>Pet clothes</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Pets can wear clothes made specifically for them. Most of the pet clothing available now is designed for little dogs, class="gallery-item" although certain products are also available for larger dogs and even cats.</p>
    </div>
  </div>
 <!--  ----------------------------------------------------------- Essentials ---------------------------------------------------------------  -->
  <div class="column mt-3 Essentials">
    <div class="content">
      <img src="./assets/image/vitamins1.jpg" class="gallery-item" alt="Pet vitamins" style="width:100%" height="200px">
      <hr>
      <h5>Pet vitamins</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>LVitamins benefit an animal by assisting in the regulation of bodily processes, maintaining bodily h class="gallery-item"ealth, and fostering resistance to illnesses. A vitamin shortage can cause illness or even death.</p>
    </div>
  </div>
  <div class="column mt-3 Essentials">
    <div class="content">
      <img src="./assets/image/vitamins2.jpg" class="gallery-item" alt="Pet vitamins" style="width:100%" height="200px">
      <hr>
      <h5>Pet vitamins</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>LVitamins benefit an animal by assisting in the regulation of bodily processes, maintaining bodily h class="gallery-item"ealth, and fostering resistance to illnesses. A vitamin shortage can cause illness or even death.</p>
    </div>
  </div>
  <div class="column mt-3 Essentials">
    <div class="content">
      <img src="./assets/image/vitamins3.jpg" class="gallery-item" alt="Pet vitamins" style="width:100%" height="200px">
      <hr>
      <h5>Pet vitamins</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>LVitamins benefit an animal by assisting in the regulation of bodily processes, maintaining bodily h class="gallery-item"ealth, and fostering resistance to illnesses. A vitamin shortage can cause illness or even death.</p>
    </div>
  </div>
  <div class="column mt-3 Essentials">
    <div class="content">
    <img src="./assets/image/tea1.jpg" class="gallery-item" alt="Tick and Flea Preventive" style="width:100%" height="200px">
    <hr>
    <h5>Tick and Flea Preventive</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Various products used for controlling flea and/or tick infestations on your pet and preventing infestations within your home make up flea and tick prevention.</p>
    </div>
  </div>
 <!--  ----------------------------------------------------------- Food ---------------------------------------------------------------  -->
  <div class="column mt-3 Food">
    <div class="content">
      <img src="./assets/image/dogfood1.jpg" class="gallery-item" alt="Dog food" style="width:100%" height="200px">
      <hr>
      <h5>Dog food</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>composed of meats, meat byproducts, cereals, grains, vitamins, and minerals to provide your dog with the proper nutrients and balance.</p>
    </div>
  </div>
  <div class="column mt-3 Food">
    <div class="content">
      <img src="./assets/image/dogfood2.jpg" class="gallery-item" alt="Cat food" style="width:100%" height="200px">
      <hr>
      <h5>Dog food</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>composed of meats, meat byproducts, cereals, grains, vitamins, and minerals to provide your dog with the proper nutrients and balance.</p>
    </div>
  </div>
  <div class="column mt-3 Food">
    <div class="content">
      <img src="./assets/image/catfood.jpg" class="gallery-item" alt="Cat food" style="width:100%" height="200px">
      <hr>
      <h5>Cat food</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>Our grain-free, organic, and nutritious cat chow is packed with the nutrients your cat needs.</p>
    </div>
  </div>
  <div class="column mt-3 Food">
    <div class="content">
      <img src="./assets/image/catfood2.jpg" class="gallery-item" alt="Cat food" style="width:100%" height="200px">
      <hr>
      <h5>Cat food</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>Our grain-free, organic, and nutritious cat chow is packed with the nutrients your cat needs.</p>
    </div>
  </div>
  <div class="column mt-3 Food">
    <div class="content">
      <img src="./assets/image/birdfood.jpg" class="gallery-item" alt="Bird food" style="width:100%" height="200px">
      <hr>
      <h5>Bird food</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>variety of seeds, nuts, dried fruits, and vitamins are all present in this bird seed.</p>
    </div>
  </div>
  <div class="column mt-3 Food">
    <div class="content">
      <img src="./assets/image/fishfood.jpg" class="gallery-item" alt="Fish Pellets" style="width:100%" height="200px">
      <hr>
      <h5>Fish Pellets</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>they are a practical and simple method of feeding your fish. for easier handling, more equal intake, and less dust.</p>
    </div>
  </div>
</section>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>
<!-- Modal -->
<div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" align="center">
          <img src="" class="modal-img" alt="modal img" width="70%">
      </div>
    </div>
  </div>
</div>
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


<script>
document.addEventListener("click",function (e){
  if(e.target.classList.contains("gallery-item")){
    const src = e.target.getAttribute("src");
    document.querySelector(".modal-img").src = src;
    const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
    myModal.show();
  }
})
</script>


<?php include './assets/partials/_footer.php'; ?>
<?php include './assets/partials/_loginModal.php'; ?>
<?php include './assets/partials/_foot.php'; ?>