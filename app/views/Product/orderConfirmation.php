<?php include 'app/views/shares/header.php'; ?>

<style>
    .confirmation-card {
        max-width: 600px;
        margin: 60px auto;
        padding: 2.5rem;
        border-radius: 1rem;
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        text-align: center;
        background: #fff;
    }

    .confirmation-icon {
        font-size: 4.5rem;
        color: #28a745;
        margin-bottom: 1.5rem;
        animation: pop 0.6s ease;
    }

    @keyframes pop {
        0% { transform: scale(0.4); opacity: 0; }
        70% { transform: scale(1.15); opacity: 1; }
        100% { transform: scale(1); }
    }

    .confirmation-title {
        font-size: 2.2rem;
        font-weight: 700;
        background: linear-gradient(135deg, #007bff, #4facfe);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 1rem;
    }

    .confirmation-text {
        font-size: 1.1rem;
        color: #555;
        margin-bottom: 2rem;
    }

    .btn-back-shopping {
        display: inline-block;
        padding: 0.75rem 1.5rem;
        font-size: 1.05rem;
        font-weight: 600;
        border-radius: 0.65rem;
        background: linear-gradient(135deg, #007bff, #4facfe);
        color: #fff;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-back-shopping:hover {
        opacity: 0.9;
        transform: translateY(-2px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    }
</style>

<div class="confirmation-card">
    <div class="confirmation-icon">
        <i class="fas fa-check-circle"></i>
    </div>
    <h1 class="confirmation-title">Đặt hàng thành công!</h1>
    <p class="confirmation-text">Cảm ơn bạn đã đặt hàng tại shop của chúng tôi. Đơn hàng của bạn đã được xử lý thành công và đang trên đường tới bạn.</p>
    <a href="/webbanhang/Product" class="btn-back-shopping">
        🛍️ Tiếp tục mua sắm
    </a>
</div>

<?php include 'app/views/shares/footer.php'; ?>
