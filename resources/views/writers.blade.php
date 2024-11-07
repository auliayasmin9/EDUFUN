<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writers Page</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .nav-link {
            color: black;
            text-decoration: none;
        }

        .nav-link:hover {
            color: blue;
            text-decoration: underline;
        }

        footer {
            background-color: #1a1a2e;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .writers-section {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 50px;
        }

        .writer-card {
            text-align: center;
        }

        .writer-card img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }

        .writer-card h5 {
            margin-top: 15px;
            font-size: 1.2rem;
        }

        .writer-card p {
            font-size: 1rem;
            color: #666;
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
                        <a class="fw-bold nav-link active" aria-current="page" href="/writers">Writers</a>
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

    <!-- Writers Section -->
    <div class="container">
        <h2 class="text-left mb-4">Our Writers:</h2>
        <div class="writers-section">
            <!-- Writer 1 -->
            <div class="writer-card">
                <img src="https://via.placeholder.com/150" alt="Writer 1">
                <h5>Rakha Putra Wicaksono</h5>
                <p>Spesialis Interactive Multimedia</p>
            </div>
            <!-- Writer 2 -->
            <div class="writer-card">
                <img src="https://via.placeholder.com/150" alt="Writer 2">
                <h5>Bia Mecca Annisa</h5>
                <p>Specialis Software Engineer</p>
            </div>
            <!-- Writer 3 -->
            <div class="writer-card">
                <img src="https://via.placeholder.com/150" alt="Writer 3">
                <h5>Abi Firmansyah</h5>
                <p>Spesialis Network Security</p>
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
