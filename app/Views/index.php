<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ziluyatravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .promo-card {
            background: linear-gradient(135deg, #0078D4, #00C4FF);
            color: white;
            text-align: center;
            border-radius: 10px;
            padding: 20px;
        }

        .promo-card h3 {
            font-size: 2rem;
            font-weight: bold;
        }

        .recommendations img {
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        footer {
            background-color: #0078D4;
            color: white;
            text-align: center;
            padding: 15px 0;
        }

        footer a {
            color: #00C4FF;
            text-decoration: none;
            margin: 0 10px;
        }

        .reviews {
            background-color: #f9f9f9;
            padding: 30px;
        }

        .reviews .quote {
            background-color: #0078D4;
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Ziluyatravel ✈️</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Destinasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light btn-sm" href="#">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="search-bar bg-primary py-4">
        <div class="container text-center">
            <form class="row g-2 justify-content-center">
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Dari">
                </div>
                <div class="col-md-3">
                    <input type="text" class="form-control" placeholder="Tujuan">
                </div>
                <div class="col-md-3">
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-light">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Promo Section -->
    <div class="promo py-5">
        <div class="container d-flex justify-content-center gap-4">
            <?php foreach ($promo as $p): ?>
                <div class="promo-card">
                    <h3><?= $p["discount"] ?></h3>
                    <p><?= $p["description"] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Rekomendasi Section -->
    <div class="recommendations py-5">
        <div class="container">
            <h2 class="text-center mb-4">Rekomendasi Wisata</h2>
            <div class="row">
                <?php foreach ($recommendations as $r): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?= $r["image"] ?>" alt="<?= $r["title"] ?>" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title"><?= $r["title"] ?></h5>
                                <p class="card-text"><?= $r["description"] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Reviews Section -->
    <div class="reviews py-5">
        <div class="container">
            <h3 class="text-center mb-4">Apa kata mereka?</h3>
            <div class="row justify-content-center">
                <?php foreach ($reviews as $review): ?>
                    <div class="col-md-3">
                        <div class="quote">
                            <p>"<?= $review ?>"</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>Site menu: <a href="#">Home</a> | <a href="#">About</a> | <a href="#">Help</a> | <a href="#">Terms</a></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
