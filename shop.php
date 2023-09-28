<?php
require "Helpers/functions.php";
require "database/db.php";
require "database/database.php";
$page = _get_page_name();

$products = [];
// dd($products);

// $users = $pdo->query("SELECT * FROM users")->fetchAll();


$produits = $db->query("SELECT * FROM produits WHERE deleted_at IS NULL")->fetchAll();

?>

<!doctype html>
<html lang="en">

<head>
    <title>Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">



</head>

<body>
    <header>
        <?php include "body/nav.php"; ?>
    </header>
    <main class="container">

        <h3 class="my-3">Shop</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>


        <div class="row">
            <div class="col-md-3">
                <h5>Catégories:</h5>

                <ul class="list-group list-group-flush">

                    <?php foreach ($categories as $key => $value) : ?>
                        <li class="list-group-item">
                            <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="<?= $value['name'] ?>" id="<?= $value['name'] ?>">
                            <label class="form-check-label" for="<?= $value['name'] ?>">
                                <i class="bi bi-<?= $value['icon'] ?>"></i>
                                <?= ucwords($value['name']) ?>
                            </label>
                        </li>
                    <?php endforeach ?>

                </ul>


                <h5 class="mt-3">Couleurs:</h5>


                <hr class="m-0 mt-2 mb-3">

                <div>
                    <style>
                        .btn-outline-originale {
                            --bs-btn-color: black;
                            --bs-btn-border-color: #e8ebe9;
                            --bs-btn-hover-color: #fff;
                            --bs-btn-hover-bg: #e8ebe9;
                            --bs-btn-hover-border-color: #e8ebe9;
                            --bs-btn-focus-shadow-rgb: 13, 110, 253;
                            --bs-btn-active-color: #fff;
                            --bs-btn-active-bg: #e8ebe9;
                            --bs-btn-active-border-color: #e8ebe9;
                            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
                            --bs-btn-disabled-color: #e8ebe9;
                            --bs-btn-disabled-bg: transparent;
                            --bs-btn-disabled-border-color: #e8ebe9;
                            --bs-gradient: none;
                        }
                    </style>

                    <?php foreach ($colors as $key => $value) : ?>

                        <?php if ($value != "originale") : ?>
                            <style>
                                .btn-outline-<?= $value ?> {
                                    --bs-btn-color: <?= $value ?>;
                                    --bs-btn-border-color: <?= $value ?>;
                                    --bs-btn-hover-color: #fff;
                                    --bs-btn-hover-bg: <?= $value ?>;
                                    --bs-btn-hover-border-color: <?= $value ?>;
                                    --bs-btn-focus-shadow-rgb: 13, 110, 253;
                                    --bs-btn-active-color: #fff;
                                    --bs-btn-active-bg: <?= $value ?>;
                                    --bs-btn-active-border-color: <?= $value ?>;
                                    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
                                    --bs-btn-disabled-color: <?= $value ?>;
                                    --bs-btn-disabled-bg: transparent;
                                    --bs-btn-disabled-border-color: <?= $value ?>;
                                    --bs-gradient: none;
                                }
                            </style>

                            <style>
                                <?php // _class_checkbox($value) 
                                ?>
                            </style>
                        <?php endif ?>

                        <input type="checkbox" name="color" class="btn-check" id="btn-check-<?= $value ?>" autocomplete="off">

                        <label class="btn mb-2 btn-outline-<?= $value ?> fw-bold rounded-pill btn-sm me-3" for="btn-check-<?= $value ?>">
                            <i class="bi bi-circle-fill"></i> <?= ucwords($value) ?>
                        </label>

                    <?php endforeach ?>

                </div>


            </div>
            <!-- col -->

            <div class="col-md-9">

                <h5 class="my-3">Liste des produits</h5>
                <hr>
                <div class="row row-cols-2 row-cols-lg-3 row-cols-md-2 row-cols-sm-2 gy-2">

                    <?php foreach ($produits as $key => $p) : ?>
                        <div class="col">
                            <div class="card">
                                <a href="product-details.php?id=<?= $p->id ?>">
                                    <img src="images/produits1/<?= $p->image ?>" class="card-img-top" alt="...">
                                </a>
                                <div class="card-body">
                                    <h6 class="fw-bold">
                                        <?= $p->designation ?>
                                    </h6>
                                    <div class="mb-2">
                                        <span class="h6 fw-bold"><?= $p->prix ?> DH</span>
                                        <span class="h6 fw-bold text-decoration-line-through text-danger">
                                            <?= $p->ancien_prix ?> DH
                                        </span>
                                    </div>

                                    <a href="cart.php" class="btn btn-dark fw-bold">
                                        <i class="bi bi-cart-fill"></i>
                                        Add to cart
                                    </a>
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div>
                        <!-- col -->
                    <?php endforeach ?>
                </div>
                <!-- row -->

            </div>
            <!-- col -->

        </div>
        <!-- row -->

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