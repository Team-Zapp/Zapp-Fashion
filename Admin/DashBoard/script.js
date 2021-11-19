
$(document).ready(function () {

  $.get("../../deflink.html", function (data) {
    $("head").prepend(data);
  });
  
  $.get("../../def.html", function (data) {
    $("body").prepend(data);
    sessionStorage.setItem("AdminName",AdminName)
    $("#adminName").text(sessionStorage.getItem("AdminName"))
    document.getElementById("href1").setAttribute("href","../DashBoard/DashBoard.php?name="+sessionStorage.getItem("AdminName") )
    document.getElementById("href2").setAttribute("href","../Stockmanagement/stockmanagement.php?name="+sessionStorage.getItem("AdminName") )
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

  $.ajax({
    type:'get',
    url:'search.php',
    success :function(data){
      let json = JSON.parse(data);
      console.log(json)
      $("#visit").text(json)
    }
  })
})


//firts chart
var options = {
  series: [
    {
      name: "Net Profit",
      data: [44, 55, 57, 56, 61, 58, 63, 60, 66],
    },
    {
      name: "Revenue",
      data: [76, 85, 101, 98, 87, 105, 91, 114, 94],
    },
    {
      name: "Free Cash Flow",
      data: [35, 41, 36, 26, 45, 48, 52, 53, 41],
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
  title: {
    text: "Remain Stock",
    align: "left",
  },
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"],
  },
  xaxis: {
    categories: ["Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],
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

//second chart
var options = {
  series: [
    {
      name: "Desktops",
      data: [10, 41, 35, 51, 49, 62, 69, 91, 148],
    },
  ],
  chart: {
    height: 350,
    type: "line",
    zoom: {
      enabled: false,
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: "straight",
  },
  title: {
    text: "Earning",
    align: "left",
  },
  grid: {
    row: {
      colors: ["#f3f3f3", "transparent"], // takes an array which will be repeated on columns
      opacity: 0.5,
    },
  },
  xaxis: {
    categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep"],
  },
};

var chart = new ApexCharts(document.querySelector("#secChart"), options);
chart.render();

//pie chart
var options = {
  series: [44, 55, 13, 43, 22],
  chart: {
    type: "pie",
  },
  labels: ["Team A", "Team B", "Team C", "Team D", "Team E"],
  responsive: [
    {
      breakpoint: 480,
      options: {
        chart: {
          width: 200,
        },
        legend: {
          position: "bottom",
        },
      },
    },
  ],
};

var chart = new ApexCharts(document.querySelector("#pie"), options);
chart.render();
//donut
var options = {
  series: [44, 55, 41, 17, 15],
  chart: {
    type: "donut",
  },
  responsive: [
    {
      breakpoint: 480,
      options: {
        chart: {
          width: 200,
        },
        legend: {
          position: "bottom",
        },
      },
    },
  ],
};

var chart = new ApexCharts(document.querySelector("#donut"), options);
chart.render();
