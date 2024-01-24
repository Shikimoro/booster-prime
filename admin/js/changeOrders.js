var idToChange;

function contentChangeForm(buttonElement) { 
    var modalSelect = document.getElementById("selectChangeOrders");

    modalSelect.innerHTML = '';

    let row = buttonElement.closest('tr');

    idToChange = row.cells[row.cells.length - 2].innerText;  

    
    let selectedValue = row.cells[row.cells.length - 3].innerText;
    var dataFromDatabase = ["Оплачено","Ожидается","Отменён"];
    for (var i = 0; i < dataFromDatabase.length; i++) {
        var option = document.createElement("option");
        option.value = "option" + (i + 1); 
        option.text = dataFromDatabase[i];
        modalSelect.add(option);

        if (dataFromDatabase[i] === selectedValue) {
          option.selected = true;
        }
      }       
}

function changeForm() {
    var selectElement = document.getElementById("selectChangeOrders");
    var selectedOption = selectElement.options[selectElement.selectedIndex].textContent;
    $.ajax({
    type: 'POST',
    url: 'function/changeOrders.php',
    data: { 
        id: idToChange,
        order_status: selectedOption
    },
    success: function(response) {
        

        var closeButton = document.getElementById("closeButtonChange");
            closeButton.click();
            var table = document.getElementById("dataTable");
            var tbody = table.getElementsByTagName('tbody')[0];
            while (tbody.firstChild) {
                tbody.removeChild(tbody.firstChild);
            }
            tableContent();
    },
    error: function(error) {
        idToChange  = 0;
        console.error('Error:', error);
    }});
    }