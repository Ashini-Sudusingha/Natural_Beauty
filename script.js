function changeView(){
    var signUpBox = document.getElementById("SignUpBox");
    var signInBox = document.getElementById("SigninBox");

    signUpBox.classList.toggle("hidden");
    signInBox.classList.toggle("hidden");
}

function signUp(){
  
  var fname =  document.getElementById("fname");
  var lname =  document.getElementById("lname");
  var email =  document.getElementById("email");
  var mobile =  document.getElementById("mobile");
  var username =  document.getElementById("username");
  var password =  document.getElementById("password");

  //alert (username.value);

  var f = new FormData();

  f.append("f", fname.value);
  f.append("l", lname.value);
  f.append("e", email.value);
  f.append("m", mobile.value);
  f.append("u", username.value);
  f.append("p", password.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function(){
    if(request.readyState == 4 & request.status == 200){
     var response = request.responseText;
     //alert (response);

     if (response == "Success"){
        document.getElementById("sDiv").innerHTML = "Registation Successfully";
        document.getElementById("successDiv").className = "flex items-center visible w-full col-span-2 px-6 py-4 text-lg text-green-800 bg-green-200 rounded-md";

        fname.value = ""; //empty input area method 01 (refresh karanna veno vage mathana ailak thiyana va)
        lname.value = "";
        email.value = "";
        mobile.value = "";
        username.value = "";
        password.value = "";
        
     }else{
      document.getElementById("eDiv").innerHTML = response;
      document.getElementById("errorDiv").className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md";
     }
    } 
  };

  request.open("POST", "signupProcess.php", true);
  request.send(f);
}

function signIn(){
  var em = document.getElementById("em");
  var pw = document.getElementById("pw");
  var rm = document.getElementById("rm");

  //alert (rm.value);

 var f  = new FormData();
  f.append("e", em.value);
  f.append("p", pw.value);
  f.append("r", rm.checked);
  
  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){
    if (request.readyState == 4 & request.status == 200){
    var response = request.responseText;
      //alert(response);

      if(response == "Sucess"){
        window.location = "index.php";
      }else{
        document.getElementById("erroSpan").innerHTML = response;
        document.getElementById("signinErro").className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md";
      }
    }
  }
  request.open("POST","signinProcess.php",true);
  request.send(f);
}

function adminSignIn(){

  //alert("ok");
  
  var email = document.getElementById("email");
  var password = document.getElementById("password");

  //alert(password.value);

  var f = new FormData();
  f.append("em",email.value);
  f.append("pw",password.value);
  
  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){
    if(request.readyState == 4 & request.status == 200){
      var response = request.responseText;
      //alert(response);
      if (response == 'Success') {
        window.location.href = 'adminDashBoard.php';
    } else {
        document.getElementById('msg').innerHTML = response;
        document.getElementById('msgDiv').className = "visible col-span-2 px-10";
    }
    }
  }

  request.open("POST", "adminSigninProcess.php", true);
  request.send(f);
}

function loadUser(){
 // alert("ok");

 var request = new XMLHttpRequest();

 request.onreadystatechange= function(){
  if(request.status == 200 & request.readyState == 4){
    var response = request.responseText;
    //alert(response);

    document.getElementById("tb").innerHTML = response;
  } };
 
  request.open("POST", "loadUserProcess.php", true);
 request.send();
}

