function submitForm() {
   
    var inputAddClientsPhone = $("#inputAddClientsPhone").val();
    var inputAddClientsName = $("#inputAddClientsName").val();
    var inputAddCarNumber = $("#inputAddCarNumber").val();
    inputAddCarNumber = inputAddCarNumber.toUpperCase();
    var inputAddCarModel = $("#inputAddCarModel").val();
    var selectElement = document.getElementById("selectAddCarColor");
    var selectedOption = selectElement.options[selectElement.selectedIndex].textContent;
    $.ajax({
     type: "POST",
         url: "function/postAddClients.php",
         data: { 
            phone_number: inputAddClientsPhone,
            client_name: inputAddClientsName,
            car_number: inputAddCarNumber,
            car_model: inputAddCarModel,
            car_color: selectedOption
        },
    success: function(response) {
        
        
        var closeButton = document.getElementById("closeButtonAddendum");
        closeButton.click();
    
        var table = document.getElementById("dataTable");
        var tbody = table.getElementsByTagName('tbody')[0];
        while (tbody.firstChild) {
            tbody.removeChild(tbody.firstChild);
        }
        document.getElementById("inputAddClientsPhone").value = "";
        document.getElementById("inputAddClientsName").value = "";
        document.getElementById("inputAddCarNumber").value = "";
        document.getElementById("inputAddCarModel").value = "";
        document.getElementById("selectAddCarColor").value = "";

    
        tableContent();
     },
     error: function(error) {
         console.error(error);
     }
    });
    };