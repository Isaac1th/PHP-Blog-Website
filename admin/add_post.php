<?php include './includes/header.php'; ?>

<form method="post" action="./add_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title">
  </div>
  
  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body" cols="30" rows="10"></textarea>

  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
  </div>
    <div class="form-group">
        <label>Author</label>
        <textarea name="author" class="form-control" placeholder="Enter Author Name" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label>Tags</label>
        <textarea name="tags" class="form-control" placeholder="Enter Tags" cols="30" rows="10"></textarea>
    </div>
    <div>
        <input name="submit" type="submit" class="btn btn-default" value="Submit">
        <a href="./index.php" class="btn btn-default">Cancel</a>
    </div>
    <br>
</form>

<?php include './includes/footer.php'; ?>