function updateUserStatus(){
  
  var uid = document.getElementById("uid");
  //alert(uid.value);
  
   var f = new FormData();
    f.append("userid", uid.value);
    
    
  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){
    if(request.readyState == 4 & request.status == 200){
      var response = request.responseText;
      //alert(response);
      if (response == "Deactive") {

        document.getElementById('sDiv').innerText = "User Deactivate Successfully";
        document.getElementById('successDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-green-800 bg-green-200 rounded-md";
        document.getElementById('errorDiv').className = "hidden";
        uid.value = "";

        loadUser();

    } else if (response == "Active") {

        document.getElementById('sDiv').innerText = "User Activate Successfully";
        document.getElementById('successDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-green-800 bg-green-200 rounded-md";
        document.getElementById('errorDiv').className = "hidden";
        uid.value = "";

        loadUser();

    } else {

        document.getElementById('eDiv').innerHTML = response;
        document.getElementById('errorDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md";
        document.getElementById('successDiv').className = "hidden";

    }
    }
  }

  request.open("POST", "updateUserStatus.php", true);
  request.send(f);
}

function reload(){
  location.reload();
}

function brandReg(){
  

  var brand = document.getElementById("brand");
 // alert(brand.value);

 var f = new FormData();
 f.append("b", brand.value);

 var request = new XMLHttpRequest();
 request.onreadystatechange = function(){
  if(request.readyState == 4 & request.status == 200){
    var response =  request.responseText;
    //alert(response);

    
    if (response == "success") {

      document.getElementById('sDiv').innerText = "Brand Registration Successful";
      document.getElementById('successDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-green-800 bg-green-200 rounded-md";
      document.getElementById('errorDiv').className = "hidden";
      brand.value = "";

  } else {

      document.getElementById('eDiv').innerHTML = response;
      document.getElementById('errorDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md";
        document.getElementById('successDiv').className = "hidden";
  }
  }
 }

 request.open("POST", "brandRegProcess.php", true);
 request.send(f);
}

function categoryReg(){

  var category = document.getElementById("category");
 // alert(brand.value);

 var f = new FormData();
 f.append("c", category.value);

 var request = new XMLHttpRequest();
 request.onreadystatechange = function(){
  if(request.readyState == 4 & request.status == 200){
    var response =  request.responseText;
    //alert(response);

    
    if (response == "success") {

      document.getElementById('sDiv').innerText = "Category Registration Successful";
      document.getElementById('successDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-green-800 bg-green-200 rounded-md";
      document.getElementById('errorDiv').className = "hidden";
      category.value = "";

  } else {

      document.getElementById('eDiv').innerHTML = response;
      document.getElementById('errorDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md";
        document.getElementById('successDiv').className = "hidden";
  }
  }
 }

 request.open("POST", "categoryRegProcess.php", true);
 request.send(f);
  
}

function colorReg(){

    var color = document.getElementById("color");
   // alert(brand.value);
  
   var f = new FormData();
   f.append("c", color.value);
  
   var request = new XMLHttpRequest();
   request.onreadystatechange = function(){
    if(request.readyState == 4 & request.status == 200){
      var response =  request.responseText;
      //alert(response);
  
      
      if (response == "success") {
  
        document.getElementById('sDiv').innerText = "Color Registration Successful";
        document.getElementById('successDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-green-800 bg-green-200 rounded-md";
        document.getElementById('errorDiv').className = "hidden";
        color.value = "";
  
    } else {
  
        document.getElementById('eDiv').innerHTML = response;
        document.getElementById('errorDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md";
          document.getElementById('successDiv').className = "hidden";
    }
    }
   }
  
   request.open("POST", "colorRegProcess.php", true);
   request.send(f);
}

function sizeReg(){
 // alert("ok");

 var size = document.getElementById("size");
   // alert(brand.value);
  
   var f = new FormData();
   f.append("s", size.value);
  
   var request = new XMLHttpRequest();
   request.onreadystatechange = function(){
    if(request.readyState == 4 & request.status == 200){
      var response =  request.responseText;
      //alert(response);
  
      
      if (response == "success") {
  
        document.getElementById('sDiv').innerText = "Sizer Registration Successful";
        document.getElementById('successDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-green-800 bg-green-200 rounded-md";
        document.getElementById('errorDiv').className = "hidden";
        size.value = "";
  
    } else {
  
        document.getElementById('eDiv').innerHTML = response;
        document.getElementById('errorDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md";
          document.getElementById('successDiv').className = "hidden";
    }
    }
   }
  
   request.open("POST", "sizeRegProcess.php", true);
   request.send(f);
}

//sindle Product view
function toggleAccordion(event) {
  const button = event.target;
  const content = button.nextElementSibling;
  button.classList.toggle('active');
  content.classList.toggle('hidden');
  content.classList.toggle('flex');
}

var ashini =1;
function searchVisible(){
   if(ashini==1){
    //
    document.getElementById("searchV").className ="w-screen h-[80px] content-center mt-6 vissible";
    ashini++;
   }else{
    document.getElementById("searchV").className ="w-screen h-[80px] content-center mt-6 hidden";
    ashini = 1;
   }
   }

 function adsOpen(){
  if(ashini==1){
    //
    document.getElementById("asearchDiv").className ="w-screen vissible";
    ashini++;
   }else{
    document.getElementById("asearchDiv").className ="hidden w-screen";
    ashini = 1;
   }
  
 }

 function regProduct() {

  var pname = document.getElementById('pname');
  var introDis = document.getElementById('introDis');
  var cat = document.getElementById('cat');
  var brand = document.getElementById('brand');
  var model = document.getElementById('model');
  var color = document.getElementById('color');
  var deCi = document.getElementById('deCi');
  var deCo = document.getElementById('deCo');
  var dis = document.getElementById('dis');
  var file1 = document.getElementById('file1');
  var file2 = document.getElementById('file2');
  var file3 = document.getElementById('file3');

  var form = new FormData();

  form.append('pn', pname.value);
  form.append('title', introDis.value);
  form.append('c', cat.value);
  form.append('b', brand.value);
  form.append('m', model.value);
  form.append('co', color.value);
  form.append('do', deCi.value);
  form.append('di', deCo.value);
  form.append('d', dis.value);
  form.append('image', image.files[0]);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {

      if (r.readyState == 4 && r.status == 200) {
          var response = r.responseText;
          //alert(response);
      }
  }
  r.open('POST', 'productRegProcess.php', true);
  r.send(form);

}
 
function updateStock() {

  var categroy = document.getElementById('categroy');
  var brand = document.getElementById('brand');
  var model = document.getElementById('model');
  var name = document.getElementById('name');
  var qty = document.getElementById('qty');
  var customer = document.getElementById('customer'); 
  var your = document.getElementById('your');

  // alert(pname.value);

  var f = new FormData();
  f.append("categroy", categroy.value);
  f.append("brand", brand.value);
  f.append("model", model.value);
  f.append("name", name.value);
  f.append("qty", qty.value);
  f.append("customer", customer.value);
  f.append("your", your.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
          var response = request.responseText;
          alert(response);
          location.reload();
      }
  }

  request.open('POST', 'updateStockProcess.php', true);
  request.send(f);

}

function searchProduct(x) {

  var page = x;
 
   var product = document.getElementById('product');
   //alert(product.value);
   var f = new FormData();
   f.append('p', product.value);
   f.append('pg', page);
    //alert(page);
  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
     if (request.readyState == 4 && request.status == 200) {
          var response = request.responseText;
       alert(response);

          document.getElementById("pid").innerHTML = response;

     }
  }

 request.open('POST', 'searchProductProcess.php', true);
  request.send(f);

}


function uploadImg(){
  //alert("of");
 

var img = document.getElementById("photoUploader");

//alert(img.value);

var f = new FormData();
f.append("i", img.files[0]);

var request = new XMLHttpRequest();
request.onreadystatechange = function (){
   if(request.readyState == 4 & request.status == 200){
       var response = request.responseText;
       alert(response);
      if (response == "empty") {
          alert("Please select Your Profile Image");
          
      } else {
          document.getElementById("i").src = response;
          img.value = "";
          
      }
   }
};
request.open("POST", "uploadUserImage.php", true);
request.send(f);

}

function loadProduct(x){

  var page = x;
  // alert(x);

  var f = new FormData();
  f.append("p", page);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function (){
      if(request.readyState == 4 & request.status == 200){
          var response = request.responseText;
          // alert(response);
          
          document.getElementById("pid").innerHTML = response;
     
      }
  };


  request.open("POST", "loadProductprocess.php", true);
  request.send(f);

}


function advSearchProduct(x) {
  alert("ok");

  var page = x;
  var cat = document.getElementById("category");
  var brand = document.getElementById("brand");
  var model = document.getElementById("model");
  var color = document.getElementById("color");
  var rangePrice = document.getElementById("rangePrice");

alert(rangePrice.value);
  
alert(brand.value);

  var f = new FormData();
  f.append("pg", page);
  f.append("cat", category.value);
  f.append("brand", brand.value);
  f.append("model", model.value);
  f.append("color", color.value);
  f.append("rangePrice", rangePrice.value);
  

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var responce = request.responseText;
      alert(responce);
      document.getElementById("pid").innerHTML = responce;
      
    }
  };

  request.open("POST", "advSearchProductProcess.php", true);
  request.send(f);
}




function addCart(x) {
  var stockId = x;
  var qty = document.getElementById("qty");

  if (qty.value > 0) {
    var f = new FormData();
    f.append("s", stockId);
    f.append("q", qty.value);

    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var responce = request.responseText;
         if(responce == "Cart item added successfully"){
          
        document.getElementById('sDiv').innerText = "Cart item added successfully";
        document.getElementById('successDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-green-800 bg-green-200 rounded-md";
        document.getElementById('errorDiv').className = "hidden";
         }else{
          
        document.getElementById('eDiv').innerHTML = response;
        document.getElementById('errorDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md";
          document.getElementById('successDiv').className = "hidden";
         }
       
       
        qty.value = "";
      }
    };

    request.open("POST", "addtoCartProcess.php", true);
    request.send(f);
  } else {
    alert("Please enter valid quantity.");
  }
}

function loadCart() {
  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var responce = request.responseText;
      // alert(responce);
      document.getElementById("cartBody").innerHTML = responce;
    }
  };

  request.open("POST", "loadCartprocess.php", true);
  request.send();
}

function incrementQty(x) {
  var cartId = x;
  var qty = document.getElementById("qty" + x);
  var newQty = parseInt(qty.value) + 1;
  // alert(newQty);

  var f = new FormData();
  f.append("c", cartId);
  f.append("q", newQty);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var responce = request.responseText;
      // alert(responce);
      if (responce == "Success") {
        qty.value = parseInt(qty.value) + 1;
        loadCart();
      } else {
        alert(responce);
      }
    }
  };

  request.open("POST", "updateCartQtyProcess.php", true);
  request.send(f);
}

function decrementQty(x) {
  var cartId = x;
  var qty = document.getElementById("qty" + x);
  var newQty = parseInt(qty.value) - 1;
  // alert(newQty);

  var f = new FormData();
  f.append("c", cartId);
  f.append("q", newQty);

  if (newQty > 0) {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
        var responce = request.responseText;
        // alert(responce);
        if (responce == "Success") {
          qty.value = parseInt(qty.value) - 1;
          loadCart();
        } else {
          alert(responce);
        }
      }
    };

    request.open("POST", "updateCartQtyProcess.php", true);
    request.send(f);
  }
}

