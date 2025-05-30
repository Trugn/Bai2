<?php include 'app/views/shares/header.php'; ?>

<style>
    .checkout-card {
        max-width: 600px;
        margin: 50px auto;
        padding: 2.5rem;
        border-radius: 1rem;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.08);
        background: #fff;
    }

    .checkout-title {
        font-size: 2.2rem;
        font-weight: 700;
        background: linear-gradient(135deg, #007bff, #4facfe);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-align: center;
        margin-bottom: 2rem;
    }

    .form-group label {
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #333;
    }

    .form-control {
        border-radius: 0.65rem;
        padding: 0.75rem 1rem;
        font-size: 1rem;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.06);
        border: 1px solid #ddd;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 3px rgba(0,123,255,0.15);
    }

    .btn-checkout {
        display: block;
        width: 100%;
        padding: 0.75rem;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 0.65rem;
        background: linear-gradient(135deg, #007bff, #4facfe);
        color: #fff;
        border: none;
        transition: all 0.3s ease;
    }

    .btn-checkout:hover {
        opacity: 0.92;
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(0,0,0,0.12);
    }

    .btn-back {
        display: block;
        text-align: center;
        margin-top: 1rem;
        color: #333;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .btn-back:hover {
        color: #007bff;
    }

</style>

<div class="checkout-card">
    <h1 class="checkout-title"><i class="fas fa-credit-card me-2"></i>Thanh toán</h1>
    <form method="POST" action="/webbanhang/Product/processCheckout">
        <div class="form-group mb-3">
            <label for="name">Họ tên:</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Nhập họ tên của bạn" required>
        </div>
        <div class="form-group mb-3">
            <label for="phone">Số điện thoại:</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Nhập số điện thoại" required>
        </div>
        <div class="form-group mb-4">
            <label for="address">Địa chỉ:</label>
            <textarea id="address" name="address" class="form-control" rows="3" placeholder="Nhập địa chỉ nhận hàng" required></textarea>
        </div>
        <button type="submit" class="btn-checkout">
            <i class="fas fa-money-check-alt me-2"></i>Thanh toán
        </button>
    </form>
    <a href="/webbanhang/Product/cart" class="btn-back mt-3"><i class="fas fa-arrow-left me-1"></i> Quay lại giỏ hàng</a>
</div>

<?php include 'app/views/shares/footer.php'; ?>
