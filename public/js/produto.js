function favoritar(idProduto) {
    let tk = $('#token').val();
    let idUsuario = sessionStorage.getItem("id_usuario");
    console.log(tk);
    $.ajax({
        type: "POST",
        url: "/produtos/favoritar",
        data: {
            _token: tk,
            idUsuario: idUsuario,
            idProduto: idProduto,
        },
    });
}