function removeCart(x) {
  if (confirm("Are you sure deleting this item")) {
      
      var f = new FormData();
      f.append("c",x);

      var request = new XMLHttpRequest();
      request.onreadystatechange = function () {
          if (request.readyState == 4 && request.status == 200) {
              var responce = request.responseText;
              
              swal({
                title: "Are you sure?",
                text: responce,
                icon: "warning",
                buttons: true,
                dangerMode: true,
              })
              .then((willDelete) => {
                if (willDelete) {
                swal(responce, {
                  icon: "success",
                });
                } else {
                swal("Your file is safe!");
                }
              });
              reload();
          }
      }

      request.open("POST","removeCartProcess.php",true);
      request.send(f);

  }
}

function updateData(){
  // alert("Update Data");
  var fname = document.getElementById("fname");
  var lname = document.getElementById("lname");
  var email = document.getElementById("email");
  var password = document.getElementById("password");
  var username = document.getElementById("username");
  var mobile = document.getElementById("mobile");
  var no = document.getElementById("no");
  var line1 = document.getElementById("line1");
  var line2 = document.getElementById("line2"); 
  var province = document.getElementById("province");
  var distric = document.getElementById("distric");
  var city = document.getElementById("city");
  var gender = document.getElementById("gender");
 

 var f = new FormData();
  f.append("f", fname.value);
  f.append("l", lname.value);
  f.append("e", email.value);
  f.append("pw", password.value);
  f.append("u", username.value);
  f.append("m", mobile.value);
  f.append("n", no.value);
  f.append("l1", line1.value);
  f.append("l2", line2.value);
  f.append("pr", province.value);
  f.append("d", distric.value);
  f.append("c", city.value);
  f.append("g", gender.value);
var request = new XMLHttpRequest();
request.onreadystatechange = function (){
  if(request.readyState == 4 & request.status == 200){
      var response = request.responseText;

      if(response == "Success"){
        swal("Success!", response, "success");
      }
      else{
        swal("Sorry!", response, "error");
      }
  }
};
request.open("POST", "updateDataProcess.php", true);
request.send(f);
}


