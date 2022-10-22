<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


  <title>LISTA</title>
</head>
<style>
a{
  padding: 5px 10px;
    text-align: center;
    border: 0px solid #f00;
    background: black;
    text-decoration: solid;
    margin-left: auto;
    margin-right: auto;
    color: #FFF;

}

  .gradient {
    align-items: center;
    justify-content: center;
    height: 100vh;
    width: 100vw;
    background: linear-gradient(60deg, #5FD068, #E3FCBF, #ff9f29, #354259);
    background-size: 30% 15%;
    animation: colors 5s ease-out infinite;
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
<center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $("p").click(function() {
      $(this).hide();
    });
  });
</script>
</center>
</head>

<body class="gradient">
  <p>MOSTRANDO</p>
  <p>Clica nas opções, querido(a)</p>
  <p>Clica em mim, querido(a)</p>

  <center>

    @foreach($usuarios as $usuario)

    <div>{{$usuario->nome}}
      <a href="{{route('usuario.show', ['usuario' => $usuario->id])}}" style="text-decoration: none; color:darkcyan">Ver usuário</a>
      <a href="{{route('usuario.edit', ['usuario' => $usuario->id])}}" style="text-decoration: none; color: blueviolet">Alterar usuário</a>
      <form method="post" action="{{route('usuario.destroy', $usuario->id)}}">
        @method('delete')
        @csrf
        <br>
        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
       <a href= "{{route('al')}}" class="btn btn-warning  btn-sm">Entrar no armazém do lar</a>
      </form>
      <br>

    </div>

  <hr>
  @endforeach

  </center>
  <br>





</body>

</html>