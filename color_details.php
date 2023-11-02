<?php
require_once "Helpers/functions.php";
require_once "database/database.php";
$page = _get_page_name();
$title = "Color details";

// $_GET;
// $_POST;
// $_COOKIE;
// $_SESSION;
// $_SERVER;
// $_FILES;


// $id = $_GET['id'];

// exit;

if (!isset($_GET['id']) or $_GET['id'] == '') {
    header('Location:colors.php');
    exit;
}

$id = $_GET['id'];
$color = $db->query("SELECT * FROM colors WHERE id = $id LIMIT 1")->fetch();

$name = e($color->name);
$hex = e($color->hex);
$created_at = _date_format($color->created_at);

?>

<!doctype html>
<html lang="en">

<head>
    <?php include "body/head.php"; ?>
</head>

<body class="bg-light">
    <header>
        <?php include "body/nav.php"; ?>
    </header>
    <main class="container">

        <h3 class="mt-3">
            Color details
        </h3>

        <nav aria-label="breadcrumb my-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="colors.php">Colors</a></li>
                <li class="breadcrumb-item active" aria-current="page">Color details</li>
            </ol>
        </nav>

        <div class="card shadow-sm">
            <div class="card-header">
                <h4>Color details</h4>
            </div>
            <!-- crd-header -->

            <div class="card-body">

                <dl class="row">
                    <dt class="col-sm-3">Name:</dt>
                    <dd class="col-sm-9">
                        <?= ucwords($name) ?>
                    </dd>

                    <dt class="col-sm-3">Hex color:</dt>
                    <dd class="col-sm-9">
                        <?= $hex ?>
                    </dd>

                    <dt class="col-sm-3">Color:</dt>
                    <dd class="col-sm-9">
                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <title>Dark purple</title>
                            <rect width="100%" height="100%" fill="<?= $hex ?>"></rect>
                        </svg>
                    </dd>

                    <dt class="col-sm-3">Created at:</dt>
                    <dd class="col-sm-9">
                        <?= $created_at ?>
                    </dd>

                </dl>

            </div>
            <!-- card-body -->
        </div>
        <!-- card -->

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