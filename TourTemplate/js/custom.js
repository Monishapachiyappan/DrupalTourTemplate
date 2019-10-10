$(document).ready(function () {
    
    $("button.btn").click(function () {
        alert("Backend not yet integrated...");
    });

    $('input[name="daterange"]').daterangepicker({
        "opens": 'left',
        "minDate": moment(),
        "showDropdowns": true,
    });

});