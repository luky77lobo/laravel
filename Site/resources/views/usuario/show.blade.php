<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrando usuário</title>
</head>
<style>
.gradient {
    align-items: center;
    justify-content: center;
    height: 100vh;
    width: 100vw;
    background: linear-gradient(60deg, #5FD068, #E3FCBF, #ff9f29, #354259);
    background-size: 350% 350%;
    animation: colors 1s ease-out infinite;
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
 


<p>{{$usuario->nome}} {{$usuario->email}} <p>Data que foi criada</p> {{$usuario->created_at}} <p>Data que foi alterada</p> {{$usuario->updated_at}}


</p><hr>

</body>
</html>