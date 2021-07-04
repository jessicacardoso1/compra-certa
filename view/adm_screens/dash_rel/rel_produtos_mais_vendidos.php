<?php

    $produto_mais_vendido = $dados[0];

?>

<main>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav cor-bg-salmao-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=DIRACTION.'funcionario-dashboard/home'?>">
                <div class="sidebar-brand-text mx-3">Legumes Preciosos</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?=DIRACTION.'funcionario-dashboard/home'?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Desempenho</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Relatórios
            </div>

             <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="<?=DIRACTION.'funcionario-dashboard/tempoMedioPorSetor'?>">
                    <i class="fa fa-clock-o"></i>
                    <span>Tempo médio por setor</span></a>

                <a class="nav-link" href="<?=DIRACTION.'funcionario-dashboard/bairrosMaisAtendidos'?>">
                    <i class="fa fa-location-arrow"></i>
                    <span>Bairros mais atendidos</span></a>
                
                <a class="nav-link" href="<?=DIRACTION.'funcionario-dashboard/clientesMaisCompram'?>">
                    <i class="fa fa-users"></i>
                    <span>Clientes que mais compram</span></a>
                        
                <a class="nav-link" href="<?=DIRACTION.'funcionario-dashboard/produtosMaisVendidos'?>">
                    <i class="fa fa-product-hunt"></i>
                    <span>Produtos mais vendidos</span></a>

                <a class="nav-link" href="404.php">
                    <i class="fa fa-th"></i>
                    <span>Outros</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar por..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrador</span>
                                <i class="fa fa-user fa-2x"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Produtos mais vendidos</h1>

                    <div class="row">

                        <div class="col-xl-8 col-lg-7">

                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Vendas totais (ano): <?= $produto_mais_vendido->getNome() ?></h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="typeArea-rel-produtos-mais-vendidos"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Bar Chart -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Top 8 produtos mais vendidos pela Legumes Preciosos</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="typeBar-rel-produtos-mais-vendidos"></canvas>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success"><?= $produto_mais_vendido->getNome() ?> relativo as vendas totais</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="typePie-rel-produtos-mais-vendidos"></canvas>
                                    </div>
                                </div>
                                <div class="mt-4 text-center small">
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-danger"></i> <?= $produto_mais_vendido->getNome() ?>
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle"></i> Outros
                                    </span>
                                </div>
                            </div>
                            
                             <!-- Bar Chart -->
                             
                             <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Produto mais vendido: <?= $produto_mais_vendido->getNome() ?></h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-5" style="width: 25.5rem;"
                                            src="<?= DIRIMG.'itens/'.$produto_mais_vendido->getImg() ?>" alt="">
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tem certeza que deseja sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-success" href="login.php">Sair</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= DIR_DASHBOARD_VENDOR.'jquery/jquery.min.js'; ?>"></script>
    <script src="<?= DIR_DASHBOARD_VENDOR.'bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= DIR_DASHBOARD_VENDOR.'jquery-easing/jquery.easing.min.js'; ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= DIR_DASHBOARD_JS.'sb-admin-2.min.js'; ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= DIR_DASHBOARD_VENDOR.'datatables/jquery.dataTables.min.js' ?>"></script>
    <script src="<?= DIR_DASHBOARD_VENDOR.'datatables/dataTables.bootstrap4.min.js' ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= DIR_DASHBOARD_JS.'demo/datatables-demo.js' ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= DIR_DASHBOARD_VENDOR.'chart.js/Chart.min.js' ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= DIR_DASHBOARD_JS.'demo/area-produtos-mais-vendidos.js' ?>"></script>
    <script src="<?= DIR_DASHBOARD_JS.'demo/pie-produtos-mais-vendidos.js' ?>"></script>
    <script src="<?= DIR_DASHBOARD_JS.'demo/bar-produtos-mais-vendidos.js' ?>"></script>

    <!-- Custom styles for this template-->
    <link href="<?php echo DIR_DASHBOARD_CSS.'sb-admin-2.min.css'; ?>" rel="stylesheet">

    <link href="<?php echo DIR_DASHBOARD_CSS.'style.min.css'; ?>" rel="stylesheet">

</main>