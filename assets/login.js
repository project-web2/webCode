
var customer = document.getElementById("customer");
var technician = document.getElementById("technician");
var btn = document.getElementById("btn");

function technicianForm() {
    customer.style.left = "-450px";
    technician.style.left = "50px";
    btn.style.left = "110px";
}

function customerForm() {
    customer.style.left = "50px";
    technician.style.left = "450px";
    btn.style.left = "0px";
}
