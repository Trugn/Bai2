<?php include 'app/views/shares/header.php'; ?>

<style>
    .product-detail-card {
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.07);
    }

    .product-image-container {
        background-color: #fdfdfd;
        border-right: 1px solid #eee;
        padding: 1.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .product-image {
        max-height: 400px;
        object-fit: contain;
        width: 100%;
        border-radius: 0.75rem;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }

    .product-name {
        font-size: 2rem;
        font-weight: 700;
        color: #222;
    }

    .product-description {
        font-size: 1.1rem;
        color: #555;
        line-height: 1.7;
    }

    .product-price {
        font-size: 1.75rem;
        color: #e74c3c;
        font-weight: 700;
    }

    .badge-category {
        background: linear-gradient(135deg, #0dcaf0, #67e8f9);
        color: #fff;
        padding: 0.45em 0.9em;
        border-radius: 0.75rem;
        font-size: 0.95rem;
    }

    .btn-action {
        min-width: 180px;
        border-radius: 0.65rem;
        padding: 0.65rem 1.2rem;
        font-size: 1.05rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-action:hover {
        opacity: 0.92;
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    }

    .card-header-detail {
        background: linear-gradient(135deg, #007bff, #4facfe);
        color: #fff;
        text-align: center;
        padding: 1.2rem;
    }

    @media (max-width: 768px) {
        .product-image {
            max-height: 300px;
        }
    }
</style>

<div class="container my-5">
    <div class="card product-detail-card">
        <div class="card-header card-header-detail">
            <h2 class="mb-0"><i class="fas fa-box-open me-2"></i>Chi tiết sản phẩm</h2>
        </div>
        <div class="card-body p-4">
            <?php if ($product): ?>
                <div class="row">
                    <div class="col-md-6 product-image-container">
                        <?php if ($product->image): ?>
                            <img src="/webbanhang/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" 
                                 class="img-fluid product-image" 
                                 alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>">
                        <?php else: ?>
                            <img src="/webbanhang/images/no-image.png" class="img-fluid product-image" alt="Không có ảnh">
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <h3 class="product-name mb-3">
                            <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                        </h3>
                        <p class="product-description mb-4">
                            <?php echo nl2br(htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8')); ?>
                        </p>
                        <p class="product-price mb-3">
                            <i class="fas fa-tags me-2"></i> <?php echo number_format($product->price, 0, ',', '.'); ?> VND
                        </p>
                        <p class="mb-4">
                            <strong>Danh mục:</strong>
                            <span class="badge-category">
                                <?php echo !empty($product->category_name) ? 
                                    htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8') : 'Chưa có danh mục'; ?>
                            </span>
                        </p>
                        <div class="d-flex flex-wrap gap-3 mt-4">
                            <a href="/webbanhang/Product/addToCart/<?php echo $product->id; ?>" 
                               class="btn btn-success btn-action">
                                ➕ Thêm vào giỏ hàng
                            </a>
                            <a href="/webbanhang/Product/" 
                               class="btn btn-outline-secondary btn-action">
                                ⬅️ Quay lại danh sách
                            </a>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="alert alert-danger text-center">
                    <h4><i class="fas fa-exclamation-circle me-2"></i>Không tìm thấy sản phẩm!</h4>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php include 'app/views/shares/footer.php'; ?>
