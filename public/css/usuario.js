$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#enviar").click(function() {
        $.ajax({
            type: "POST",
            url: "/usuario/cadastrar",
            data: {
                nome: nome,
                email: email,
                senha: senha,
                _token: $('#_token').val(),
            },
            success: function(data) {
                console.log(data);
            }
        });
    });
});