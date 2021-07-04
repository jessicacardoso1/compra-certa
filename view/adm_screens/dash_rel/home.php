<?php
    # variáveis para popular a tela
    $total_clientes           = $dados[0];
    $total_clientes_ativos    = $dados[1];
    $receita_anual            = $dados[2];
    $receita_mensal           = $dados[3];
    $total_compras_mes        = $dados[4];
    $categorias_mais_vendidas = $dados[5];
    $pedidos_por_setores      = $dados[6];

    $porc_clientes_ativos = 100 * ($total_clientes_ativos / $total_clientes);
?>

<!DOCTYPE html>
<html lang="en">

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
                    <span>Desempenho</span></a>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Legumes Preciosos</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary cor-bg-teal shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Gerar Relatório </a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Receita (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Receita (Mes)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$ <?= number_format($receita_mensal,2,',','.') ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-calendar-o fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Receita (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Receita (Anual)</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">R$ <?= number_format($receita_anual,2,',','.') ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-dollar-sign fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="row">
                                <!-- Receita (Monthly) Card Example -->
                                <div class="col-xl-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Clientes ativos
                                                    </div>
                                                    <div class="row no-gutters align-items-center">
                                                        <div class="col-auto">
                                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= round($porc_clientes_ativos, 2) ?>%</div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="progress progress-sm mr-2">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: <?= round($porc_clientes_ativos, 2) ?>%" aria-valuenow="<?= round($porc_clientes_ativos, 2) ?>" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa fa-check-square-o fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pending Requests Card Example -->
                                <div class="col-xl-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Clientes</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_clientes ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa fa-users fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Pending Requests Card Example -->
                                <div class="col-xl-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                        Compras neste mes</div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_compras_mes ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa fa-shopping-cart fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-success">Receita - Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="receita_overview"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-success">Categorias Mais Vendidas</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2"> 
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <?php foreach($categorias_mais_vendidas as $i): ?>
                                            <span class="mr-2">
                                                <i class="fas fa-circle text-danger"></i> <?= $i['NOME'] ?>
                                            </span>
                                        <?php endforeach ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Pedidos por Setores</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Preparação <span
                                            class="float-right"><?= number_format($pedidos_por_setores[0],2,',','.') ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?= number_format($pedidos_por_setores[0],2,'.','.') ?>%"
                                            aria-valuenow="<?= number_format($pedidos_por_setores[0],2,'.','.') ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Conferência e Embalagem <span
                                            class="float-right"><?= number_format($pedidos_por_setores[1],2,',','.') ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: <?= number_format($pedidos_por_setores[1],2,'.','.') ?>%"
                                            aria-valuenow="<?= number_format($pedidos_por_setores[1],2,'.','.') ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Entrega <span
                                            class="float-right"><?= number_format($pedidos_por_setores[2],2,',','.') ?>%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: <?= number_format($pedidos_por_setores[2],2,'.','.') ?>%"
                                            aria-valuenow="<?= number_format($pedidos_por_setores[2],2,'.','.') ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-success">Legumes Preciosos</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 22.5rem;"
                                            src="<?= DIRIMG.'logo.png' ?>" alt="">
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
    <script src="<?php echo DIR_DASHBOARD_VENDOR.'jquery/jquery.min.js'; ?>"></script>
    <script src="<?php echo DIR_DASHBOARD_VENDOR.'bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo DIR_DASHBOARD_VENDOR.'jquery-easing/jquery.easing.min.js'; ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo DIR_DASHBOARD_JS.'sb-admin-2.min.js'; ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo DIR_DASHBOARD_VENDOR.'chart.js/Chart.min.js'; ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo DIR_DASHBOARD_JS.'demo/chart-area-demo.js'; ?>"></script>
    <script src="<?php echo DIR_DASHBOARD_JS.'demo/chart-pie-demo.js'; ?>"></script>

    <!-- Custom fonts for this template-->
    <link href="<?php echo DIR_DASHBOARD_CSS.'fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo DIR_DASHBOARD_CSS.'sb-admin-2.min.css'; ?>" rel="stylesheet">

    <link href="<?php echo DIR_DASHBOARD_CSS.'style.min.css'; ?>" rel="stylesheet">

</main>