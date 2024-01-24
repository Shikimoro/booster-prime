var idToChange;

function contentChangeForm(buttonElement) { 
    var modalSelect = document.getElementById("selectChangeStatus");

    modalSelect.innerHTML = '';

    let row = buttonElement.closest('tr');

    idToChange = row.cells[row.cells.length - 2].innerText;  

    let username = row.cells[0].innerText;
    let cost = row.cells[1].innerText;
    let selectedValue = row.cells[2].innerText;
    var dataFromDatabase = ["Администратор","Модератор"];
    for (var i = 0; i < dataFromDatabase.length; i++) {
        var option = document.createElement("option");
        option.value = "option" + (i + 1); 
        option.text = dataFromDatabase[i];
        modalSelect.add(option);

        if (dataFromDatabase[i] === selectedValue) {
          option.selected = true;
        }
      }    
    document.getElementById("inputChangeUsername").value = username;
    document.getElementById("inputChangePassword").value = cost;
    
}

function changeForm() {
    var inputChangeUsername = $("#inputChangeUsername").val();
    var inputChangePassword = $("#inputChangePassword").val();
    var selectElement = document.getElementById("selectChangeStatus");
    var selectedOption = selectElement.options[selectElement.selectedIndex].textContent;
    $.ajax({
    type: 'POST',
    url: 'function/changeUsers.php',
    data: { 
        id: idToChange,
        username: inputChangeUsername,
        pass: inputChangePassword,
        user_status: selectedOption
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
        inputFuelName = 0;
        inputCost  = 0;
        inputMinAmount  = 0;
        idToChange  = 0;
        console.error('Error:', error);
    }});
    }