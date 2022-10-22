<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APRESENTE</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="./../imag/icon.png" type="image/png">

</head>


<style>
  .h1 {

    font-family: 'Bungee Spice', cursive;
    font-size: 80px;
    border-color: beige;
    border-width: 5px;
    border-style: dotted;
    text-align: center;

  }


  label {
    font-family: 'Tangerine', serif;
    font-size: 27px;
    padding-left: 30px;
  }

  .gradient {

    align-items: center;
    justify-content: center;
    height: 100vh;
    width: 100vw;
    background: linear-gradient(90deg, #630606, #890F0D, #E83A14, #D9CE3F);
    background-size: 150% 150%;
    animation: colors 5s ease-out infinite;
  }

  .geral {

    display: flex;

    justify-content: center;

    align-items: center;

    padding: 15px 50px 25px 45px;

  }

  .item {
    display: inline-flex;
    position: relative;
    margin-right: 35px;
    font-size: 20px;



  }

  .link_menu {
    padding: 5px 10px;
    text-align: center;
    border: 0px solid #f00;
    background: black;
    text-decoration: solid;
    margin-left: auto;
    margin-right: auto;
    color: #FFF;
    /* cantos arredondados */
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    display: block;
  }

  @keyframes colors {
    0% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 50% 100%;
    }

    70% {
      background-position: 50% 25%;
    }

    100% {
      background-position: 25% 0%;
    }
  }
</style>
<header class="d-flex justify-content-center  py-3">
  <ul class="nav nav-pills">


    <li class="item"><a class="link_menu" href="https://www.instagram.com/nayluky77/" target="_blank">Quem sou eu</a></li>

    <li class="item"><a class="link_menu" href="https://github.com/luky77lobo" target="_blank">Github</a></li>

    </li>
  </ul>
</header>

<body class="gradient">

  <form action="/usuario" id="formulario" method="POST" class="form">
    @csrf


    <p class="h1 bg-danger">PARA SER USUÁRIO</h1>


    <div class="label">

      <label for="Nome">Primeiro nome</label>
      <input class="w-25 p-2 h-auto d-inline-block" type="text" name="nome" class="form-control" maxlength="10">

    </div>

    <br>

    <div class="label">

      <label for="exampleInputEmail1">Endereço de email</label>
      <input class="w-25 p-2 h-auto d-inline-block" type="email" name="email" class="form-control" placeholder="Seu email">

    </div>

    <br>

    <div class="label">

      <label for="text">Senha</label>
      <input type="password" name="senha" id="senha" class="w-25 p-2 h-auto d-inline-block">

    </div>

    <br>


    <div class="label">
      <input type="checkbox"  onclick=Toggle()><b>Mostre a senha</b>
    </div>
    <script>
      function Toggle() {
        var temp = document.getElementById("senha");
        if (temp.type === "password") {
          temp.type = "text";
        } else {
          temp.type = "password";
        }
      }
    </script>


    <br>

    <p>
      <center>
        <input type="submit" id="btnenviar1" value="Usuários" class="btn btn-info" href="/usuario" />
       
      </center>

    </p>
    <script>



    </script>
    <br>

  </form>
  <footer class="bg-dark text-light">

    <div class="container-fluid py-3">
      <div class="row">
        <div class="col-4">
          <ul class="nav flex-column">
            <li class="nav-link"><a href="contato.blade.php" style="text-decoration:none">Contato</a></li>
            <li class="nav-link"><a href="#" style="text-decoration:none">Suporte</a></li>
          </ul>
        </div>
      </div>

    </div>
    <div class="text-center" style="background-color: #333; padding: 20px;">
      &copy 2022 Copyright
    </div>
  </footer>
</body>

</html>