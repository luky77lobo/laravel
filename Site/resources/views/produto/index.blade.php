<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARMAZÉM DO LAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>


    .container-imagem {
        margin: 0;
        position: relative;
        height: 100vh;
        width: 100vw;
        background: linear-gradient(60deg, #5FD068, #E3FCBF, #000660, #354259);
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

<body class="container-imagem">
  <p>MOSTRANDO</p>
  <p>Clica nas opções, querido(a)</p>
  <p>Clica em mim, querido(a)</p>



  @foreach($produto as $p)

  <p>{{$p->nome}}
    <a href="{{route('produto.show', ['produto' => $produto->id])}}" style="text-decoration: none; color:darkcyan">Ver produto</a>
    <a href="{{route('produto.edit', ['produto' => $produto->id])}}" style="text-decoration: none; color: blueviolet">Alterar produto</a>
    <form method="post" action="{{route('produto.destroy', $produto->id)}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        <br>
                    
  </p>
  <hr>
  @endforeach

  <br>





</body>


</html>

