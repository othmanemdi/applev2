<?php
include_once "Helpers/functions.php";
require_once "database/database.php";
$page = _get_page_name();
$title = "Users";
$users = $db->query("SELECT * FROM users WHERE deleted_at IS NOT NULL ORDER BY id DESC")->fetchAll();

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
            List of users archived
        </h3>

        <nav aria-label="breadcrumb my-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="users.php">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">User archived</li>
            </ol>
        </nav>

        <div class="card shadow-sm border-danger">
            <div class="card-header text-danger">
                <h4>List of users archived</h4>
            </div>
            <!-- crd-header -->

            <div class="card-body">

                <a href="users.php" class="btn btn-secondary btn-sm fw-bold mb-3">
                    <i class="bi bi-people-fill"></i>
                    List of users
                </a>
                <div class="table-responsive">
                    <table class="table table-sm table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Gender</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $key => $u) : ?>
                                <tr>
                                    <td><?= $u->id ?></td>
                                    <td><?= ucwords($u->first_name) ?></td>
                                    <td><?= ucwords($u->last_name) ?></td>
                                    <td>
                                        <span class="badge rounded-pill text-bg-<?= $u->gender == 'man' ? 'success' : 'danger' ?>">
                                            <?= strtoupper($u->gender) ?>
                                        </span>
                                    </td>

                                    <td>
                                        <a href="user_details.php?id=<?= $u->id ?>" class="btn btn-secondary btn-sm fw-bold">
                                            <i class="bi bi-info-circle-fill"></i>
                                            Show
                                        </a>

                                        <a href="user_active.php?id=<?= $u->id ?>" class="btn btn-success btn-sm fw-bold">
                                            <i class="bi bi-arrow-clockwise"></i>
                                            Active
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach  ?>

                        </tbody>
                    </table>
                </div>
                <!-- table-responsive -->

                <div class="mt-0">
                    <a href="users.php" class="btn btn-outline-dark btn-sm fw-bold">
                        <i class="bi bi-arrow-left"></i>
                        Back
                    </a>
                </div>
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