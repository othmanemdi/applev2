<?php
include_once "Helpers/functions.php";
require_once "database/database.php";
$page = _get_page_name();
$title = "Categories";
$categories = $db->query("SELECT * FROM categories WHERE deleted_at IS NULL ORDER BY id DESC")->fetchAll();

// CRUDS

// CREATE -----------
// READ -----------
// UPDATE
// DELETE
// SEARCH



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

        <h3 class="my-3">
            List of categories
        </h3>



        <div class="card shadow-sm">
            <div class="card-header">
                <h4>List of categories</h4>
            </div>
            <!-- crd-header -->

            <div class="card-body">

                <a href="category_add.php" class="btn btn-primary btn-sm fw-bold mb-3">
                    <i class="bi bi-pencil-square"></i>
                    Add new category
                </a>
                <div class="table-responsive">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Icon</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $key => $v) : ?>
                                <tr>
                                    <td>
                                        <?= $v->id ?>
                                    </td>
                                    <td>

                                        <?= ucwords($v->name) ?>
                                    </td>

                                    <td>
                                        <i class="bi bi-<?= $v->icon ?>"></i>
                                    </td>
                                    <td>
                                        <a href="category_details.php?id=<?= $v->id ?>" class="btn btn-secondary btn-sm fw-bold">
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
</body>

</html>