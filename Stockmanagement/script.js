$.get("../deflink.html", function (data) {
  $("head").prepend(data);
});

$.get("../def.html", function (data) {
  $("body").prepend(data);
});

if () {
  function initial() {
    $("#2").removeClass("btn-outline-primary");
    $("#2").addClass("btn-primary");
  }
}
