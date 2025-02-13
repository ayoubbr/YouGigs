<!-- <h1>CATEGORIES</h1> -->
<div class="header">
    <h1 class="page-title">Categories Management</h1>
    <button class="add-btn" onclick="toggleModal('add')">
        <i class="fas fa-plus"></i> Add Category
    </button>
</div>

<div class="categories-container">
    <?php foreach ($categories as $category): ?>
        <div class="category-card">
            <div class="category-header">
                <i class="fa fas-folder"></i>
                <h3><?php echo htmlspecialchars($category->name); ?></h3>
            </div>
            <p class="category-description"><?php echo htmlspecialchars($category->description); ?></p>
            <div class="category-stats">
                <span><i class="fas fa-briefcase"></i> 5 Projects</span>
                <span><i class="fas fa-user"></i> 10 Freelancers</span>
            </div>
            <div class="category-actions">
                <button class="action-btn edit-btn" onclick="toggleModal('edit', <?php echo htmlspecialchars(json_encode($category)); ?>)">
                    <i class="fas fa-edit"></i>
                </button>
                <button class="action-btn delete-btn" onclick="confirmDelete(<?php echo $category->id; ?>)">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="modal" id="categoryModal">
    <div class="modal-content">
        <span class="close-btn" onclick="toggleModal()">&times;</span>
        <h2 id="modalTitle">Add New Category</h2>
        <form id="categoryForm">
            <input type="hidden" id="categoryId" name="id">
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" required></textarea>
            </div>
            <div class="form-actions">
                <button type="button" class="cancel-btn" onclick="toggleModal()">Cancel</button>
                <button type="submit" class="submit-btn">Save Category</button>
            </div>
        </form>
    </div>
</div>

<script>
    function toggleModal(action = null, categoryData = null) {
        const modal = document.getElementById('categoryModal');
        const form = document.getElementById('categoryForm');
        const modalTitle = document.getElementById('modalTitle');

        if (action === 'add') {
            modalTitle.textContent = 'Add New Category';
            form.reset();
            modal.style.display = 'block';
        } else {
            modal.style.display = 'none';
        }
    }
</script>