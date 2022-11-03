<?php
    include("connection.php");

    if(isset($_GET['deleteid'])){
    	$id = $_GET['deleteid'];

    	$query = "delete from profiles where id = $id";
    	$result = mysqli_query($conn,$query);
    	if($result){
    		//echo "delete sucessfully";
    		header("location:admin.php");
    	}else{
    		die(mysql_error($conn));
    	}
    }
?>