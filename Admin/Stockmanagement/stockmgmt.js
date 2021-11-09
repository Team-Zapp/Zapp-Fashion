$.get("../../deflink.html", function (data) {
  $("head").prepend(data);
});

$.get("../../def.html", function (data) {
  $("body").prepend(data);
});

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
    {
      name: "Free Cash Flow",
      data: [35, 41, 36, 26, 45, 48, 52, 53, 41, 51],
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
