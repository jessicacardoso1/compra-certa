<!doctype html>
<html lang="en">
    <head>
        <title>Legumes Preciosos</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <?php
            require_once '../configs/config.php';
            require_once '../utils/utils.php';

            echo '<link rel="stylesheet" href="'.DIRCSS.'style.min.css">';
            echo '<link rel="icon" type="image/png" href="'.DIRIMG.'icon.png" />';
        ?>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
            require_once '../vendor/autoload.php';
            
            session_start();
            if(!isset($_SESSION['usuario_logado']))
                $_SESSION['usuario_logado'] = '';

            $despachante = new \compra_certa\routes\Despachante;
            
            require_once 'footer.php';
        ?>
    </body>
</html>
