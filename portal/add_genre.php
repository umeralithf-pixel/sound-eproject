<?php
    include("includes/header.php");
?>

<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary rounded p-4">
    <h5 class="mb-4 text-white">Add Genre</h5>
    <form action="save_genre.php" method="POST" class="needs-validation" novalidate>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="genre_name" class="form-label">Genre Name <span class="text-primary">*</span></label>
          <input type="text" id="genre_name" name="genre_name" class="form-control bg-dark text-white border-0" maxlength="80" placeholder="e.g., Pop, Rock, Classical, Folk, Hip-Hop" required>
          <div class="invalid-feedback">Genre name is required.</div>
        </div>

        <div class="col-12">
          <label for="genre_description" class="form-label">Description</label>
          <textarea id="genre_description" name="genre_description" class="form-control bg-dark text-white border-0" rows="3" maxlength="500" placeholder="Brief description of this genre"></textarea>
        </div>
      </div>

      <div class="mt-4 d-flex gap-2">
        <button type="submit" class="btn btn-primary">Save Genre</button>
        <button type="reset" class="btn btn-dark">Reset</button>
      </div>
    </form>
  </div>
</div>

<?php
    include("includes/footer.php");
?>