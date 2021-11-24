//ready

$(document).ready(function () {
  /*$("#toleft").click(function(){
    var name =document.getElementById("toleft").getAttribute("name")
    if(name=="chevron-back-outline") {
      $("#toleft").attr("name","chevron-forward-outline")
      
    }
    else if(name=="chevron-forward-outline") {
      $("#toleft").attr("name","chevron-back-outline")
      
    }
  })*/
  $("#feedback").click(function(){
    $("#feedbackform").attr("href","feedbackform.php?id="+sessionStorage.getItem("UserID") )
  })
  $.get("cslinks.html", function (data) {
    $("head").prepend(data);
  });
  $.ajax({
    type: "get",
    url: "add.php",
    success: function (data) {
      let Mdata = JSON.parse(data);
      console.log(Mdata);
      //Men Variable
      var MS = 0;
      var MSH = 0;
      var MP = 0;
      var Mshirtprice = document.getElementsByClassName("Mshirtprice");
      var Mshirtname = document.getElementsByClassName("Mshirtname");
      var Mshoeprice = document.getElementsByClassName("Mshoeprice");
      var Mshoename = document.getElementsByClassName("Mshoename");
      var Mpantprice = document.getElementsByClassName("Mpantprice");
      var Mpantname = document.getElementsByClassName("Mpantname");
      //Women Variable
      var WS = 0;
      var WSH = 0;
      var WP = 0;
      var Wpantprice = document.getElementsByClassName("Wpantprice");
      var Wpantname = document.getElementsByClassName("Wpantname");
      var Wshirtprice = document.getElementsByClassName("Wshirtprice");
      var Wshirtname = document.getElementsByClassName("Wshirtname");
      var Wshoeprice = document.getElementsByClassName("Wshoeprice");
      var Wshoename = document.getElementsByClassName("Wshoename");
      //Kid Variable
      var KS = 0;
      var KSH = 0;
      var KP = 0;
      var Kpantprice = document.getElementsByClassName("Kpantprice");
      var Kpantname = document.getElementsByClassName("Kpantname");
      var Kshirtprice = document.getElementsByClassName("Kshirtprice");
      var Kshirtname = document.getElementsByClassName("Kshirtname");
      var Kshoeprice = document.getElementsByClassName("Kshoeprice");
      var Kshoename = document.getElementsByClassName("Kshoename");

      for (const iterator of Mdata) {
        if (iterator.gender == "1") {
          if (iterator.category == "1") {
            Mshirtprice[MS].innerHTML = `${iterator.saleprice}$`;
            Mshirtname[MS].innerHTML = `${iterator.name}`;
            MS++;
          } else if (iterator.category == "2") {
            Mpantprice[MP].innerHTML = `${iterator.saleprice}$`;
            Mpantname[MP].innerHTML = `${iterator.name}`;
            MP++;
          } else if (iterator.category == "3") {
            Mshoeprice[MSH].innerHTML = `${iterator.saleprice}$`;
            Mshoename[MSH].innerHTML = `${iterator.name}`;
            MSH++;
          }
        }
        if (iterator.gender == "2") {
          if (iterator.category == "1") {
            Wshirtprice[WS].innerHTML = `${iterator.saleprice}$`;
            Wshirtname[WS].innerHTML = `${iterator.name}`;
            WS++;
          } else if (iterator.category == "2") {
            Wpantprice[WP].innerHTML = `${iterator.saleprice}$`;
            Wpantname[WP].innerHTML = `${iterator.name}`;
            WP++;
          } else if (iterator.category == "3") {
            Wshoeprice[WSH].innerHTML = `${iterator.saleprice}$`;
            Wshoename[WSH].innerHTML = `${iterator.name}`;
            WSH++;
          }
        }
        if (iterator.gender == "3") {
          if (iterator.category == "1") {
            Kshirtprice[KS].innerHTML = `${iterator.saleprice}$`;
            Kshirtname[KS].innerHTML = `${iterator.name}`;
            KS++;
          } else if (iterator.category == "2") {
            Kpantprice[KP].innerHTML = `${iterator.saleprice}$`;
            Kpantname[KP].innerHTML = `${iterator.name}`;
            KP++;
          } else if (iterator.category == "3") {
            Kshoeprice[KSH].innerHTML = `${iterator.saleprice}$`;
            Kshoename[KSH].innerHTML = `${iterator.name}`;
            KSH++;
          }
        }
      }
    },
  });

  //zayar
  sessionStorage.setItem("UserID", UserID);
});
//FixedBar
document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      document.getElementById("navbar_top").classList.add("fixed-top");
      // add padding top to show content behind navbar
      navbar_height = document.querySelector(".navbar").offsetHeight;
      document.body.style.paddingTop = navbar_height + "px";
    } else {
      document.getElementById("navbar_top").classList.remove("fixed-top");
      // remove padding top from body
      document.body.style.paddingTop = "0";
    }
  });
});

