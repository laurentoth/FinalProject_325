<html>
<head>
<title>Book Store Browse</title>
</head>
<body>
<?php $book_image ='header';?>
<img src="<?php echo $book_image;?>" >
<form name="addform" action="add.php" method=post" >
<table width="60%" border="0" cellpadding="3" cellspacing="12">
<tr>
<td width="130">
<strong>First Name:</strong>
</td>
<td>
<input name="fname" type="text" size="30" maxlength="30" />
</td>
</tr>
<tr>
<td width="130">
<strong>Last Name:</strong>
</td>
<td>
<input name="lname" type="text" size="30" maxlength="30" />
</td>
</tr>
<tr>
<td width="130">
<strong>E-mail Address:</strong>
</td>
<td><input name="email" type="text" size="30" maxlength="30" />
</td> 
</tr>
<tr>
<td width="130">
<p>
<strong>Home Phone:</strong>
<br />xxx-xxx-xxxx</p>
</td>
<td>
<input name="homePhone" type="text" size="30" maxlength="20" />
</td>
</tr>
<tr valign="top">
<td width="130">
<strong>Address:</strong>
</td>
<td>
<textarea name="address" cols="25" rows="4"> </textarea>
</td>
</tr>
<tr>
<td width="130">
<strong>City:</strong>
</td>
<td><input name="city" type="text" size="30" maxlength="30" />
</td> 
</tr>
<tr>
<td width="130">
<strong>State:</strong>
</td>
<td><input name="state" type="text" size="30" maxlength="30" />
</td> 
</tr>
<tr>
<td width="130">
<strong>Zipcode:</strong>
</td>
<td><input name="zipcode" type="text" size="30" maxlength="30" />
</td> 
</tr>
<tr>
<td width="130">
<strong>User ID:</strong>
</td>
<td><input name="userid" type="text" size="30" maxlength="30" />
</td> 
</tr>
<tr>
<td width="130">
<strong>Password:</strong>
</td>
<td><input name="password" type="text" size="30" maxlength="30" />
</td> 
</tr>
<tr>
<td width="130">
<strong>Credit Card Type</strong>
</td>
<td><select name="Credit Card Type">
<option value="amex">amex</option>
<option value="discover">discover</option>
<option value="mastercard">mastercard</option>
<option value="visa">visa</option>
</select>
</td> 
</tr>
<tr>
<td width="130">
<strong>Credit Card Number:</strong>
</td>
<td><input name="creditcardnumber" type="text" size="30" maxlength="30" />
</td> 
</tr>
<tr>
<td width="130">&nbsp;</td>
<td><input type="reset" name="Reset" value="Reset" />
<input type="submit" name="Submit" value="Submit" />
<input type="button" value="Home" onClick="this.form.action='login.php';this.form.submit()">
</td>
</tr>
</table>
</form>
</body>
</html>










