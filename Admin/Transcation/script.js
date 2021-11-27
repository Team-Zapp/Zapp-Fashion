$(document).ready(function () {
  $.get("../../def.html", function (data) {
    $("body").prepend(data);
  });

  $.get("../../deflink.html", function (data) {
    $("head").prepend(data);
    sessionStorage.setItem("AdminName", AdminName);
    $("#adminName").text(sessionStorage.getItem("AdminName"));
    document
      .getElementById("href1")
      .setAttribute(
        "href",
        "../DashBoard/DashBoard.php?name=" + sessionStorage.getItem("AdminName")
      );
    document
      .getElementById("href2")
      .setAttribute(
        "href",
        "../Stockmanagement/stockmanagement.php?name=" +
          sessionStorage.getItem("AdminName")
      );
    document
      .getElementById("href3")
      .setAttribute(
        "href",
        "../CustomerInfo/Customerinfo.php?name=" +
          sessionStorage.getItem("AdminName")
      );
    document
      .getElementById("href4")
      .setAttribute(
        "href",
        "../Transcation/Transcation.php?name=" +
          sessionStorage.getItem("AdminName")
      );
    document
      .getElementById("href5")
      .setAttribute(
        "href",
        "../FeedBack/feedback.php?name=" + sessionStorage.getItem("AdminName")
      );
    const d = new Date();
    let date = d.getDate();
    let minute = d.getMinutes();
    let hour = d.getHours();

    localStorage.setItem("LastSigninTime", hour + ":" + minute);
    const months = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December",
    ];
    let month = months[d.getMonth()];
    document.getElementById("date").innerHTML = month + "/" + date;
    if (sessionStorage.getItem("AdminName") == "Zay") {
      document.getElementById("adminPic").setAttribute("src", "~Chuky~.jpg");
    }
    if (sessionStorage.getItem("AdminName") == "Zar") {
      document
        .getElementById("adminPic")
        .setAttribute(
          "src",
          "Lets go home, cityscape, bicycle ride, sunset, clouds, art wallpaper.png"
        );
    }
    if (sessionStorage.getItem("AdminName") == "Zaw") {
      document
        .getElementById("adminPic")
        .setAttribute("src", "A sunset behind the mountain [3840x2160].jpg");
    }
    if (sessionStorage.getItem("AdminName") == "Phu") {
      document.getElementById("adminPic").setAttribute("src", "flower.jpg");
    }
  });

  $.ajax({
    type: "get",
    url: "gettranscation.php",
    success: function (data) {
      let json = JSON.parse(data);
      var nocount = 1;
      for (const x of json) {
        var totalbudget = x.totalbudget;
        var orderid = x.orderid;
        var name = x.username;
        var buydate = x.buy_date;

        $("#table1 tbody").append(
          `
          <tr class="tr table-success">
          <td class="name table-primary">${nocount++}</td>
          <td class="name table-primary">${name}</td>
          <td class="orderid table-primary">#ZAPP${orderid}</td>
          <td class="table-primary">${buydate}</td>
          <td class="table-primary">${totalbudget
            .toString()
            .replace(/\B(?=(\d{3})+(?!\d))/g, ",")}$</td>
          <td class="table-primary text-danger fw-bold"> ※ Click Me for more details !</td>
      </tr>
        `
        );
        // nocount++;
      }
      $(".tr").click(function () {
        var orderid = $(this).find(".orderid").text().replace("#ZAPP", "");
        $.ajax({
          type: "post",
          url: "findorder.php",
          data: "orderid=" + orderid,
          success: function (data) {
            let json = JSON.parse(data);
            var html = "";
            for (const x of json) {
              var gender = x.ordergender;
              var category = x.ordercategory;
              if (gender == "1") gender = "Man";
              else if (gender == "2") gender = "Woman";
              else if (gender == "3") gender = "Kid";
              if (category == "1") category = "Shirt";
              else if (category == "2") category = "Pant";
              else if (category == "3") category = "Shoe";

              html += `
          
          <p>Item Name : ${x.name}</p> <br>
          <img src="../Stockmanagement/pdphotos/${x.photoname}" class="transactioninfophoto" alt=""><br>
          <p>Item ID : ${x.itemid}</p> <br>
          <p>Item Category : ${category}</p> <br>
          <p>Gender: ${gender}</p> <br>
          <p>Quantity : ${x.quantity}</p> <br>
          --------------------------------------------
          `;
            }
            Swal.fire({
              title: "<strong>Transcation Details</strong>",
              html: html,
              showCloseButton: true,

              focusConfirm: false,
              confirmButtonText: '<i class="fa fa-thumbs-up"></i> Back',
              confirmButtonAriaLabel: "Thumbs up, great!",
            });
          },
          error: function () {
            alert("An Error has Occured");
          },
        });
      });
    },
  });
});

// document.getElementById("info").addEventListener("click", function () {

//   let name =$("#name").val();
//   let gender = $("#inputGroupSelect01").val();
//   let category = $("#inputGroupSelect02").val();
//   let orgprice =$("#orgprice").val()
//   let saleprice =$("#saleprice").val()
//   let made =$("#made").val()
//   let stock =$("#stock").val()
//   let id =$("#forid").text()
//   var data ={
//     "name": name,
//     "gender": gender,
//     "category":category,
//     "orgprice":orgprice,
//     "saleprice":saleprice,
//     "made":made,
//     "stock":stock,
//     "id":id
//   }
//   $.ajax({
//     type: 'post',
//     url: 'nameUpdate.php',
//     data: {send : JSON.stringify(data)},
//     success :function(data){
//       setTimeout(() => {
//         Swal.fire({
//           position: 'center',
//           icon: 'success',
//           title: 'Product Successfully Updated',
//           showConfirmButton: false,
//           timer: 3000
//         })
//       },100);

//     },
//     error: function(){
//       alert("An Error has Occured")
//     }
// })
// setTimeout(function( )
// {  location.reload(); },
// 500);

// })
