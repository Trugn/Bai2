<?php include 'app/views/shares/header.php'; ?>

<div class="container py-5">
    <h2 class="fw-bold mb-4">🛒 Giỏ hàng của bạn</h2>

    <?php if (!empty($cart)): ?>
        <ul class="list-group mb-4">
            <?php foreach ($cart as $id => $item): ?>
                <li class="list-group-item d-flex align-items-center justify-content-between flex-wrap">
                    <div class="d-flex align-items-center flex-wrap">
                        <?php if ($item['image']): ?>
                            <img src="/webbanhang/<?php echo $item['image']; ?>" alt="Ảnh sản phẩm" class="rounded border me-3" style="width: 80px; height: 80px; object-fit: cover;">
                        <?php endif; ?>
                        <div>
                            <h5 class="fw-bold mb-1"><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></h5>
                            <p class="mb-0 text-danger fw-semibold">Giá: <?php echo number_format($item['price'], 0, ',', '.'); ?> VND</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <div class="btn-group me-3" role="group">
                            <a href="/webbanhang/Product/decreaseQuantity/<?php echo $id; ?>" class="btn btn-sm btn-outline-secondary" title="Giảm">
                                <i class="bi bi-dash"></i>
                            </a>
                            <span class="px-3 py-1 border rounded bg-light"><?php echo $item['quantity']; ?></span>
                            <a href="/webbanhang/Product/increaseQuantity/<?php echo $id; ?>" class="btn btn-sm btn-outline-secondary" title="Tăng">
                                <i class="bi bi-plus"></i>
                            </a>
                        </div>

                        <a href="/webbanhang/Product/removeFromCart/<?php echo $id; ?>" class="btn btn-sm btn-outline-danger" title="Xóa" onclick="return confirm('Xóa sản phẩm này khỏi giỏ hàng?');">
                            <i class="bi bi-trash"></i>
                        </a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="d-flex justify-content-between">
            <a href="/webbanhang/Product" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Tiếp tục mua sắm
            </a>
            <a href="/webbanhang/Product/checkout" class="btn btn-success">
                <i class="bi bi-credit-card"></i> Thanh toán
            </a>
        </div>

    <?php else: ?>
        <p class="text-muted">🛒 Giỏ hàng của bạn đang trống.</p>
        <a href="/webbanhang/Product" class="btn btn-primary">Tiếp tục mua sắm</a>
    <?php endif; ?>
</div>

<?php include 'app/views/shares/footer.php'; ?>
