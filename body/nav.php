<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #010101;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Apple</a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                <li class="nav-item">
                    <a class="nav-link 
                    <?php
                    if ($page == "index") {
                        echo 'text-info fw-bold';
                    } else {
                        echo '';
                    }
                    ?>
                    
                    " href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link
                    
                    <?php
                    if ($page == "shop")
                        echo 'text-info fw-bold';
                    else
                        echo '';
                    ?>
                    
                    " href="shop.php">Shop</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'cart') ? 'text-info fw-bold' : ''  ?>" href="cart.php">Cart</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link <?php // ($page == 'order' or $page == 'order-details') ? 'text-info fw-bold' : ''  
                                        ?>" href="order.php">Order</a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link <?= in_array($page, ["order", "order-details"]) ? 'text-info fw-bold' : ''  ?>" href="order.php">Order</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= in_array($page, ["colors"]) ? 'text-info fw-bold' : ''  ?>" href="colors.php">Colors</a>
                </li>

            </ul>
            <ul class="d-flex navbar-nav my-2 my-lg-0">

                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'profil') ? 'text-info fw-bold' : ''  ?>" href="profil.php">Profil</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'login') ? 'text-info fw-bold' : ''  ?>" href="login.php">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= ($page == 'register') ? 'text-info fw-bold' : ''  ?>" href="register.php">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>