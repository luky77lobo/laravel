<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>



<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;

  }

  body {
    min-height: 100vh;
    background: linear-gradient(90deg, #630606, #890F0D, #E83A14, #D9CE3F);
    background-size: 150% 150%;
    margin: 0;
    position: relative;
    height: 100vh;
    width: 100vw;
  }

  .container {
    position: relative;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
  }

  .bubbles {
    position: relative;
    display: flex;
  }

  .bubbles span {
    position: relative;
    height: 30px;
    width: 30px;
    background: cyan;
    margin: 0 4px;
    border-radius: 50%;
    box-shadow: 0 0 0 10px #4fc3dc44,
      0 0 50px cyan,
      0 0 100px cyan;
    animation: animate 125s linear infinite;
    animation-duration: calc(125s / var(--i));


  }

  @keyframes animate {
    0% {
      transform: translateY(100vh) scale(0);
    }

    100% {
      transform: translateY(-10vh) scale(1);
    }
  }

  .bubbles span:nth-child(even) {
    background: darkmagenta;
    box-shadow: 0 0 0 10px #4fc3dc44,
      0 0 50px darkmagenta,
      0 0 100px darkmagenta;


  }


  header {
    text-align: center;
    padding-top: 10px;
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
</style>

<header>
  <center>
    <ul>

      <li class="item"> <a class="link_menu" href="./site.blade.php" target="_blank">Site</a> </li>


      <li class="item">
        <a class="link_menu" href="#" aria-current="page">Features</a>
      </li>
      <li class="item">
        <a class="link_menu" href="#" aria-current="page">Pricing</a>

      <li class="item"><a class="link_menu" href="https://github.com/luky77lobo" target="_blank">Github</a></li>

      </li>

    </ul>
  </center>
</header>

<body>
  <div class="container">
    <div class="bubbles">
      <span style="--i:80;"></span>
      <span style="--i:67;"></span>
    </div>
    <form action="/produto" method="post">
      @csrf
      <h1>INSIRA O PRODUTO</h1>
      <div class="geral">
        <div class="input-group-sm">
          <label for="exampleInputNome">Departamento</label>
          <input class="w-20 p-2 h-auto d-inline-block" type="text" name="departamento" class="form-control">


        </div>
        <br>
        <div class="bubbles">
          <span style="--i:56;"></span>
          <span style="--i:78;"></span>
        </div>
        <div class="input-group-sm">
          <label for="exampleInputEmail1">Marca</label>
          <input class="w-20 p-2 h-auto d-inline-block" type="text" name="marca" class="form-control" placeholder="sua marca">


        </div>
        <br>
        <div class="bubbles">
          <span style="--i:10;"></span>
          <span style="--i:34;"></span>
        </div>
        <div class="flex flex-col">
          <label for="price" class="mt-4 mb-1 uppercase text-grey-darker text-xs font-bold">Preço</label>
          <div class="flex flex-row">
            <span class="flex items-center bg-grey-lighter rounded rounded-r-none px-3 font-bold text-grey-darker">$</span>
            <input type="number" name="preco" class="bg-grey-lighter text-grey-darker py-2 font-normal rounded text-grey-darkest border border-grey-lighter rounded-l-none font-bold">
          </div>
        </div>
      </div>

      <div class="form-group form-check">
        <div class="bubbles">
          <span style="--i:40;"></span>
          <span style="--i:70;"></span>
        </div>
        <br>
        <center>
          <input type="submit" id="btnenviar" value="Produtos" class="btn btn-info" href="/produto" />
        </center>
      </div>

      <div class="bubbles">
      <span style="--i:90;"></span>
      <span style="--i:117;"></span>
</div>
  </div>
  </div>
  </form>

</body>

<footer class="bg-dark text-light">

<div class="container-fluid py-3">
  <div class="row">
    <div class="col-4">
      <ul class="nav flex-column">
        <li class="nav-link"><a href="contato.blade.php">Contato</a></li>
        <li class="nav-link"><a href="#">Suporte</a></li>
      </ul>
    </div>
  </div>

</div>
<div class="text-center" style="background-color: #333; padding: 20px;">
  &copy 2022 Copyright
</div>
</footer>
</html>