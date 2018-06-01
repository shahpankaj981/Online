<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product | Create </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Add New Product </h2>
  <form action="/admin/products/store" method="post">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Product name" name="name">
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" class="form-control" id="price" placeholder="Enter price" name="price">
    </div>
    <div class="form-group">
      <label for="price">Product category Id</label>
      <input type="number" class="form-control" id="price" placeholder="Enter price" name="product_category_id">
    </div>
    <button type="submit" class="btn btn-default">Add</button>
  </form>
</div>

</body>
</html>