function signOut(){
  var request = new XMLHttpRequest();
  request.onreadystatechange = function (){
      if(request.readyState == 4 && request.status == 200){ // Use '&&' instead of '&'
          var response = request.responseText;
          swal("Success!", response, "success");
          location.reload(); // Corrected reload function
      }
  };
  request.open("POST", "signOutProcess.php", true);
  request.send();
}



function checkOut() {
   //alert("ok");

  var f = new FormData();
 f.append("cart",true);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
      if (request.readyState == 4 && request.status == 200) {
         var responce = request.responseText;
         // alert(responce);
          var payment = JSON.parse(responce);
          doCheckout(payment, "checkoutProcess.php");
     }
  }

 request.open("POST","paymentProcess.php",true);
request.send(f);
}


function doCheckout(payment, path) {
  payhere.onCompleted = function onCompleted(orderId) {
      console.log("Payment completed. OrderID:" + orderId);

      var f = new FormData();
      f.append("payment", JSON.stringify(payment));

      var request = new XMLHttpRequest();
      request.onreadystatechange = function () {
          if (request.readyState == 4 & request.status == 200) {
              var responce = request.responseText;
             var order = JSON.parse(responce);

              if (order.resp == "Success") {
                  console.log("Order completed with ID: " + order.order_id);
                  window.location = "invoice.php?orderId=" + order.order_id; // Fixed key name
              } else {
                 alert(responce);
             }
          }
      };

      request.open("POST", path, true);
      request.send(f);

  };

  // Payment window closed
  payhere.onDismissed = function onDismissed() {
      // Note: Prompt user to pay again or show an error page
      console.log("Payment dismissed");
  };

  // Error occurred
  payhere.onError = function onError(error) {
      // Note: show an error page
      console.log("Error:"  + error);
  };

  // Show the payhere.js popup, when "PayHere Pay" is clicked
  // document.getElementById('payhere-payment').onclick = function (e) {
      payhere.startPayment(payment);
  // };
}


