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
                    <div class="row">

                        <!-- Receita (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Bairros atendidos </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($dados) ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fa fa-road fa-2x"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Bairros mais atendidos</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Listagem de bairros</h6>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Total em compras</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($dados as $i): ?>
                                        <tr>
                                            <th scope="row"><?= $i['NOME_BAIRRO'] ?></th>
                                            <td style="text-align: left"><?= $i['CIDADE'] ?></td>
                                            <td style="text-align: left"><?= $i['ESTADO'] ?></td>
                                            <td style="text-align: left"><?= 'R$ '.number_format($i['TOTAL_COMPRAS'],2,',','.') ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- FOOTER -->
            <footer class="text-center text-white">
                <!-- Copyright -->
                <div class="text-center p-3 footer cor-bg-salmao-dark">
                © 2021 Copyright: Legumes Preciosos
                <br>
                Linguagem de Programação III - Jéssica Rocha, Ludmila Brito e Filipe Silva
                </div>
                <!-- Copyright -->
            </footer>
        <!-- End of Footer -->

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
    <script src="<?= DIR_DASHBOARD_VENDOR.'jquery/jquery.min.js' ?>"></script>
    <script src="<?= DIR_DASHBOARD_VENDOR.'bootstrap/js/bootstrap.bundle.min.js' ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= DIR_DASHBOARD_VENDOR.'jquery-easing/jquery.easing.min.js' ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= DIR_DASHBOARD_JS.'sb-admin-2.min.js' ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= DIR_DASHBOARD_VENDOR.'datatables/jquery.dataTables.min.js' ?>"></script>
    <script src="<?= DIR_DASHBOARD_VENDOR.'datatables/dataTables.bootstrap4.min.js' ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= DIR_DASHBOARD_JS.'demo/datatables-demo.js' ?>"></script>

    <!-- Custom styles for this template-->
    <link href="<?= DIR_DASHBOARD_CSS.'sb-admin-2.min.css'; ?>" rel="stylesheet">

    <link href="<?= DIR_DASHBOARD_CSS.'style.min.css'; ?>" rel="stylesheet">

</main>