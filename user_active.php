<?php
require_once "Helpers/functions.php";
require_once "database/database.php";
$page = _get_page_name();
$title = "User active";

if (!isset($_GET['id']) or $_GET['id'] == '') {
    header('Location:users.php');
    exit;
}

$id = (int)$_GET['id'];

$req = $db->query("SELECT * FROM users WHERE id = $id LIMIT 1");
$user_count = $req->rowCount();

if ($user_count == 1) {

    if (isset($_POST["btn_active_user"])) {
        $db->query("UPDATE users SET deleted_at = NULL WHERE id = $id");
        header("Location:users.php?user_selected=$id");
        exit;
    }

    $user = $req->fetch();

    $id = e($user->id);
    $first_name = e($user->first_name);
    $last_name = e($user->last_name);
    $gender = e($user->gender);
    $phone = e($user->phone);
    $city = e($user->city);
    $adresse = e($user->adresse);
    $email = e($user->email);
    $created_at = _date_format($user->created_at);;
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
            User active
        </h3>

        <nav aria-label="breadcrumb my-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="users.php">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">User active</li>
            </ol>
        </nav>

        <?php if ($user_count == 0) : ?>
            <div class="alert alert-warning">
                Cette categorie (id: <?= $id ?>) n'est plus disponible
            </div>
            <!-- alert -->

        <?php else : ?>
            <div class="card shadow-sm border-success">
                <div class="card-header text-success">
                    <h4>User details</h4>
                </div>
                <!-- crd-header -->

                <div class="card-body">

                    <dl class="row">
                        <dt class="col-sm-3">First name:</dt>
                        <dd class="col-sm-9">
                            <?= ucwords($first_name) ?>
                        </dd>

                        <dt class="col-sm-3">Last name:</dt>
                        <dd class="col-sm-9">
                            <?= ucwords($last_name) ?>
                        </dd>

                        <dt class="col-sm-3">Gender:</dt>
                        <dd class="col-sm-9">

                            <span class="badge rounded-pill text-bg-<?= $user->gender == 'man' ? 'success' : 'danger' ?>">
                                <?= strtoupper($user->gender) ?>
                            </span>
                        </dd>


                        <dt class="col-sm-3">Phone:</dt>
                        <dd class="col-sm-9">
                            <?= ucwords($phone) ?>
                        </dd>


                        <dt class="col-sm-3">City:</dt>
                        <dd class="col-sm-9">
                            <?= ucwords($city) ?>
                        </dd>

                        <dt class="col-sm-3">Adresse:</dt>
                        <dd class="col-sm-9">
                            <?= ucwords($adresse) ?>
                        </dd>

                        <dt class="col-sm-3">Email:</dt>
                        <dd class="col-sm-9">
                            <?= ucwords($email) ?>
                        </dd>

                        <dt class="col-sm-3">Created at:</dt>
                        <dd class="col-sm-9">
                            <?= $created_at ?>
                        </dd>

                    </dl>


                    <h5 class="text-success fw-bold">
                        Are you sure you want to active (<?= ucwords($first_name) ?>) ?
                    </h5>

                    <form method="post">
                        <a href="users.php" class="btn btn-secondary fw-bold">Back</a>

                        <button type="submit" class="btn btn-success fw-bold" name="btn_active_user">
                            <i class="bi bi-arrow-clockwise"></i>
                            Active
                        </button>
                    </form>


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