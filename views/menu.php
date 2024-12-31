<header class="p-3 mb-0 border-bottom bg-white">
    <div class="container-fluid py-3">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                <img src="/CRUD-ALOJAMIENTOS/assets/images/alojamiento.png" alt="" class="img-fluid" width="50" height="50">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 px-4">
                <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                <li><a href="#" class="nav-link px-2 link-body-emphasis">Inventory</a></li>
                <li><a href="#" class="nav-link px-2 link-body-emphasis">Customers</a></li>
                <li><a href="#" class="nav-link px-2 link-body-emphasis">Products</a></li>
            </ul>

            <?php
                if(isset($_SESSION['id_user'])){
            ?>
            <div class="dropdown">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/CRUD-ALOJAMIENTOS/src/logout.php">Sign out</a></li>
                </ul>
            </div>
            <?php } else{ ?>
                <a href="/CRUD-ALOJAMIENTOS/views/login.php" class="btn btn-success">Iniciar Session</a>
            <?php
                }
            ?>
        </div>
    </div>
</header>