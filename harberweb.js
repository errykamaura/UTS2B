$(document).ready(function () {
    $("#btnsearch").click(function(e) {
        var txtInput = $("#srchInv").val();
        console.log(txtInput);
        $("#infoinvaccr").html("Nama Anda : " + txtInput);
        $.ajax({
            type: "POST",
            url: "/assets/scripts/ajax/getcurl.php",
            data: "",
            success: function (response) {
                $("#infoinvaccr").html("<br/Response<br/> " + response);
            }
        });
    });
});
