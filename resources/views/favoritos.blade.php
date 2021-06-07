@extends('shopify-app::layouts.default')
@extends('default.layout')

<main>
    <section>
        <script type="text/javascript">
            let idUsuario = sessionStorage.getItem("id_usuario");

            if (!idUsuario || idUsuario == "") {
                alert("Acesso restrito a usuários logados!");
                window.location.href = "/";
            }

        </script>

        <?php
        $shopify = Auth::user();
        $produtos = $shopify->api()->rest('GET', '/admin/api/2021-04/products.json', ['limit' => 4]);
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
