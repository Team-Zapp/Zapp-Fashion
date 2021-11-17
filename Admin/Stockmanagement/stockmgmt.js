
<<<<<<< HEAD
$(document).ready(function () {
  $.get("../../deflink.html", function (data) {
    $("head").prepend(data);
  });
  
  $.get("../../def.html", function (data) {
    $("body").prepend(data);
    sessionStorage.setItem("AdminName",AdminName)
    $("#adminName").text(sessionStorage.getItem("AdminName"))
    document.getElementById("href1").setAttribute("href","../DashBoard/DashBoard.php?name="+sessionStorage.getItem("AdminName") )

    document.getElementById("href3").setAttribute("href","../CustomerInfo/Customerinfo.php?name="+sessionStorage.getItem("AdminName") )
    document.getElementById("href4").setAttribute("href","../Transcation/Transcation.php?name="+sessionStorage.getItem("AdminName") )
    document.getElementById("href5").setAttribute("href","../FeedBack/feedback.php?name="+sessionStorage.getItem("AdminName") )
    const d = new Date();
let date =d.getDate();
let minute = d.getMinutes();
let hour=d.getHours();

localStorage.setItem("LastSigninTime",hour +":"+minute)
const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
let month = months[d.getMonth()];
document.getElementById("date").innerHTML=month +"/" + date ;
document.getElementById("signInTime").innerHTML=hour +":"+minute ;
if (sessionStorage.getItem("AdminName")=="Zay"){
  document.getElementById("adminPic").setAttribute("src","~Chuky~.jpg")
}
if (sessionStorage.getItem("AdminName")=="Zar"){
  document.getElementById("adminPic").setAttribute("src","Lets go home, cityscape, bicycle ride, sunset, clouds, art wallpaper.png")
}
if (sessionStorage.getItem("AdminName")=="Zaw"){
  document.getElementById("adminPic").setAttribute("src","A sunset behind the mountain [3840x2160].jpg")
}
if (sessionStorage.getItem("AdminName")=="Phu"){
  document.getElementById("adminPic").setAttribute("src","flower.jpg")
}
  });

})
=======
$.get("../../def.html", function (data) {
  $("body").prepend(data);
});
// $(document).ready(function () {
//   sessionStorage.setItem("AdminName", AdminName);
//   $("#adminName").text(sessionStorage.getItem("AdminName"));
//   document
//     .getElementById("href1")
//     .setAttribute(
//       "href",
//       "http://localhost/Team1/Admin/DashBoard/DashBoard.php?name=" +
//         sessionStorage.getItem("AdminName")
//     );
//   document
//     .getElementById("href2")
//     .setAttribute(
//       "href",
//       "http://localhost/Team1/Admin/Stockmanagement/stockmanagement.php?name=" +
//         sessionStorage.getItem("AdminName")
//     );
//   document
//     .getElementById("href3")
//     .setAttribute(
//       "href",
//       "http://localhost/Team1/Admin/CustomerInfo/Customerinfo.php?name=" +
//         sessionStorage.getItem("AdminName")
//     );
//   document
//     .getElementById("href4")
//     .setAttribute(
//       "href",
//       "http://localhost/Team1/Admin/Transcation/Transcation.php?name=" +
//         sessionStorage.getItem("AdminName")
//     );
//   document
//     .getElementById("href5")
//     .setAttribute(
//       "href",
//       "http://localhost/Team1/Admin/FeedBack/feedback.php?name=" +
//         sessionStorage.getItem("AdminName")
//     );
// });
>>>>>>> cfa381e920ee88a055105e4e6ac5f18044c38503

var options = {
  series: [
    {
      name: "Remain Stock",
      data: [80, 55, 57, 56, 61, 58, 63, 60, 66, 11],
    },
    {
      name: "Total Stock",
      data: [76, 85, 101, 98, 87, 105, 91, 114, 94, 24],
    },
  ],
  chart: {
    type: "bar",
    height: 350,
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "55%",
      endingShape: "rounded",
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"],
  },
  xaxis: {
    categories: [
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Dec",
    ],
  },
  yaxis: {
    title: {
      text: "$ (thousands)",
    },
  },
  fill: {
    opacity: 1,
  },
  tooltip: {
    y: {
      formatter: function (val) {
        return "$ " + val + " thousands";
      },
    },
  },
};

var chart = new ApexCharts(document.getElementById("chart"), options);
chart.render();
