<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>

<h2>Employee Details</h2>

<table width=100% border="2" style="padding-bottom:15px;">
  <tr>
    <td>Id</td>
    <td>Name</td>
    <td>Username</td>
    <td>Address</td>
    <td>Email</td>
	<td>Gender</td>
	<td>Phone no</td>
	<td>Aadhar no</td>
	<td>PAN no</td>
	<td>Account no</td>
  </tr>

<?php

include "server.php"; // Using database connection file here

$records = mysqli_query($db,"select * from users"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['Name']; ?></td>
    <td><?php echo $data['username']; ?></td>    
    <td><?php echo $data['Address']; ?></td>   
	<td><?php echo $data['email']; ?></td>   
	<td><?php echo $data['GENDER']; ?></td>   
	<td><?php echo $data['PhoneNumber']; ?></td>   
	<td><?php echo $data['AadharNumber']; ?></td>   
	<td><?php echo $data['PANNumber']; ?></td>
	<td><?php echo $data['AccountNumber']; ?></td>	
	<td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}
?>
</table >
<p><a href="index.php" align="left"; style="margin-top:15px; padding:15px; padding-top:15px;">Back</a></p>

</body>
</html>