<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALTERANDO</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  rel="stylesheet">

</head>
<link href= "./../css/app.css"  rel="stylesheet">
<body class="gradient">
  

<style>
  h1 {

    font-family: 'Tangerine', serif;
    font-size: 50px;
    color: greenyellow;
    text-align: center;
  }

  label {
    font-family: 'Tangerine', serif;
    font-size: 25px;

  }

  .gradient {
    align-items: center;
    justify-content: center;
    height: 100vh;
    width: 100vw;
    background: linear-gradient(140deg, #FAF4B7, #25316D, #FFFDE3, red);
    background-size: 150% 150%;
    animation: colors 3s ease-out infinite;
  }

  .geral {
    display: flex;
    align-items: center;
    justify-content: space-between;
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

<body class="gradient">

  <form action= "#" method="POST">
    @csrf
    <h1>PARA SER USUÁRIO</h1>
    <div class="geral">
      <div class="input-group-sm">
        <label for="exampleInputNome">Nome</label>
        <input class="w-20 p-2 h-auto d-inline-block" type="text" name="nome" class="form-control" value="{{$usuario->nome}}">


      </div>
      <br>
      <div class="input-group-sm">
        <label for="exampleInputEmail1">Endereço de email</label>
        <input class="w-20 p-2 h-auto d-inline-block" type="email" name="email" class="form-control" placeholder="Seu email" value="{{$usuario->email}}">

        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small>
      </div>
      <br>

      <div class="input-group-sm">
        <label for="text">Senha </label>
        <input type="password" name="senha" id="senha" class="w-20 p-2 h-auto d-inline-block">
        <input type="checkbox" onclick=Toggle()><b>Mostre a senha</b>

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
      </div>
     

        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>   


  </form>
           

</body>

</html>