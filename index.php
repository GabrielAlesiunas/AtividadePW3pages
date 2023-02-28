<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Atividade</title>
</head>
<body>

<header>
      <nav>
        <div class="mobile-menu">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
          <div class="line4"></div>
        </div>
        <ul class="nav-list">
          <li><a href="?page=1">Home</a></li>
          <li><a href="?page=2">Tabuda</a></li>
          <li><a href="?page=3">IMC</a></li>
          <li><a href="?page=4">Calcular Viagem</a></li>
          <li><a href="?page=5">Sobre</a></li>
        </ul>
      </nav>
    </header>
    
    <?php
        http://atividade/?page
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case '1':
                    require_once './page/home.php';
                    break;
                case '2':
                    require_once './page/tabuada.php';
                    break;
                case '3':
                    require_once './page/imc.php';
                    break;
                case '4':
                    require_once './page/custoviagem.php';
                    break;
                case '5':
                    require_once './page/sobre.php';
                    break;
                default:
                    require_once './page/404.php';
            }
        }

    ?>

<script src="mobile-navbar.js"></script>
</body>
</html>