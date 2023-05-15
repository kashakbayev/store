$( document ).ready(function() {
    $('#login').click(function() {
        var email = $.trim($('#email').val());
        var pass = $.trim($('#pass').val());
        var emsg = validateEmail(email);
        var pmsg = validatePassword(pass);
        $('#emailmsg').html(emsg);
        $('#passmsg').html(pmsg);
        if(emsg == "Valid email" && pmsg == "Valid password")
        {
            var info = JSON.stringify({"email": email, "pass": pass});
            $.ajax({
                url: "../php/auth.php",
                type: "POST",
                data: ({data: info, action: "in"}),
                success: function(message) {
                    const obj = JSON.parse(message);
                    alert(message.msg);
                }
            });
        }
    });
});

function validateEmail(email) {
    var validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (email.match(validEmail)) return "Valid email";
    else return "<p class='text-danger'>Invalid email<br>example@domain.com</p>";
}

function validatePassword(pass) {
    var validPass = /^[A-Za-z]\w{7,15}$/;

    if(pass.match(validPass)) return "Valid password";
    else return "<p class='text-danger'>At least 8 characters<br>First character must be a letter<br>Only underscore characters and numeric digits</p>";
}