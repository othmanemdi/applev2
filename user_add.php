<?php
require_once "Helpers/functions.php";
require_once "database/database.php";
$page = _get_page_name();
$title = "Users - Add new user";



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['btn_add_user'])) {

        $first_name = e($_POST['first_name']);
        $last_name = e($_POST['last_name']);
        $phone = e($_POST['phone']);
        $gender = e($_POST['gender']);
        $city = e($_POST['city']);
        $adresse = e($_POST['adresse']);
        $email = e($_POST['email']);

        $db->query("INSERT INTO users SET 
            first_name = '$first_name', 
            last_name = '$last_name', 
            phone = '$phone', 
            gender = '$gender', 
            city = '$city', 
            adresse = '$adresse', 
            email = '$email'
        ");

        $id = $db->lastInsertId();
        header('Location: users.php?user_selected=' . $id);
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
            Add new user
        </h3>


        <div class="card shadow-sm">
            <div class="card-header">
                <h4>Add new user</h4>
            </div>
            <!-- crd-header -->

            <div class="card-body">

                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="first_name" class="form-label">First name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name:">
                            </div>
                            <!-- mb-3 -->
                        </div>
                        <!-- col -->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name:">
                            </div>
                            <!-- mb-3 -->
                        </div>
                        <!-- col -->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone:">
                            </div>
                            <!-- mb-3 -->
                        </div>
                        <!-- col -->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" name="gender" id="gender">
                                    <option value="women">Woman</option>
                                    <option value="men">Man</option>
                                </select>
                            </div>
                        </div>
                        <!-- col -->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="City:">
                            </div>
                            <!-- mb-3 -->
                        </div>
                        <!-- col -->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="adresse" class="form-label">Adresse</label>
                                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse:">
                            </div>
                            <!-- mb-3 -->
                        </div>
                        <!-- col -->

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email:">
                            </div>
                            <!-- mb-3 -->
                        </div>
                        <!-- col -->


                    </div>
                    <!-- row -->

                    <button name="btn_add_user" type="submit" class="btn btn-primary fw-bold">
                        <i class="bi bi-pencil-square"></i>
                        Add new user
                    </button>

                    <a href="users.php" class="btn btn-outline-dark fw-bold">
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