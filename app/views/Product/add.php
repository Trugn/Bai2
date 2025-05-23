<?php include 'app/views/shares/header.php'; ?>

<style>
    .form-control:focus, .form-select:focus {
        border-color: #4ade80 !important;
        box-shadow: 0 0 0 0.2rem rgba(74, 222, 128, 0.25);
    }
    .preview-box {
        transition: 0.3s ease;
        border-radius: 1rem;
        border: 2px dashed #ccc;
        padding: 1rem;
        text-align: center;
        min-height: 250px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .preview-box img {
        max-height: 230px;
        max-width: 100%;
        border-radius: 1rem;
        box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    }
</style>

<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4 p-4">
        <h2 class="text-center fw-bold mb-4 border-bottom pb-3">🛍️ Thêm Sản Phẩm</h2>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger rounded-3 shadow-sm">
                <ul class="mb-0">
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="POST" action="/webbanhang/Product/save" enctype="multipart/form-data" onsubmit="return validateForm();">
            <div class="row g-4">
                <!-- Left column -->
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Tên sản phẩm" required>
                        <label for="name"><i class="fas fa-tag me-2"></i> Tên sản phẩm</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea name="description" class="form-control" placeholder="Mô tả" id="description" style="height: 120px;" required></textarea>
                        <label for="description"><i class="fas fa-align-left me-2"></i> Mô tả</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" name="price" class="form-control" step="0.01" id="price" placeholder="Giá" required>
                        <label for="price"><i class="fas fa-money-bill-wave me-2"></i> Giá (VND)</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select name="category_id" class="form-select" id="category" required>
                            <?php foreach ($categories as $category): ?>
                                <option value="<?= $category->id ?>"><?= htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8') ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label for="category"><i class="fas fa-list me-2"></i> Danh mục</label>
                    </div>
                </div>

                <!-- Right column -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold"><i class="fas fa-image me-2"></i> Ảnh sản phẩm</label>
                    <input type="file" name="image" class="form-control mb-3" onchange="previewImage(event)" accept="image/*">
                    <div class="preview-box" id="imageBox">
                        <span class="text-muted">Chọn ảnh để xem trước...</span>
                        <img id="preview" style="display: none;" />
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="/webbanhang/Product/list" class="btn btn-outline-secondary px-4 py-2 rounded-3 fw-semibold">
                    <i class="fas fa-arrow-left me-1"></i> Quay lại
                </a>
                <button type="submit" class="btn btn-success px-4 py-2 rounded-3 fw-semibold shadow">
                    <i class="fas fa-plus-circle me-1"></i> Thêm sản phẩm
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = () => {
            const preview = document.getElementById('preview');
            const box = document.getElementById('imageBox');
            preview.src = reader.result;
            preview.style.display = 'block';
            box.querySelector('span')?.remove();
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<?php include 'app/views/shares/footer.php'; ?>
