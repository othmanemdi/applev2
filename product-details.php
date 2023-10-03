<?php
include "Helpers/functions.php";
// require "database/db.php";
require_once "database/database.php";
$page = _get_page_name();

$id = $_GET['id'];

// $p = $products[$id];
// $client_systeme = $_SERVER->HTTP_SEC_CH_UA_PLATFORM;

$p = $db->query("SELECT * FROM produits WHERE id = $id AND deleted_at IS NULL LIMIT 1")->fetch();

// $_GET;
// $_POST;
// $_SESSION;
// $_COOKIE;
// $_FILES;
// $_SERVER;

?>

<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <?php include "body/nav.php"; ?>
    </header>
    <main class="container">

        <h3 class="my-3">Product details</h3>


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product details</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6">
                <img src="images/produits/<?= $p->image ?>" class="img-fluid" alt="">
            </div>

            <div class="col-md-6">
                <h3><?= $p->designation ?></h3>
                <p>
                    <?= $p->description ?>
                </p>

                <h4>
                    <span class="fw-bold"><?= $p->prix ?> DH</span>
                    <span class="fw-bold text-decoration-line-through text-danger">
                        <?= $p->ancien_prix ?> DH
                    </span>
                </h4>

                <button class="btn btn-dark fw-bold">
                    <i class="bi bi-cart-fill"></i>
                    Add To Cart
                </button>
            </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>