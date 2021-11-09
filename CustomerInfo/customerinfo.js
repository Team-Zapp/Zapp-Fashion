$.get("../def.html", function (data) {
  $("body").prepend(data);
});

$.get("../deflink.html", function (data) {
  $("head").prepend(data);
});

// function initial() {
//   $("#3").removeClass("btn-outline-primary");
//   $("#3").addClass("btn-primary");
// }
