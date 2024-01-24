document.addEventListener("DOMContentLoaded", function() {
  var eventCalllback = function(e) {
    var el = e.target,
      clearVal = el.dataset.phoneClear,
      pattern = el.dataset.phonePattern,
      matrix_def = "+7(___) ___-__-__",
      matrix = pattern ? pattern : matrix_def,
      i = 0,
      def = matrix.replace(/\D/g, ""),
      val = e.target.value.replace(/\D/g, "");
    if (clearVal !== 'false' && e.type === 'blur') {
      if (val.length < matrix.match(/([\_\d])/g).length) {
        e.target.value = '';
        return;
      }
    }
    if (def.length >= val.length) val = def;
    e.target.value = matrix.replace(/./g, function(a) {
      return /[_\d]/.test(a) && i < val.length ? val.charAt(i++) : i >= val.length ? "" : a
    });
  }
  var phone_inputs = document.querySelectorAll('[data-phone-pattern]');
  for (let elem of phone_inputs) {
    for (let ev of ['input', 'blur', 'focus']) {
      elem.addEventListener(ev, eventCalllback);
    }
  }
});

document.addEventListener("DOMContentLoaded", function() {
  let time_inputs = document.getElementById('inputDeliveryTime');
  let now = new Date();
  now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
  time_inputs.value = now.toISOString().slice(0,16);
  time_inputs.setAttribute('min',now.toISOString().slice(0,16));
});

document.addEventListener("DOMContentLoaded", function() {
  let min_amount = '';
  let product = document.getElementById('selectProduct');
  let price = document.getElementById('oil-price');
  let amount = document.getElementById('inputAmount');
  let sum = document.getElementById('inputSum');
  let minAmount = document.getElementById('minAmount');
  let current_price = 0;
  fetch('../functions/getOilType.php')
    .then(response => response.json())
    .then(data => {
      for(let i = 0; i < data.length; i++) {
        let opt = data[i];
        let el = document.createElement("option");
        el.textContent = opt.title;
        el.value = opt.id;
        el.setAttribute('data-minAmount',opt.min_amount);
        el.setAttribute('data-cost',opt.cost);
        product.appendChild(el);
    }})
    .then(()=>{
      product.addEventListener('input', function(e){
    let selectedOption = product.options[product.selectedIndex];
    min_amount = selectedOption.getAttribute('data-minAmount');
    current_price = selectedOption.getAttribute('data-cost');
    amount.setAttribute('min', min_amount);
    minAmount.textContent = `*мин. объем: ${min_amount}`;
    amount.value = min_amount;
    sum.value = amount.value * current_price;
    price.textContent = `${current_price} ₽`;

  });
  amount.addEventListener('input', function(){
    if(amount>=min_amount){ 
      sum.value = parseInt(amount.value * current_price);
    }
  });
  sum.addEventListener('input', function(){
    let min_sum = min_amount * current_price;
    if(sum.value>= min_sum){
      let floatAmount = sum.value / current_price;
      amount.value = parseFloat(floatAmount.toFixed(3));
    }else{
      sum.value = parseInt(amount.value * current_price);
    }
  });
product.dispatchEvent(new Event('input'));
    })
    .catch((error) => {
      console.error('Error:', error);
    });

});

