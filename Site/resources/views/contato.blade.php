<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <title>Contato</title>

    <link rel="stylesheet" href="./../css/reset.css" />
    
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <script src="js/contato.js"></script>
</head>

<body>
    <div class="body">

        <header class="cabeca">

            <h1>CONTATO</h1>

            <nav style="display: inline-block; margin-block-end: 45px;">





                <div class="cabeca-link"> <a class="link_menu" href="Nos.html" target="_blank">Quem Somos</a>
                </div>

                <div class="cabeca-link"> <a class="link_menu" href="Integração.html"
                        target="_blank">Apresentação</a> </div>
                <div class="cabeca-link"> <a class="link_menu" href="index.html" target="_blank">LGBTQIAP+ &
                        M.T</a></div>
                <div class="cabeca-link"> <a class="link_menu" href="Contato.html" target="_blank">Contato</a>
                </div>
            </nav>

        </header>
        <main>

            <form id="formContato" action="#" method="POST" onsubmit="return v();">

                <div class="mensagem" style="color: red;"><span id="msgErro"></span> </div>

                <label for="nomesobrenome"> Nome completo </label>

                <input class="input_padrao" type="text" id="nomesobrenome" name="nomesobrenome" maxlength="25"
                    placeholder="nome e último sobrenome" />

                <label for="email">Email </label>
                <input class="input_padrao" type="email" id="email" name="email" placeholder="emailseu@dominio.com" />

                <label for="idade">Idade</label>
                <input class="input_padrao" type="number" id="idade" name="idade" min="16" max="85">

                <label for="telefone">Telefone </label>

                <input class="input_padrao" type="tel" ID="telefone" width="100%" placeholder="(XX) XXXXX-XXXX" />

                <label for="mensagem">Mensagem</label>

                <textarea class="input_padrao" cols="12" rows="5" id="mensagem"> </textarea>

                <input type="submit" value="Enviar " class="enviar">

                <!--
    TAG --- 1
    CLASSE --- 10
    ID -- 100
    INLINE -- 1000
-->

            </form>

        </main>





    </div>
  
</body>
 

<footer class="bg-dark text-light">

<div class="container-fluid py-3">
  <div class="row">
    <div class="col-4">
      <ul class="nav flex-column">
        <li class="nav-link"><a href="site">Site</a></li>
        <li class="nav-link"><a href="#">Suporte</a></li>
      </ul>
    </div>
  </div>

</div>
<div class="text-center" style="background-color: #333; padding: 20px;">
  &copy 2022 Copyright
</div>
</footer>
</div>

</html>