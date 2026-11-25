<?php
    include("includes/header.php");
?>
<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary rounded p-4">
    <h5 class="mb-4 text-white">Add Artist</h5>
    <form action="save_artist.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="artist_name" class="form-label">Artist Name <span class="text-primary">*</span></label>
          <input type="text" id="artist_name" name="artist_name" class="form-control bg-dark text-white border-0" maxlength="120" required>
          <div class="invalid-feedback">Artist name is required.</div>
        </div>

        <div class="col-md-6">
          <label for="artist_language" class="form-label">Primary Language <span class="text-primary">*</span></label>
          <select id="artist_language" name="artist_language" class="form-select bg-dark text-white border-0" required>
            <option value="">-- Select Language --</option>
            <option value="English">English</option>
            <option value="Regional">Regional</option>
          </select>
          <div class="invalid-feedback">Please select a primary language.</div>
        </div>

        <div class="col-md-6">
          <label for="artist_photo" class="form-label">Artist Photo</label>
          <input type="file" id="artist_photo" name="artist_photo" class="form-control bg-dark text-white border-0" accept=".jpg,.jpeg,.png,.webp">
          <small class="text-muted">Accepted formats: JPG, PNG, WEBP.</small>
        </div>

        <div class="col-12">
          <label for="artist_bio" class="form-label">Biography / Details</label>
          <textarea id="artist_bio" name="artist_bio" class="form-control bg-dark text-white border-0" rows="4" maxlength="1000" placeholder="Artist background, achievements, or notes"></textarea>
        </div>
      </div>

      <div class="mt-4 d-flex gap-2">
        <button type="submit" class="btn btn-primary">Save Artist</button>
        <button type="reset" class="btn btn-dark">Reset</button>
      </div>
    </form>
  </div>
</div>
<?php
    include("includes/footer.php");
?>