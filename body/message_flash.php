<?php if (isset($_SESSION['message']) and isset($_SESSION['color'])) : ?>
    <div class="alert alert-<?= $_SESSION['color'] ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <?php unset($_SESSION['message']) ?>
        <?php unset($_SESSION['color']) ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>