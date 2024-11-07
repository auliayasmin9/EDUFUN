<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Engineering</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar-brand {
            font-weight: bold;
        }

        .nav-link {
            color: black;
            text-decoration: none;
        }

        .nav-link:hover,
        .nav-link.active {
            color: blue;
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

        #fullContent {
            display: none;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="card" style="width: 100%;">
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container-xxl">
                <a href="#intro" class="navbar-brand text-center">
                    <span class="fw-semibold text-secondary d-block">EDUFUN</span>
                    <small class="fw-light text-secondary">Website Pendidikan</small>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="fw-bold nav-link" href="/">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="fw-bold nav-link dropdown-toggle" href="/category" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Category</a>
                            <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                                <li><a class="dropdown-item active" aria-current="page" href="/category/SoftwareEngineering">Software Engineering</a></li>
                                <li><a class="dropdown-item" href="/category/InteractiveMultimedia">Interactive Multimedia</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="fw-bold nav-link" href="/writers">Writers</a></li>
                        <li class="nav-item"><a class="fw-bold nav-link" href="/about">About Us</a></li>
                        <li class="nav-item"><a class="fw-bold nav-link" href="/popular">Popular</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <h1 class="fw-semibold text-secondary d-block fs-5">Software Engineering</h1>

        <div class="row g-0">
            <div class="col-12 col-md-4">
                <img src="{{ asset('img/se_course.jpg') }}" alt="" class="img-fluid rounded-start">
            </div>
            <div class="col-12 col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Software Engineering</h5>
                    <h6 class="card-title fs-6">14 May 2024 | by Nina</h6>
                    <p class="card-text fw-normal">Software Engineering, atau dalam bahasa Indonesia dikenal sebagai Rekayasa Perangkat Lunak, adalah disiplin ilmu yang mempelajari berbagai metode, teknik, dan alat yang digunakan untuk merancang, mengembangkan, dan memelihara perangkat lunak yang berkualitas...</p>
                    <a href="javascript:void(0);" id="readMoreButton" onclick="showFullContent()" class="btn btn-primary">Read More</a>
                    <div id="fullContent">
                        <p><strong>Software Engineering</strong>, atau dalam bahasa Indonesia dikenal sebagai Rekayasa Perangkat Lunak, adalah disiplin ilmu yang mempelajari berbagai metode, teknik, dan alat yang digunakan untuk merancang, mengembangkan, dan memelihara perangkat lunak yang berkualitas tinggi. Course ini mencakup pemahaman menyeluruh tentang siklus hidup pengembangan perangkat lunak (Software Development Life Cycle atau SDLC), yang melibatkan tahap-tahap seperti analisis kebutuhan, perancangan sistem, implementasi kode, pengujian, hingga pemeliharaan perangkat lunak setelah dirilis.</p>
                        <p>Selain itu, peserta akan mempelajari berbagai metodologi pengembangan perangkat lunak seperti Agile, Waterfall, dan DevOps. Setiap metodologi ini memiliki kelebihan dan kekurangannya sendiri dan digunakan sesuai dengan kebutuhan proyek yang dikerjakan. Course ini juga mencakup prinsip-prinsip pemrograman dan desain perangkat lunak, termasuk konsep desain berorientasi objek dan arsitektur perangkat lunak yang baik, yang akan membantu dalam menghasilkan perangkat lunak yang efisien dan mudah dikelola. Pengujian dan debugging juga menjadi bagian penting dari course ini, yang bertujuan untuk memastikan perangkat lunak bebas dari kesalahan dan siap digunakan oleh pengguna.</p>
                        <p>Dengan mempelajari Rekayasa Perangkat Lunak, peserta akan dibekali dengan keterampilan yang diperlukan untuk bekerja dalam pengembangan perangkat lunak profesional, mulai dari pemrograman, manajemen proyek, hingga kualitas dan pemeliharaan perangkat lunak.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <footer>
        <p>© EduFun 2024 | Web Programming | Aulia Yasmin | 2602145030</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function showFullContent() {
            document.getElementById("fullContent").style.display = "block"; // Menampilkan konten lengkap
            document.getElementById("readMoreButton").style.display = "none"; // Menyembunyikan tombol Read More
        }
    </script>
</body>

</html>