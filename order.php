<?php
include "Helpers/functions.php";
$page = _get_page_name();


?>

<!doctype html>
<html lang="en">

<head>
    <title>Order</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <?php include "body/nav.php"; ?>
    </header>
    <main class="container">

        <h3 class="my-3">Order</h3>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>N°</th>
                    <th>Date de commande</th>
                    <th>Client</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001-2023</td>
                    <td>28/08/2023</td>
                    <td>Mohammed Miloudi</td>
                    <td>
                        <span class="badge bg-success text-light">
                            Livrée
                        </span>
                    </td>
                    <td>
                        <a href="order-details.php">Afficher</a>
                    </td>
                </tr>

                <tr>
                    <td>001-2023</td>
                    <td>2/08/2023</td>
                    <td>Noura mniyeche</td>
                    <td>
                        <span class="badge bg-warning text-light">
                            En cours
                        </span>
                    </td>
                    <td>
                        <a href="order-details.php">Afficher</a>
                    </td>
                </tr>


                <tr>
                    <td>001-2023</td>
                    <td>26/08/2023</td>
                    <td>Yasser Chelh</td>
                    <td>
                        <span class="badge bg-danger text-light">
                            Annuler
                        </span>
                    </td>
                    <td>
                        <a href="order-details.php">Afficher</a>
                    </td>
                </tr>
            </tbody>
        </table>

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