<?php include 'app/views/shares/header.php'; ?>

<!-- Wrapper: sử dụng flex để footer luôn dưới -->
<div class="d-flex flex-column min-vh-100">
    <!-- Main content -->
    <main class="flex-fill">
        <section class="py-5" style="background: linear-gradient(to right, #141e30, #243b55);">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-lg border-0" style="border-radius: 1rem;">
                            <div class="card-body p-5">
                                <h2 class="text-center text-uppercase fw-bold mb-4 text-primary">Đăng Nhập</h2>
                                <p class="text-center text-muted mb-4">Vui lòng nhập tài khoản và mật khẩu</p>

                                <form action="/webbanhang/account/checklogin" method="post">
                                    <div class="form-group mb-3">
                                        <label for="username" class="form-label">Tên đăng nhập</label>
                                        <input type="text" name="username" id="username" class="form-control form-control-lg" required>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password" class="form-label">Mật khẩu</label>
                                        <input type="password" name="password" id="password" class="form-control form-control-lg" required>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <a href="#!" class="text-decoration-none small text-primary">Quên mật khẩu?</a>
                                    </div>

                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg">Đăng nhập</button>
                                    </div>

                                    <div class="text-center mt-4">
                                        <p class="mb-2 text-muted">Hoặc đăng nhập bằng</p>
                                        <div class="d-flex justify-content-center gap-3">
                                            <a href="#!" class="btn btn-outline-primary rounded-circle">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                            <a href="#!" class="btn btn-outline-danger rounded-circle">
                                                <i class="fab fa-google"></i>
                                            </a>
                                            <a href="#!" class="btn btn-outline-dark rounded-circle">
                                                <i class="fab fa-github"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="text-center mt-4">
                                        <p class="mb-0 text-muted">
                                            Bạn chưa có tài khoản?
                                            <a href="/webbanhang/account/register" class="fw-bold text-decoration-none text-primary">Đăng ký ngay</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'app/views/shares/footer.php'; ?>
</div>
