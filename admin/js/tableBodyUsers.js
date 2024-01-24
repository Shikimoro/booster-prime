document.addEventListener("DOMContentLoaded", function() {
      tableContent()
  }); 
var rowsPerPage = 10; // Количество строк на странице
var currentPage = 1; // Текущая страница
// ----------------------------------------------------------------------------------------------------------------------------------------------
//                                           ПОЛЬЗОВАТЕЛИ НАЧАЛО
// ----------------------------------------------------------------------------------------------------------------------------------------------
function tableContent(){
    let tableBodyUsers = document.getElementById('tableBodyUsers');
     fetch('../admin/function/getUsers.php')
      .then(response => response.json())
      .then(data => {
      for(let i = 0; i < data.length; i++) {
        let opt = data[i];
        let idTableElement = document.createElement('td');
        idTableElement.style.display = 'none';
        idTableElement.setAttribute('id', 'idTableElement');
        idTableElement.textContent = opt.id;

        let tableUsername = document.createElement('td');
        tableUsername.textContent = opt.Login;
  
        let tablePass = document.createElement('td');
        tablePass.textContent = opt.Pass;
  
        let tableRole = document.createElement('td');
        tableRole.textContent = opt.Role;
  
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
      
        row.appendChild(tableUsername);
        row.appendChild(tablePass);
        row.appendChild(tableRole);
        row.appendChild(idTableElement);
  // ------------------------КНОПКА В ТАБЛИЦЕ--------------------------------------
        row.appendChild(tableButton);
  // ------------------------КНОПКА В ТАБЛИЦЕ--------------------------------------
        tableBodyUsers.appendChild(row);

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
  
  
  
  
  
  
  
  // ----------------------------------------------------------------------------------------------------------------------------------------------
  //                                           ПОЛЬЗОВАТЕЛИ КОНЕЦ
  // ----------------------------------------------------------------------------------------------------------------------------------------------
  