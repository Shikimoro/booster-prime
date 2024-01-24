function searchClients(){
    var closeButton = document.getElementById("closeButtonChange");
    closeButton.click();
  
    var table = document.getElementById("dataTable");
    var tbody = table.getElementsByTagName('tbody')[0];
    while (tbody.firstChild) {
        tbody.removeChild(tbody.firstChild);
    }
    tableSearchContent();
}

function tableSearchContent(){
    var searchClientsPhone = $("#searchClientsPhone").val();
    $.ajax({
        url: 'function/getSearchClients.php',
        type: 'GET',
        dataType: 'json',
        data: {
            phone_number: searchClientsPhone
        },
        success: function (data) {
        let tableBodyClients = document.getElementById('tableBodyClients');
        console.log(data); 
        for(let i = 0; i < data.length; i++) {
            let opt = data[i];
            let idTableElement = document.createElement('td');
            idTableElement.style.display = 'none';
            idTableElement.textContent = opt.id;
    
            let tablePhoneNumber = document.createElement('td');
            tablePhoneNumber.textContent = opt.phone_number;
      
            let tableClientName = document.createElement('td');
            tableClientName.textContent = opt.client_name;
      
            let tableCarNumber = document.createElement('td');
            tableCarNumber.textContent = opt.car_number;
    
            let tableCarModel = document.createElement('td');
            tableCarModel.textContent = opt.car_model;
            
            let tableCarColor = document.createElement('td');
            tableCarColor.textContent = opt.car_color;
      
      // ------------------------КНОПКА В ТАБЛИЦЕ--------------------------------------
            let tableButton = document.createElement('td');
            let tableButtonLi = document.createElement('li');
            tableButtonLi.classList.add('nav-item');
            tableButtonLi.classList.add('dropdown');
            tableButton.appendChild(tableButtonLi);
      
            let LiButton = document.createElement('button');
            LiButton.classList.add('btn');
            LiButton.classList.add('nav-link');
            LiButton.classList.add('dropdown-toggle');
            LiButton.setAttribute( 'data-bs-toggle', 'dropdown');
            tableButtonLi.appendChild(LiButton);
      
            let LiButtonUl = document.createElement('ul');
            LiButtonUl.classList.add('dropdown-menu');
            LiButton.appendChild(LiButtonUl);
      
            let ButtonUlLi = document.createElement('li');
            LiButtonUl.appendChild(ButtonUlLi);
      
            let LiRemove = document.createElement('button');
            LiRemove.classList.add('dropdown-item');
            LiRemove.classList.add('btn');
            LiRemove.classList.add('btn-primary');
            LiRemove.setAttribute('type', 'button');
            LiRemove.setAttribute('data-bs-toggle', 'modal');
            LiRemove.setAttribute('data-bs-target', '#exampleModalRemove')
            LiRemove.setAttribute('onclick', 'removeFormContent(this)')
            LiRemove.textContent ='Удалить';
            ButtonUlLi.appendChild(LiRemove);
      
            let LiChange = document.createElement('button');
            LiChange.classList.add('dropdown-item');
            LiChange.classList.add('btn');
            LiChange.classList.add('btn-primary');
            LiChange.setAttribute('type', 'button');
            LiChange.setAttribute('data-bs-toggle', 'modal');
            LiChange.setAttribute('data-bs-target', '#exampleModalСhange')
            LiChange.setAttribute('onclick', 'contentChangeForm(this)')
            LiChange.textContent = 'Изменить';
            ButtonUlLi.appendChild(LiChange);
       // ------------------------КНОПКА В ТАБЛИЦЕ--------------------------------------
      
            let row = document.createElement('tr');
          
            row.appendChild(tablePhoneNumber);
            row.appendChild(tableClientName);
            row.appendChild(tableCarNumber);
            row.appendChild(tableCarModel);
            row.appendChild(tableCarColor);
            row.appendChild(idTableElement);
    
      // ------------------------КНОПКА В ТАБЛИЦЕ--------------------------------------
            row.appendChild(tableButton);
      // ------------------------КНОПКА В ТАБЛИЦЕ--------------------------------------
            tableBodyClients.appendChild(row);
            
        }
        showPage(currentPage);
        updatePaginationButtons();
        var closeButton = document.getElementById("closeButtonSearch");
        closeButton.click();
 },
error: function (xhr, status, error) {
    // Обработка ошибок
    console.error('AJAX request failed:', status, error);
}
});
};
