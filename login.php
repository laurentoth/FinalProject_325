<html>
<head>
<title>Book Store Browse</title>
</head>
<body>
<?php $book_image ='header';?>
<form method="post" action="home.php">
<img src="<?php echo $book_image;?>" >
<center>
<table border="2" cellspacing="2" cellpadding="5" style="border:5px solid rgba(255,255,255,.5)">
<tr style="border:5px solid rgba(255,255,255,.5)">
<td style="border:5px solid rgba(255,255,255,.5);">
<strong> User ID: </strong>
<input name="username" type="text" size="50" maxlength="50" />
</td>
</tr>
<tr style="border:5px solid rgba(255,255,255,.5)">
<td style="border:5px solid rgba(255,255,255,.5);">
<strong> Password: </strong>
<input name="password" type="text" size="50" maxlength="50" />
</td>
</tr>
<tr style="border:5px solid rgba(255,255,255,.5)">
<td style="border:5px solid rgba(255,255,255,.5);">
<center>
<input type="submit" name="Submit" value="Submit">
<input type="button" value="Register New Person" onClick="this.form.action='newRegistration.php';this.form.submit()">
</center>
</td>
</tr>
</table>
</center>
</body>
</html>