//Expanding Card
const panels = document.querySelectorAll(".panel");
panels.forEach((panel) => {
  panel.addEventListener("click", () => {
    remveActiveClasses();
    panel.classList.add("active");
  });
});

function remveActiveClasses() {
  panels.forEach((panel) => {
    panel.classList.remove("active");
  });
}

//display function
// let menDisplay = document.querySelector(".Men");
// let womenDisplay = document.querySelector(".Women");
// let kidDisplay = document.querySelector(".Kid");

// let manBtn =document.querySelector(".manbtn");
// let manBtn =document.querySelector(".womenbtn");
// let manBtn =document.querySelector(".kidbtn");

$(".manbtn").click(function () {
  $(".Women").css("display", "none");
  $(".Home").css("display", "none");
  $(".Kid").css("display", "none");
  $(".Men").css("display", "block");
  $(".tag").text("MEN");
  document.getElementById("shirt").href = "#scrollspyHeading1";
  document.getElementById("pants").href = "#scrollspyHeading2";
  document.getElementById("shoe").href = "#scrollspyHeading3";
});

$(".kidbtn").click(function () {
  $(".Women").css("display", "none");
  $(".Home").css("display", "none");
  $(".Kid").css("display", "block");
  $(".Men").css("display", "none");
  $(".tag").text("KID");
  document.getElementById("shirt").href = "#scrollspyHeading7";
  document.getElementById("pants").href = "#scrollspyHeading8";
  document.getElementById("shoe").href = "#scrollspyHeading9";
});

$(".womanbtn").click(function () {
  $(".Women").css("display", "block");
  $(".Kid").css("display", "none");
  $(".Men").css("display", "none");
  $(".Home").css("display", "none");
  $(".tag").text("WOMEN");
  document.getElementById("shirt").href = "#scrollspyHeading4";
  document.getElementById("pants").href = "#scrollspyHeading5";
  document.getElementById("shoe").href = "#scrollspyHeading6";
});

$(".homebtn").click(function () {
  $(".Women").css("display", "none");
  $(".Kid").css("display", "none");
  $(".Men").css("display", "none");
  $(".Home").css("display", "block");
  $(".tag").text("HOME");
  document.getElementById("shirt").href = "#scrollspyHeading10";
  document.getElementById("pants").href = "#scrollspyHeading11";
  document.getElementById("shoe").href = "#scrollspyHeading12";
});

