<?php
include_once "Helpers/functions.php";
require_once "database/database.php";
$page = _get_page_name();
$title = "Users";

// $a = "Lamiae";

// $a .= "Tetouan";

// echo $a;

// exit;




$req_search = "";
$search_city = "";

if (isset($_GET['s'])) {
    $s = $_GET['s'];
    $search_city = $_GET['search_city'];

    $req_search = " AND ( first_name LIKE '%$s%' OR last_name LIKE '%$s%' OR phone LIKE '%$s%' OR email LIKE '%$s%' OR city LIKE '%$s%') ";

    if ($search_city != "") {
        $req_search .= " AND city = '$search_city' ";
    }
}

// dd($req_search);

if (isset($_GET['searsh_fs'])) {
    $searsh_fs = $_GET['searsh_fs'];
    $req_search = " AND first_name LIKE '%$searsh_fs%' ";
}

$users = $db->query("SELECT * FROM users WHERE deleted_at IS NULL 
$req_search
ORDER BY id DESC")->fetchAll();
// dd($users);



$citys = $db->query("SELECT distinct city FROM users WHERE deleted_at IS NULL 
ORDER BY city ASC")->fetchAll();


$total_users_deleted = $db->query("SELECT count(id) AS total_users_deleted FROM users WHERE deleted_at IS NOT NULL LIMIT 1")->fetch()->total_users_deleted;

// $total_users_deleted = $db->query("SELECT id FROM users WHERE deleted_at IS NOT NULL")->rowCount();

$user_selected = 0;
if (isset($_GET['user_selected'])) {
    $user_selected = (int)$_GET['user_selected'];
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
            List of users
        </h3>

        <nav aria-label="breadcrumb my-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Users</li>
            </ol>
        </nav>

        <div class="card shadow-sm">
            <div class="card-header">
                <h4>List of users</h4>
            </div>
            <!-- card-header -->

            <div class="card-body">

                <div class="d-flex">
                    <div class="me-auto input-group mt-0">
                        <a href="user_add.php" class="btn btn-primary me-2 btn-sm fw-bold mb-3">
                            <i class="bi bi-pencil-square"></i>
                            Add new user
                        </a>

                        <a href="users_archived.php" class="btn btn-secondary btn-sm fw-bold mb-3">
                            <i class="bi bi-archive"></i>
                            Archived
                            <span class="badge text-bg-light">
                                <?= $total_users_deleted ?>
                            </span>
                        </a>
                    </div>
                    <!-- mt-0 -->

                    <form method="get" class="input-group mb-3">

                        <select class="form-select form-select-sm me-2" name="search_city" id="search_city">
                            <option value="">All citys</option>
                            <?php foreach ($citys as $c) : ?>
                                <option value="<?= $c->city ?>" <?= $search_city == $c->city ? 'selected' : ''   ?>>
                                    <?= ucwords($c->city) ?>
                                </option>
                            <?php endforeach ?>

                        </select>

                        <input id="s" name="s" type="search" class="form-control form-control-sm" placeholder="Search a user:" value="<?= $s ?? '' ?>">
                        <button class="btn btn-outline-dark btn-sm" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>
                    <!-- input-group -->
                </div>

                <div class="table-responsive">
                    <table class="table table-sm table-bordered text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>
                                    <form method="get">
                                        <input type="text" name="searsh_fs" id="searsh_fs" placeholder="First name" class="form-control form-control-sm" value="<?= $searsh_fs ?? '' ?>">
                                    </form>
                                </th>
                                <th>Last name</th>
                                <th>Gender</th>
                                <th>Phone</th>
                                <th>City</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $key => $u) : ?>
                                <tr class="<?= $u->id == $user_selected ? 'table-primary fw-bold' : '' ?>">
                                    <td><?= $u->id ?></td>
                                    <td><?= ucwords($u->first_name) ?></td>
                                    <td><?= ucwords($u->last_name) ?></td>
                                    <td>
                                        <span class="badge rounded-pill text-bg-<?= $u->gender == 'man' ? 'success' : 'danger' ?>">
                                            <?= strtoupper($u->gender) ?>
                                        </span>
                                    </td>
                                    <td><?= $u->phone ?></td>
                                    <td><?= $u->city ?></td>
                                    <td><?= $u->email ?></td>
                                    <td>


                                        <div class="dropdown">
                                            <button class="btn btn-outline-dark btn-sm dropdown-toggle" data-bs-toggle="dropdown">
                                                <i class="bi bi-three-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="user_details.php?id=<?= $u->id ?>">
                                                        <i class="bi bi-info-circle-fill"></i>
                                                        Show
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="user_update.php?id=<?= $u->id ?>">
                                                        <i class="bi bi-wrench-adjustable"></i>
                                                        Update
                                                    </a>
                                                </li>
                                                <li>

                                                    <a class="dropdown-item" href="user_delete.php?id=<?= $u->id ?>">
                                                        <i class="bi bi-trash3-fill"></i>
                                                        Delete
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>





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