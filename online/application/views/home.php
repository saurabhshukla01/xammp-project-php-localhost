<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Home</title>
<link type="text/css" rel="stylesheet" href="<?php=base_url('tool/css/s2.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?php= base_url('tool/css/bootstrap.min.css') ?>" >
<script src="<?php= base_url('tool/js/bootstrap.js') ?>"> </script>
<script src="<?php= base_url('tool/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?php= base_url('tool/js/myjs.js') ?>"></script>

</head>

<body>
<div class="container-fluid" style="background:#ccc;color:white;">
	<?php include('user_header.php'); ?>
</div>

<div class="container-fluid" id="banner">
<div id="form" class="col-sm-8" style="background: silver; margin-left:10%; margin-right:10%; ">
<center><table class="table">
<tbody><tr>
<!--<td>Enter Product Name</td>-->
<td><input type="text" name="pname" value="" placeholder="Enter Product Name" title="Enter Product Name" class="form-control">
</td>
<td><input type="submit" name="sub" value="Search" class="btn btn-primary">
</td>
</tr>
</tbody></table>
</center>
</div>
</div>
<div class="container-fluid" style="background:#ccc;color:white;">
<h2 align="center">Copyright@engineersworld.in</h2>
</div>
</body>
</html>
