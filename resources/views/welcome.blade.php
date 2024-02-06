<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/icons/Logo.png') }}">
    <title>Pesantren Nurun Nuha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    {{-- navbar start --}}
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/icons/Logo.png') }}" alt="" width="30" height="24"
                    class="d-inline-block align-text-top">
                Pesantren Nurun Nuha
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Prestasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Kontak</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button class="btn btn-danger">Register</button>
                </div>
            </div>
        </div>
    </nav>
    {{-- navbar end --}}

    {{-- hero start --}}
    <section id="hero" class="py-5">
        <div class="container text-center text-white">
            <div class="hero-tittle">
                <h1 class="hero-text">Selamat Datang <br> Di Pesantren Nurun Nuha</h1>
                <h4>Pondok Pesantren Modern dengan Konsep rahmatan lil alamin</h4>
            </div>
        </div>
    </section>
    {{-- hero end --}}
    {{-- card start --}}
    <section id="program" style="margin-top:-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Pendidikan <br> Berkualitas</h5>
                        </div>
                        <img src="{{ asset('assets/images/ic-book.png') }}" height="55" width="55"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Pendidikan <br> Berakhlaq</h5>
                        </div>
                        <img src="{{ asset('assets/images/ic-globe.png') }}" height="55" width="55"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Pendidikan <br> Muamalah</h5>
                        </div>
                        <img src="{{ asset('assets/images/ic-neraca.png') }}" height="55" width="55"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Pendidikan <br> Teknologi</h5>
                        </div>
                        <img src="{{ asset('assets/images/ic-komputer.png') }}" height="55" width="55"
                            alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- card end --}}

    {{-- start berita --}}
    <section id='berita' class="py-5">
        {{-- py-5 digunakan untuk mengantur padding pada sumbu y --}}
        <div class="container py-5">
            <div class="header-berita text-center mb-5">
                <h2 class="fw-bold">Berita Kegiatan Pondok Pesantren</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/il-berita-01.png') }}" class="card-img-fluid" alt="...">
                        <div class="card-body">
                            <p class="mb-2 text-secondary">21/04/2023</p>
                            <h4 class="card-title mb-2">Pengajian Bulanan Pesantren Nurun Nuha</h4>
                            <p class="text-secondary">#PesantrenModeren</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/il-berita-01.png') }}" class="card-img-fluid"
                            alt="...">
                        <div class="card-body">
                            <p class="mb-2 text-secondary">21/04/2023</p>
                            <h4 class="card-title mb-2">Pengajian Bulanan Pesantren Nurun Nuha</h4>
                            <p class="text-secondary">#PesantrenModeren</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/il-berita-01.png') }}" class="card-img-fluid"
                            alt="...">
                        <div class="card-body">
                            <p class="mb-2 text-secondary">21/04/2023</p>
                            <h4 class="card-title mb-2">Pengajian Bulanan Pesantren Nurun Nuha</h4>
                            <p class="text-secondary">#PesantrenModeren</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-berita text-center py-3">
                <a href="" class="btn btn-outline-danger">
                    Lihat Berita Lainnya
                </a>
            </div>
        </div>

    </section>
    {{-- end berita --}}

    {{-- Start Join --}}
    <section id="join" class="py-5">
        <div class="container py-5">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center mb-3">
                        <div class="stripe me-2"></div>
                        <h5>Daftar Santri</h5>
                    </div>
                    <h1 class="fw-bold mb-2">Gabung bersama kami, mewujudkan generasi rabbani</h1>
                    <p class="mb-3">Pesantren Nurun Nuha merupakan pesantren yang berada di kota malang,
                        mengintegrasikan ilmu agama dan umum sehingga akan menjadi penerus bangsa yang hebat dan teguh
                    </p>
                    <button class="btn btn-outline-danger">Register</button>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/images/il-berita-02.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section>
    {{-- End Join --}}
    {{-- Video --}}
    <section id="video" class="py-5">
        <div class="container py-5">
            <div class="text-center">
                <iframe width="560" height="315"
                    src="https://www.youtube.com/embed/yzVbC6W9cMI?si=dWVNMIopfidFCyCN" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
    {{-- end video --}}

    {{-- List Video --}}
    <section id="video_youtube" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">Video Kegiatan Pesantren</h2>
            </div>
            <div class="row py-5">
                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                    src="https://www.youtube.com/embed/yzVbC6W9cMI?si=dWVNMIopfidFCyCN" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                    src="https://www.youtube.com/embed/yzVbC6W9cMI?si=dWVNMIopfidFCyCN" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                </div>
                <div class="col-lg-4">
                    <iframe width="100%" height="215"
                    src="https://www.youtube.com/embed/yzVbC6W9cMI?si=dWVNMIopfidFCyCN" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                </div>
                <div class="footer-berita text-center py-3">
                <a href="" class="btn btn-outline-danger">
                    Lihat Video Selengkapnya
                </a>
            </div>
            </div>
        </div>
    </section>
    {{-- end List Video --}}


    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
        const navbar = document.querySelector(".fixed-top");

        window.onscroll = () => {
            if (window.scrollY > 100) {
                navbar.classList.toggle("scroll-nav-active", true);
                navbar.classList.toggle("text-nav-active", true);
                navbar.classList.toggle("navbar-dark", false);
            } else {
                navbar.classList.toggle("scroll-nav-active", false);
                navbar.classList.toggle("text-nav-active", false);
                navbar.classList.toggle("navbar-dark", true);
            }
        };
    </script>
</body>

</html>
