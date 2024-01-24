var idToChange;

function contentChangeForm(buttonElement) { 
    let row = buttonElement.closest('tr');

    idToChange = row.cells[row.cells.length - 2].innerText;  

    let fuels = row.cells[0].innerText;
    let cost = row.cells[1].innerText;
    let min_amount = row.cells[2].innerText;

    document.getElementById("inputChangeFuelName").value = fuels;
    document.getElementById("inputChangeCost").value = cost;
    document.getElementById("inputChangeMinAmount").value = min_amount;
}

function changeForm() {
    var inputFuelName = $("#inputChangeFuelName").val();
    var inputCost = $("#inputChangeCost").val();
    var inputMinAmount = $("#inputChangeMinAmount").val();
    $.ajax({
    type: 'POST',
    url: 'function/changeFuel.php',
    data: { 
        id: idToChange,
        title: inputFuelName,
        cost: inputCost,
        min_amount: inputMinAmount
    },
    success: function(response) {

        console.log(response);

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