function buyNow(stockId) {
  // alert(stockId);
  var qty = document.getElementById("qty");

  if (qty.value > 0) {
      
      var f = new FormData();
      f.append("cart", false);
      f.append("stockId",stockId);
      f.append("qty",qty.value);

      var request = new XMLHttpRequest();
      request.onreadystatechange = function () {
          if (request.readyState == 4 && request.status == 200) {
              var responce = request.responseText;
              // alert(responce);
              var payment = JSON.parse(responce);
              payment.stock_id = stockId;
              payment.qty = qty.value;
              doCheckout(payment, "buynowProcess.php");
          }
      }

      request.open("POST","paymentProcess.php",true);
      request.send(f);
      
  } else {
      alert("Please enter valid quantity");
  }
}

function updateStatusproduct(){

  var pid = document.getElementById("pid");
  //alert(uid.value);
  
   var f = new FormData();
    f.append("productid", pid.value);
    
    
  var request = new XMLHttpRequest();
  request.onreadystatechange = function(){
    if(request.readyState == 4 & request.status == 200){
      var response = request.responseText;
      //alert(response);
      if (response == "Deactive") {

        document.getElementById('sDiv').innerText = "User Deactivate Successfully";
        document.getElementById('successDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-green-800 bg-green-200 rounded-md";
        document.getElementById('errorDiv').className = "hidden";
        uid.value = "";

        loadUser();

    } else if (response == "Active") {

        document.getElementById('sDiv').innerText = "User Activate Successfully";
        document.getElementById('successDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-green-800 bg-green-200 rounded-md";
        document.getElementById('errorDiv').className = "hidden";
        uid.value = "";

        loadUser();

    } else {

        document.getElementById('eDiv').innerHTML = response;
        document.getElementById('errorDiv').className = "flex items-center visible col-span-2 px-3 py-4 text-lg text-red-800 bg-red-200 rounded-md";
        document.getElementById('successDiv').className = "hidden";

    }
    }
  }

  request.open("POST", "productActiveProcess.php", true);
  request.send(f);
}

function loadproduct(){
  // alert("ok");
 
  var request = new XMLHttpRequest();
 
  request.onreadystatechange= function(){
   if(request.status == 200 & request.readyState == 4){
     var response = request.responseText;
     //alert(response);
 
     document.getElementById("tbp").innerHTML = response;
   } };
  
   request.open("POST", "loadProductS.php", true);
  request.send();
 }

 function forgetPassword() {
  var email = document.getElementById("e");

  if (email.value != "") {
      
      var f = new FormData();
      f.append("e", email.value);

      var request = new XMLHttpRequest();
      request.onreadystatechange = function () {
          if (request.readyState == 4 & request.status == 200) {
              var response = request.responseText;
              // alert(response);
              if (response == "Success") {
                  document.getElementById("msg").innerHTML = "Check your email to reset password";
                  document.getElementById("msg").className = "alert alert-success";
                  document.getElementById("msgDiv").className = "d-block";
              } else {
                  document.getElementById("msg").innerHTML = response;
                  document.getElementById("msg").className = "alert alert-danger";
                  document.getElementById("msgDiv").className = "d-block";
              }
          }
      };

      request.open("POST", "forgetPasswordProcess.php", true);
      request.send(f);

  }else{
      alert("Please enter your email");
  }  
}

function resetPassword() {
  var vcode = document.getElementById("vcode");
  var np = document.getElementById("np");
  var np2 = document.getElementById("np2");
 
  var f = new FormData();
  f.append("vcode", vcode.value);
  f.append("np", np.value);
  f.append("np2", np2.value);

  var request = new XMLHttpRequest();
  request.onreadystatechange = function () {
      if (request.readyState == 4 & request.status == 200) {
          var response = request.responseText;
          // alert(response);
          if (response == "Success") {
              window.location = "signIn.php";
          } else {
            document.getElementById("msg").innerHTML = response;
            document.getElementById("msg").className = "alert alert-danger";
            document.getElementById("msgDiv").className = "d-block";


          }
      }
      
  };

  request.open("POST", "resetPasswordProcess.php", true);
  request.send(f);
} 









