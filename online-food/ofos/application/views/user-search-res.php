<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User Search</title>
<link type="text/css" rel="stylesheet" href="<?=base_url('tool/css/s2.css'); ?>">
<link type="text/css" rel="stylesheet" href="<?= base_url('tool/css/bootstrap.min.css') ?>" >
<script src="<?= base_url('tool/js/bootstrap.js') ?>"> </script>
<script src="<?= base_url('tool/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?= base_url('tool/js/myjs.js') ?>"></script>
<script>

</script>
</head>
<body>
<div class="container-fluid" style="background:blue;color:white;">
<div class="col-sm-3">
<h1>Online Food HUB</h1>
</div>
<div class="col-sm-9"><br>
<button id="btn" >--</button>
<div id='nav'>
<?php 
include('manu.php');
?>
</div>
</div>
</div>

<div class="container-fluid" id="banner">
<div id="form" class="col-sm-7"><br>
<table class="table">
<tr>
<td><center>Name</center></td>
<td><center>Price</center></td>
<td><center>Book Now</center></td>
</tr>
<?php 
			if($res)
			{
			?>
<tr>
<td><center><?= $res->name; ?></center></td>
<td><center><?= $res->price; ?></center></td>
<td><center><?= anchor('Welcome/book_now/'.$res->id,'Bool Now',['class'=>'btn btn-primary']); ?></center></td>
</tr>
			<?php  } ?>
</table>
</div>
</div>
<div class="container-fluid" style="background:blue;color:white;">
<h2 align="center">Copyright@engineersworld.in</h2>
</div>
</body>
</html>