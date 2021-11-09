<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="jquary.js"></script>
    <script src="script.js" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="header">
        <img src="LogoSample_ByTailorBrands.png" alt="" class="logo">
        <div class="titles">
        <span class="name"><a href="" class="name">HOME</a></span>
        <span class="name"><a href="">MEN</a></span>
        <span class="name"><a href="">WOMEN</a></span>
        <span class="name"><a href="">KID</a></span>
        </div>
        <input type="text" class="SearchBar"><ion-icon name="search-outline" class="Search"></ion-icon>
        <ion-icon name="person-outline" class="User"></ion-icon>
        <ion-icon name="cart-outline" class="Cart"></ion-icon>
    </div>
    <div class="FixedBar"><!--FixedBar Start-->
    <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-secondary ulclass">
        <div class="container">
      <a class="navbar-brand" href="#">MEN</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav mx-auto ">
		<a class="nav-link mx-5 " href="#"> Shirt </a>
		<a class="nav-link mx-5" href="#"> Pants </a>
        <a class="nav-link mx-5" href="#"> Shoes </a>
        <a class="nav-link mx-5" href="#"> Accessories </a>
	</ul>
  </div> <!-- navbar-collapse.// -->
 </div> <!-- container-fluid.// -->
</nav>
    </div><!--FixedBar END-->
    <div class="slider">
        <div class="slide"></div>
    </div>
    <div class="cards1"><!-- Card start-->
        <div class="trending">
            <h2>Trending</h2>
        </div>
        <div class="buttons">
        <button type="button" class="btn btn-outline-secondary btn1"><</button>
        <button type="button" class="btn btn-outline-secondary btn1">></button>
        </div>
    <div class="card1" style="width: 28rem;">
  <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="..."><!--Card1-->
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div><!--Card1-->
<div class="card1" style="width: 28rem;"><!--Card2-->
  <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div><!--Card2-->
<div class="card1" style="width: 28rem;"><!--Card3-->
  <img src="men-s-shoes-clothing-accessories.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Show Details</a>
  </div>
</div><!--Card3-->
    </div><!-- Card End-->

</body>
</html>