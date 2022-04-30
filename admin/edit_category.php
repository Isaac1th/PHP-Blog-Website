<?php include './includes/header.php'; ?>

<form role="form" method="post" action="edit_category">
  <div class="form-group">
    <label >Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Edit Category">
  </div>

  <input name="submit" type="submit" class="btn btn-default" value="Submit">
  <a href="./index.php" class="btn btn-default">Cancel</a>
  <input name="delete" type="submit" class="btn btn-danger" value="Delete">
  <br>
</form>

<?php include './includes/footer.php'; ?>