<?php
    include("includes/header.php");
?>

<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary rounded p-4">
    <h5 class="mb-4 text-white">Add New Music</h5>
    <form action="save_music.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
      <div class="row g-3">
        <div class="col-md-6">
          <label for="music_title" class="form-label">Song Title <span class="text-primary">*</span></label>
          <input type="text" id="music_title" name="music_title" class="form-control bg-dark text-white border-0" maxlength="150" required>
          <div class="invalid-feedback">Please enter the song title.</div>
        </div>

        <div class="col-md-6">
          <label for="artist_id" class="form-label">Artist <span class="text-primary">*</span></label>
          <select id="artist_id" name="artist_id" class="form-select bg-dark text-white border-0" required>
            <option value="">-- Select Artist --</option>
            <!-- Populate dynamically from `artists` table -->
          </select>
          <div class="invalid-feedback">Please select an artist.</div>
        </div>

        <div class="col-md-4">
          <label for="album_id" class="form-label">Album <span class="text-primary">*</span></label>
          <select id="album_id" name="album_id" class="form-select bg-dark text-white border-0" required>
            <option value="">-- Select Album --</option>
            <!-- Populate dynamically from `categories` where type='album' -->
          </select>
          <div class="invalid-feedback">Please select an album.</div>
        </div>

        <div class="col-md-4">
          <label for="genre_id" class="form-label">Genre <span class="text-primary">*</span></label>
          <select id="genre_id" name="genre_id" class="form-select bg-dark text-white border-0" required>
            <option value="">-- Select Genre --</option>
            <!-- Populate dynamically from `genres` table -->
          </select>
          <div class="invalid-feedback">Please select a genre.</div>
        </div>

        <div class="col-md-2">
          <label for="release_year" class="form-label">Year <span class="text-primary">*</span></label>
          <input type="number" id="release_year" name="release_year" class="form-control bg-dark text-white border-0" min="1900" max="2099" placeholder="2026" required>
          <div class="invalid-feedback">Enter a valid 4-digit year.</div>
        </div>

        <div class="col-md-2">
          <label for="language" class="form-label">Language <span class="text-primary">*</span></label>
          <select id="language" name="language" class="form-select bg-dark text-white border-0" required>
            <option value="">-- Select --</option>
            <option value="English">English</option>
            <option value="Regional">Regional</option>
          </select>
          <div class="invalid-feedback">Select language.</div>
        </div>

        <div class="col-md-6">
          <label for="music_file" class="form-label">Audio File <span class="text-primary">*</span></label>
          <input type="file" id="music_file" name="music_file" class="form-control bg-dark text-white border-0" accept=".mp3,.wav,.m4a,.aac" required>
          <small class="text-muted">Allowed: MP3, WAV, M4A, AAC.</small>
          <div class="invalid-feedback">Please upload an audio file.</div>
        </div>

        <div class="col-md-6">
          <label for="cover_image" class="form-label">Cover Image <span class="text-primary">*</span></label>
          <input type="file" id="cover_image" name="cover_image" class="form-control bg-dark text-white border-0" accept=".jpg,.jpeg,.png,.webp" required>
          <small class="text-muted">Allowed: JPG, PNG, WEBP.</small>
          <div class="invalid-feedback">Please upload a cover image.</div>
        </div>

        <div class="col-12">
          <label for="music_description" class="form-label">Description <span class="text-primary">*</span></label>
          <textarea id="music_description" name="music_description" class="form-control bg-dark text-white border-0" rows="3" maxlength="1000" required></textarea>
          <div class="invalid-feedback">Please provide a description.</div>
        </div>

        <div class="col-12">
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="is_new" name="is_new" value="1" checked>
            <label class="form-check-label" for="is_new">Show "NEW" badge/icon on website</label>
          </div>
        </div>
      </div>

      <div class="mt-4 d-flex gap-2">
        <button type="submit" class="btn btn-primary">Upload Music</button>
        <button type="reset" class="btn btn-dark">Reset</button>
      </div>
    </form>
  </div>
</div>

<?php
    include("includes/footer.php");
?>