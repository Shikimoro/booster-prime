function submitForm() {
   
    var inputAddUsername = $("#inputAddUsername").val();
    var inputAddPassword = $("#inputAddPassword").val();
    var selectElement = document.getElementById("selectAddStatus");
    var selectedOption = selectElement.options[selectElement.selectedIndex].textContent;
    $.ajax({
     type: "POST",
         url: "function/postAddUsers.php",
         data: { 
            username: inputAddUsername,
            pass: inputAddPassword,
            user_status: selectedOption
        },
    success: function(response) {
        
        
        var closeButton = document.getElementById("closeButtonAddendum");
        closeButton.click();
    
        var table = document.getElementById("dataTable");
        var tbody = table.getElementsByTagName('tbody')[0];
        while (tbody.firstChild) {
            tbody.removeChild(tbody.firstChild);
        }
        document.getElementById("inputAddUsername").value = "";
        document.getElementById("inputAddPassword").value = "";
        selectElement.selectedIndex = 0;
        tableContent();
     },
     error: function(error) {
         console.error(error);
     }
    });
    };