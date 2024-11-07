<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .nav-link {
            color: black;
            /*warna nav sebelum dihover*/
            text-decoration: none;
        }

        .nav-link:hover {
            color: blue;
            /*ketika di hover */
            text-decoration: underline;
        }

        footer {
            background-color: #1a1a2e;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-xxl">
            <a href="#intro" class="navbar-brand text-center">
                <span class="fw-semibold text-secondary d-block">EDUFUN</span>
                <small class="fw-light text-secondary">Website Pendidikan</small>
            </a>

            <!-- toggle button for mobile nav -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-end align-center"
                id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="fw-bold nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="fw-bold nav-link dropdown-toggle" href="/category" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item" href="/category/SoftwareEngineering">Software Engineering</a></li>
                            <li><a class="dropdown-item" href="/category/InteractiveMultimedia">Interactive Multimedia</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="fw-bold nav-link" href="/writers">Writers</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-bold nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-bold nav-link" href="/popular">Popular</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-12 p-0">
                <img src="{{ asset('img/img-Homepage.png')}}" alt="" height="460px" width="1280px">
            </div>
        </div>
    </div>

    <div class="card" style="width: 80rem;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('img/im_course.jpg') }}" alt="" class="img-fluid rounded-start" height="160px" width="280px">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Interactive Multimedia</h5>
                    <p class="card-text">Interactive Multimedia, atau Multimedia Interaktif, adalah bidang yang menggabungkan elemen-elemen media seperti teks, gambar, audio, video, dan animasi untuk menciptakan pengalaman pengguna yang dinamis dan menarik. Dalam course ini, peserta akan mempelajari dasar-dasar pembuatan konten multimedia yang...</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card" style="width: 80rem;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('img/se_course.jpg') }}" alt="" class="img-fluid rounded-start" height="160px" width="280px">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Software Engineering</h5>
                    <p class="card-text">Software Engineering, atau dalam bahasa Indonesia dikenal sebagai Rekayasa Perangkat Lunak, adalah disiplin ilmu yang mempelajari berbagai metode, teknik, dan alat yang digunakan untuk merancang, mengembangkan, dan memelihara perangkat lunak yang berkualitas...</p>
                    <a href="/category/SoftwareEngineering" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <p>© EduFun 2024 | Web Programming | Aulia Yasmin | 2602145030</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>