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

.card {
    border: 1px solid #e0e0e0;
    border-radius: 0.75rem;
    transition: all 0.3s ease;
}

.card:hover {
    box-shadow: 0 8px 24px rgba(0,0,0,0.08);
    transform: translateY(-3px);
}

.card-title a {
    color: #212529;
    transition: color 0.3s ease;
}

.card-title a:hover {
    color: #26c6da;
}

.btn-primary {
    background-color: #26c6da;
    border: none;
}

.btn-primary:hover {
    background-color: #1cb5c9;
}

.btn-outline-warning {
    border-color: #ff7043;
    color: #ff7043;
}

.btn-outline-warning:hover {
    background-color: #ff7043;
    color: #fff;
}

.btn-outline-danger {
    border-color: #f44336;
    color: #f44336;
}

.btn-outline-danger:hover {
    background-color: #f44336;
    color: #fff;
}

.img-hover {
    transition: transform 0.35s ease;
}

.img-hover:hover {
    transform: scale(1.05);
}

.navbar-toggler {
    border: none;
}

.navbar-toggler:focus {
    box-shadow: none;
}

</style>


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
                <li class="nav-item">
                    <a class="nav-link" href="/webbanhang/Product/admin">
                        <i class="bi bi-box-seam me-1"></i>Danh sách sản phẩm
                    </a>
                </li>
                <li class="nav-item position-relative">
                    <a class="nav-link d-flex align-items-center" href="/webbanhang/Product/Cart">
                        <i class="bi bi-cart4 me-1"></i>Giỏ hàng
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">
                            <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
