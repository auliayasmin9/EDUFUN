<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar-brand {
            font-weight: bold;
        }

        .nav-link {
            color: black;
            /* warna nav sebelum dihover */
            text-decoration: none;
        }

        .nav-link:hover,
        .nav-link.active {
            color: blue;
            /* ketika di hover atau aktif */
            text-decoration: underline;
        }

        .about-section {
            background-color: #f5f5f5;
            padding: 50px;
            text-align: center;
        }

        .about-section h1 {
            font-size: 2em;
            margin-bottom: 30px;
        }

        .about-section p {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 3px;
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

    <nav class="navbar navbar-expand-md navbar-light bg-light">
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
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="fw-bold nav-link" href="/">Home</a>
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
                        <a class="fw-bold nav-link active" aria-current="page" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-bold nav-link" href="/popular">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <div class="about-section">
        <h1>About EduFun</h1>
        <p>EduFun adalah perusahaan pendidikan berbasis teknologi asal <br> Indonesia. EduFun menyediakan layanan akses pendidikan dalam format <br> tulisan berbahasa Indonesia yang disajikan secara online melalui <br> website.</p>
        <p>Hingga Juni 2024, EduFun memiliki lebih dari 10 ribu pengguna. EduFun <br> hadir sebagai bentuk revolusi dari pendidikan di Indonesia dengan <br> mengedepankan cara berpikir kritis, logis, rasional, dan sumber <br> pengetahuan sains yang terintegrasi terhadap semua mahasiswa IT
            di <br> Indonesia. EduFun bercita-cita mencetak generasi Indonesia yang <br>memahami ilmu pengetahuan
            dan cinta belajar.</p>
    </div>

    <!-- Footer -->
    <footer>
        <p>© EduFun 2024 | Web Programming | Aulia Yasmin | 2602145030</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>