<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<!-- Font Awesome (optional) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
body {
    background-color: #fdfdfd;
    color: #212529;
}
.navbar {
    background-color: #ffffff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
}
.navbar-brand {
    color: #212529;
    font-size: 1.5rem;
    font-weight: 700;
}
.navbar-brand i {
    font-size: 1.6rem;
    color: #26c6da;
}
.nav-link {
    color: #212529;
    font-weight: 500;
    transition: all 0.3s ease;
}
.nav-link:hover {
    color: #ff7043 !important;
    transform: translateY(-1px);
}
.badge {
    background: #26c6da;
    font-size: 0.75rem;
    padding: 0.4em 0.6em;
    color: #fff;
    box-shadow: 0 0 5px rgba(255, 111, 145, 0.4);
}
.navbar-toggler {
    border: none;
}
.navbar-toggler:focus {
    box-shadow: none;
}
</style>

<?php require_once 'app/helpers/SessionHelper.php'; ?>

<nav class="navbar navbar-expand-lg shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/webbanhang/Product">
            <i class="bi bi-speedometer2 me-2"></i>Quản trị sản phẩm
        </a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-2"></i>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center gap-3">

                <?php if (SessionHelper::isAdmin()) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/webbanhang/Product/admin">
                        <i class="bi bi-box-seam me-1"></i>Danh sách sản phẩm
                    </a>
                </li>
                <?php } ?>

                <li class="nav-item position-relative">
                    <a class="nav-link d-flex align-items-center" href="/webbanhang/Product/Cart">
                        <i class="bi bi-cart4 me-1"></i>Giỏ hàng
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">
                            <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <?php 
                    if (SessionHelper::isLoggedIn()) {
                        echo "<a class='nav-link'><i class='bi bi-person-circle me-1'></i>" . $_SESSION['username'] . "</a>";
                    } else {
                        echo "<a class='nav-link' href='/webbanhang/account/login'><i class='bi bi-box-arrow-in-right me-1'></i>Đăng nhập</a>";
                    }
                    ?>
                </li>

                <?php if (SessionHelper::isLoggedIn()) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/webbanhang/account/logout">
                        <i class="bi bi-box-arrow-right me-1"></i>Đăng xuất
                    </a>
                </li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>