document.getElementById('inputUsername').addEventListener('keydown', function (event) {    
  if ((event.key >= '0' && event.key <= '9') || /[-=№"'!@#$%^&*()_+{}\[\]:;<>,.?~\\\/]/.test(event.key)) {
        event.preventDefault();
      }
 });
 document.getElementById('inputAmount').addEventListener('keydown', function (event) {    
  if (!((event.key >= '0' && event.key <= '9') || event.key === 'Enter' || event.key === 'Backspace')) {

    event.preventDefault();
}
});
document.getElementById('inputSum').addEventListener('keydown', function (event) {    
  if (!((event.key >= '0' && event.key <= '9') || event.key === 'Enter' || event.key === 'Backspace')) {
    event.preventDefault();
}
});

 
const form = document.getElementById("open-modal");
form.addEventListener("submit", ZXC);
const confirmButton = document.getElementById("addOrder");

function confirmOrder(){
    document.getElementById("loader-container").style.display = "inline-flex";
    var inputUsername = $("#inputUsername").val();

    var inputPhone = $("#inputPhone").val();

    var inputCarModel = $("#inputCarModel").val();

    var inputCarColor = document.getElementById("inputCarColor");
    var selectedOptionCarColor = inputCarColor.options[inputCarColor.selectedIndex].textContent;

    var inputCarNumber = $("#inputCarNumber").val();
    inputCarNumber = inputCarNumber.toUpperCase();

    var selectProduct = document.getElementById("selectProduct");
    var selectedOptionProduct = selectProduct.options[selectProduct.selectedIndex].value;

    var inputAmount = $("#inputAmount").val();

    var inputSum = $("#inputSum").val();

    var selectPaymentType = document.getElementById("paymentType");
    var selectedOptionPaymentType = selectPaymentType.options[selectPaymentType.selectedIndex].textContent;

    var selectCity = document.getElementById("selectCity");
    var selectedOptionCity = selectCity.options[selectCity.selectedIndex].textContent;

    var inputAddress= $("#inputAddress").val();

    var inputDeliveryTime= $("#inputDeliveryTime").val();

    var orderStatus= "Ожидается";
     $.ajax({
     type: "POST",
         url: "functions/postAddOrder.php",
         data: { 
          name:inputUsername,
          phone_number:inputPhone,
          car_model:inputCarModel,
          car_color:selectedOptionCarColor,
          car_number:inputCarNumber,
          oil_id:selectedOptionProduct,
          oil_amount:inputAmount,
          price:inputSum,
          payment_method:selectedOptionPaymentType,
          city:selectedOptionCity,
          address:inputAddress,
          delivery_time:inputDeliveryTime,
          order_status:orderStatus
        },
    success: function(response) {
      var jsonString = response.match(/\{.*\}/)[0];
      var jsonObject = JSON.parse(jsonString);
      var lastInsertedId = '';
        if (jsonObject.hasOwnProperty('id')) {
            lastInsertedId = jsonObject.id;
            console.log("Полученный ID: " + lastInsertedId);
        } else {
            console.error("Свойство 'id' отсутствует в объекте JSON");
        }
      
        var closeButton = document.getElementById("closeButtonAddendum");
        closeButton.click();
        document.getElementById("loader-container").style.display = "none";
        $("#ModalAddendumSuccesful").modal("show");
        document.getElementById("orderNumberForAddendum").textContent = lastInsertedId;

     },
     error: function(error) {
         console.error(error);
         document.getElementById("loader-container").style.display = "none";
         $("#ModalAddendumError").modal("show");
     }
    });
}

function ZXC(e){
  e.preventDefault();
  
  var inputUsername = $("#inputUsername").val();
  var inputPhone = $("#inputPhone").val();
  var selectProduct = document.getElementById("selectProduct");
  var selectedOptionProduct = selectProduct.options[selectProduct.selectedIndex].textContent;
  var inputAmount = $("#inputAmount").val();
  var inputSum = $("#inputSum").val();
  var selectPaymentType = document.getElementById("paymentType");
  var selectedOptionPaymentType = selectPaymentType.options[selectPaymentType.selectedIndex].textContent;
  var inputAddress= $("#inputAddress").val();

  var inputDeliveryTime= $("#inputDeliveryTime").val();
  var dateTimeArray = inputDeliveryTime.split("T");
  var timePart = dateTimeArray[1]; 
  
  if (timePart >= "08:00" && timePart <= "19:45") {
      if (selectedOptionPaymentType == "Банковская карта") {
        $("#ModalAddendumOnlinePayment").modal("show");
        let oilPrice = document.getElementById("oil-price").textContent
        oilPrice.split(" "); 
        let price = oilPrice.slice(0, -2);
        document.getElementById("sumForPay").setAttribute('data-price','price')
        document.getElementById("sumForPay").setAttribute('data-count','inputAmount')
        document.getElementById("sumForPay").textContent = inputSum + " ₽";
        document.getElementById("oilTypeOnline").textContent = selectedOptionProduct;
        document.getElementById("oilAmountOnline").textContent = inputAmount + "x";
        
        var digitsOnly = inputPhone.replace(/\D/g, '');
        digitsOnly = '8' + digitsOnly.substring(1);
        document.getElementById("phoneOnline").value = digitsOnly;

        document.getElementById("nameOnline").value = inputUsername;
        document.getElementById("addressOnline").value = inputAddress;
        document.getElementById("sumOnline").textContent = inputSum + " ₽";
        document.getElementById("sumForPayOnline").value = inputSum; 
       
      }else{
        $("#ModalAddendum").modal("show");
        document.getElementById("modalName").textContent = "Имя : " + " " + inputUsername;
        document.getElementById("modalNumber").textContent = "Номер телефона : "+ " " + inputPhone;
        document.getElementById("modalOilType").textContent = "Вид топлива : " + " " + selectedOptionProduct;
        document.getElementById("modalSum").textContent = "Сумма : " + " " + inputSum;
        document.getElementById("modalPaymentMethod").textContent = "Способ оплаты : " + " " + selectedOptionPaymentType;
        document.getElementById("modalAddress").textContent = "Адрес : " + " " + inputAddress;    
      }
    
  }
  else{
    $("#ModalNotDeliveryTime").modal("show");
  }
 
}
function checkOrderStatus(){
  $("#ModalCheckOrderStatus").modal("show");
  var inputOrderId = $("#inputOrderId").val();
    $.ajax({
        url: 'functions/checkOrderStatus.php',
        type: 'GET',
        dataType: 'json',
        data: {
            id: inputOrderId
        },
        success: function (res) {
        let result = res[0];
        document.getElementById("modalOrderId").textContent = "Номер заказа : " + " " + result.id;
        document.getElementById("modalOrderNumber").textContent = "Номер телефона : "+ " " + result.phone_number ;
        document.getElementById("modalOrderAddress").textContent = "Адрес : " + " " + result.address;
        document.getElementById("modalOrderSum").textContent = "Сумма : " + " " + result.price;
        document.getElementById("modalDeliveryTime").textContent = "Дата заказа : " + " " + result.delivery_time;
        document.getElementById("modalOrderStatusPayment").textContent = "Статус заказа : " + " " + result.order_status;
       
         },
         error: function (xhr, status, error) {
          console.error('AJAX request failed:', status, error);
        }
});
}