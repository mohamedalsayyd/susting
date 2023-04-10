let button_signup = document.querySelector('#btn-register-form');

/*$(document).ready(function () {
    $(button_signup).click(function () {
        let fullname      = document.getElementById('client-fullname').value;
        let email         = document.querySelector('#client-email').value;
        let password      = document.querySelector('#client-pass').value;
        $.ajax({
            method: "POST",
            url  : "http://localhost/redesign/client/register.php",
            data : {fullname: fullname, email: email, password : password},
            success: function (data, status) {
                if (data == 'true') {
                    $(".msg").empty();
                    $(".msg").append('<div class = "alert alert-success">Signup Has Successfully</div>');
                    setTimeout(() => {
                        window.location.href = 'login.html';
                    },3000);
                }else {

                    $(".msg").empty();
                    $(".msg").append(data);
                }
            }
        });
    });
});*/
