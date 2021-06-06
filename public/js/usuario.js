$("#cadastrar").click(function() {

    let nome = $('#nome').val();
    let email = $('#email').val();
    let senha = $('#senha').val();
    let tk = $('#token').val();

    $.ajax({
        type: "POST",
        url: "/usuario/cadastrar",
        data: {
            _token: tk,
            nome: nome,
            email: email,
            senha: senha,
        },
        success: function(data) {
            console.log(data);
        }
    });
});

$("#logar").click(function() {

    let email = $('#email').val();
    let senha = $('#senha').val();
    let tk = $('#token').val();

    $.ajax({
        type: "POST",
        url: "/usuario/logar",
        data: {
            _token: tk,
            email: email,
            senha: senha,
        },
        success: function(data) {

            if (data) {
                sessionStorage.setItem("id_usuario", data);
                window.location.href = "/favoritos"
            }
        }
    });
});
