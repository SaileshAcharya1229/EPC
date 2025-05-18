<!-- partials/addblogs.php -->
<h2>Add Blog</h2>
<form>
  <div class="mb-3">
    <label class="form-label">Blog Title</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="mb-3">
    <label class="form-label">Category</label>
    <select class="form-control" name="category">
      <option value="">Select Category</option>
      <option value="Technology">Technology</option>
      <option value="Business">Business</option>
      <option value="Lifestyle">Lifestyle</option>
      <option value="Education">Education</option>
      <option value="Health">Health</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Content</label>
    <!-- Bootstrap WYSIWYG editor using CDN (e.g., Summernote) -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" rel="stylesheet">
    <textarea id="summernote" name="content"></textarea>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#summernote').summernote({
          height: 200
        });
      });
    </script>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
