<?php
include "Helpers/functions.php";
$page = _get_page_name();

?>

<!doctype html>
<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <?php include "body/nav.php"; ?>
    </header>
    <main>

        <div id="carouselExampleCaptions" class="carousel slide  carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">

                <?php for ($i = 1; $i < 5; $i++) : ?>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i - 1  ?>" class="<?= $i == 1 ? 'active' : '' ?>" aria-current="true" aria-label="Slide <?= $i ?>"></button>
                <?php endfor ?>

            </div>
            <div class="carousel-inner">

                <?php for ($i = 1; $i < 5; $i++) : ?>
                    <div class="carousel-item <?= $i == 1 ? 'active' : '' ?>" data-bs-interval="2000">
                        <img src="images/carousel/<?= $i ?>.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Slide <?= $i ?></h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                        <!-- carousel-caption -->
                    </div>
                    <!-- carousel-item -->
                <?php endfor ?>

            </div>
            <!-- carousel-inner -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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