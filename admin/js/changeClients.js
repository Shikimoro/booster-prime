var idToChange;

function contentChangeForm(buttonElement) { 
    var modalSelect = document.getElementById("selectChangeCarColor");
    modalSelect.innerHTML = '';

    let row = buttonElement.closest('tr');

    idToChange = row.cells[row.cells.length - 2].innerText;  

    let phone_number = row.cells[0].innerText;
    let client_name = row.cells[1].innerText;
    let car_number = row.cells[2].innerText;
    let car_model = row.cells[3].innerText;
    let selectedValue = row.cells[4].innerText;
    var dataFromDatabase = ["Серебрянный", "Серый", "Черный", "Коричневый", "Золотой", "Бежевый", "Красный", "Оранжевый", "Желтый", "Зеленый", "Голубой", "Синий", "Фиолетовый", "Пурпурный", "Розовый"
    ];
    for (var i = 0; i < dataFromDatabase.length; i++) {
        var option = document.createElement("option");
        option.value = "option" + (i + 1); 
        option.text = dataFromDatabase[i];
        modalSelect.add(option);

        if (dataFromDatabase[i] === selectedValue) {
          option.selected = true;
        }
      }   
      document.getElementById("inputChangeClientsPhone").value = phone_number;
      document.getElementById("inputChangeClientsName").value = client_name;
      document.getElementById("inputChangeCarNumber").value = car_number;
      document.getElementById("inputChangeCarModel").value = car_model;
  
}

function changeForm() {
    var inputChangeClientsPhone = $("#inputChangeClientsPhone").val();
    var inputChangeClientsName = $("#inputChangeClientsName").val();
    var inputChangeCarNumber = $("#inputChangeCarNumber").val();
    inputChangeCarNumber = inputChangeCarNumber.toUpperCase();
    var inputChangeCarModel = $("#inputChangeCarModel").val();
    
    var selectElement = document.getElementById("selectChangeCarColor");
    selectElement = selectElement.options[selectElement.selectedIndex].textContent;
    $.ajax({
     type: "POST",
         url: "function/changeClients.php",
         data: { 
            id: idToChange,
            phone_number: inputChangeClientsPhone,
            client_name: inputChangeClientsName,
            car_number: inputChangeCarNumber,
            car_model: inputChangeCarModel,
            car_color: selectElement
        },
    success: function(response) {
        
        
        var closeButton = document.getElementById("closeButtonChange");
        closeButton.click();
    
        var table = document.getElementById("dataTable");
        var tbody = table.getElementsByTagName('tbody')[0];
        while (tbody.firstChild) {
            tbody.removeChild(tbody.firstChild);
        }
        document.getElementById("inputChangeClientsPhone").value = "";
        document.getElementById("inputChangeClientsName").value = "";
        document.getElementById("inputChangeCarNumber").value = "";
        document.getElementById("inputChangeCarModel").value = "";
        document.getElementById("selectChangeCarColor").value = "";

    
        tableContent();
     },
     error: function(error) {
         console.error(error);
     }
    });
    };
    