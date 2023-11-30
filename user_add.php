<?php
require_once "Helpers/functions.php";
require_once "database/database.php";
$page = _get_page_name();
$title = "Cateories - Add new category";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btn_add_category'])) {
        if (isset($_POST['name']) and isset($_POST['icon'])) {
            $name = e($_POST['name']);
            $icon = e($_POST['icon']);

            if ($name == '' or empty($icon)) {
                // Probléme
                header('Location: category_add.php');
                exit;
            }

            $rows_categories = $db->query("SELECT * FROM categories WHERE name = '$name' LIMIT 1")->rowCount();

            if ($rows_categories == 1) {
                //Probléme
                header('Location: category_add.php');
                exit;
            } else {
                // Success
                $db->query("INSERT INTO categories SET name = '$name', icon = '$icon'");
                header('Location: categories.php');
            }
        } else {
            header('Location: category_add.php');
        }
        exit;
    }
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

        <h3 class="my-3">
            Add new category
        </h3>


        <div class="card shadow-sm">
            <div class="card-header">
                <h4>Add new category</h4>
            </div>
            <!-- crd-header -->

            <div class="card-body">

                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name:">
                            </div>
                            <!-- mb-3 -->
                        </div>
                        <!-- col -->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon Bootstrap</label>
                                <span>
                                    <a target="_blank" href="https://icons.getbootstrap.com/">Go to link</a>
                                </span>
                                <input type="text" class="form-control" name="icon" id="icon" placeholder="Ex: phone">

                            </div>
                            <!-- mb-3 -->
                        </div>
                        <!-- col -->
                    </div>
                    <!-- row -->

                    <button name="btn_add_category" type="submit" class="btn btn-primary fw-bold">
                        <i class="bi bi-pencil-square"></i>
                        Add new category
                    </button>

                    <a href="categories.php" class="btn btn-outline-dark fw-bold">
                        <i class="bi bi-arrow-left"></i>
                        Back
                    </a>

                </form>
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