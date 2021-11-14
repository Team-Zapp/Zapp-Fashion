//ready
$(document).ready(function () {
  $.get("../cslinks.html", function (data) {
    $("head").prepend(data);
  });
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
//Parallx card
(function ($) {
  $.fn.tilt = function () {
    var perspective = "500px",
      delta = 20,
      width = this.width(),
      height = this.height(),
      midWidth = width / 2,
      midHeight = height / 2;
    this.on({
      mousemove: function (e) {
        var pos = $(this).offset(),
          cursPosX = e.pageX - pos.left,
          cursPosY = e.pageY - pos.top,
          cursCenterX = midWidth - cursPosX,
          cursCenterY = midHeight - cursPosY;

        $(this).css(
          "transform",
          "perspective(" +
            perspective +
            ") rotateX(" +
            cursCenterY / delta +
            "deg) rotateY(" +
            -(cursCenterX / delta) +
            "deg)"
        );
        $(this).removeClass("is-out");
      },
      mouseleave: function () {
        $(this).addClass("is-out");
      },
    });
    //Return
    return this;
  };
})(jQuery);

//Set plugin on cards
$(".card").tilt();

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
//slick slider
$(".multiple-items").slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  prevArrow:
    '<span class="prevArrow"><ion-icon name="chevron-back-outline" class="leftAro"></ion-icon></span>',
  nextArrow:
    '<span class="nextArrow"><ion-icon name="chevron-forward-outline" class="rightAro"></ion-icon></i></span>',
});

//display function
// let menDisplay = document.querySelector(".Men");
// let womenDisplay = document.querySelector(".Women");
// let kidDisplay = document.querySelector(".Kid");

// let manBtn =document.querySelector(".manbtn");
// let manBtn =document.querySelector(".womenbtn");
// let manBtn =document.querySelector(".kidbtn");

$(".manbtn").click(function () {
  $(".Women").css("display", "none");
  $(".Kid").css("display", "none");
  $(".Men").css("display", "block");
  $(".tag").text("MEN");
  document.getElementById("shirt").href = "#scrollspyHeading1";
  document.getElementById("pants").href = "#scrollspyHeading2";
  document.getElementById("shoe").href = "#scrollspyHeading3";
});

$(".womanbtn").click(function () {
  $(".Women").css("display", "block");
  $(".Kid").css("display", "none");
  $(".Men").css("display", "none");
  $(".tag").text("WOMEN");
  document.getElementById("shirt").href = "#scrollspyHeading4";
  document.getElementById("pants").href = "#scrollspyHeading5";
  document.getElementById("shoe").href = "#scrollspyHeading6";
});

$(".kidbtn").click(function () {
  $(".Women").css("display", "none");
  $(".Kid").css("display", "block");
  $(".Men").css("display", "none");
  $(".tag").text("KID");
  document.getElementById("shirt").href = "#scrollspyHeading7";
  document.getElementById("pants").href = "#scrollspyHeading8";
  document.getElementById("shoe").href = "#scrollspyHeading9";
});
