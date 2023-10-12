<?php
require_once "Helpers/functions.php";
require_once "database/database.php";
$page = _get_page_name();
$title = "Colors - Add new color";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btn_add_color'])) {
        $name = $_POST['name'];
        $hex = $_POST['hex'];
        $db->query("INSERT INTO colors SET name = '$name', hex = '$hex'");
        header('Location: colors.php');
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
            Add new color
        </h3>


        <div class="card shadow-sm">
            <div class="card-header">
                <h4>Add new color</h4>
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
                                <label for="hex" class="form-label">Hex</label>
                                <input type="text" class="form-control" name="hex" id="hex" placeholder="Hex Color:">
                            </div>
                            <!-- mb-3 -->
                        </div>
                        <!-- col -->
                    </div>
                    <!-- row -->

                    <button name="btn_add_color" type="submit" class="btn btn-primary fw-bold">
                        <i class="bi bi-pencil-square"></i>
                        Add new color
                    </button>

                    <a href="colors.php" class="btn btn-outline-dark fw-bold">
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