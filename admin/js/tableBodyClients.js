document.addEventListener("DOMContentLoaded", function() {
      tableContent();
      phonePattern();
  }); 

var rowsPerPage = 10; // Количество строк на странице
var currentPage = 1; // Текущая страница
// ----------------------------------------------------------------------------------------------------------------------------------------------
//                                           КЛИЕНТЫ НАЧАЛО
// ----------------------------------------------------------------------------------------------------------------------------------------------
function tableContent(){
    let tableBodyClients = document.getElementById('tableBodyClients');
     fetch('../admin/function/getClients.php')
      .then(response => response.json())
      .then(data => {
      
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
        
        showPage(currentPage);
        updatePaginationButtons();
    }});
  };
  
  
  function showPage(pageNumber) {
    var table = document.getElementById("dataTable");
    var rows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr");
  
    // Скрываем все строки
    for (var i = 0; i < rows.length; i++) {
          rows[i].style.display = "none";
        }
      
        // Определяем диапазон строк для текущей страницы
        var startIndex = (pageNumber - 1) * rowsPerPage;
        var endIndex = startIndex + rowsPerPage;
      
        // Показываем только нужные строки
        for (var j = startIndex; j < endIndex && j < rows.length; j++) {
          rows[j].style.display = "";
        }
  }
  
  function updatePaginationButtons() {
    var table = document.getElementById("dataTable");
    var totalRows = table.getElementsByTagName("tbody")[0].getElementsByTagName("tr").length;
    var totalPages = Math.ceil(totalRows / rowsPerPage);
    var paginationButtons = document.getElementById("paginationButtons");
  
    // Очищаем предыдущие кнопки
    paginationButtons.innerHTML = '';
  
    if (totalPages <= 1) {
      return;
    }

    // Создаем кнопки для каждой страницы
    for (var i = 1; i <= totalPages; i++) {
      var button = document.createElement("button");
      button.innerHTML = i;
      button.onclick = function() {
        currentPage = parseInt(this.innerHTML);
        showPage(currentPage);
        updatePaginationButtons();
      };
      if (i === currentPage) {
        button.classList.add("activePage");
      }
      paginationButtons.appendChild(button);
    }
  }
 
  function phonePattern() {
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
  };

  // ----------------------------------------------------------------------------------------------------------------------------------------------
  //                                           КЛИЕНТЫ КОНЕЦ
  // ----------------------------------------------------------------------------------------------------------------------------------------------
  