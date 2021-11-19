<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="shortcut icon" href="Logo 2.png" type="image/x-icon" />
  <script src="jquery.js"></script>
  <script src="script.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" />
  <title>Zapp Fashion</title>
</head>

<body>
  <!-- zayar -->
  <script>
    let UserID = <?php echo $_GET["id"] ?>
  </script>
  <!-- zayar -->
  <div class="header">
    <div class="bg-white py-3 head">
      <img src="LogoSample_ByTailorBrands.png" alt="" class="logo" />
      <div class="titles">
        <span class="name homebtn">HOME</span>
        <span class="name manbtn">MEN</span>
        <span class="name womanbtn">WOMEN</span>
        <span class="name kidbtn">KID</span>
        <input class="form-control me-2 SearchBar border border-3" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-dark search" type="submit">
          <ion-icon name="search-outline" class="Search"></ion-icon>
        </button>
        <button class="btn btn-outline-dark user" type="submit">
          <ion-icon name="person-outline" class="User"></ion-icon>
        </button>
        <button class="btn btn-outline-dark cart" type="submit">
          <ion-icon name="cart-outline" class="Cart"></ion-icon>
        </button>
      </div>
    </div>
    <!--FixedBar Start-->
    <div class="FixedBar">
      <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-secondary ulclass">
        <div class="container">
          <a class="navbar-brand tag" href="#">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav mx-auto">
              <a class="nav-link mx-5 h-atuo fs-4" href="#scrollspyHeading1" id="shirt">
                Shirt
              </a>
              <a class="nav-link mx-5 h-atuo fs-4" href="#scrollspyHeading2" id="pants">
                Pants
              </a>
              <a class="nav-link mx-5 h-atuo fs-4" href="#scrollspyHeading3" id="shoe">
                Shoes
              </a>
            </ul>
          </div>
          <!-- navbar-collapse.// -->
        </div>
        <!-- container-fluid.// -->
      </nav>
    </div>
    <!--FixedBar END-->
  </div>
  <!-- Home Start -->
  <div class="home">

  </div>
  <!--Home End -->
  <div class="Men">
    <div class="feature">
      <h2 class="fs-2 fw-bold fst-italic">Feature</h2>
    </div>
    <div class="slider">
      <div class="container">
        <!--Expanding Card start-->
        <div class="panel active" style="
              background-image: url('men slider 5.jpg');
            ">
          <h3>Explore the World</h3>
        </div>
        <div class="panel" style="
              background-image: url('men slider 4.jpg');
            ">
          <h3>Get Paid</h3>
        </div>
        <div class="panel" style="
              background-image: url('men slider 3.jpg');
            ">
          <h3>Workout</h3>
        </div>
        <div class="panel" style="
              background-image: url('men slider1.jpg');
            ">
          <h3>Be Better</h3>
        </div>
        <div class="panel" style="
              background-image: url('men slider 2.jpg');
            ">
          <h3>Care</h3>
        </div>
      </div>
      <!--Expanding Card End-->
    </div>
    <div class="cards1">
      <!-- Card start-->
      <div class="trending">
        <h2 class="mb-3 fs-2 fw-bold fst-italic">Trending</h2>
      </div>
      <div class="card1" style>
        <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="..." />
        <!--Card1-->
        <div class="card-body">
          <h5 class="card-title">Shoe</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
      <!--Card1-->
      <div class="card1" style>
        <!--Card2-->
        <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Shirt</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
      <!--Card2-->
      <div class="card1" style>
        <!--Card3-->
        <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Pants</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary mx-7">Show Details</a>
        </div>
      </div>
      <!--Card3-->
    </div>
    <!-- Card End-->
    <!-- Nslidercard 1 start-->
    <div class="nslidecard">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading1">Shirts</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators2" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" src="Kid shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title Mshirtprice">$400</h4>
                            <p class="card-text Mshirtname itemtag ">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" src="men shirt 1.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title Mshirtprice">$400</h4>
                            <p class="card-text Mshirtname itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="men shirt 1.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title Mshirtprice">$400</h4>
                            <p class="card-text Mshirtname itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="men shirt 2.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title Mshirtprice">$400</h4>
                            <p class="card-text Mshirtname itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="men shirt 2.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title Mshirtprice">$400</h4>
                            <p class="card-text Mshirtname itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="men shirt 4.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title Mshirtprice">$400</h4>
                            <p class="card-text Mshirtname itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card End-->
    <!-- Nslidecard 2 Start -->
    <div class="nslidecard">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading2">Pants</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators4" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators4" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Pants/Men Pants 1.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Pants/Men Pants 2.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Pants/Men Pants 3.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Pants/Men Pants 4.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Pants/Men Pants 5.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Pants/Men Pants 6.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 2 End -->
    <!-- Parallx Card 3 Start -->
    <div class="nslidecard">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading3">Shoes</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators5" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators5" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators5" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Shoes/Men shoes 1.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Shoes/Men shoes 2.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Shoes/Men shoes 3.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Shoes/Men shoes 4.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Shoes/Men shoes 5.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Shoes/Men shoes 6.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 3 End -->
  </div>
  <!-- Women Start -->
  <div class="Women">
    <div class="feature">
      <h2 class="fs-2 fw-bold fst-italic">Feature</h2>
    </div>
    <div class="slider">
      <div class="container">
        <!--Expanding Card start-->
        <div class="panel active" style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            ">
          <h3>Explore the World</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 1.jpg');
            ">
          <h3>Get Paid</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 2.jpg');
            ">
          <h3>Workout</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 3.jpg');
            ">
          <h3>Be Better</h3>
        </div>
        <div class="panel" style="
              background-image: url('women slider 4.jpg');
            ">
          <h3>Care</h3>
        </div>
      </div>
      <!--Expanding Card End-->
    </div>
    <div class="cards1">
      <!-- Card start-->
      <div class="trending">
        <h2 class="fs-2 fw-bold fst-italic">Trending</h2>
      </div>
      <div class="card1" style>
        <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="..." />
        <!--Card1-->
        <div class="card-body">
          <h5 class="card-title">Shoe</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
      <!--Card1-->
      <div class="card1" style>
        <!--Card2-->
        <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Shirt</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
      <!--Card2-->
      <div class="card1" style>
        <!--Card3-->
        <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Pants</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary mx-7">Show Details</a>
        </div>
      </div>
      <!--Card3-->
    </div>
    <!-- Card End-->
    <!-- Parallx Card start-->
    <div class="nslidecard">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading4">Shirts</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators6" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators6" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators6" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Woman shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Woman shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Woman shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Woman shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Woman shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Woman shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card End-->
    <!-- Parallx Card 2 Start -->
    <div class="nslidecard">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading5">Shirts</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators7" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators7" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 2 End -->
    <!-- Parallx Card 3 Start -->
    <div class="nslidecard">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading6">Shoes</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators8" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators8" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators8" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women shoes.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women shoes.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women shoes.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women shoes.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women shoes.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Women shoes.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 3 End -->
  </div>
  <!-- Kid Start -->
  <div class="Kid">
    <div class="feature">
      <h2 class="fs-2 fw-bold fst-italic">Feature</h2>
    </div>
    <div class="slider">
      <div class="container">
        <!--Expanding Card start-->
        <div class="panel active" style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            ">
          <h3>Explore the World</h3>
        </div>
        <div class="panel" style="
              background-image: url('https://images.unsplash.com/photo-1604156425963-9be03f86a428?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
            ">
          <h3>Get Paid</h3>
        </div>
        <div class="panel" style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            ">
          <h3>Workout</h3>
        </div>
        <div class="panel" style="
              background-image: url('https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
            ">
          <h3>Be Better</h3>
        </div>
        <div class="panel" style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            ">
          <h3>Care</h3>
        </div>
      </div>
      <!--Expanding Card End-->
    </div>
    <div class="cards1">
      <!-- Card start-->
      <div class="trending">
        <h2 class="fs-2 fw-bold fst-italic">Trending</h2>
      </div>
      <div class="card1" style>
        <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="..." />
        <!--Card1-->
        <div class="card-body">
          <h5 class="card-title">Shoe</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
      <!--Card1-->
      <div class="card1" style>
        <!--Card2-->
        <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Shirt</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
      <!--Card2-->
      <div class="card1" style>
        <!--Card3-->
        <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">Pants</h5>
          <p class="card-text">
            Some quick example text to build on the card title and make up the
            bulk of the card's content.
          </p>
          <a href="#" class="btn btn-primary mx-7">Show Details</a>
        </div>
      </div>
      <!--Card3-->
    </div>
    <!-- Card End-->
    <!-- Parallx Card start-->
    <div class="nslidecard">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading7">Shirts</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators9" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators9" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators9" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shirt.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card End-->
    <!-- Parallx Card 2 Start -->
    <div class="nslidecard">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading8">Pants</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators11" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators11" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators11" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid pants.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 2 End -->
    <!-- Parallx Card 3 Start -->
    <div class="nslidecard">
      <section class="pt-5 pb-5">
        <div class="container">
          <div class="row">
            <div class="col-6" data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
              <h3 class="mb-3 fs-2 fw-bold fst-italic" id="scrollspyHeading9">Shoes</h3>
            </div>
            <div class="col-6 text-right d-flex justify-content-end">
              <div class="p-2">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators12" role="button" data-bs-slide="prev">
                  <i class="fa fa-arrow-left"></i>
                </a>
              </div>
              <div class="p-2">
                <a class="btn btn-primary mb-3" href="#carouselExampleIndicators12" role="button" data-bs-slide="next">
                  <i class="fa fa-arrow-right"></i>
                </a>
              </div>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators12" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shoe.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shoe.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shoe.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shoe.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shoe.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid" alt="100%x280" src="Kid shoe.jpg" />
                          <div class="card-body justify-content-center
                              d-flex
                              flex-column">
                            <h4 class="card-title">$400</h4>
                            <p class="card-text itemtag">Shirt</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- Parallx Card 3 End -->
  </div>

  <!-- Footer Div -->
  <div class="footer">
    <div class="mardiv">
      <marquee behavior="" direction="right" height="40px" class=" text-danger fs-2" width="100%">
        <div class="mar">Thank You For Coming To Our Shop</div>
      </marquee>
    </div>
    <div class="contact">
      <li>Contact</li>
      <ul style="list-style-type: square;">
        <li>ZappFashio@gmail.com</li>
        <li>+016577289</li>
      </ul>
    </div>
    <p class="copy">
      Copyrightt <span>&#169;</span>ZappFashion
    </p>
  </div>
</body>

</html>