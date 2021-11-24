$.get("../../def.html", function (data) {
  $("body").prepend(data);
});
$(document).ready(function () {
  var count=0;
  $.ajax({
    type:'get',
    url:'getfeedback.php',
    success :function(data){
      let json = JSON.parse(data);
      console.log(json)
      for (const x of json) {
        let pfname =x.name
        pfname = pfname.charAt(0).toUpperCase();
        count++;
        $("#feedbackForm").append(`
        <div class="ProflieAndName">
        <div class="row">
        <div class="UserProfile">${pfname}</div>
            <p class="name">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#name${count}" aria-expanded="false" aria-controls="collapseExample">
                    ${x.name}
                </button>
            </p>
            </div>
            <div class="collapse" id="name${count}">
                <div class="card card-body">
                    ${x.feedback}
                </div>
            </div>
        </div>
        `)
      }
      
    }
  })
})
$.get("../../deflink.html", function (data) {
  $("head").prepend(data);
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
