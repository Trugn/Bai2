<?php include 'app/views/shares/header.php'; ?>

<style>
    .product-card {
        border-radius: 1rem;
        overflow: hidden;
        transition: all 0.3s ease;
        background-color: #fff;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
    }

    .product-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }

    .product-image {
        height: 220px;
        width: 100%;
        object-fit: contain;
        background-color: #f8f9fa;
        padding: 10px;
    }

    .price {
        color: #e74c3c;
        font-weight: 600;
        font-size: 1.05rem;
    }

    .product-name {
        font-size: 1rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 0.5rem;
        display: block;
        text-decoration: none;
    }

    .product-name:hover {
        color: #0d6efd;
        text-decoration: underline;
    }

    .category-badge {
        background-color: #f1f1f1;
        color: #555;
        font-size: 0.85rem;
        padding: 4px 8px;
        border-radius: 0.5rem;
        display: inline-block;
    }

    .card-body {
        padding: 1rem 1.2rem;
    }

    .btn-group a {
        flex: 1;
    }
</style>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark mb-0"><i class="fas fa-boxes me-2"></i>Danh sách sản phẩm</h2>
    <a href="/webbanhang/Product/add" class="btn btn-success btn-lg shadow-sm rounded-3 px-4 py-2">
        <i class="fas fa-plus-circle me-2"></i> Thêm sản phẩm
    </a>
</div>

<div class="row g-4">
    <?php foreach ($products as $product): ?>
        <div class="col-xl-4 col-md-6">
            <div class="product-card card border-0 h-100">
                <img src="/webbanhang/<?php echo $product->image; ?>" 
                     alt="Product Image" 
                     class="product-image">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="product-name">
                            <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                        <div class="price mb-2">
                            <?php echo number_format($product->price, 0, ',', '.'); ?> VND
                        </div>
                        <div class="category-badge mb-3">
                            <i class="fas fa-tag me-1"></i>
                            <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?>
                        </div>
                    </div>
                    <div class="btn-group mt-3 w-100 gap-2">
                        <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" class="btn btn-outline-warning btn-sm rounded-pill">
                            <i class="fas fa-edit me-1"></i> Sửa
                        </a>
                        <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" 
                           class="btn btn-outline-danger btn-sm rounded-pill"
                           onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                            <i class="fas fa-trash-alt me-1"></i> Xóa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'app/views/shares/footer.php'; ?>
