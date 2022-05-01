<?php include './includes/header.php'; ?>

<?php
    $id = $_GET['id'];

    // Create DB Object
    $db = new Database();

    // Create Query
    $query = "SELECT * FROM postst WHERE id =" . $id;

    // Run Query
    $posts = $db->select($query)->fetch_assoc();

    // Create Query
    $query = "SELECT * FROM categories";

    // Run Query
    $categories = $db->select($query);
?>

<form role="form" method="post" action="edit_post.php">
  <div class="form-group">
    <label >Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title" value="<?php echo $posts['title']; ?>">
  </div>

  <div class="form-group">
    <label >Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body" cols="30" rows="10">
      <?php $posts['body']; ?>
    </textarea>
  </div>

  <div class="form-group">
  <label>Category</label>
    <select name="category" class="form-control">
      <?php while($row = $categories->fetch_assoc()) : ?>
        <?php if($row['id'] == $posts['category']) {
          $selected = 'selected';
        } else {
          $selected == '';
        }
          ?>
        <option <?php echo $selected; ?>><?php echo $row['name']; ?></option>
      <?php endwhile; ?>
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

  <input name="submit" type="submit" class="btn btn-default" value="Submit">
  <a href="./index.php" class="btn btn-default">Cancel</a>
  <input name="delete" type="submit" class="btn btn-danger" value="Delete">
  
  <br>
</form>

<?php include './includes/footer.php'; ?>