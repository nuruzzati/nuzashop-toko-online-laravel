<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>nuzashop</title>

    <!-- Custom CSS -->
    <style>
        :root {
            --primary: rgb(79, 129, 210);
            --sub-primary: rgb(105, 136, 179);
        }

        * {
            color: var(--sub-primary);
            font-weight: 500;
        }

        .aktif {
            font-weight: 700;
            border-radius: 10px;
            background-color: var(--primary);
            color: #fff !important;
        }

        .no {}

    </style>

    <!-- Icons -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" class="no">

        <!-- Sidebar -->
        <ul class="hapus navbar-nav bg-light sidebar sidebar-light accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i style="color: rgb(79, 129, 210);" class='bx bxl-shopify'></i>
                </div>
                <div class="mx-1" style="color: rgb(79, 129, 210);text-transform: capitalize;font-size: 1.5rem;font-weight: bold">Nuza Shop</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)" class='bx bxs-dashboard'></i>
                    <span class="" style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class='nav-link ' href="/kategori">
                    <i style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)" class='bx bxs-category'></i>
                    <span class="" style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)">Kategori</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/produk">
                    <i style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)" class='bx bxl-product-hunt'></i>
                    <span class="" style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)">Produk</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pembelian">
                    <i style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)" class='bx bx-cart-download'></i>
                    <span class="" style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)">Pembelian</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/pelanggan">
                    <i style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)" class='bx bxs-user-detail'></i>
                    <span class="" style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)">Pelanggan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">
                    <i style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)" class='bx bx-log-out-circle'></i>
                    <span style="font-size: 15px;font-weight:500;color: rgb(105, 136, 179)">Logout</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <!-- Topbar Search -->
                <!-- End of Topbar -->
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-light">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style="color: var(--sub-primary)">Copyright &copy; Nuza Nadenta 2024 Laravel</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
    </div>
</body>

</html>
