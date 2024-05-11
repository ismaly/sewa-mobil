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
                <h2 class="text-dark fw-semibold mb-0">Tambah Kendaraan</h2>
                <a href="dashboard" class="btn btn-light">
                    <i class="bx bx-arrow-back"></i> Back
                </a>
            </div>
            <div class="card border-0">
                <div class="card-body p-5">
                    <form action="{{ route('tambahproses') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="merk">Merk Mobil</label>
                            <select name="merk" id="merk" class="form-select">
                                <option value="">Pilih Merk Mobil</option>
                                <option value="Toyot">Toyota</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Hyundai">Hyundai</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="model">Model</label>
                            <select name="model" id="model" class="form-select">
                                <option value="">Model Mobil</option>
                                <option value="SUV">SUV</option>
                                <option value="MPV">MPV</option>
                                <option value="Crossover">Crossover</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="plat">No Plat</label>
                            <input type="text" name="plat" id="plat" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="pinjam">Tanggal Peminjaman</label>
                            <input type="date" name="pinjam" id="pinjam" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label for="pengembalian">Tanggal Pengembalian</label>
                            <input type="date" name="pengembalian" id="pengembalian" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="tarif">Tarif</label>
                            <input type="number" name="tarif" id="tarif" class="form-control">
                        </div>
                        {{-- <div class="mb-3">
                            <label for="assigns">Assigns</label>
                            <div class="d-flex flex-wrap gap-2 form-control">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="muhammadyunus">
                                    <label class="form-check-label" for="muhammadyunus">
                                        Muhammad Yunus
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="adelafatma">
                                    <label class="form-check-label" for="adelafatma">
                                        Adela Fatma
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <button class="btn btn-primary" type="submit">Tambah Kendaraan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
