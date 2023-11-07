<?php
require_once "Helpers/functions.php";
require_once "database/database.php";
$page = _get_page_name();
$title = "Category details";

// $_GET;
// $_POST;
// $_COOKIE;
// $_SESSION;
// $_SERVER;
// $_FILES;


// $id = $_GET['id'];

// exit;

if (!isset($_GET['id']) or $_GET['id'] == '') {
    header('Location:categories.php');
    exit;
}

$id = (int)$_GET['id'];

$req = $db->query("SELECT * FROM categories WHERE id = $id LIMIT 1");
$category_count = $req->rowCount();

if ($category_count == 1) {
    $category = $req->fetch();
    $name = e($category->name);
    $icon = e($category->icon);
    $created_at = _date_format($category->created_at);
}

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
            Category details
        </h3>

        <nav aria-label="breadcrumb my-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="categories.php">Categories</a></li>
                <li class="breadcrumb-item active" aria-current="page">Category details</li>
            </ol>
        </nav>

        <?php if ($category_count == 0) : ?>
            <div class="alert alert-warning">
                Cette categorie (id: <?= $id ?>) n'est plus disponible
            </div>
            <!-- alert -->

        <?php else : ?>
            <div class="card shadow-sm">
                <div class="card-header">
                    <h4>Category details</h4>
                </div>
                <!-- crd-header -->

                <div class="card-body">

                    <dl class="row">
                        <dt class="col-sm-3">Name:</dt>
                        <dd class="col-sm-9">
                            <?= ucwords($name) ?>
                        </dd>

                        <dt class="col-sm-3">Icon:</dt>
                        <dd class="col-sm-9">
                            <i class="bi bi-<?= $icon ?>"></i>
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
        <?php endif ?>

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