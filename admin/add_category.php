<?php include './includes/header.php'; ?>

<form role="form" method="post" action="add_category">
  <div class="form-group">
    <label >Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category">
  </div>

  <input name="submit" type="submit" class="btn btn-default" value="Submit">
  <a href="./index.php" class="btn btn-default">Cancel</a>
  <br>
</form>

<?php include './includes/footer.php'; ?>