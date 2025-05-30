<?php include 'app/views/shares/header.php'; ?>

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark mb-0">🛠️ Quản lý sản phẩm</h2>
        <a href="/webbanhang/Product/add" class="btn btn-success px-4 py-2 rounded-pill shadow-sm">
            <i class="bi bi-plus-circle"></i> Thêm sản phẩm
        </a>
    </div>

    <div class="table-responsive rounded shadow-sm">
        <table class="table table-hover align-middle bg-white rounded overflow-hidden">
            <thead class="table-light text-center align-middle">
                <tr>
                    <th class="align-middle">Ảnh</th>
                    <th class="align-middle">Tên sản phẩm</th>
                    <th class="align-middle">Mô tả</th>
                    <th class="align-middle">Danh mục</th>
                    <th class="align-middle">Giá (VND)</th>
                    <th class="align-middle">Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td class="text-center">
                            <div class="product-img rounded border overflow-hidden" style="width: 80px; height: 80px;">
                                <?php if ($product->image): ?>
                                    <img src="/webbanhang/<?php echo $product->image; ?>" alt="Ảnh" class="img-fluid h-100 w-100" style="object-fit: cover;">
                                <?php else: ?>
                                    <img src="https://via.placeholder.com/80x80?text=No+Image" class="img-fluid h-100 w-100" alt="No Image" style="object-fit: cover;">
                                <?php endif; ?>
                            </div>
                        </td>
                        <td class="fw-semibold text-dark">
                            <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                        </td>
                        <td class="small text-muted">
                            <?php echo mb_strimwidth(htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'), 0, 60, "..."); ?>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-primary px-3 py-2"><?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></span>
                        </td>
                        <td class="fw-bold text-danger text-end">
                            <?php echo number_format($product->price, 0, ',', '.'); ?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="/webbanhang/Product/show/<?php echo $product->id; ?>" class="btn btn-sm btn-info text-white" title="Xem chi tiết">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="/webbanhang/Product/edit/<?php echo $product->id; ?>" class="btn btn-sm btn-outline-warning" title="Sửa">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="/webbanhang/Product/delete/<?php echo $product->id; ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');" title="Xóa">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    table tr:hover {
        background-color: #f8f9fa;
    }

    .product-img img {
        transition: 0.3s ease;
    }

    .product-img img:hover {
        transform: scale(1.05);
    }
</style>

<?php include 'app/views/shares/footer.php'; ?>
