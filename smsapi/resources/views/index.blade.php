<!DOCTYPE html>
<html>
<head>
<title>Student Management | Add</title>
</head>
<body>
<form action = "http://127.0.0.1/smsapi/create" method = "get">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
<table>
<tr>
<td>dlr</td>
<td><input type='text' name='dlr' /></td>
<tr>
<td>dest</td>
<td><input type="text" name='dest'/></td>
</tr>
<tr>
<td>report</td>
<td><input type="text" name='report'/></td>
</tr>
<tr>
<td>Time</td>
<td><input type="text" name='time'/></td>
</tr>
<tr>
<td>Message_id</td>
<td><input type="text" name='message_id'/></td>
</tr>
<tr>
<td>Mobile_no</td>
<td><input type="text" name='mob_no'/></td>
</tr>
<tr>
<td>prud_message_id</td>
<td><input type="text" name='prud_message_id'/></td>
</tr>
</tr>
<tr>
<td colspan = '2'>
<input type = 'submit' value = "Add student"/>
</td>
</tr>
</table>
</form>
</body>
</html>
