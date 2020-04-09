<?php include('common/header1.php') ?>
<h2 align="center"> This is Insert Table Data from User Input Show In DB Table </h2>
	<form method="post" action="insert2.php" enctype="multipart/form-data">

		<table border="1" width="60%" align="center">
		<tr>
			<td>Name</td>
			<td><input style="width: 770px; height: 40px; margin: 0px;" type="text" placeholder="Enter the Name" name="name" required/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input style="width: 770px; height: 40px; margin: 0px;" type="email" placeholder="Enter the Email" name="email" required/></td>
		</tr>

		<td algin="center" colspan="3"><input style="width: 815px; height: 40px; margin: 0px;" type="submit"></td>
		</table>
	</form>
<h2 align="center"> This is Insert Data In DB Table </h2>


<?php include('common/footer1.php') ?>