// HOME PAGE JS
// HOME PAGE JS
(function () {
  var $$ = function (selector, context) {
    var context = context || document;
    var elements = context.querySelectorAll(selector);
    return [].slice.call(elements);
  };

  function _fncSliderInit($slider, options) {
    var prefix = ".fnc-";

    var $slider = $slider;
    var $slidesCont = $slider.querySelector(prefix + "slider__slides");
    var $slides = $$(prefix + "slide", $slider);
    var $controls = $$(prefix + "nav__control", $slider);
    var $controlsBgs = $$(prefix + "nav__bg", $slider);
    var $progressAS = $$(prefix + "nav__control-progress", $slider);

    var numOfSlides = $slides.length;
    var curSlide = 1;
    var sliding = false;
    var slidingAT =
      +parseFloat(getComputedStyle($slidesCont)["transition-duration"]) * 1000;
    var slidingDelay =
      +parseFloat(getComputedStyle($slidesCont)["transition-delay"]) * 1000;

    var autoSlidingActive = false;
    var autoSlidingTO;
    var autoSlidingDelay = 5000; // default autosliding delay value
    var autoSlidingBlocked = false;

    var $activeSlide;
    var $activeControlsBg;
    var $prevControl;

    function setIDs() {
      $slides.forEach(function ($slide, index) {
        $slide.classList.add("fnc-slide-" + (index + 1));
      });

      $controls.forEach(function ($control, index) {
        $control.setAttribute("data-slide", index + 1);
        $control.classList.add("fnc-nav__control-" + (index + 1));
      });

      $controlsBgs.forEach(function ($bg, index) {
        $bg.classList.add("fnc-nav__bg-" + (index + 1));
      });
    }

    setIDs();

    function afterSlidingHandler() {
      $slider
        .querySelector(".m--previous-slide")
        .classList.remove("m--active-slide", "m--previous-slide");
      $slider
        .querySelector(".m--previous-nav-bg")
        .classList.remove("m--active-nav-bg", "m--previous-nav-bg");

      $activeSlide.classList.remove("m--before-sliding");
      $activeControlsBg.classList.remove("m--nav-bg-before");
      $prevControl.classList.remove("m--prev-control");
      $prevControl.classList.add("m--reset-progress");
      var triggerLayout = $prevControl.offsetTop;
      $prevControl.classList.remove("m--reset-progress");

      sliding = false;
      var layoutTrigger = $slider.offsetTop;

      if (autoSlidingActive && !autoSlidingBlocked) {
        setAutoslidingTO();
      }
    }

    function performSliding(slideID) {
      if (sliding) return;
      sliding = true;
      window.clearTimeout(autoSlidingTO);
      curSlide = slideID;

      $prevControl = $slider.querySelector(".m--active-control");
      $prevControl.classList.remove("m--active-control");
      $prevControl.classList.add("m--prev-control");
      $slider
        .querySelector(prefix + "nav__control-" + slideID)
        .classList.add("m--active-control");

      $activeSlide = $slider.querySelector(prefix + "slide-" + slideID);
      $activeControlsBg = $slider.querySelector(prefix + "nav__bg-" + slideID);

      $slider
        .querySelector(".m--active-slide")
        .classList.add("m--previous-slide");
      $slider
        .querySelector(".m--active-nav-bg")
        .classList.add("m--previous-nav-bg");

      $activeSlide.classList.add("m--before-sliding");
      $activeControlsBg.classList.add("m--nav-bg-before");

      var layoutTrigger = $activeSlide.offsetTop;

      $activeSlide.classList.add("m--active-slide");
      $activeControlsBg.classList.add("m--active-nav-bg");

      setTimeout(afterSlidingHandler, slidingAT + slidingDelay);
    }

    function controlClickHandler() {
      if (sliding) return;
      if (this.classList.contains("m--active-control")) return;
      if (options.blockASafterClick) {
        autoSlidingBlocked = true;
        $slider.classList.add("m--autosliding-blocked");
      }

      var slideID = +this.getAttribute("data-slide");

      performSliding(slideID);
    }

    $controls.forEach(function ($control) {
      $control.addEventListener("click", controlClickHandler);
    });

    function setAutoslidingTO() {
      window.clearTimeout(autoSlidingTO);
      var delay = +options.autoSlidingDelay || autoSlidingDelay;
      curSlide++;
      if (curSlide > numOfSlides) curSlide = 1;

      autoSlidingTO = setTimeout(function () {
        performSliding(curSlide);
      }, delay);
    }

    if (options.autoSliding || +options.autoSlidingDelay > 0) {
      if (options.autoSliding === false) return;

      autoSlidingActive = true;
      setAutoslidingTO();

      $slider.classList.add("m--with-autosliding");
      var triggerLayout = $slider.offsetTop;

      var delay = +options.autoSlidingDelay || autoSlidingDelay;
      delay += slidingDelay + slidingAT;

      $progressAS.forEach(function ($progress) {
        $progress.style.transition = "transform " + delay / 1000 + "s";
      });
    }

    $slider
      .querySelector(".fnc-nav__control:first-child")
      .classList.add("m--active-control");
  }

  var fncSlider = function (sliderSelector, options) {
    var $sliders = $$(sliderSelector);

    $sliders.forEach(function ($slider) {
      _fncSliderInit($slider, options);
    });
  };

  window.fncSlider = fncSlider;
})();

// Homeslide

fncSlider(".example-slider", { autoSlidingDelay: 4000 });

var $demoCont = document.querySelector(".homemainslide");
