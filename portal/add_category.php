<?php
    include("includes/header.php");
?>

<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary rounded p-4">
    <h5 class="mb-4 text-white">Add Category</h5>
    <form action="save_category.php" method="POST" class="needs-validation" novalidate>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="category_type" class="form-label">Category Type <span class="text-primary">*</span></label>
          <select id="category_type" name="category_type" class="form-select bg-dark text-white border-0" required>
            <option value="">-- Select Type --</option>
            <option value="album">Album</option>
            <option value="year">Year</option>
            <option value="language">Language (Regional / English)</option>
            <option value="other">Other</option>
          </select>
          <div class="invalid-feedback">Please select a category type.</div>
        </div>

        <div class="col-md-6">
          <label for="category_name" class="form-label">Category Name <span class="text-primary">*</span></label>
          <input type="text" id="category_name" name="category_name" class="form-control bg-dark text-white border-0" maxlength="120" placeholder="e.g., 2026, Regional, English, Top Hits" required>
          <div class="invalid-feedback">Please enter a category name.</div>
        </div>

        <div class="col-12">
          <label for="category_description" class="form-label">Description</label>
          <textarea id="category_description" name="category_description" class="form-control bg-dark text-white border-0" rows="3" maxlength="500" placeholder="Optional details about this category"></textarea>
        </div>
      </div>

      <div class="mt-4 d-flex gap-2">
        <button type="submit" class="btn btn-primary">Save Category</button>
        <button type="reset" class="btn btn-dark">Reset</button>
      </div>
    </form>
  </div>
</div>

<?php
    include("includes/footer.php");
?>