$.get("../def.html", function (data) {
  $("body").prepend(data);
});

$.get("../deflink.html", function (data) {
  $("head").prepend(data);
});

// function initial() {
//   $("#5").removeClass("btn-outline-primary");
//   $("#5").addClass("btn-primary");
// }
