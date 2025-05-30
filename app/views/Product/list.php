<?php include 'app/views/shares/header.php'; ?>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold text-primary">🛍️ Danh sách sản phẩm</h1>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-4">
        <?php foreach ($products as $product): ?>
            <div class="col">
                <div class="card h-100 border-0 shadow-lg rounded-4 overflow-hidden product-card position-relative">
                    
                    <!-- Bọc toàn bộ ảnh + overlay vào link -->
                    <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="text-decoration-none text-dark">
                        <div class="position-relative overflow-hidden">
                            <?php if ($product->image): ?>
                                <img src="/webbanhang/<?php echo $product->image; ?>" class="card-img-top img-hover" alt="Product Image" style="height: 220px; object-fit: cover;">
                            <?php else: ?>
                                <img src="https://via.placeholder.com/300x220?text=No+Image" class="card-img-top" alt="No Image">
                            <?php endif; ?>

                            <div class="overlay"></div>

                            <span class="position-absolute top-0 start-0 bg-danger text-white px-3 py-1 fw-bold rounded-end">
                                <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?>
                            </span>
                        </div>
                    </a>

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title mb-2 text-truncate">
                            <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                        </h5>
                        <p class="fw-bold text-danger fs-5">💰 <?php echo number_format($product->price, 0, ',', '.'); ?> VND</p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<style>
    .product-card {
        transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.18);
    }

    .img-hover {
        transition: transform 0.5s ease;
    }

    .product-card:hover .img-hover {
        transform: scale(1.08);
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(0, 0, 0, 0.12); /* làm mờ nhẹ khi hover */
        opacity: 0;
        transition: opacity 0.4s ease;
    }

    .product-card:hover .overlay {
        opacity: 1;
    }
</style>

<?php include 'app/views/shares/footer.php'; ?>
