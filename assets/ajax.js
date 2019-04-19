$(document).ready(function () {

    $.post("save.php", {step: "login_chk"} , function (res) {
        var data = JSON.parse(res);
        console.log(data);                                                  /////////debug
       if(data.auth !== true) {
           //login
           window.open("login.php", "_self");
       }
       $("#email").val(data.email);
    });

    $('#submit1').click(function () {
        $.post("save.php", $('#frm1').serialize(), function (data) {
            console.log(data);                                                  /////////debug
            if(JSON.parse(data).success === true){
                ///next
                console.log("Step 1 OK!");
            }
        });
    });

   /* $('#login_submit').click(function () {
       $.post("aja.php", $('#form_login').serialize(), function (data) {
           console.log(data);
       });
   }); */
});