let button_signup = document.querySelector('#btn-login-form');
$(document).ready(function () {
    $(button_signup).click(function () {
        let email         = document.querySelector('#client-email').value;
        let password      = document.querySelector('#client-pass').value;
        $.ajax({
            method: "POST",
            url  : "http://localhost/redesign/client/login.php",
            data : {email: email, password : password},
            success: function (data, status) {
                if (data == 'true') {
                    document.location.href = 'index.php';
                }else {
                    $(".msg").empty();
                    $(".msg").append(data);
                }
            }
        });
    });
});
