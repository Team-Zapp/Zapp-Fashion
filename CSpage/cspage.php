<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="jquery.js"></script>
    <script src="script.js" defer></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <title>Zapp Fashion-MEN</title>
  </head>
  <body>
    <div class="header">
      <div class="bg-white py-3 head">
        <img src="LogoSample_ByTailorBrands.png" alt="" class="logo" />
        <div class="titles">
          <span class="name"><a href="" class="title">HOME</a></span>
          <span class="name"><a href="" class="title">MEN</a></span>
          <span class="name"><a href="" class="title">WOMEN</a></span>
          <span class="name"><a href="" class="title">KID</a></span>
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

      <div class="FixedBar">
        <!--FixedBar Start-->
        <nav
          id="navbar_top"
          class="navbar navbar-expand-lg navbar-dark bg-secondary ulclass"
        >
          <div class="container">
            <a class="navbar-brand tag" href="#">MEN</a>
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
                <a class="nav-link mx-5 h-atuo" href="#scrollspyHeading1">
                  Shirt
                </a>
                <a class="nav-link mx-5 h-atuo" href="#scrollspyHeading2">
                  Pants
                </a>
                <a class="nav-link mx-5 h-atuo" href="#scrollspyHeading3">
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
    <div class="Men">
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
        <div class="buttons">
          <button type="button" class="btn btn-outline-secondary btn1">
            <
          </button>
          <button type="button" class="btn btn-outline-secondary btn1">
            >
          </button>
        </div>
        <div class="card1" style="width: 28rem">
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
        <div class="card1" style="width: 28rem">
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
        <div class="card1" style="width: 28rem">
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 1.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 2.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 3.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 4.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 5.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 6.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 1.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 2.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 3.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 4.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 5.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 6.jpg" alt="" />
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
    <!-- Women Start -->
    <div class="Women">
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
        <div class="buttons">
          <button type="button" class="btn btn-outline-secondary btn1">
            <
          </button>
          <button type="button" class="btn btn-outline-secondary btn1">
            >
          </button>
        </div>
        <div class="card1" style="width: 28rem">
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
        <div class="card1" style="width: 28rem">
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
        <div class="card1" style="width: 28rem">
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 1.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 2.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 3.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 4.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 5.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Pants/Men Pants 6.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 1.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 2.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 3.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 4.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 5.jpg" alt="" />
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
                <img src="/Team1/CSMenPage/Shoes/Men shoes 6.jpg" alt="" />
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
    <div class="footer">
      <h3 class="copy">Copy@right</h3>
    </div>
  </body>
</html>