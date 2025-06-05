<?php include 'app/views/shares/header.php'; ?>

<!-- Wrapper đảm bảo footer luôn ở dưới -->
<div class="d-flex flex-column min-vh-100">
    <!-- Main -->
    <main class="flex-fill">
        <section class="py-5" style="background: linear-gradient(to right, #141e30, #243b55);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card shadow-lg border-0" style="border-radius: 1rem;">
                            <div class="card-body p-5">
                                <h2 class="text-center text-uppercase fw-bold mb-4 text-primary">
                                    <i class="bi bi-person-plus-fill me-2"></i>Đăng ký tài khoản
                                </h2>

                                <?php if (isset($errors)) : ?>
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            <?php foreach ($errors as $err) : ?>
                                                <li><?= $err ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>

                                <form action="/webbanhang/account/save" method="post">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Tên đăng nhập" required>
                                        <label for="username"><i class="bi bi-person-circle me-1"></i>Tên đăng nhập</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Họ và tên" required>
                                        <label for="fullname"><i class="bi bi-card-text me-1"></i>Họ và tên</label>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu" required>
                                        <label for="password"><i class="bi bi-lock-fill me-1"></i>Mật khẩu</label>
                                    </div>

                                    <div class="form-floating mb-4">
                                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Xác nhận mật khẩu" required>
                                        <label for="confirmpassword"><i class="bi bi-lock-fill me-1"></i>Xác nhận mật khẩu</label>
                                    </div>

                                    <div class="d-grid mb-3">
                                        <button type="submit" class="btn btn-primary py-3 fw-semibold">
                                            <i class="bi bi-person-plus me-1"></i> Đăng ký ngay
                                        </button>
                                    </div>

                                    <div class="text-center">
                                        <p class="text-muted mb-0">
                                            Đã có tài khoản?
                                            <a href="/webbanhang/account/login" class="fw-bold text-primary text-decoration-none">Đăng nhập</a>
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
