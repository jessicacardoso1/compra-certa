<main>
    <nav class="navbar bg-salmao">
        <div class="container justify-content-around">

        <a href="<?php echo DIRPAGE; ?>">
            <?php 
                echo '<img src="'.DIRIMG.'logo.png" alt="logo" width="210">';
            ?>
        </a>

        <form class="form-inline" method="GET" action="<?php echo DIRACTION.'produto/consultar'; ?>" onsubmit="return check_string_busca()">
            <input id="string_busca" class="form-control mr-sm-1" name="produto" type="text" placeholder="Buscar produtos..." aria-label="Search">
            <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search fa-lg"></i></button>
        </form>
        
        <?php
            if(!$_SESSION['usuario_logado']){
                echo '<a href="'.DIRACTION.'login" class="text-white text-decoration-none">';
                echo '<strong>Entre ou Cadastre-se</strong>';
                echo '<i class="fa fa-user fa-lg ml-2 fa-2x"></i>';
                echo '</a>';
            }
            else{
                echo '<a href="'.DIRACTION.'cliente/minhaConta" class="text-white text-decoration-none">';
                echo '<strong>Minha conta</strong>';
                echo '<i class="fa fa-user fa-lg ml-2 fa-2x"></i>';
                echo '</a>';
                
                echo '<a href="'.DIRACTION.'login/logout" class="text-white text-decoration-none">';
                echo '<strong>Sair</strong>';
                echo '<i class="fa fa-sign-out fa-lg ml-2 fa-2x"></i>';
                echo '</a>';
            }
        ?>

        <a href="<?php echo DIRACTION.'carrinho/meuCarrinho';?>">
            <i class="fa fa-shopping-cart fa-2x cor-teal"></i>
            <?php 
                $qnt_produtos = $dados[1];
                echo '<span class="badge badge-primary badge-pill adm-conf-emb-span ml-1">'.$qnt_produtos.'</span>';
            ?>
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
                            $lista_categorias = $dados[0];
                            foreach($lista_categorias as &$c){
                                echo '<li><a href="'.DIRACTION.'produto/consultar?produto='.$c['NOME_CATEGORIA'].'" title="">'.$c['NOME_CATEGORIA'].'<span class="pull-right">'.$c['QNT_PRODUTOS'].'</span></a></li>';
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
            <p>Selecionados para voc??</p>
        </a>

        <a href="#" class="text-whitesmoke text-decoration-none ml-4">
            <p>Lan??amento</p>
        </a>

        <a href="#" class="text-whitesmoke text-decoration-none ml-4">
            <p>Contato</p>
        </a>

        <a href="#" class="text-whitesmoke text-decoration-none ml-4">
            <p>Sobre n??s</p>
        </a>

        </div>
    </nav>

    <script src="<?php echo DIRJS.'navbar.js'; ?>"></script>

</main>
