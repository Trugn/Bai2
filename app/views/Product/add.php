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

        <form id="add-product-form" enctype="multipart/form-data">
            <div class="row g-4">
                <!-- Left -->
                <div class="col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Tên sản phẩm" required>
                        <label for="name"><i class="fas fa-tag me-2"></i> Tên sản phẩm</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea name="description" id="description" class="form-control" style="height: 120px;" placeholder="Mô tả" required></textarea>
                        <label for="description"><i class="fas fa-align-left me-2"></i> Mô tả</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" name="price" id="price" class="form-control" placeholder="Giá" step="0.01" required>
                        <label for="price"><i class="fas fa-money-bill-wave me-2"></i> Giá (VND)</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select name="category_id" id="category_id" class="form-select" required>
                            <!-- Options will be loaded via JS -->
                        </select>
                        <label for="category_id"><i class="fas fa-list me-2"></i> Danh mục</label>
                    </div>
                </div>

                <!-- Right -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold"><i class="fas fa-image me-2"></i> Ảnh sản phẩm</label>
                    <input type="file" name="image" id="image" class="form-control mb-3" onchange="previewImage(event)" accept="image/*">
                    <div class="preview-box" id="imageBox">
                        <span class="text-muted">Chọn ảnh để xem trước...</span>
                        <img id="preview" style="display: none;" />
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="/webbanhang/Product/admin" class="btn btn-outline-secondary px-4 py-2 rounded-3 fw-semibold">
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
    // Load category options
    document.addEventListener("DOMContentLoaded", function () {
        fetch('/webbanhang/api/category')
            .then(response => response.json())
            .then(data => {
                const select = document.getElementById('category_id');
                data.forEach(cat => {
                    const opt = document.createElement('option');
                    opt.value = cat.id;
                    opt.textContent = cat.name;
                    select.appendChild(opt);
                });
            });

        // Handle form submit
        document.getElementById('add-product-form').addEventListener('submit', function (event) {
            event.preventDefault();

            const form = event.target;
            const jsonData = {
                name: form.name.value,
                description: form.description.value,
                price: form.price.value,
                category_id: form.category_id.value
            };

            fetch('/webbanhang/api/product', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(jsonData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.message === 'Product created successfully') {
                    location.href = '/webbanhang/Product/admin';
                } else {
                    alert('Thêm sản phẩm thất bại!');
                    console.log(data);
                }
            })
            .catch(err => {
                console.error('Lỗi gửi API:', err);
                alert('Lỗi khi gửi dữ liệu!');
            });
        });
    });

    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function () {
            const preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
            document.querySelector('#imageBox span')?.remove();
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

<?php include 'app/views/shares/footer.php'; ?>
