<head>
    <title>Legumes Preciosos</title>
    <link rel="icon" type="image/png" href="img/ref_icon.png" />
</head>

<nav class="navbar bg-salmao">
    <div class="container justify-content-around">

    <a href="home">
        <img src="img/_logo.png" alt="logo" width="210">
    </a>

    <form class="form-inline" method="POST" action="index.php?controlador=produto&acao=consulta">
        <input class="form-control mr-sm-1" name="nome_produto" type="text" placeholder="Buscar produtos..." aria-label="Search">
        <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search fa-lg"></i></button>
    </form>
    
    <a href="login" class="text-white text-decoration-none">
        <strong>Entre ou Cadastre-se</strong>
        <i class="fa fa-user fa-lg ml-2 fa-2x"></i>
    </a>

    <a href="carrinho.php">
        <i class="fa fa-shopping-cart fa-2x cor-teal"></i>
        <span class="badge badge-primary badge-pill adm-conf-emb-span ml-1">5</span>
    </a>

    </div>
</nav>
<nav class="navbar bg-salmao-dark">
    <div class="container justify-content-start">
    <div class="btn-group dropdown">
        
        <p class="dropdown-toggle dropdown-toggle-split text-whitesmoke" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;">
        Categorias
        </p>
        <span class="sr-only">Toggle Dropdown</span>
        </button>
        <div class="dropdown-menu" style="width: 300px;">
        
        <div class="row">
            <div class="col-sm-12">
            <!-- Category -->
            <div class="single category">
                <h3 class="side-title">Categorias</h3>
                <ul class="list-group">
                    <?php
                        #listagem de categorias....
                        $lista_categorias = $dados;
                        foreach($lista_categorias as &$c){
                            echo '<li><a href="" title="">'.$c['NOME_CATEGORIA'].'<span class="pull-right">'.$c['QNT_PRODUTOS'].'</span></a></li>';
                        }
                    ?>
                </ul>
            </div>
            </div> 
        </div>
        </div>
    </div>
    

    <a href="#" class="text-whitesmoke text-decoration-none ml-4">
        <p>Ofertas do dia</p>
    </a>

    <a href="#" class="text-whitesmoke text-decoration-none ml-4">
        <p>Supermercado</p>
    </a>

    <a href="#" class="text-whitesmoke text-decoration-none ml-4">
        <p>Mais vendidos</p>
    </a>

    <a href="#" class="text-whitesmoke text-decoration-none ml-4">
        <p>Selecionados para você</p>
    </a>

    <a href="#" class="text-whitesmoke text-decoration-none ml-4">
        <p>Lançamento</p>
    </a>

    <a href="#" class="text-whitesmoke text-decoration-none ml-4">
        <p>Contato</p>
    </a>

    <a href="#" class="text-whitesmoke text-decoration-none ml-4">
        <p>Sobre nós</p>
    </a>

    </div>
</nav>

<!--  <h1>My <span style="color: red;">Important</span> Heading</h1>
<iframe src="/cadastro.php" title="Produtos em promoção" height="200px" width="1920px"></iframe>-->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/index.js"></script>
<script src="jquerry.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
