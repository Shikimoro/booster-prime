var idToDeleteForm;
function removeFormContent(buttonElement) {
    let row = buttonElement.closest('tr');
    idToDeleteForm =  row.cells[row.cells.length - 2].innerText;  
}

function removeForm() {
    $.ajax({
    type: 'POST',
    url: 'function/removeUsers.php',
    data: { id: idToDeleteForm },
    success: function(response) {
        idToDeleteForm = 0;
        console.log(response);
    
        var closeButton = document.getElementById("closeButtonRemove");
            closeButton.click();
            var table = document.getElementById("dataTable");
            var tbody = table.getElementsByTagName('tbody')[0];
            while (tbody.firstChild) {
                tbody.removeChild(tbody.firstChild);
            }
            tableContent();
    },
    error: function(error) {
        idToDeleteForm = 0;
        console.error('Error:', error);
    }});
    }