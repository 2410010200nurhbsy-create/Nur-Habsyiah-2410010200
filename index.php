<!DOCTYPE html>
<html lang="id">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - iCatalog</title>
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="dist/style-login.css">
    <style>

    </style>
</head>


<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card glass-card p-4">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h2 class="fw-bold" style="color: var(--cosmic-orange);">iCatalog</h2>
                            <p>Katalog Produk Apple Second</p>
                        </div>
                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo "<div class='alert alert-danger text-center'>Username atau Password salah!</div>";
                            }
                        }
                        ?>
                        <form action="progres_login.php" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
                            </div>
                            <button type="submit" class="btn btn-cosmic w-100 py-2 fw-bold">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>