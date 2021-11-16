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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <title>Zapp Fashion</title>
  </head>
  <body>
    <div class="header">
      <div class="bg-white py-3 head">
        <img src="LogoSample_ByTailorBrands.png" alt="" class="logo" />
        <div class="titles">
          <span class="name homebtn"> <a href="#scrollspyHeadinghome" class="homebtns"> HOME</a></span>
          <span class="name manbtn">MEN</span>
          <span class="name womanbtn">WOMEN</span>
          <span class="name kidbtn">KID</span>
          <input
            class="form-control me-2 SearchBar border border-3"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
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
        <nav
          id="navbar_top"
          class="navbar navbar-expand-lg navbar-dark bg-secondary ulclass"
        >
          <div class="container">
            <a class="navbar-brand tag" href="#">HOME</a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#main_nav"
            >
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
      <div class="slider homeslide" id="scrollspyHeadinghome">
          <div class="demo-cont homeslide" >
  <!-- slider start -->
  <div class="fnc-slider example-slider">
    <div class="fnc-slider__slides">
      <!-- slide start -->
      <div class="fnc-slide m--blend-green m--active-slide">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>New </span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Normal</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              About Us
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-dark">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>New</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Designs</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-red">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Fresh</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Night Out</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class="fnc-slide m--blend-blue">
        <div class="fnc-slide__inner">
          <div class="fnc-slide__mask">
            <div class="fnc-slide__mask-inner"></div>
          </div>
          <div class="fnc-slide__content">
            <h2 class="fnc-slide__heading">
              <div class="fnc-slide__heading-line">
                <span>Not Only</span>
              </div>
              <div class="fnc-slide__heading-line">
                <span>Adault</span>
              </div>
            </h2>
            <button type="button" class="fnc-slide__action-btn">
              Credits
              <span data-text="Credits">Credits</span>
            </button>
          </div>
        </div>
      </div>
      <!-- slide end -->
    </div>
    <nav class="fnc-nav">
      <div class="fnc-nav__bgs">
        <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
        <div class="fnc-nav__bg m--navbg-dark"></div>
        <div class="fnc-nav__bg m--navbg-red"></div>
        <div class="fnc-nav__bg m--navbg-blue"></div>
      </div>
      <div class="fnc-nav__controls">
        <button class="fnc-nav__control">
          New Normal
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          New Designs
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          Fresh Night Out
          <span class="fnc-nav__control-progress"></span>
        </button>
        <button class="fnc-nav__control">
          Not only Adault
          <span class="fnc-nav__control-progress"></span>
        </button>
      </div>
    </nav>
  </div>
  <!-- slider end -->
      </div>
      <div class="cards1">
        <!-- Card start-->
        <div class="trending">
          <h2>Trending</h2>
        </div>
        <div class="card1">
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          /><!--Card1-->
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
        <div class="card1">
          <!--Card2-->
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          />
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
        <div class="card1">
          <!--Card3-->
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          />
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
      <div
        class="recommend"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading4">Shirts</h2>
      </div>
      <!-- Parallx Card start-->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Parallx Card End-->
      <div
        class="Pants"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading5">Pants</h2>
      </div>
      <!-- Parallx Card 2 Start -->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Parallx Card 2 End -->
      <div
        class="Shoes"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading6">Shoes</h2>
      </div>
      <!-- Parallx Card 3 Start -->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- Parallx Card 3 End -->
     </div> <!--Home End -->
    </div> 
    <div class="Men">
      <div class="feature">
        <h2>Feature</h2>
      </div>
      <div class="slider">
        <div class="container">
          <!--Expanding Card start-->
          <div
            class="panel active"
            style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            "
          >
            <h3>Explore the World</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('https://images.unsplash.com/photo-1604156425963-9be03f86a428?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
            "
          >
            <h3>Get Paid</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            "
          >
            <h3>Workout</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
            "
          >
            <h3>Be Better</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            "
          >
            <h3>Care</h3>
          </div>
        </div>
        <!--Expanding Card End-->
      </div>
      <div class="cards1">
        <!-- Card start-->
        <div class="trending">
          <h2>Trending</h2>
        </div>
        <div class="card1">
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          /><!--Card1-->
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
        <div class="card1">
          <!--Card2-->
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          />
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
        <div class="card1">
          <!--Card3-->
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          />
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
      <div
        class="recommend"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading1">Shirts</h2>
      </div>
      <!-- Parallx Card start-->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="men shirt 1.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="men shirt 2.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="men shirt 3.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="men shirt 4.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="men shirt 5.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="men shirt 1.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Parallx Card End-->
      <div
        class="Pants"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading2">Pants</h2>
      </div>
      <!-- Parallx Card 2 Start -->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Pants/Men Pants 1.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Pants/Men Pants 2.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Pants/Men Pants 3.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Pants/Men Pants 4.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Pants/Men Pants 5.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Pants/Men Pants 6.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Parallx Card 2 End -->
      <div
        class="Shoes"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading3">Shoes</h2>
      </div>
      <!-- Parallx Card 3 Start -->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Shoes/Men shoes 1.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Shoes/Men shoes 2.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Shoes/Men shoes 3.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Shoes/Men shoes 4.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Shoes/Men shoes 5.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Shoes/Men shoes 6.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div><!-- Parallx Card 3 End -->
    </div> 
    <!-- Women Start -->
    <div class="Women">
    <div class="feature">
        <h2>Feature</h2>
      </div>
      <div class="slider">
        <div class="container"> <!--Expanding Card start-->
          <div
            class="panel active"
            style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            "
          >
            <h3>Explore the World</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('https://images.unsplash.com/photo-1604156425963-9be03f86a428?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
            "
          >
            <h3>Get Paid</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            "
          >
            <h3>Workout</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
            "
          >
            <h3>Be Better</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            "
          >
            <h3>Care</h3>
          </div>
        </div>
        <!--Expanding Card End-->
      </div>
      <div class="cards1">
        <!-- Card start-->
        <div class="trending">
          <h2>Trending</h2>
        </div>
        <div class="card1">
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          /><!--Card1-->
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
        <div class="card1">
          <!--Card2-->
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          />
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
        <div class="card1">
          <!--Card3-->
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          />
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
      <div
        class="recommend"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading4">Shirts</h2>
      </div>
      <!-- Parallx Card start-->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Woman shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Parallx Card End-->
      <div
        class="Pants"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading5">Pants</h2>
      </div>
      <!-- Parallx Card 2 Start -->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Parallx Card 2 End -->
      <div
        class="Shoes"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading6">Shoes</h2>
      </div>
      <!-- Parallx Card 3 Start -->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Women shoes.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Parallx Card 3 End -->
    </div>
        <!-- Kid Start -->
        <div class="Kid">
        <div class="feature">
        <h2>Feature</h2>
      </div>
      <div class="slider">
        <div class="container">
          <!--Expanding Card start-->
          <div
            class="panel active"
            style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            "
          >
            <h3>Explore the World</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('https://images.unsplash.com/photo-1604156425963-9be03f86a428?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
            "
          >
            <h3>Get Paid</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            "
          >
            <h3>Workout</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
            "
          >
            <h3>Be Better</h3>
          </div>
          <div
            class="panel"
            style="
              background-image: url('burgess-milner-OYYE4g-I5ZQ-unsplash.jpg');
            "
          >
            <h3>Care</h3>
          </div>
        </div>
        <!--Expanding Card End-->
      </div>
      <div class="cards1">
        <!-- Card start-->
        <div class="trending">
          <h2>Trending</h2>
        </div>
        <div class="card1">
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          /><!--Card1-->
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
        <div class="card1">
          <!--Card2-->
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          />
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
        <div class="card1">
          <!--Card3-->
          <img
            src="men-s-shoes-clothing-accessories.jpg"
            class="card-img-top"
            alt="..."
          />
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
      <div
        class="recommend"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading7">Shirts</h2>
      </div>
      <!-- Parallx Card start-->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shirt.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Shirt</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Parallx Card End-->
      <div
        class="Pants"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading8">Pants</h2>
      </div>
      <!-- Parallx Card 2 Start -->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid pants.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Pants</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Parallx Card 2 End -->
      <div
        class="Shoes"
        data-bs-spy="scroll"
        data-bs-target="#navbar-example2"
        data-bs-offset="0"
        class="scrollspy-example"
        tabindex="0"
      >
        <h2 id="scrollspyHeading9">Shoes</h2>
      </div>
      <!-- Parallx Card 3 Start -->
      <div class="card2">
        <div class="multiple-items">
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shoe.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$120</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shoe.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$300</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shoe.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$50</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shoe.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$250</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shoe.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$70</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
          <div>
            <div id="card-1" class="card rounded">
              <div class="card__overlay"></div>
              <div class="card__image">
                <img src="Kid shoe.jpg" alt="" />
              </div>
              <div class="card__heading">
                <span class="small">$299</span>
                <h3>Shoes</h3>
                <button type="button" class="btn btn-primary">
                  Add to Cart
                </button>
              </div>
            </div>
          </div>
        </div>
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
        <li>+016577289</li></ul>
        </div>
        <p class="copy">
          Copyrightt <span>&#169;</span>ZappFashion
        </p>
    </div>
  </body>
</html>
