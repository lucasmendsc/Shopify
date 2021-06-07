@extends('default.layout')
@extends('shopify-app::layouts.default')
<a href="/login"> login </a>
<a href="/cadastro"> cadastrar </a>
<a href="/favoritos"> favoritos </a>
<a href="" id="deslogarButton" onclick="deslogar()" style="display: none;"> deslogar </a>

<main>
    <section>
        <script type="text/javascript">
            let idUsuario = sessionStorage.getItem("id_usuario");

            if (idUsuario || idUsuario != "") {
                let deslogarButton = document.getElementById("deslogarButton");
                deslogarButton.style.display = "block";
            }

        </script>
        <?php
        $shopify = Auth::user();
        $produtos = $shopify->api()->rest('GET', '/admin/api/2021-04/products.json');
        $produtos = $produtos['body']['container']['products'];
        ?>
        <table class="table table-striped">
            <thead>

                <tr>
                    <th>Nome</th>
                    <th>Favoritar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produtos as $prod) { ?>
                <tr>
                    <td>
                        <?php echo $prod['title']; ?>
                    </td>

                    <td>
                        <i class="fa fa-heart favorito-icon"
                            onclick="favoritar('<?php echo $prod['id']; ?>')"></i>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
        </div>

    </section>


</main>
