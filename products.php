<?php
 include './assets/partials/_head.php';
 include './assets/styles/index.php';
?>
<style>
* {
  box-sizing: border-box;
}
img{
  max-width: 100%;
}
body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}
/* Add padding BETWEEN each column */
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  display: none; /* Hide all elements by default */
}
.column p{
  width: auto;
  height: 180px;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
</style>
<br>
<nav class="navbar navbar-expand-sm bg-light fixed-top">
            <br><br>
                  <div class="container-fluid">
                    <div class="container fixed-top h5">
                        <div class="row my-1">
                              <div class="col" align="start">
                              <img src="./assets/image/logo.png" alt="Logo" style="width:50px;" class="rounded-pill mt-1"> 
                              </div>
                              <div class="col-auto col-sm-0 col-md-5 mt-2 h3" align="center">
                              <a href="index.php" class="navlink mx-1 text-decoration-none">
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
              
<!-- MAIN (Center website) -->
<div class="main mt-5">


<h2 class="mb-3">Products</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('Grooming')"> Grooming</button>
  <button class="btn" onclick="filterSelection('Accessories')"> Accessories</button>
  <button class="btn" onclick="filterSelection('Essentials')"> Essentials</button>
  <button class="btn" onclick="filterSelection('Food')"> Food   </button>
</div>
<br>
<!-- Portfolio Gallery Grid -->
<section class="gallery min-vh-100">
<div class="row">
     <!--  ----------------------------------------------------------- Grooming ---------------------------------------------------------------  -->
  <div class="column Grooming">
    <div class="content">
      <img src="./assets/image/Shampoo1.jpg" class="gallery-item" alt="Grooming" style="width:100%" height="200px">
      <hr>
      <h5>Shampoo</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>to treat bacterial infections, skin rashes, and dandruff in pets. mild to prevent the loss of natural oils. It still gets the dirt out while protecting his skin and coat.</p>
    </div>
  </div>
  <div class="column Grooming">
    <div class="content">
    <img src="./assets/image/tootbursh.jfif" class="gallery-item" alt="Toothbrush" style="width:100%" height="200px">
    <hr>
    <h5>Toothbrush</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
    <p>Pick a peaceful time to brush your pet's teeth, a toothbrush with slanted handles that you can use for your pet with ease.</p>
    </div>
  </div>
  <div class="column Grooming">
    <div class="content">
    <img src="./assets/image/Cleaner1.jpg" class="gallery-item" alt="Paw cleaner" style="width:100%" height="200px">
    <hr>
    <h5>Paw cleaner</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Use this paw cleanser to make cleaning easier and faster than battling with cloths and buckets of water.</p>
    </div>
  </div>
  <div class="column Grooming">
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
  <div class="column Accessories">
    <div class="content">
      <img src="./assets/image/Cage1.jpg" class="gallery-item" alt="Travel cage" style="width:100%" height="200px">
      <hr>
      <h5>Travel cage</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>a well-built, easily cleanable cage with a carrying handle at the top for pet travel convenience.</p>
    </div>
  </div>
  <div class="column Accessories">
    <div class="content">
    <img src="./assets/image/Harness1.jpg" class="gallery-item" alt="Harness" style="width:100%" height="200px">
    <hr>
    <h5>Harness</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>A pet harness is a piece of gear made of webbing straps that loop almost completely around an animal's chest and fasten together using side-release buckles.</p>
    </div>
  </div>
  <div class="column Accessories">
    <div class="content">
    <img src="./assets/image/Toys.jpg" class="gallery-item" alt="Toys" style="width:100%" height="200px">
    <hr>
    <h5>Toys</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>A toy can assist your pet to avoid being bored and stop the emergence of certain behavioral behaviors.</p>
    </div>
  </div>
  <div class="column Accessories">
    <div class="content">
    <img src="./assets/image/bed1.jpg" class="gallery-item" alt="Bed" style="width:100%" height="200px">
    <hr>
    <h5>Bed</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Products that you can use to make your pets comfortable with the surroundings.</p>
    </div>
  </div>
  <div class="column Accessories">
    <div class="content">
    <img src="./assets/image/bed2.jpg" class="gallery-item" alt="Bed" style="width:100%" height="200px">
    <hr>
    <h5>Bed</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Products that you can use to make your pets comfortable with the surroundings.</p>
    </div>
  </div>
  <div class="column Accessories">
    <div class="content">
    <img src="./assets/image/bed3.jpg" class="gallery-item" alt="Bed" style="width:100%" height="200px">
    <hr>
    <h5>Bed</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Products that you can use to make your pets comfortable with the surroundings.</p>
    </div>
  </div>
  <div class="column Accessories">
    <div class="content">
    <img src="./assets/image/clothes1.jpg" class="gallery-item" alt="Pet clothes" style="width:100%" height="200px">
    <hr>
    <h5>Pet clothes</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Pets can wear clothes made specifically for them. Most of the pet clothing available now is designed for little dogs, class="gallery-item" although certain products are also available for larger dogs and even cats.</p>
    </div>
  </div>
  <div class="column Accessories">
    <div class="content">
    <img src="./assets/image/clothes2.jpg" class="gallery-item" alt="Pet clothes" style="width:100%" height="200px">
    <hr>
    <h5>Pet clothes</h5>
    <span class="badge bg-info">₱100</span>
    <hr>
      <p>Pets can wear clothes made specifically for them. Most of the pet clothing available now is designed for little dogs, class="gallery-item" although certain products are also available for larger dogs and even cats.</p>
    </div>
  </div>
  <div class="column Accessories">
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
  <div class="column Essentials">
    <div class="content">
      <img src="./assets/image/vitamins1.jpg" class="gallery-item" alt="Pet vitamins" style="width:100%" height="200px">
      <hr>
      <h5>Pet vitamins</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>LVitamins benefit an animal by assisting in the regulation of bodily processes, maintaining bodily h class="gallery-item"ealth, and fostering resistance to illnesses. A vitamin shortage can cause illness or even death.</p>
    </div>
  </div>
  <div class="column Essentials">
    <div class="content">
      <img src="./assets/image/vitamins2.jpg" class="gallery-item" alt="Pet vitamins" style="width:100%" height="200px">
      <hr>
      <h5>Pet vitamins</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>LVitamins benefit an animal by assisting in the regulation of bodily processes, maintaining bodily h class="gallery-item"ealth, and fostering resistance to illnesses. A vitamin shortage can cause illness or even death.</p>
    </div>
  </div>
  <div class="column Essentials">
    <div class="content">
      <img src="./assets/image/vitamins3.jpg" class="gallery-item" alt="Pet vitamins" style="width:100%" height="200px">
      <hr>
      <h5>Pet vitamins</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>LVitamins benefit an animal by assisting in the regulation of bodily processes, maintaining bodily h class="gallery-item"ealth, and fostering resistance to illnesses. A vitamin shortage can cause illness or even death.</p>
    </div>
  </div>
  <div class="column Essentials">
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
  <div class="column Food">
    <div class="content">
      <img src="./assets/image/dogfood1.jpg" class="gallery-item" alt="Dog food" style="width:100%" height="200px">
      <hr>
      <h5>Dog food</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>composed of meats, meat byproducts, cereals, grains, vitamins, and minerals to provide your dog with the proper nutrients and balance.</p>
    </div>
  </div>
  <div class="column Food">
    <div class="content">
      <img src="./assets/image/dogfood2.jpg" class="gallery-item" alt="Cat food" style="width:100%" height="200px">
      <hr>
      <h5>Dog food</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>composed of meats, meat byproducts, cereals, grains, vitamins, and minerals to provide your dog with the proper nutrients and balance.</p>
    </div>
  </div>
  <div class="column Food">
    <div class="content">
      <img src="./assets/image/catfood.jpg" class="gallery-item" alt="Cat food" style="width:100%" height="200px">
      <hr>
      <h5>Cat food</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>Our grain-free, organic, and nutritious cat chow is packed with the nutrients your cat needs.</p>
    </div>
  </div>
  <div class="column Food">
    <div class="content">
      <img src="./assets/image/catfood2.jpg" class="gallery-item" alt="Cat food" style="width:100%" height="200px">
      <hr>
      <h5>Cat food</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>Our grain-free, organic, and nutritious cat chow is packed with the nutrients your cat needs.</p>
    </div>
  </div>
  <div class="column Food">
    <div class="content">
      <img src="./assets/image/birdfood.jpg" class="gallery-item" alt="Bird food" style="width:100%" height="200px">
      <hr>
      <h5>Bird food</h5>
      <span class="badge bg-info">₱100</span>
      <hr>
      <p>variety of seeds, nuts, dried fruits, and vitamins are all present in this bird seed.</p>
    </div>
  </div>
  <div class="column Food">
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
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

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