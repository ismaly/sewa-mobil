<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management Tasks</title>
    
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/boxicons/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body class="bg-soft-blue">

    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container-fluid justify-content-between px-2 px-lg-5">
            <a href="." class="navbar-brand fw-bold">Rentcar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=".">Data Kendaraan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user.html">User</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        @auth
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ Auth::user()->nama }}
                        </a>
                        @endauth
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="loginview">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container-fluid px-2 px-lg-5">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <h2 class="text-dark fw-semibold mb-0">Kendaraan</h2>
                <a href="tambah" class="btn btn-primary">
                    <i class="bx bx-plus"></i> Tambah Kendaraan
                </a>
            </div>
            <div class="card border-0">
                <div class="card-body p-5">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Merk Mobil</th>
                                    <th>Model</th>
                                    <th>No Plat</th>
                                    <th>Tarif Sewa</th>
                                    <th>Tgl Peminjaman</th>
                                    <th>Tgl Pengembalian</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <td>1</td>
                                    <td><a href="project.html">My Project</a></td>
                                    <td>
                                        <span class="badge bg-primary fs-8 text-uppercase">Medium</span>
                                    </td>
                                    <td>19 April 2024</td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <img src="https://ui-avatars.com/api/?name=Yunus Almeida" alt=""
                                                class="rounded-circle" width="30">
                                            <img src="https://ui-avatars.com/api/?name=Adela Fatma" alt=""
                                                class="rounded-circle" width="30">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 10px">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                style="width: 50%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light rounded-circle p-2" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                style="width: 34px; height: 34px">
                                                <i class='bx bx-dots-horizontal-rounded'></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" style="z-index: 100;">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <td>2</td>
                                    <td><a href="project.html">My Project 2</a></td>
                                    <td>
                                        <span class="badge bg-primary fs-8 text-uppercase">Medium</span>
                                    </td>
                                    <td>19 April 2024</td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <img src="https://ui-avatars.com/api/?name=Yunus Almeida" alt=""
                                                class="rounded-circle" width="30">
                                            <img src="https://ui-avatars.com/api/?name=Adela Fatma" alt=""
                                                class="rounded-circle" width="30">
                                            <img src="https://ui-avatars.com/api/?name=Gamma Kristian" alt=""
                                                class="rounded-circle" width="30">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Basic example"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                            style="height: 10px">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                style="width: 80%"></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light rounded-circle p-2" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false"
                                                style="width: 34px; height: 34px">
                                                <i class='bx bx-dots-horizontal-rounded'></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end" style="z-index: 100;">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
