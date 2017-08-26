<html>
<head>
<title>MyPhonebook</title>
<body>
<h1>My Contacts</h1>
<hr>

<table border="1">
	<tr>
<td><strong>Fullname</strong></td>
	<td><strong>Contact</strong></td>	

	</tr>
	<?php foreach ($contacts as $c ) {?>
	
<tr>
 
	  <td><?= $c->fullname ?></td>
	  <td><?= $c->contactno ?></td>
	 </tr>
	 <?php } ?>
</table>

</body>
</html>