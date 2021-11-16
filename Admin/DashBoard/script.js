$.get("../../deflink.html", function (data) {
  $("head").prepend(data);
});

$.get("../../def.html", function (data) {
  $("body").prepend(data);
});
$(document).ready(function () {
  sessionStorage.setItem("AdminName", AdminName);
  $("#adminName").text(sessionStorage.getItem("AdminName"));
  document
    .getElementById("href1")
    .setAttribute(
      "href",
      "http://localhost/Team1/Admin/DashBoard/DashBoard.php?name=" +
        sessionStorage.getItem("AdminName")
    );
  document
    .getElementById("href2")
    .setAttribute(
      "href",
      "http://localhost/Team1/Admin/Stockmanagement/stockmanagement.php?name=" +
        sessionStorage.getItem("AdminName")
    );
  document
    .getElementById("href3")
    .setAttribute(
      "href",
      "http://localhost/Team1/Admin/CustomerInfo/Customerinfo.php?name=" +
        sessionStorage.getItem("AdminName")
    );
  document
    .getElementById("href4")
    .setAttribute(
      "href",
      "http://localhost/Team1/Admin/Transcation/Transcation.php?name=" +
        sessionStorage.getItem("AdminName")
    );
  document
    .getElementById("href5")
    .setAttribute(
      "href",
      "http://localhost/Team1/Admin/FeedBack/feedback.php?name=" +
        sessionStorage.getItem("AdminName")
    );
});

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
