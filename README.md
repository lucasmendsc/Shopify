
## Sobre o projeto

Esse sistema foi projetado para cumprir o desafio solicitado. Acredito que esteja alinhado com o que foi pedido. As seguintes ferramentas foram utilizadas : 

- [Laravel](https://laravel.com/docs/routing).
- [VSCode](https://code.visualstudio.com/).
- [jQuery](https://jquery.com/download/).
- [Shopify](https://shopify.dev/docs/admin-api/rest/reference/products/product#index-2020-01).
- [ngrok](https://ngrok.com/).
- [MySQL](https://www.mysql.com/).
- [Chocolatey](https://chocolatey.org/) utilizado para facilitar o download de algumas ferramentas. 

## Dificuldades/problemas

Após vários testes e muito tempo tentando conectar as chaves `Chave da API:269a1ec67dfdd434dfc8622a0ed77768 || Senha: 4e788173c35d04421ab4793044be622f ` e chegando ao pensamento de que não era alguma falha no código, foi criada uma nova conta no Shopify para constatar se era ou não o código, e foi concluido que a conexão ocorria normalmente com a nova conta, não sendo possível conectar de forma alguma as credenciais passadas. 

## Como executar

* Para executar este projeto, é necessário abrir a pasta do projeto pelo VSCode e rodar os seguintes comandos no terminal:

```javascript
ngrok http 8000
```

- O ngrok irá rodar um script no seguinte formato : 

```javascript
ngrok by @inconshreveable                                                                                                                   
Session Status                online
Session Expires               1 hour, 2 minutes
Version                       2.3.40
Region                        United States (us)
Web Interface                 http://127.0.0.1:4040
Forwarding                    http://937f11d45e6d.ngrok.io -> http://localhost:8000
Forwarding                    https://937f11d45e6d.ngrok.io -> http://localhost:8000

Connections                   ttl     opn     rt1     rt5     p50     p90     
```
- e em outro terminal

```javascript
php artisan serve
```

- O php deverá rodar o seguinte script :

```javascript
Starting Laravel development server: http://127.0.0.1:8000
[Mon Jun  7 01:35:19 2021] PHP 8.0.6 Development Server (http://127.0.0.1:8000) started

```

- É necessário copiar a URL do segundo Forwarding do ngrok. `https://937f11d45e6d.ngrok.io` para o arquivo `.ENV` encontrado na raiz do projeto, e substituir o APP_URL por esta nova que acaba de ser gerada.

- O segundo passo consiste em fazer o Shopify rodar localmente, editando a APP URL e Allowed redirection URL(s) para a URL gerada pelo ngrok através do [Shopify](https://partners.shopify.com/2034357/apps/5370029/edit), com as seguintes credenciais : `e-mail: lucas.mends147@gmail.com | senha: Aftersale321 `.

- Em seguida, podemos acessar o [App](https://after-sale-teste.myshopify.com/admin/apps/c5f91c6a7c98b2375ac8c26026ab24b0/?hmac=ae607b67d7666755c46651364bc454e8d37f34e7c22e8e9b7993bac0deaf4dc3&host=YWZ0ZXItc2FsZS10ZXN0ZS5teXNob3BpZnkuY29tL2FkbWlu&locale=en&new_design_language=true&session=e9e787932bcd29f8b00667822d5264cb866f0284172440502579785ddc83056f&shop=after-sale-teste.myshopify.com&timestamp=1623039360) com o mesmo e-mail e senha e o projeto já estará rodando por meio de um iFrame.

`Houveram tentativas de rodar o código através do xampp em mais de uma máquina para facilitar o processo, mas o xampp apresentou conflitos com o Laravel e o Shopify. E este foi o único modo que foi encontrado para rodar o projeto perfeitamente.`

## Erros comuns

Caso o iFrame retorno este erro : 

```javascript
Failed to complete tunnel connection
The connection to https://937f11d45e6d.ngrok.io was successfully tunneled to your ngrok client, but the client failed to establish a connection to the local address localhost:8000.

Make sure that a web service is running on localhost:8000 and that it is a valid address.

The error encountered was: dial tcp [::1]:8000: connectex: Nenhuma conexão pôde ser feita porque a máquina de destino as recusou ativamente.
```

* Verificar se o comando `php artisan serve` está rodando perfeitamente no terminal.
* Verificar o se o `.ENV` está com a APP_URL igual ao do Shopify.
* Verificar o se o Shopify está com as URLs iguais as do ngrok.

## Observações

Não foi possível entregar todos os requisitos, regras e afins por conta do tempo escasso. Com o emprego atual de 44h semanais e faculdade à noite, o tempo foi relativamente curto para a entrega do projeto com todos os itens solicitados. 
