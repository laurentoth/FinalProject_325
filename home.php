<html>
<head>
<title>Book Store Browse</title>
</head>
<body>
<?php $image_url='graph.jpg'; ?>
<?php $book_image ='header';?>
<center>
<table border="2" cellspacing="20" cellpadding="50" style="border:5px solid rgba(255,255,255,.5)">
<img src="<?php echo $book_image;?>" >

<?php
$con = new mysqli("127.0.0.1", "root", "password", "my_company");
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
echo "Connected successfully";
$query="SELECT * FROM employee";
$result=mysqli_query($con,$query);
$num=mysqli_num_rows($result);
if($num>0) {
        echo "Login successful. Welcome $_POST[username]! and $_POST[password]";
    }
else {
        echo "Incorrect Login";
    }
?>
<tr style="border:5px solid rgba(255,255,255,.5)">
<td style="border:5px solid rgba(255,255,255,.5);">
<center>

<P>
<a href="allBooks.php">See All Books</a>
</center>
</td>
<td style="border:5px solid rgba(255,255,255,.5)">
<P>
<a href="allCustomers.php">See Cart</a>
</td>
<td style="border:5px solid rgba(255,255,255,.5)">
<P>
<a href="allOrderDetails.php">See Order Details</a>
</td>
<td style="border:5px solid rgba(255,255,255,.5)">
<P>
<a href="allOrders.php">See All Orders</a>
</td>
<td style="border:5px solid rgba(255,255,255,.5)">
<P>
<a href="search.php">Search Members</a>
</td>
</table>
</center>
</body>

</html>