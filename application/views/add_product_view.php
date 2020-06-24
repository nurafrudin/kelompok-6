<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Add New Product</title>
<!-- load bootstrap css file -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1><center>Edit Product</center></h1>
<div class="col-md-6 offset-md-3">
<form action="<?php echo site_url('save');?>" method="post">
<div class="form-group">
<label>Product Name</label>
<input type="text" class="form-control" name="product_name" placeholder="Product Name">
</div>
<div class="form-group">
<label>Price</label>
<input type="text" class="form-control" name="product_price" placeholder="Price">
</div>
<button type="submit" class="btn btn-primary">update</button>
</form>
</div>
</div>
<!-- load jquery js file -->
<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<!-- load bootstrap js file -->
<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>
