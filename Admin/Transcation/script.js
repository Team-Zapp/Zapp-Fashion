$.get("../../def.html", function (data) {
    $("body").prepend(data);
  });
  
  $.get("../../deflink.html", function (data) {
    $("head").prepend(data);
  });