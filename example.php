<?php
	$host="localhost";
	$username="root";
	$password="Lydia@";
	$db="mydatabase";
	
	$con= mysqli_connect($host,$username,$password,$db);
	
	if(!con)
	{
		die("Connection failed:".mysqli_connect_error());
	}
	echo"Connection successful<br>";
	
	$sql="CREATE TABLE IF NOT EXISTS student(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(44) NOT NULL)";
	
	if(mysqli_query($con,$sql))
	{
		echo"Table created successfully
	}
	else
	{
		echo:Error:".mysqli_error($con);
	}
	
	if (isset($_POST["insert"]))
	{
		$empname=$_POST["empname"];
		$occupation=$_POST["occupation"];
		$salary=$_POST["salary"];
		
		if(!empty($empname) && !empty($occupation) && !empty($salary))
		{
			$sql="INSERT INTO student (name,occupation,salary) VALUES('$empname','$occupation', '$salary')";
			if(mysqli_query($con,$sql)
			{
				echo"Inserted successfully";
			}
			else
			{
				echo "Error:".mysqli_error($con);
			}
		}
		else
		{
			echo"Values needed to imsert
		}
	}
	
	if (isset($_POST["update"]))
	{
		$newname=$_POST["newname"];
		$empid=$_POST["empid"];
		if(!empty($newname) && !empty($empid) )
		{
			$sql="UPDATE student set salary='$salary' WHERE empid='$empno'";
			if(mysqli_query($con,$sql)
			{
				echo"Updated successfully";
			}
			else
			{
				echo "Error:".mysqli_error($con);
			}
		}
		else
		{
			echo"Values needed to imsert
		}
	}
	mysqli_close($con);
	
?>