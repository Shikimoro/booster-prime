document.addEventListener("DOMContentLoaded", function() {
      tableContentLastOrders();
      tableContentNewClients();
  }); 

// ----------------------------------------------------------------------------------------------------------------------------------------------
//                                           ГЛАВНАЯ НАЧАЛО
// ----------------------------------------------------------------------------------------------------------------------------------------------
function tableContentLastOrders(){
    let tableBodyHome = document.getElementById('tableBodyHome');
     fetch('../admin/function/getOrders.php')
      .then(response => response.json())
      .then(data => {
      var limitOrders = Math.min(data.length, 10);
      for(let i = 0; i < limitOrders; i++) {
        let opt = data[i];

        let phoneNumber = document.createElement('td');
        phoneNumber.textContent = opt.phone_number;

        let price = document.createElement('td');
        price.textContent = opt.price;
        
        let paymentMethod = document.createElement('td');
        paymentMethod.textContent = opt.payment_method;

        let paymentStatus = document.createElement('td');
        let paymentStatusSpan = document.createElement('span');
        paymentStatusSpan.textContent = opt.order_status;
        paymentStatusSpan.classList.add('status');
        paymentStatusSpan.classList.add(dict.get(opt.order_status));
        paymentStatus.appendChild(paymentStatusSpan);
  
   // ------------------------КНОПКА В ТАБЛИЦЕ--------------------------------------
  
        let row = document.createElement('tr');
      
        row.appendChild(phoneNumber);
        row.appendChild(price);
        row.appendChild(paymentMethod);
        row.appendChild(paymentStatus);
        
        tableBodyHome.appendChild(row);
        
    }});    
  };


  function tableContentNewClients(){
    let tableBodyHome = document.getElementById('tableBodyNewClients');
     fetch('../admin/function/getClients.php')
      .then(response => response.json())
      .then(data => {
        var limitClients = Math.min(data.length, 5);
      for(let i = 0; i < limitClients; i++) {
        let jsonData = data[i];
        
        let itemNewCard = document.createElement('td');

        let NewCardClientsDiv = document.createElement('div');
        NewCardClientsDiv.classList.add('imgBx');
        itemNewCard.appendChild(NewCardClientsDiv);

        let CardClientsDivImg = document.createElement('img');
        CardClientsDivImg.src = 'img/customer02.jpg';
        NewCardClientsDiv.appendChild(CardClientsDivImg);
        
        
        let itemNewCardClients = document.createElement('td');

        let tablePhoneNumber = document.createElement('h4');
        tablePhoneNumber.textContent = jsonData.phone_number;
        itemNewCardClients.appendChild(tablePhoneNumber);

        let tableBr = document.createElement('br');
        tablePhoneNumber.appendChild(tableBr);

        let idTableElement = document.createElement('span');
        idTableElement.style.display = 'none';
        idTableElement.textContent = jsonData.id;
        tablePhoneNumber.appendChild(idTableElement);
        
        let tableClientName = document.createElement('span');
        tableClientName.textContent = jsonData.client_name;
        tablePhoneNumber.appendChild(tableClientName);

        let row = document.createElement('tr');
        row.appendChild(itemNewCard);
        row.appendChild(itemNewCardClients);
        
        tableBodyHome.appendChild(row);
        
    }
  });    
  };
  // ----------------------------------------------------------------------------------------------------------------------------------------------
  //                                           ГЛАВНАЯ КОНЕЦ
  // ----------------------------------------------------------------------------------------------------------------------------------------------