function favoritar(idProduto) {
    let tk = $('#token').val();
    let idUsuario = sessionStorage.getItem("id_usuario");

    if (!idUsuario || idUsuario == "") {
        alert("Você precisa estar logado para favoritar/desfavoritar!");
    } else {
        $.ajax({
            type: "POST",
            url: "/produtos/favoritar",
            data: {
                _token: tk,
                idUsuario: idUsuario,
                idProduto: idProduto,
            },
            success: function(data) {
                alert("Produto favoritado com sucesso!");
            }
        });
    }

}

function desfavoritar(idProduto) {
    let tk = $('#token').val();
    let idUsuario = sessionStorage.getItem("id_usuario");

    $.ajax({
        type: "POST",
        url: "/produtos/desfavoritar",
        data: {
            _token: tk,
            idUsuario: idUsuario,
            idProduto: idProduto,
        },
        success: function(data) {
            alert("Produto desfavoritado!");
        }
    });
}