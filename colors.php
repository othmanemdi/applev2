<?php
require_once "Helpers/functions.php";
require_once "database/database.php";
$page = _get_page_name();
$title = "Colors";
$colors = $db->query("SELECT * FROM colors WHERE deleted_at IS NULL ORDER BY id DESC")->fetchAll();
// dd($colors);

// CRUD
// C = CREATE
// R = READ
// U = UPDATE
// D = DELETE


?>

<!doctype html>
<html lang="en">

<head>
    <?php include "body/head.php"; ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

</head>

<body class="bg-light">
    <header>
        <?php include "body/nav.php"; ?>
    </header>
    <main class="container">

        <h3 class="mt-3">
            List of colors
        </h3>

        <nav aria-label="breadcrumb my-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Colors</li>
            </ol>
        </nav>

        <div class="card shadow-sm">
            <div class="card-header">
                <h4>Liste of colors</h4>
            </div>
            <!-- crd-header -->

            <div class="card-body">

                <a href="color_add.php" class="btn btn-primary btn-sm fw-bold mb-3">
                    <i class="bi bi-pencil-square"></i>
                    Add new color
                </a>
                <div class="table-responsive">
                    <table class="table table-sm table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($colors as $key => $color) : ?>
                                <tr>
                                    <td>
                                        <?= $color->id ?>
                                    </td>
                                    <td>
                                        <i class="bi bi-circle-fill" style="color: <?= $color->hex ?>"></i>
                                        <?= ucwords($color->name) ?>
                                    </td>

                                    <td>
                                        <a href="color_details.php?id=<?= $color->id ?>" class="btn btn-secondary btn-sm fw-bold">
                                            <i class="bi bi-info-circle-fill"></i>
                                            Show
                                        </a>

                                        <a href="" class="btn btn-dark btn-sm fw-bold">
                                            <i class="bi bi-wrench-adjustable"></i>
                                            Update
                                        </a>

                                        <a href="" class="btn btn-danger btn-sm fw-bold">
                                            <i class="bi bi-trash3-fill"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach  ?>

                        </tbody>
                    </table>
                </div>
                <!-- table-responsive -->
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


    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(function() {
            $('#datatable').dataTable();
        });
    </script>
</body>

</html>