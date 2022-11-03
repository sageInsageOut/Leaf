<?php
 session_start();
  include("function.php");
  include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<style>
		html {
  font-family: 'helvetica neue', helvetica, arial, sans-serif;
}

thead th, tfoot th {
  font-family: 'Rock Salt', cursive;
}

th {
  letter-spacing: 2px;
}

td {
  letter-spacing: 1px;
}

tbody td {
  text-align: center;
}

tfoot th {
  text-align: right;
}
		table,td,th{
  width: 100%;
  border-collapse: collapse;
  border: 3px solid purple;
}


th, td {
  padding: 20px;
  font-weight: bolder;
}
		tbody tr:nth-child(odd) {
  background-color: #95dbe5;
}

tbody tr:nth-child(even) {
  background-color: #f0f3bd;
}


table {
  background-color: #aaaaaa;
}
button{
	padding: 16px;
}
a{
	text-decoration: none;
	padding: 16px;
	color: black;
	font-weight: bolder;
}
h1{
	text-align: center;
	font-family: 'Rock Salt', cursive;
}
	</style>
</head>
<body>
	<h1>Dashboard</h1>
	<table>
		<thead>
			<tr>
			<th>Id</th>
			<th>First Name</th>	
			<th>Last Name</th>
			<th>Email</th>
			<th>Password</th>
			<th colspan="2">Operation</th>
		</tr>
		</thead>
		<tbody>
			<?php
			     $query = "select * from projectdb";
			     $result = mysqli_query($conn,$query);
			     if($result){
			     	while ($row=mysqli_fetch_assoc($result)) {
			     		$id = $row['ID'];
			     		$fname = $row['fname'];
			     		$lname = $row['lname'];
			     		$email = $row['email'];
			     		$password = $row['password'];

			     		echo '<tr>
			     		<th scope="row">'.$id.'</th>
			     		<td>'.$fname.'</td>
			     		<td>'.$lname.'</td>
			     		<td>'.$email.'</td>
			     		<td>'.$password.'</td>
                        <td><button><a href="update.php?updateid='.$id.'">Update</a></button></td>
                         <td><button><a href = "delete.php?deleteid='.$id.'">Delete</a></button></td>
			     		</tr>';
			     		
			     	}

			     }
			?>
		</tbody>
	</table>
</body>
</html>