<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
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
<?= form_open('Welcome/search'); ?>
<table class="table">
<tr>
<td><?= form_input(['name'=>'search','placeholder'=>'Enter Product Name','title'=>'Enter Product Name','class'=>'form-control','id'=>'search']) ?></td>
<td><?= form_submit(['name'=>'sub','value'=>'Search','class'=>'btn btn-primary'])?></td>
</tr>
</table>
</div>
</div>
<div class="container-fluid" style="background:blue;color:white;">
<h2 align="center">Copyright@engineersworld.in</h2>
</div>
</body>
</html>