function submitForm() {
   
var inputFuelName = $("#inputAddFuelName").val();
var inputCost = $("#inputAddCost").val();
var inputMinAmount = $("#inputAddMinAmount").val();
$.ajax({
 type: "POST",
     url: "function/postAddFuel.php",
     data: { 
        title: inputFuelName,
        cost: inputCost,
        min_amount: inputMinAmount
    },
success: function(response) {
    
    
    var closeButton = document.getElementById("closeButtonAddendum");
    closeButton.click();

    var table = document.getElementById("dataTable");
    var tbody = table.getElementsByTagName('tbody')[0];
    while (tbody.firstChild) {
        tbody.removeChild(tbody.firstChild);
    }
    document.getElementById("inputAddFuelName").value = "";
    document.getElementById("inputAddCost").value = "";
    document.getElementById("inputAddMinAmount").value = "";

    tableContent();
 },
 error: function(error) {
     console.error(error);
 }
});
};
