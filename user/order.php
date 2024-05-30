<?php
    include('./include/conn.php');
    include('./include/header.php');
?>
<style>
    .upload{
  width: 125px;
  position: relative;
  padding-top:30%;
  margin: auto;
}

.upload img{
  border-radius: 20%;
  width:100%;
  height:50%;
  border: 8px solid #DCDCDC;
}

.upload .round{
  position: absolute;
  bottom: 0;
  right: 0;
  background: #00B4FF;
  width: 32px;
  height: 32px;
  line-height: 33px;
  text-align: center;
  border-radius: 50%;
  overflow: hidden;
}

.upload .round input[type = "file"]{
  position: absolute;
  transform: scale(2);
  opacity: 0;
}

input[type=file]::-webkit-file-upload-button{
    cursor: pointer;
}
.my2{
    padding-top:100px;
    margin-bottom:40px;
}
.btn1{
    margin-bottom:10px;
    width:200px;
    height:40px;
    text-transform:uppercase;

}
.btn4{
    margin-bottom:10px;
    width:200px;
    height:40px;
    text-transform:uppercase;

}
.btn5{
    margin-bottom:10px;
    width:200px;
    height:40px;
    text-transform:uppercase;

}
.btn2{
    margin-bottom:10px;
    width:200px;
    height:40px;
    text-transform:uppercase;
}
.btn3{
    width:200px;
    height:40px;
    text-transform:uppercase;
}
.buton{
    padding-top:70px;

}
.text{
    padding-top:10px;
    text-transform:uppercase;
   

}
.text p{
    font-size:20px;
    cursor: pointer;
    

}
#form{
  padding-top:70px;
}
.first{
  width: 40%;
  height: 50px;
  padding: 0 20px;
  margin-bottom: 15px;
  border-radius: 5px;
  border: 1px solid #dc3545;
}
.second {
  width: 40%;
  height: 50px;
  padding: 0 20px;
  margin-bottom: 15px;
  margin-left: 15px;
  border-radius: 5px;
  border: 1px solid #dc3545;
}
.third{
  width: 40%;
  height: 50px;
  padding: 0 20px;
  margin-bottom: 15px;
  border-radius: 5px;
  border: 1px solid #dc3545;
}
.four {
  width: 40%;
  height: 50px;
  padding: 0 20px;
  margin-bottom: 15px;
  margin-left: 15px;
  border-radius: 5px;
  border: 1px solid #dc3545;
}
.five{
  width: 40%;
  height: 50px;
  padding: 0 20px;
  margin-bottom: 15px;
  border-radius: 5px;
  border: 1px solid #dc3545;
}
.six {
  width: 40%;
  height: 50px;
  padding: 0 20px;
  margin-bottom: 15px;
  margin-left: 15px;
  border-radius: 5px;
  border: 1px solid #dc3545;
}
.seven{
  width: 84%;
  height: 50px;
  padding: 0 20px;
  margin-bottom: 15px;
  border-radius: 5px;
  border: 1px solid #dc3545;
}
.eight {
  width: 40%;
  height: 50px;
  padding: 0 20px;
  margin-bottom: 15px;
  margin-left: 15px;
  border-radius: 5px;
  border: 1px solid #dc3545;
}
.nine {
  width: 84%;
  height: 50px;
  padding: 0 20px;
  margin-bottom: 15px;
  border-radius: 5px;
  border: 1px solid #dc3545;
}
h3{
  margin-bottom: 15px;

}
</style>
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <div class="page-outlined-text">
                            <h1>Bookings</h1>
                        </div>
                        <h2 class="page-title">View Bookings</h2>
                        <ul class="page-switcher">
                            <li><a href="index-2.html">Home <i class="bi bi-caret-right"></i></a></li>
                            <li>Bookings</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
<div class="row my2">
    <div class="col-lg-9 col-md-7 col-sm-12 table-responsive">
      <h2 id="orders" class="mb-4">Pending order</h2>
        <table class="table">
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Occasion Title</th>
        <th>Booking Data</th>
        <th>Booking Time</th>
        <th>Status</th>
        <th>Date</th>
     </tr>
    
    <tbody id="checkoutdata">
      </tbody>
      
                  </table>

          </div>
            <div class="col-lg-3 col-md-4 col-sm-12 text">
  
              <button type="button" id="corders" style="color:white;background-color:#CE1446;" class="btn  btn4" >Confirmed </button><br>
                <button type="button" id="porders" style="color:white;background-color:#CE1446;" class="btn  btn5" >Pending</button><br>
            </div>
   </div>
  

</div>

  

<?php
    include('./include/footer.php');
?>
<script>
    pendata();

function pendata() {
    $.ajax({
        url: "./ajax/ajaxorder.php",
        method: "POST",
        data: {
            pdata: "tabledata"
        },
        success: function(msg) {
            // alert(msg);
            $("#checkoutdata").html(msg);
        }
    })
}

function comdata() {
    $.ajax({
        url: "./ajax/ajaxorder.php",
        method: "POST",
        data: {
            cdata: "tabledata"
        },
        success: function(msg2) {
            // alert(msg);
            $("#checkoutdata").html(msg2);
        }
    })
}

$(document).on("click", "#corders", function(w) {
    w.preventDefault();
    comdata();
    $("#orders").html("Completed Orders");

})
$(document).on("click", "#porders", function(e) {
    e.preventDefault();
    pendata();
    $("#orders").html("Pending Orders");
})
  </script>
