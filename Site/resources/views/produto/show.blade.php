<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando produto</title>
</head>
<style>
.gradient {
    align-items: center;
    justify-content: center;
    height: 100vh;
    width: 100vw;
    background: linear-gradient(65deg, #5FD068, #E3FCBF, #ff9f29, #354259);
    background-size: 350% 350%;
    animation: colors 9s ease-out infinite;
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
 


<div>@foreach($produtos as $produto) {{$produto->departamento}} {{$produto->preco}} {{<img src="url_imagem">}}<div>Data que foi criada</div> {{$produto->created_at}} @endforeach
<hr>

</body>
</html>